<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller
{
   public function blog_detail(){
       $this->load->view('project_detail');
   }
    
}