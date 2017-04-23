<?php  
     class User_model extends CI_Model {  
    //获取用户信息  
    public function get()  
    {  
        $data = '';  
        //SQL语句的select部分，这里查询user表的所有字段  
        $this->db->select("*");  
       //运行选择查询语句并且返回结果集给$data  
       $data = $this->db->get("user");  
       return $data;  
     }  
     }  
?>