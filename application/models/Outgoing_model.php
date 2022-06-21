<?php
class Outgoing_model extends CI_Model{
    function __construct(){
        $this->primary_key = 'outgoingId';
        $this->table_name = 'outgoing';
        parent::__construct();
    }
    // function displayrecordById($id){
    //     return $query=$this->db->get_where('stk_inventory',array('inventory_id'=>$id))->result();
 
    //  }

     function getUser($outgoingId)
     {
        $this->db->where('outgoingId',$outgoingId);
        return $inventory = $this->db->get_where('outgoing',array('outgoingId'=>$outgoingId))->row();
    }
     function updateOutgoing($outgoingId){
         
         $data = array(
             "productId" => $this->input->post("number"),
             "quantity" => $this->input->post("name"),
           
            
         );
         $this->db->where('outgoingId',$outgoingId);
         $this->db->update('outgoing',$data);
        }
 
        function deleteOutgoing($outgoingId){
        
         $this->db->where('outgoingId',$outgoingId);
         $this->db->delete('outgoing');
        }


}
?>