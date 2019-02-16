<?php 
namespace application\core;
use application\lib\DB;

abstract class Model {

    public $db_conn;

    public function __construct() {
        $this->db_conn = new DB;
       
    }
}


