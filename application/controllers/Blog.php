<?php
class Blog extends CI_Controller {

    function __construct();
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Blog_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->database();
        $this->load->model('Blog_model');
        $data['blogs']=$this->Blog_model->getBlogs();
        $this->load->view('blogs',$data);
    }

    public function detail($url)
    {
        $this->load->database();
        $this->load->model('Blog_model');
        $data['blogs']=$this->Blog_model->getSingleBlogs($url);
        $this->load->view('detail',$data);
    }
}