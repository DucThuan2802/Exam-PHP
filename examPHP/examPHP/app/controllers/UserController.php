<?php 
class UserController  extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("UserModel", $conn);
    }


    
    public function execute($id = null) {
        //insert or update
        if(isset($_POST["submit"])) {
            $item_code = $_POST["item_code"];
            $item_name = $_POST["item_name"];
            $quantity = $_POST["quantity"];
            $expried_date = $_POST["expried_date"];
            $note = $_POST["note"];
            $id =  $_POST["id"];
            if(empty($id)) {
                //insert
                $this->__model->insertData($item_code, $item_name, $quantity,$expried_date,$note);
            } else {
                //update user
                $this->__model->updateDataById($id, $item_code, $item_name, $quantity, $expried_date, $note);
                
            }
            
        } else {
            $user = $this->__model->getDataById($id);
            $this->view("user/form", ["user"=> $user]);
            
        }

        //onpen form
    }

    public function listData() {
       $listData =  $this->__model->listData();
        $this->view("layouts/client_layout", ["content"=>"user/listUser", "listData"=>$listData]);
        
    }

    public function delete($id) {
       $this->__model->deleteDataById($id);
    }
}




?>