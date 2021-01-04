<?php
class posix_times{
    public $post_id;
    public $cat_id;
    public $title;
    public $description;
    public $added_on;
    public $added_by;
    public $image;
   
    function __construct($post_id,$cat_id,$title,$description){
        $this->post_id=$post_id;
        $this->cat_id=$cat_id;
        $this->title=$title;
        $this->description=$description;
        $this->added_on=$added_on;
        $this->added_by=$added_by;
        $this->image=$image;
    }
    function setpost_id($post_id){
        $this->post_id=$post_id;
    }
    function getpost_id(){
        return $this->post_id;
    }
    function setcat_id($cat_id){
        $this->cat_id=$cat_id;
    }
    function getcat_id(){
        return $this->cat_id;
    }
  function settitle($title){
        $this->title=$title;
    }
    function gettitle(){
        return $this->title;}

    function setdescription($description){
        $this->description=$description;
    }
    function getdescription(){
        return $this->description;
    }

    function setadded_on ($added_on){
        $this->=$added_on;
    }
    function getadded_on (){
        return $this->added_on;
    }

    function setadded_by($added_by){
        $this->=$added_by;
    }
    function getadded_by (){
        return $this->added_by;
    }

    function setimage ($image){
        $this->=$image;
    }
    function getimage (){
        return $this->image;
    }



}
?>