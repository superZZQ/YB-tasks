<?php  
     class User extends CI_Controller{  
    //构造函数  
    function __construct()  
    {  
       parent::__construct();  
       //载入用户模型  
       $this->load->model("User_model");  
    }  
    //显示用户信息列表  
    public function index()  
    {  
        //调用用户模型中的get方法，将结果集返回给$query  
        $query = $this->User_model->get();  
        //将结果集作为关联数组返回  
        $data['userList'] = $query->result_array();  
        $this->load->view('user_index',$data);
     }  
     }  
?>