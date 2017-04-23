<?php
class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Test_model');
        $this->load->helper('url_helper');
        $data['yb_userid']='1234567';
        $yb_username='王珂';
    }

    //登录分页1获取名字2删除3update4路径5//阳超链接
    public function admit($name = '王珂')
    {
        $a=$this->Test_model->admit($name);
        switch($a){
            case 1:
            $data['title'] = '组长部长';
            $this->load->view('templates/header', $data);
            $this->load->view('test/zbad');
            $this->load->view('templates/footer');
            break;
            case 2:
            $data['title'] = '2';
            $this->load->view('templates/header', $data);
            $this->load->view('test/teaad');
            $this->load->view('templates/footer');
            break;
            case 3:
            $data['title'] = '3';
            $this->load->view('templates/header', $data);
            $this->load->view('test/friend');
            $this->load->view('templates/footer');
            break;
        }
    }

    //显示所有考核表
    public function all()
    { 
        $data['news'] = $this->Test_model->get_news();
        $data['title'] = '显示全部考核表';
        $this->load->view('templates/header', $data);
        $this->load->view('test/all', $data);
        $this->load->view('templates/footer');
    }
    
    //显示所有人上一次考核表
    public function alllast()
    {   
        $data['title']="上一次";
        $data['news_item'] = $this->Test_model->last();
        $this->load->view('templates/header',$data);
        $this->load->view('test/alllast',$data);
        $this->load->view('templates/footer');
    }

    //显示一个人上一次的考核表
    public function onelast($name='王珂'){
        $data['title']="上一次";
        $data['news_item'] = $this->Test_model->last($name);
        $this->load->view('templates/header',$data);
        $this->load->view('test/onelastn',$data);
        $this->load->view('templates/footer');
    }
    public function oneall($name='王珂'){
        $data['title']="全部";
        $data['news'] = $this->Test_model->getall($name);
        $this->load->view('templates/header',$data);
        $this->load->view('test/oneall',$data);
        $this->load->view('templates/footer');
    }
    public function onela($name='王珂'){
        $data['title']="上一次";
        $data['news_item'] = $this->Test_model->last($name);
        $this->load->view('templates/header',$data);
        $this->load->view('test/onelasta',$data);
        $this->load->view('templates/footer');
    }

    //分部门显示
     public function part()
    {   $data['title']="分部门";
        $this->load->view('templates/header',$data);
        $this->load->view('test/part');
        $this->load->view('templates/footer');
    }

    //删除
    public function delete($id)
    {  $data['title']="分部门";
       $this->Test_model->delete($id);
        $this->load->view('templates/header',$data);
        $this->load->view('test/part');
        $this->load->view('templates/footer');
    }



    //显示考核表人员
        public function index($a)
    {   
        $data['news'] = $this->Test_model->part($a);
        $data['title'] = '显示考核表人员名单';
        $this->load->view('templates/header', $data);
        $this->load->view('test/index', $data);
        $this->load->view('templates/footer');
    }


    //按时间查看

           public function viewtime($id)
    {
        $data['news_item'] = $this->Test_model->get($id);
        if (empty($data['news_item']))
        {
            show_404();
        }
        $data['title'] = '个人所有考核表';
        $this->load->view('templates/header', $data);
        $this->load->view('test/viewtime', $data);
        $this->load->view('templates/footer');
    }

    //显示个人考核表数据
           public function view($id)
    {
        $data['news_item'] = $this->Test_model->get_news($id);
        if (empty($data['news_item']))
        {
            show_404();
        }
        $data['title'] = $data['news_item']['name'];
        $this->load->view('templates/header', $data);
        $this->load->view('test/view', $data);
        $this->load->view('templates/footer');
    }



    //判断评价者
    public function judge($mess = NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        if(empty($mess))
        {
            $data['title'] = '请选择身份';
            $this->load->view('templates/header', $data);
        $this->load->view('test/judge', $data);
        $this->load->view('templates/footer');
        }

        $mess=$this->Test_model->judge();

        if($mess==1)
        { 
            $this->form_validation->set_rules('zu', 'Zu', 'required');
            if ($this->form_validation->run() === FALSE)
            {
              $data['title'] = '组长评价';
            $this->load->view('templates/header', $data);
        $this->load->view('test/zup', $data);
        $this->load->view('templates/footer');  
            }
           
            else
        {
            $this->Test_model->zuw();
            $this->load->view('test/finish');
        } 
        }
        else if($mess==2)
        {
            $this->form_validation->set_rules('bu', 'Bu', 'required');
                $data['title'] = '部长评价';
            $this->load->view('templates/header', $data);
        $this->load->view('test/bup', $data);
        $this->load->view('templates/footer');
        }
        
        else if($mess==3)
        {
            $this->form_validation->set_rules('teacher', 'Teacher', 'required');
                $data['title'] = '教师评价';
            $this->load->view('templates/header', $data);
        $this->load->view('test/teacher', $data);
        $this->load->view('templates/footer');
        }
        

        
    }




        //写入表单数据
        public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '请填写表格';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('staff', 'Staff', 'required');
        $this->form_validation->set_rules('work', 'Work', 'required');
        $this->form_validation->set_rules('ow', 'Ow', 'required');
        $this->form_validation->set_rules('app', 'APP', 'required');
        $this->form_validation->set_rules('oplan', 'Oplan', 'required');
        $this->form_validation->set_rules('plan', 'Plan', 'required');
        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('test/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->Test_model->set_news();
            $work= $this->input->post('work');
            $data['news_item'] = $this->Test_model->getwork($work);
            $this->load->view('test/success',$data);
        }
    }


    //修改个人数据
    
        public function change($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '请重新填写表格';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('staff', 'Staff', 'required');
        $this->form_validation->set_rules('work', 'Work', 'required');
        $this->form_validation->set_rules('ow', 'Ow', 'required');
        $this->form_validation->set_rules('app', 'APP', 'required');
        $this->form_validation->set_rules('oplan', 'Oplan', 'required');
        $this->form_validation->set_rules('plan', 'Plan', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('test/change');
            $this->load->view('templates/footer');

        }
        else
        {
            
            $name= $this->input->post('name');
            $this->Test_model->delete($time);
            $this->Test_model->update($id); 
            $data['news_item'] = $this->Test_model->get_news($name);
            $this->load->view('test/success',$data);
        }
    }


}