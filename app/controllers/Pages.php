<?php
class Pages extends Controller{
    protected $postModel;
    public function __construct(){
        $this->postModel = $this->model('Post');
       
    }
    public function index(){
        $post=$this->postModel->getpost();
      $data=[
        'post'=>$post
      ];
       $this->view('pages/index',$data);
    }
    public function dashboard(){
        $post=$this->postModel->getpost();
      $data=[
        'post'=>$post
      ];
       $this->view('pages/dashboard',$data);
    }
    public function add(){
        $this->view('pages/forme');
    }
 
}
