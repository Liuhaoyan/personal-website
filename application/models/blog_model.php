<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model
{
   public  function get_datas(){
//       $this->db->select('*');
//       $this->db->from('t_blog');
       $this->db->limit(12);
       return $this->db->get('t_blog')->result();
   }
    
//    public function get_hobbies(){
//        $result=$this->db->get('t_hobby')->result();
//        return $result;
//    }
}
?>