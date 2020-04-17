<?php
class appimages_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		
    }
	
	
	public function initialize()
		{
			$data = array(
				array(
					'id' => 1,
					'name' => 'codeStorageImage',
					'link' => 'images/codestorageimage.jpg'
				),
				array(
					'id' => 2,
					'name' => 'csimagefile',
					'link' => 'images/compSciImage.jpg'
				),
				array(
					'id' => 3,
					'name' => 'dataAnalysisImage',
					'link' => 'images/dataanalysis.jpg'
				),
				array(
					'id' => 4,
					'name' => 'doorHandle',
					'link' => 'images/doorhandle.jpg'
				),
				array(
					'id' => 5,
					'name' => 'engProcessSpec',
					'link' => 'images/engProcessSpec.jpg'
				),
				array(
					'id' => 6,
					'name' => 'engSpec',
					'link' => 'pdf/engSpec.pdf'
				),
				array(
					'id' => 7,
					'name' => 'engSpecMobile',
					'link' => "http://docs.google.com/gview?embedded=true&url=".base_url("pdf/engSpec.pdf")
				),
				array(
					'id' => 8,
					'name' => 'explainTechnology',
					'link' => 'images/explainTechnology.jpg'
				),
					array(
					'id' => 9,	
					'name' => 'graingerABCDE',
					'link' => 'pdf/graingerABCDE.pdf'
				),
					array(
					'id' => 10,
					'name' => 'graingerABCDEMobile',
					'link' => "http://docs.google.com/gview?embedded=true&url=".base_url("pdf/graingerABCDE.pdf")
				),
					array(
					'id' => 11,
					'name' => 'graingerCDE',
					'link' => 'pdf/graingerCDE.pdf'
				),
					array(
					'id' => 12,
					'name' => 'graingerCDEMobile',
					'link' => "http://docs.google.com/gview?embedded=true&url=".base_url("pdf/graingerCDE.pdf")
				),
					array(
					'id' => 13,
					'name' => 'imgfile',
					'link' => 'images/worksImg.jpg'
				),
					array(
					'id' => 14,
					'name' => 'imgfile2',
					'link' => 'images/engImg.jpg'
				),
					array(
					'id' => 15,
					'name' => 'jobDoneImage',
					'link' => 'images/jobdone.jpg'
				),
					array(
					'id' => 16,
					'name' => 'llvImage1',
					'link' => 'images/vegas/vegas1.jpg'
				),
					array(
					'id' => 17,
					'name' => 'llvImage2',
					'link' => 'images/vegas/vegas2.jpg'
				),
					array(
					'id' => 18,
					'name' => 'llvImage3',
					'link' => 'images/vegas/vegas3.jpg'
				),
					array(
					'id' => 19,
					'name' => 'llvImage4',
					'link' => 'images/vegas/vegas4.jpg'
				),
					array(
					'id' => 20,
					'name' => 'llvImage5',
					'link' => 'images/vegas/vegas5.jpg'
				),
					array(
					'id' => 21,
					'name' => 'llvImage6',
					'link' => 'images/vegas/vegas6.jpg'
				),
					array(
				    'id' => 22,	
					'name' => 'llvImage7',
					'link' => 'images/vegas/vegas7.jpg'
				),
					array(
					'id' => 23,
					'name' => 'llvImage8',
					'link' => 'images/vegas/vegas8.jpg'
				),
					array(
					'id' => 24,
					'name' => 'loaderImage',
					'link' => 'images/spiral.gif'
				),
					array(
					'id' => 25,
					'name' => 'mathhonorImage',
					'link' => 'images/mathhonorimg.jpg'
				),
					array(
					'id' => 26,
					'name' => 'mecProductManual',
					'link' => 'pdf/mecProductManual.pdf'
				),
					array(
					'id' => 27,
					'name' => 'mecProductManualMobile',
					'link' => "http://docs.google.com/gview?embedded=true&url=".base_url("pdf/mecProductManual.pdf")
				),
					array(
					'id' => 28,
					'name' => 'mhImage1',
					'link' => 'images/worksImg.jpg'
				),
					array(
					'id' => 29,
					'name' => 'mhImage2',
					'link' => 'images/mechEngImage2.jpg'
				),
					array(
					'id' => 30,
					'name' => 'mhImage3',
					'link' => 'images/topLabel.jpg'
				),
					array(
					'id' => 31,
					'name' => 'mhImage4',
					'link' => 'images/engImg.jpg'
				),
					array(
					'id' => 32,
					'name' => 'mhImage5',
					'link' => 'images/compSciImage.jpg'
				),
					array(
					'id' => 33,
					'name' => 'mhImage6',
					'link' => 'images/mathhonorimg.jpg'
				),
					array(
				   	'id' => 34,	
					'name' => 'mhImage7',
					'link' => 'images/procprojengimg.jpg'
				),
					array(
					'id' => 35,
					'name' => 'mhImage8',
					'link' => 'images/techwritingimg.jpg'
				),
					array(
					'id' => 36,
					'name' => 'mobileDevelopmentImage',
					'link' => 'images/mobiledevelopmentimage.jpg'
				),
					array(
					'id' => 37,
					'name' => 'myImage',
					'link' => 'images/techwritingimg.jpg'
				),
					array(
					'id' => 38,
					'name' => 'othelloGameImage',
					'link' => 'images/othellogameimage.jpg'
				),
					array(
					'id' => 39,
					'name' => 'procprojengimg',
					'link' => 'images/procprojengimg.jpg'
				),
					array(
					'id' => 40,
					'name' => 'resume',
					'link' => 'pdf/RichardSypertJrResumePDF.pdf'
				),
					array(
					'id' => 41,
					'name' => 'resumeMobileDownload',
					'link' => "http://docs.google.com/gview?embedded=true&url=".base_url("pdf/RichardSypertJrResumePDF.pdf")
				),
					array(
					'id' => 42,
					'name' => 'resumeMobilePDF',
					'link' => "http://docs.google.com/gview?embedded=true&url=".base_url("pdf/RichardSypertJrResumePDF.pdf")
				),
					array(
					'id' => 43,
					'name' => 'rubyRailsImage',
					'link' => 'images/rubyRailsImage.jpg'
				),
					array(
					'id' => 44,
					'name' => 'softwareTechWriting',
					'link' => 'images/softwareTechWriting.gif'
				),
					array(
					'id' => 45,
					'name' => 'tbimgfile',
					'link' => 'images/mechEngImage2.jpg'
				),
					array(
					'id' => 46,
					'name' => 'technicalWritingImage',
					'link' => 'images/technicalwritingimage.jpg'
				),
					array(
					'id' => 47,
					'name' => 'technologiesImage',
					'link' => 'images/technologyideas.jpg'
				),
					array(
					'id' => 48,
					'name' => 'techWriter',
					'link' => 'images/techWriter.jpg'
				),
					array(
					'id' => 49,
					'name' => 'techwritingimg',
					'link' => 'images/techwritingimg.jpg'
				),
					array(
					'id' => 50,
					'name' => 'topLabel',
					'link' => 'images/topLabel.jpg'
				),
					array(
					'id' => 51,	
					'name' => 'upArrow',
					'link' => 'images/upArrow.gif'
				),
					array(
					'id' => 52,
					'name' => 'websiteConstructionImage',
					'link' => 'images/websiteconstruction.jpg'
				),
					array(
					'id' => 53,
					'name' => 'whitePaper',
					'link' => 'pdf/whitePaper.pdf'
				),
					array(
					'id' => 54,
					'name' => 'whitePaperMobile',
					'link' => "http://docs.google.com/gview?embedded=true&url=".base_url("pdf/whitePaper.pdf")
				),
					array(
					'id' => 55,
					'name' => 'wordPressImage',
					'link' => 'images/wordpressimage.jpg'
				),
				
					array(
					'id' => 56,
					'name' => 'street',
					'link' => 'images/street.jpg'
				),	
				
				array(
					'id' => 57,
					'name' => 'sun',
					'link' => 'images/sun.gif'
				),	
				
					array(
					'id' => 58,
					'name' => 'moon',
					'link' => 'images/moon.gif'
				),		
					
					array(
					'id' => 59,
					'name' => 'sun2',
					'link' => 'images/sun.jpg'
				),
				
							array(
					'id' => 60,
					'name' => 'birdFly1',
					'link' => 'images/birdFly1.gif'
				),	
				
				array(
					'id' => 61,
					'name' => 'birdFly2',
					'link' => 'images/birdFly2.gif'
				),	
				
				array(
					'id' => 62,
					'name' => 'kidsPlaying',
					'link' => 'images/kidsPlaying.gif'
				),
				
				array(
					'id' => 63,
					'name' => 'laravelMVC',
					'link' => 'images/laravelMVC.jpg'
				)	
			);
			
			$data1 = array(
				array(
					'id' => 1,
					'link' => 'images/vacationing/bryce1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/vacationing/disney1.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/vacationing/soakcity1.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/vacationing/phoenixzoo1.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/vacationing/disney2.gif'
				),
				array(
					'id' => 6,
					'link' => 'images/vacationing/universalstudios1.gif'
				),
				array(
					'id' => 7,
					'link' => 'images/vacationing/zionnationalpark1.gif'
				),
				array(
					'id' => 8,
					'link' => 'images/vacationing/bryce2.gif'
				),
					array(
					'id' => 9,
					'link' => 'images/vacationing/cruise1.gif'
				),
				array(
					'id' => 10,
					'link' => 'images/vacationing/arizonasciencecenter1.gif'
				)
					
			);
			
			$data2 = array(
				array(
					'id' => 1,
					'link' => 'images/funinthepark/funinthepark1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/funinthepark/funinthepark2.gif'
				),
				
				array(
					'id' => 3,
					'link' => 'images/funinthepark/funinthepark3.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/funinthepark/funinthepark4.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/funinthepark/funinthepark5.gif'
				),
				array(
					'id' => 6,
					'link' => 'images/funinthepark/funinthepark6.gif'
				),
				array(
					'id' => 7,
					'link' => 'images/funinthepark/funinthepark7.gif'
				),
				array(
					'id' => 8,
					'link' => 'images/funinthepark/funinthepark8.gif'
				)
			);
				
			$data3 = array(
				array(
					'id' => 1,
					'link' => 'images/localrecreation/valleyoffire1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/localrecreation/redrock1.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/localrecreation/redrock2.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/localrecreation/mountcharlestonsnow1.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/localrecreation/mountcharleston1.gif'
				),
				array(
					'id' => 6,
					'link' => 'images/localrecreation/mountcharlestonsnow2.gif'
				),
					
			);
		
			$data4 = array(
				array(
					'id' => 1,
					'link' => 'images/localamusement/rollerskating1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/localamusement/rollerskating2.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/localamusement/grandprix1.gif'
				),
					array(
					'id' => 4,
					'link' => 'images/localamusement/grandprix2.gif'
				)
					
			);
			
			$data5 = array(
				array(
					'id' => 1,
					'link' => 'images/tennistown/tennistown1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/tennistown/tennistown2.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/tennistown/tennistown3.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/tennistown/tennistown4.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/tennistown/tennistown5.gif'
				),
					array(
					'id' => 6,
					'link' => 'images/tennistown/tennistown6.gif'
				)
			);

		
			// Insert links into databases
			$cnt = $this->db->count_all_results('app_images');
			if($cnt == 0)
				{
					$this->db->insert_batch('app_images',$data); 
					
				}
				
			$cnt1 = $this->db->count_all_results('vacationing_links');
			if($cnt1 == 0)
				{
					$this->db->insert_batch('vacationing_links',$data1); 
					
				}
				
			$cnt2 = $this->db->count_all_results('funinthepark_links');
			if($cnt2 == 0)
				{
					$this->db->insert_batch('funinthepark_links',$data2); 
					
				}
				
			$cnt3 = $this->db->count_all_results('localrecreation_links');
			if($cnt3 == 0)
				{
					$this->db->insert_batch('localrecreation_links',$data3); 
					
				}
			$cnt3 = $this->db->count_all_results('localrecreation_links');
			if($cnt3 == 0)
				{
					$this->db->insert_batch('localrecreation_links',$data3); 
					
				}
			$cnt4 = $this->db->count_all_results('localamusement_links');
			if($cnt4 == 0)
				{
					$this->db->insert_batch('localamusement_links',$data4); 
					
				}
			$cnt5 = $this->db->count_all_results('tennistown_links');	
			if($cnt5 == 0)
				{
					$this->db->insert_batch('tennistown_links',$data5); 
					
				}
	
		
		}
	
   // functions called from controller to get links to be sent to views	
    public function get_desktop_images()
		{
			//$this->db->select('link');
			$names = array(
							'codeStorageImage', 
							'csimagefile',
							'dataAnalysisImage', 
							'doorHandle',
							'engProcessSpec',
							'engSpec',
							'engSpecMobile',
							'explainTechnology',
							'graingerABCDE',
							'graingerABCDEMobile',
							'graingerCDE',
							'graingerCDEMobile',
							'imgfile',
							'imgfile2',
							'jobDoneImage',
							'llvImage1',
							'llvImage2',
							'llvImage3',
							'llvImage4',
							'llvImage5',
							'llvImage6',
							'llvImage7',
							'llvImage8',
							'loaderImage',
							'mathhonorImage',
							'mecProductManual',
							'mecProductManualMobile',
							'mhImage1',
							'mhImage2',
							'mhImage3',
							'mhImage4',
							'mhImage5',
							'mhImage6',
							'mhImage7',
							'mhImage8',
							'mobileDevelopmentImage',
							'myImage',
							'othelloGameImage',
							'procprojengimg',
							'resume',
							'resumeMobileDownload',
							'resumeMobilePDF',
							'rubyRailsImage',
							'softwareTechWriting',
							'tbimgfile',
							'technicalWritingImage',
							'technologiesImage',
							'techWriter',
							'techwritingimg',
							'topLabel',
							'upArrow',
							'websiteConstructionImage',
							'whitePaper',
							'whitePaperMobile',
							'wordPressImage',
							'street',
							'sun',
							'moon',
							'sun2',
							'birdFly1',
							'birdFly2',
							'kidsPlaying',
							'laravelMVC'
							);
			$this->db->where_in('name', $names);				
			$query = $this->db->get('app_images');
			return $query->result();
		
		}
		
	// functions called from controller to get links to be sent to views	
    public function get_vacationing()
		{
			$this->db->select('link');
			$query = $this->db->get('vacationing_links');
			return $query->result();
		
		}
		
	public function get_funinthepark()
		{
			$this->db->select('link');
			$query = $this->db->get('funinthepark_links');
			return $query->result();
		
		}	
		
	public function get_localrecreation()
		{
			$this->db->select('link');
			$query = $this->db->get('localrecreation_links');
			return $query->result();
		
		}		
	public function get_localamusement()
		{
			$this->db->select('link');
			$query = $this->db->get('localamusement_links');
			return $query->result();
		
		}			
		
	public function get_tennistown()
		{
			$this->db->select('link');
			$query = $this->db->get('tennistown_links');
			return $query->result();
		
		}				
		
		
}
?>