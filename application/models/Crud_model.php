<?php
class Crud_model extends CI_Model{
    public function addUser($dataArray){
        $this->db->insert('users',$dataArray);
        return true;
    }
    public function showUsers(){
        $query=$this->db->select('*')->from('users')->get();
        return $query->result();
    }
    public function viewuser($id){
     $query=$this->db->select('*')->from('users')->where('id',$id)->get();
     return $query->result();
    }
    public function updateUser($id,$dataArray){
        $query=$this->db->set($dataArray)->where('id',$id)->update('users');
        return true;
    }
    public function deleteuser($id){
       $this->db->delete('users',array('id',$id));
       return true;
    }
}
?>