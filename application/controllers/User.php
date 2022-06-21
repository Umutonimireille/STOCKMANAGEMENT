<?php

class User extends CI_Controller{
   function __construct(){
    parent::__construct();
    $this->load->model('User_model');
   }
   

   public function insertRecord(){
    $this->load->view('user');
    if(isset($_POST['submit'])){
    $data=array(
        'firstName'	=> $_POST['fname'],
        'lastName' =>$_POST['lname'],
        'telephone' =>$_POST['phone'],
        'email' =>$_POST['email'],
        'nationality' =>$_POST['nationality'],
        'gender' =>$_POST['gender'],
        'username' =>$_POST['username'],
        'password' =>md5($_POST['password'])
    );
    // echo $data["nationality"];
    $q=$this->db->insert('users',$data);
    if($q){
        // echo $q;
        echo 'done';
        redirect('http://localhost/myapp/stockmng/dashboard');
    }
}
}

function displayRecord(){
    $data ['user'] = $this->db->get('users')->result();
    $this->load->view('user_dis',$data);
}

// public function updatedata()
// 	{
// 	$id=$this->input->get('user_id');
// 	$result['data']=$this->Inventory_model->displayrecordById(1);
// 		if($this->input->post('update'))
// 		{
// 		$pid=$this->input->post('pId');
// 		$quantity=$this->input->post('quantity');
// 		$this->Inventory_model->update_records($pid,$quantity,$id);
// 		echo "Date updated successfully !";
// 		}
//         $this->load->view('inventory_u',$result);
// 	}



    function edit($userId){

        $user=$this->User_model->getUser($userId);
        $data['user']=$user;
        $this->form_validation->set_rules('fname', 'Fname', 'required');
        $this->form_validation->set_rules('lname', 'Lname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nationality', 'Nationality', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('telephone', 'Telephone', 'required');
        if(isset($_POST['update'])){
            $user = new User_model;
               $user->updateUser($userId);
               echo 'done';
           }
        if($this->form_validation->run()==false){
        //    $this->load->view('edit',$data);
        echo "not allowed";
        }

        $this->load->view('edit',$data);
	
}
function delete($id){
    $this->User_model->deleteUser($id);
    redirect('User/displayRecord');
}

}
?>