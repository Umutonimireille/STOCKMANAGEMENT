<?php
class User_model extends CI_Model{
    function __construct(){
        $this->primary_key = 'userId';
        $this->table_name = 'users';
    }

    // function update_records($quantity,$pid,$id)
	// {
	// $query=$this->db->query("update stk_inventory SET quantity='$quantity',productId='$pid' where id='$id'");
	// }

   
    function getUser($userId)
    {
       $user = $this->db->get_where('users',array('userId' => $userId))->row();
       return $user;
   }
   
    function updateUser($userId){
        
        $data = array(
            "firstName" => $this->input->post("fname"),
            "lastName" => $this->input->post("lname"),
            "telephone" => $this->input->post("phone"),
            "username" => $this->input->post("username"),
            "nationality" => $this->input->post("nationality"),
            "gender" => $this->input->post("gender"),
            "password" => $this->input->post("password")
        );
        $this->db->where('userId',$userId);
        $this->db->update('users',$data);
       }

       function deleteUser($userId){
       
        $this->db->where('userId',$userId);
        $this->db->delete('users');
       }
}