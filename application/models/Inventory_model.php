<?php
class Inventory_model extends CI_Model{
    function __construct(){
        $this->primary_key = 'inventory_id';
        $this->table_name = 'stk_inventory';
    }
    
    function displayrecordById($id){
       return $query=$this->db->get_where('stk_inventory',array('inventory_id'=>$id))->result();

    }


    function getUser($inventoryId)
    {
       return $inventory=$this->db->get_where('stk_inventory',array('inventory_id'=>$inventoryId))->row();
   }
    function updateInventory($inventoryId){
        
        $data = array(
            "productId" => $this->input->post("pId"),
            "quantity" => $this->input->post("quantity"),
          
           
        );
        $this->db->where('inventory_id',$inventoryId);
        $this->db->update('stk_inventory',$data);
       }

       function deleteInventory($inventoryId){
       
        $this->db->where('inventory_id',$inventoryId);
        $this->db->delete('stk_inventory');
       }
}
?>