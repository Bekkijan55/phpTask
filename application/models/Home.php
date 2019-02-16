<?php 

namespace application\models;
use application\core\Model;
class Home extends Model {
    public function upload_file() {
            $updir = "application/public/image/"
                .basename($_FILES['file_img']['name']);            
                $upload_img = $_FILES['file_img']['tmp_name'];
                $resize_image = $_FILES['file_img']['name'];
                                
                $newwidth = 320;
                $newheight = 240;
                if(empty($imgsize = getimagesize($upload_img))) {
                    print("Please upload image");
                    return false;
                }
                else{
                    $imageType = explode('/',$imgsize['mime']);
                    $imageType = trim(strtolower($imageType[1]));
                    $myimgtypes = ['jpeg','png','jpg'];
                    if(!in_array($imageType,$myimgtypes)) {
                        print("Please take valid im)age type");
                    } 
                    else{
                        if(move_uploaded_file($upload_img,$updir)) {  
                                                    
                            $new_img = $this->resize_img($updir,$newwidth,$newheight);                      
                            $this->addToDB($updir);
                        }
                        else{
                            print("Your image not uploaded");
                        }
                    }
                }
                        
        } 
     public function resize_img($file,$w,$h) {
        list($width,$height) = getimagesize($file);
        $newfile = imagecreatefromjpeg($file);
        $thumb = $file;
        $truecolor = imagecreatetruecolor($w,$h);
        imagecopyresampled($truecolor,$newfile,0,0,0,0,$w,$h,$width,$height);
        imagejpeg($truecolor,$thumb,100);
        
     }   

    public function getData() {        
        $sort = 'id';
     if(isset($_GET['sort'])){        
        if($_GET['sort'] == 'name') {
            $sort = 'name';
        }
        if($_GET['sort'] == 'email') {
            $sort = 'email';
        }
        
     } 
    $start_point = ($_GET['page']-1)*3;
    $limit_amount = 3;
    return $this->db_conn->getByLimit('user_tasks',$start_point,$limit_amount,$sort);
    }
    public function get_all_data() {
        return $this->db_conn->getAll('user_tasks');
        
    }
    public function add_data() {
         if(isset($_POST['upload'])) {          
            $this->upload_file();
        }
    }
    public function addToDB($path) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $task = $_POST['task'];
        $img_path = $path;
        if(!empty($name) &&
         !empty($email) &&
         !empty($task) &&
          filter_var($email,FILTER_VALIDATE_EMAIL)){
            $this->db_conn->insertTo('user_tasks',[$name,$email,$task,$img_path]);
            $status = "Your data stored successfully";
        }
    }   
   
    


}


