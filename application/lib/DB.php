<?php 
namespace application\lib;
use PDO;

class DB {
    
    protected $db_conn;
    
    public function __construct() {
       $db_config = require 'application/config/db_conf.php';
       try{
       $this->db_conn = new PDO('mysql:host ='.$db_config['host'].';dbname='.
                        $db_config['dbname'].'',
                        $db_config['username'],
                        $db_config['password']);
         $this->db_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);               
       } catch(PDOException $err) {
           return false;
       }
    }
    public function getAll($tableName) {
        $stmt = $this->db_conn->prepare('SELECT * from '.$tableName);
        $stmt->execute();
        $res = $stmt->fetchAll();       
        return $res ? $res : false;
    }
    public function getWhere($tableName,$id1,$id2) {
        $stmt = $this->db_conn->prepare('SELECT * FROM '.$tableName.' WHERE :id1 = :id2');
        $stmt->bindParam(':id1',$id1,PDO::PARAM_STR);
        $stmt->bindParam(':id2',$id2,PDO::PARAM_INT);
        $stmt->execute();

    }
    public function insertTo($tableName,$arrs) {
        $stmt = $this->db_conn->prepare('INSERT INTO '.$tableName.'(name,email,task,image) 
        VALUES (?,?,?,?)');
        $stmt->execute($arrs);
    }
    public function getByLimit($tableName,$startpoint,$limit,$sort) {
        $stmt = $this->db_conn->prepare('SELECT * FROM '.$tableName.' ORDER BY '.$sort.' ASC LIMIT '.$startpoint.','.$limit);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res ? $res : false;
    } 
    
  
    public function authentication($name,$pass) {
        
        $stmt = $this->db_conn->prepare('SELECT * FROM admin_table WHERE adminname=:name AND password=:pass');
        $stmt->bindParam(':name',$name,PDO::PARAM_STR);
        $stmt->bindParam(':pass',$pass,PDO::PARAM_STR);        
        $stmt->execute();
        $res = $stmt->fetchAll();
        if(sizeof($res) > 0) {
            if(!(isset($_SESSION['adminName']))) {
            
            $_SESSION['adminName'] = $name;

           
            return true;
        }else{
            header('location: /login');
        }
    } else{
        print('session active');
    }       
    }
    public function getStatus($id) {
        $stmt = $this->db_conn->prepare('SELECT status FROM user_tasks WHERE id = :id');
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res ? $res : false;
    }

    public function update($id) {
        $status = $this->getStatus($id);
        if($status) {
             if($status['status'] == "0"){
                $newstatus = true;
            }
            else{
                $newstatus = false;
            }
            $stmt = $this->db_conn->prepare('UPDATE user_tasks SET status=:newstatus WHERE id=:id');
            $stmt->bindParam(':newstatus',$newstatus,PDO::PARAM_STR);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }
        else{
            return false;
        }
    }
        
    }




