<?php
class Posts extends Controller{
    protected $postModel;
    public function __construct(){
       
    }
    public function index(){
       $this->view('posts/add');
    }
    public function send(){
        
    }
 
 
}