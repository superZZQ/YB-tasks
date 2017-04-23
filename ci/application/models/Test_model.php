<?php
class Test_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    //登录分页
    public function admit($name)
    {
    	$query = $this->db->get_where('staffinf', array('name' => $name));
        $na=$query->row_array();
        if($na['stdposition']=='总监'||$na['stdposition']=='部长'||$na['stdposition']=='组长')
        	return 1;
        //else if() return 2
        else 
        	return 3;
    }

    //分部门搜索
    public function part($a)
		{
		    if($a==1)$department="技术部";
		    else if($a==2)$department="宣传部";
		      else if($a==3)$department="业务部";
		        else if($a==4)$department="运营部";
		          else if($a==5)$department="行政部";
		    $query = $this->db->get_where('staffinf', array('department' => $department));
		    return $query->result_array();
		}

	//查看上一次考核表
		public function last($name=FALSE)
		{
           if($name==FALSE)
           { 
           	$query = $this->db->get('staffinf');
           	$data['na']=$query->result_array();
           	$c=0;
           	foreach($data['na']as$na)
           	{
                $query = $this->db->get_where('test', array('name' => $data['na']['name']));
                $b=0;
                $data['name']=$query->result_array();
                foreach($data['name']as$name){
                	$a=$data['name']['id'];
                	if ($b==0) {
                		$b=$data['name']['id'];
                	}
                	if($a>$b)$b=$a;
                }
                $id[$c]=$b;
                $c++;
           	}
                return $id;
           }
           $query = $this->db->get_where('test', array('name' => $name));
                $b=0;
                $c=0;
                $data['name']=$query->result_array();

                foreach($data['name']as$name){
                	$a=$data['name'][$c]['id'];
                	if ($b==0) {
                		$b=$data['name'][$c]['id'];
                	}
                	$c++;
                	if($a>$b)
                		$b=$a;
                }
                $query = $this->db->get_where('test', array('id' => $b));
                return $query->row_array();
		}


	//搜索
	 public function select($number=FALSE,$name=FALSE)
	 {
         
	 }	

    //查看个人考核表
			public function get($id)
		{
		    $query = $this->db->get_where('staffinf', array('id' => $id));
		    $data['na']=$query->row_array();
		    $query = $this->db->get_where('test', array('name' => $data['na']['name']));
		    return $query->result_array();
		}
		public function getall($name)
		{ 
		    $query = $this->db->get_where('test', array('name' => $name));
		    return $query->result_array();
		}


	//查看个人考核表内容
			public function get_news($id = FALSE)
		{
			if($id==FALSE)
			{
				$query = $this->db->get('test');
				return $query->result_array();
			}
		    $query = $this->db->get_where('test', array('id' => $id));
		    return $query->row_array();
		}
		public function getwork($work)
		{
		    $query = $this->db->get_where('test', array('work' =>$work));
		    return $query->row_array();
		}
		//写入表单数据
				public function set_news()
		{
		    $this->load->helper('url');

		    $data = array(
		        'name' => $this->input->post('name'),
		     
		        'department' => $this->input->post('department'),

		        'staff' => $this->input->post('staff'),

		        'work' => $this->input->post('work'),
		        'ow' => $this->input->post('ow'),
		        'app' => $this->input->post('app'),
		        'oplan' => $this->input->post('oplan'),
		        'plan' => $this->input->post('plan'),
		    );
		    return $this->db->insert('test', $data);
		}


		public function update($id)
		{
		    $this->load->helper('url');

		    $data = array(
		        'name' => $this->input->post('name'),
		     
		        'department' => $this->input->post('department'),

		        'staff' => $this->input->post('staff'),

		        'work' => $this->input->post('work'),
		        'ow' => $this->input->post('ow'),
		        'app' => $this->input->post('app'),
		        'oplan' => $this->input->post('oplan'),
		        'plan' => $this->input->post('plan'),
		    );
            $this->db->where('id',$id);
            $this->db->update('test', $data);
		    return 0;
		}



		//接受评价者信息
		public function judge()
		{
			$this->load->helper('url');
			$mess=$this->input->post('gender');
			return $mess;
		}

		//写入组长评价
		public function zuw()
		{
			 $this->load->helper('url');
			 $data = $this->input->post('name');
			 return $this->db->insert('test', $data);

		}

		//删除数据

		//where的限制方法

		public function  delete($id)
		{
			$this->load->helper('url');	
			$this->db->where('id', $id);
	        $this->db->delete('test');
			}
		
}