<?php
require("prueba.php");
require("class.DataBoundObject.php");
class Login extends DataBoundObject {
        protected $userid;
        protected $name;
        protected $pass;

        protected function DefineTableName() {
                return("login");
        }
        protected function DefineRelationMap() {
                return(array(
                        "user_id" => "userid",
                        "username" => "name",
                        "password" => "pass"));
        }
}

?>
