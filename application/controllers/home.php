<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index(){
        $this->load->model('blog_model');
        $this->load->model('home_model');
        $results=$this->blog_model->get_datas();
        $categories=$this->home_model->get_hobby_cate();
//        $hobbies=$this->blog_model->get_hobbies();
        $this->load->view('home.php',array(
            'results'=>$results,
            'categories'=>$categories,
        ));
    }
    public function get_message(){
        $message_name=$this->input->post('name');
        $message_email=$this->input->post('email');
        $message_content=$this->input->post('message');
        $this->load->model('home_model');
        $messages=$this->home_model->get_message_data($message_name,$message_email,$message_content);
        if($messages){
            echo "<script>alert('留言成功！')</script>";
            redirect('home/index');
        }
        else{
            echo "<script>alert('留言失败！')</script>";
        }
    }
}