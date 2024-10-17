<?php

/**
 * The ArchivesTreeAPI class with OAuth
 *
 */

class ArchivesTreeAPI {

	/**
	 * The base url
	 * @var string
	 */
	const baseURL = 'https://api.historyit.com';

	/**
	 * The http method
	 * @var string
	 */
	const httpMethod = 'GET';

    /**
     * The ArchivesTree account id
     * @var int
     */
    private $account_id;

    /**
     * The ArchivesTree API version
     * @var int
     */
    private $version;

    /**
     * The ArchivesTree consumer key
     * @var string
     */
    private $consumer_key;

    /**
     * The ArchivesTree consumer secret
     * @var string
     */
    private $consumer_secret;

    /**
     * The OAuth consumer object
     * @var object
     */
    private $oauth_consumer;

    /**
     * The use_oauth string
     * @var string
     */
    private $use_oauth = FALSE;

    /**
     * The ArchivesTree thumbnail base url
     * @var string
     */
    public $thumbnail_base_url;

    /**
     * The version of local site
     * @var string
     */
    public $local_version;

	public function __construct($account_id, $version='0.2', $consumer_key=NULL, $consumer_secret=NULL, $local_version=1) {
		$this->account_id = $account_id;
		$this->version = $version;
		$this->consumer_key = $consumer_key;
		$this->consumer_secret = $consumer_secret;
		$this->thumbnail_base_url = self::baseURL . "/index.php/Pages/tn/" . $this->account_id;
		$this->local_version = $local_version;
		if(!empty($consumer_key) && !empty($consumer_secret)) {
			$this->use_oauth = TRUE;
			$this->oauth_consumer = new OAuthConsumer($this->consumer_key, $this->consumer_secret, NULL);
		}
    }

	public function get_api_url($url, $request_fields=array()) {
		if($this->use_oauth) {
			$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
			$oauth_request = OAuthRequest::from_consumer_and_token($this->oauth_consumer, NULL, self::httpMethod, $url, $request_fields);
			$oauth_request->sign_request($signature_method, $this->oauth_consumer, NULL);
			return urldecode($oauth_request->to_url());
		} else {
			return $url . '?' . http_build_query($request_fields);
		}
	}

	public function request($url, $request_fields=array()) {

		$apiurl = $this->get_api_url($url, $request_fields);

		try {
			$ch = curl_init();
			if (FALSE === $ch)
		 		throw new Exception('failed to initialize');

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_URL, $apiurl);
			$headers = array(
				'X-ArchivesTree-API:' . $this->version,
				'X-ArchivesTree-AccountID:' . $this->account_id
			);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$content = curl_exec($ch);

			if (FALSE === $content)
				throw new Exception(curl_error($ch), curl_errno($ch));

		} catch(Exception $e) {
			echo( $e->getMessage() );
		}

		$xml_only_api_versions = array('0.1', '0.2');
		if(in_array($this->version, $xml_only_api_versions) || (isset($request_fields['ResponseType']) && $request_fields['ResponseType'] == 'xml')) {
			$response = simplexml_load_string($content);
		} else {
			$response = json_decode($content);
		}
		return $response;
	}

	public function flip_name($name) {
		$parts = explode(",", $name);
		return trim($parts[1] . " " . $parts[0]);
	}

	public function format_date($raw_date) {
		if(strlen($raw_date) == 4) {
			return $raw_date;
		} else if(strlen($raw_date) == 7) {
			return date('m/Y', strtotime($raw_date));
		} else {
			if(substr($raw_date, 0, 6) == '00/00/') {
				return date('Y', strtotime($raw_date));
			} else {
				return date('m/d/Y', strtotime($raw_date));
			}
		}
	}

	public function escapeSolrValue($string) {
		$match = array('\\', '+', '-', '&', '|', '!', '(', ')', '{', '}', '[', ']', '^', '~', '*', '?', ':', '"', ';');
		$replace = array('\\\\', '\\+', '\\-', '\\&', '\\|', '\\!', '\\(', '\\)', '\\{', '\\}', '\\[', '\\]', '\\^', '\\~', '\\*', '\\?', '\\:', '\\"', '\\;');
		$string = str_replace($match, $replace, $string);

		return $string;
	}

	function quote_encode($val) {
		return '"' . urlencode($val) . '"';
	}

	function parse_attribute_value($type, $val, $response_type='json') {
		$parsed_value = '';
		if($response_type == 'json') {
			switch ($type) {
				case 'shorttext':
				case 'longtext':
				case 'singleselection':
					$parsed_value = (string)$val->text;
					break;
				case 'singledate':
		            if(!empty($val->date)) $parsed_value = $this->format_date((string)$val->date);
					if ($val->circa == 'true') {
						$parsed_value = "circa " . $parsed_value;
					}
					break;
				case 'daterange':
					if(!empty($val->start_date)) {
						$start_date = (!empty($val->start_date)) ? $this->format_date($val->start_date) : '';
						if ($val->circa == 'true') {
							$start_date = "circa " . $start_date;
						}
						$end_date = (!empty($val->end_date)) ? $this->format_date($val->end_date) : '';
						if ($val->circa == 'true') {
							$end_date = "circa " . $end_date;
						}
						$parsed_value = $start_date . " - " . $end_date;
					}
					break;
				case 'person':
                case 'singleperson':
					//begin sort
					$names = array();
					foreach ($val as $v) {
					    $names[]  = (string)$v->reference_name;
					}
					array_multisort($names, SORT_ASC, $val);
					//end sort
					
					$people = array();
					foreach($val as $v) {
						$people[(int)$v->reference_id] = $this->flip_name((string)$v->reference_name);
					}
	                foreach($people as $key => $value) {
	                	$parsed_value .= '<span class="meta-data-list"><a href="person.php?id='.$key.'" style="color: #cb1e5b;">'.$value.'</a></span>';
	                }
					break;
				case 'category':
					$categories = array();
					foreach($val as $v) {
						$categories[(int)$v->reference_id] = (string)$v->reference_name;
					}
	                foreach($categories as $key => $value) {
	                	$parsed_value .= '<span class="meta-data-list"><a href="category.php?id='.$key.'&q='.$value.'" style="color: #cb1e5b;">'.$value.'</a></span>';
	                }
					break;
				case 'crossrecord':
					$see_also = array();
					foreach($val as $v) {
						$see_also[(int)$v->reference_id] = (string)$v->reference_name;
					}
	                foreach($see_also as $key => $value) {
	                	$parsed_value .= '<span class="meta-data-list"><a href="detail.php?id='.$key.'" style="color: #cb1e5b;">'.$value.'</a></span>';
	                }
					break;
			}
		} else {
			switch ($type) {
				case 'shorttext':
				case 'longtext':
				case 'singleselection':
					$parsed_value = (string)$val->Text;
					break;
				case 'singledate':
		            if(!empty($val->Date)) $parsed_value = $this->format_date((string)$val->Date);
					if ($val->Date->attributes()->circa == 'true') {
						$parsed_value = "circa " . $parsed_value;
					}
					break;
				case 'daterange':
					if(!empty($val->Date)) {
						$start_date = (!empty($val->Date[0])) ? $this->format_date($val->Date[0]) : '';
						if ($val->Date[0]->attributes()->circa == 'true') {
							$start_date = "circa " . $start_date;
						}
						$end_date = (!empty($val->Date[1])) ? $this->format_date($val->Date[1]) : '';
						if ($val->Date[1]->attributes()->circa == 'true') {
							$end_date = "circa " . $end_date;
						}
						$parsed_value = $start_date . " - " . $end_date;
					}
					break;
				case 'person':
					$people = array();
					foreach($val as $v) {
						$people[(int)$v->ReferenceID] = $this->flip_name((string)$v->ReferenceName);
					}
	                foreach($people as $key => $value) {
	                	$parsed_value .= '<span class="meta-data-list"><a href="detail.php?id='.$key.'" style="color: #cb1e5b;">'.$value.'</a></span>';
	                }
					break;
				case 'category':
					$categories = array();
					foreach($val as $v) {
						$categories[(int)$v->ReferenceID] = (string)$v->ReferenceName;
					}
	                foreach($categories as $key => $value) {
	                	$parsed_value .= '<span class="meta-data-list"><a href="category.php?id='.$key.'&q='.$value.'" style="color: #cb1e5b;">'.$value.'</a></span>';
	                }
					break;
				case 'crossrecord':
					$see_also = array();
					foreach($val as $v) {
						$see_also[(int)$v->ReferenceID] = (string)$v->ReferenceName;
					}
	                foreach($see_also as $key => $value) {
	                	$parsed_value .= '<span class="meta-data-list"><a href="detail.php?id='.$key.'" style="color: #cb1e5b;">'.$value.'</a></span>';
	                }
					break;
			}
		}

		return $parsed_value;
	}
}
?>