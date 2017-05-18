<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model
{
    public function get_hobby_cate(){
        $result=$this->db->get('t_hobby_category')->result();
        return $result;
    }
    public function get_message_data($message_name,$message_email,$message_content){
        $sql="insert into t_message (message_id,message_name,message_email,message_content)  values(null,'$message_name','$message_email','$message_content') ";
        $query= $this->db->query($sql);
        return $query;
    }
}