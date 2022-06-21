<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
       
    }
    public function login(){
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));

        $user=$this->db->get_where('users',array("email"=>$email))->row();
       
        if($user&& $password==$user->password){
            echo "done";
       
        $this->load->library('session');
        $this->session->set_userdata(array(
              
            'first_name' => $user->firstName,
            'last_name' => $user->lastName,
            'email' => $user->email,
        ));
        if($this->session->userdata('email')){
            echo "session";
        }
        redirect('dashboard');
        // $this->load->view('dashboard/index.php');
        }
        else{
            echo "not";
        }
        $this->load->view('login');

    }
   

}


?>