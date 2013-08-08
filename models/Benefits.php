<?php

/**
 * Updated
 */

if (!defined('IN_CMS')) { exit(); }

 
class Benefits extends Record {
    const TABLE_NAME = 'benefits';

    public $id;
    public $filter_id;
    public $title;
	public $start_date;
	public $end_date;
    public $created_on;
    public $updated_on;


    public function getId() {
        return $this->id;
    }
	
    public function getFilter() {
	return $this->filter_id;
    }

    public function getTitle(){
	return $this->title;
    }
	
    public function getContent(){
	return $this->content;
    }
	
	/* Addons */
	public function getStartDate(){
	return $this->start_date;
    }
	public function getEndDate(){
	return $this->end_date;
    }
	public function getEmail(){
	return $this->email;
    }
	
	// Date Format
	

	
	// More Content
     public function frontendContent(){
        return $this->content_html;
    }	
	
	public function showContent(){
        if(($this->filter_id) != 0) {
            return $this->content;
        }
        else {
            return $this->content_html;
        }
    }

    public function getDate(){
        return $this->created_on;
    }

    public function getUpdate(){
        return $this->updated_on;
    }
    
    public function beforeSave() {
    // stolen from snippet :)    
    if ( ! empty($this->filter_id)) {
        $this->content_html = Filter::get($this->filter_id)->apply($this->content);
    }
    else {
        $this->content_html = $this->content;
    }
    return true;
    }
  
}
