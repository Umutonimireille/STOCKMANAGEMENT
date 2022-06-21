<?php
 
 class Inventory extends CI_Controller{
    function __construct(){
        parent::__construct();
         $this->load->model('Inventory_model');

    }

    function index(){
        $data ['inventory'] = $this->db->get('stk_inventory');
        $this->load->view('list_of_inventories',$data);
    }
   

    public function insertRecord(){
        $this->load->view('inventory');
        if(isset($_POST['submit'])){
        $data=array(
            'productId'	=> $_POST['pId'],
            'quantity' =>$_POST['quantity']
        );
        $q=$this->db->insert('stk_inventory',$data);
        if($q){
            echo 'done';
            redirect('http://localhost/myapp/stockmng/Inventory/displayRecord');
        }
    }
    
 }

 function displayRecord(){
    $data ['inventory'] = $this->db->get('stk_inventory')->result();
    $this->load->view('inventory_dis',$data);
}

 
function edit($inventoryId){

    $user=$this->Inventory_model->getUser($inventoryId);
    $data=array();
    $data['inventory'] =$user;
    $this->form_validation->set_rules('pId', 'PId', 'required');
    $this->form_validation->set_rules('quantity', 'Quantity', 'required');
  
  
    if(isset($_POST['update'])){
        $user = new Inventory_model;
           $user->updateInventory($inventoryId);
           echo 'done';
       }
    if($this->form_validation->run()==false){
    //    $this->load->view('edit',$data);
    }
    
    $this->load->view('invedit',$data);

}
function delete($id){
$this->Inventory_model->deleteInventory($id);
redirect('Inventory/displayRecord');

}
	
}
        


?>