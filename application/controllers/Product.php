<?php
class Product extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Product_model');

        
    }
    public function insertRecord(){
        $this->load->view('product');
        if(isset($_POST['submit'])){
        $data=array(
            'product_Name'	=> $_POST['name'],
            'brand' =>$_POST['brand'],
            'supplier_phone' =>$_POST['supplier_phone'],
            'supplier' =>$_POST['supplier'],
        );
        $q=$this->db->insert('products',$data);
        if($q){
            echo 'done';
            redirect('http://localhost/myapp/stockmng/Product/displayRecord');
        }
    }
}

function displayRecord(){
    $data ['product'] = $this->db->get('products')->result();
    $this->load->view('product_dis',$data);
}



function edit($productId){

    $user=$this->Product_model->getUser($productId);
    $data=array();
    $data['product'] =$user;
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('brand', 'Brand', 'required');
    $this->form_validation->set_rules('supplier_phone', 'SupplierPhone', 'required');
    $this->form_validation->set_rules('supplier', 'Supplier', 'required');
  
  
    if(isset($_POST['update'])){
        $user = new Product_model;
           $user->updateProduct($productId);
           echo 'done';
       }
    if($this->form_validation->run()==false){
    //    $this->load->view('edit',$data);
    }
    
    $this->load->view('editP',$data);

}
function delete($id){
$this->Inventory_model->deleteProduct($id);
redirect('Product/displayRecord');

}
}
?>