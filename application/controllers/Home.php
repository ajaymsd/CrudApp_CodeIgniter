<?php 
class home extends CI_Controller{
    public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Crud_model');
            $this->load->database();
        }
    
    public function index(){
    
    $result['usersData']=$this->Crud_model->showUsers();
    //print_r($result);die;
    $this->load->view('Home',$result);
    }
    public function add(){
        $this->load->view('add');
    }
    public function adddata(){
       
        if($this->input->post('subbut')){
            $dataArray=array(
                'username'=>$this->input->post('username'),
                'company'=>$this->input->post('company'),
                'salary'=>$this->input->post('salary')
            );
            $response=$this->Crud_model->addUser($dataArray);
            if($response==true){
                redirect('home');
            }
        }
    }
        public function update(){
            $id=$this->input->get('userid');
            $result['userDetail']=$this->Crud_model->viewuser($id);
            //print_r($result)
            $this->load->view('update',$result);
            if($this->input->post('updatebut')){
                $dataArray=array(
                    'username'=>$this->input->post('username'),
                    'company'=>$this->input->post('company'),
                    'salary'=>$this->input->post('salary')
                );
                $response=$this->Crud_model->updateUser($id,$dataArray);
               if($response==true){
                redirect('home');
            }

            }
        }
        public function delete(){
            $id=$this->input->get('userid');
            $response=$this->Crud_model->deleteUser($id);
            if($response==true){
                redirect('home');
            }
        }
       
    
    
}
?>