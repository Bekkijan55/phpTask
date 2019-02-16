<?php 

namespace application\models;
use application\core\Model;

class Session extends Model {

    public function authenticate($adminname,$adminpass) {
        $answer = $this->db_conn->authentication($adminname,$adminpass);
        if($answer) {
            header('location: /');
        }
    }
    public function update($id) {
        $updated = $this->db_conn->update($id);
        return $updated;
    }


}