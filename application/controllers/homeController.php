<?php 
namespace application\controllers;
use application\core\Controller;


class HomeController extends Controller{
   
    public function indexAction() {    
      header('location: /?page=1');
    }
    public function add_dataAction() {
        $this->model->add_data();
        header('location: /?page=1');
    }
    public function paginateAction() {
        
        $all_res = $this->model->get_all_data();
        $res = $this->model->getData(); 
      
        $vars = [
            'result' => $res,
            'allresult' => $all_res
        ];            
        $this->view->render('Home page',$vars);
       
    }
   
    

  

}
 

