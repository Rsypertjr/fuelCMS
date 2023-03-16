<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH.'models/Base_module_model.php');
 
class Articles_model extends Base_module_model {
 
    public $filters = array('content');
    public $filters_join = 'or';
    public $required = array('title');
    public $unique_fields = array('slug');
    public $foreign_keys = array('author_id' => 'authors_model');
    public $parsed_fields = array('content','content_formattted');
    public $has_many = array('tags' => 'fuel_tags_model');
 
    function __construct()
    {
        parent::__construct('articles');
    }
   
    function list_items($limit = NULL, $offset = NULL, $col = 'name', $order = 'asc', $just_count = FALSE)
    {
        $this->db->join('authors', 'authors.id = articles.author_id', 'left');
        $this->db->select('articles.id, title, SUBSTRING(content, 1, 50) AS content, authors.name AS author, date_added, articles.published', FALSE);
        $data = parent::list_items($limit, $offset, $col, $order, $just_count);
 
        // check just_count is FALSE or else $data may not be a valid array
        if (empty($just_count))
        {
          foreach($data as $key => $val)
          {
            $data[$key]['content'] = htmlentities($val['content'], ENT_QUOTES, 'UTF-8');
          }
        }
        return $data;
    }
    
    function form_fields($values = array(),$related = array())
    {
        $fields = parent::form_fields($values, $related);
        
        //********************** ADD CUSTOM FORM STUFF HERE *****************************
        $fields['content']['img_folder'] = 'articles/';
        $fields['image']['folder'] = 'images/articles/';
        $fields['thumb_image']['folder'] = 'images/articles/thumbs/';
        return $fields;
    }
    
    function tree()
    {
        return $this->_tree('foreign_keys');
    }
   
}
 
class Article_model extends Base_module_record {
    
    public function get_url()
    {
        return site_url('articles/'.$this->image);
    }
    
    public function get_image_path()
    {
        return img_path('articles/'.$this->image);
    }
    
    public function get_thumb_image_path()
    {
        return img_path('articles/'.$this->thumb_image);
    }
 
}
