<?php
class Outgoing extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model("Outgoing_model");

    }
    public function insertRecord(){
        $this->load->view('outgoing');
        if(isset($_POST['submit'])){
        $data=array(
            'quantity'	=> $_POST['name'],
            'productId' =>$_POST['number'],
              
        );
        $q=$this->db->insert('outgoing',$data);
        if($q){
            echo 'done';
            redirect('http://localhost/myapp/stockmng/outgoing/displayRecord');
        }
    }
}

function displayRecord(){
    $data ['outgoing'] = $this->db->get('outgoing')->result();
    $this->load->view('outgoin_dis',$data);
}




function edit($outgoingId){

    $user=$this->Outgoing_model->getUser($outgoingId);
    $data=array();
    $data['outgoing'] =$user;
    $this->form_validation->set_rules('number', 'Number', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required');
  
  
    if(isset($_POST['update'])){
        $user = new Outgoing_model;
           $user->updateOutgoing($outgoingId);
           echo 'done';
       }
    if($this->form_validation->run()==false){
    //    $this->load->view('edit',$data);
    }
    else{

       
       

    }
    $this->load->view('editO',$data);

}
function delete($id){
$this->Outgoing_model->deleteOutgoing($id);
redirect('outgoing/displayRecord');

}
}
?>