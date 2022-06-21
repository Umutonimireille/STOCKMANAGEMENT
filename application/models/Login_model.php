<?php

class Login_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->primary_key = 'userId';
        $this->table_name = 'users';
    }
}
?>