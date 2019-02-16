<?php 
namespace application\controllers;
use application\core\Controller;

class SessionController extends Controller {

    public function loginAction() {

        $this->view->render('loginPage');
    }
    public function check_adminAction() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adminname = $_POST['adminname'];
            $password = $_POST['adminpassword'];
        }
        $this->model->authenticate($adminname,$password);
    }
    public function logoutAction() {
        
        session_destroy();
        session_start();
        $_SESSION = [];
        session_destroy();
       header('location: /');
    }

    public function addTaskAction() {
        $this->view->render('Add Task');
    }

    public function changestatusAction() {
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $res = $this->model->update($id);
            if($res) {
                header('location: /');
            }
        }
    }

}



