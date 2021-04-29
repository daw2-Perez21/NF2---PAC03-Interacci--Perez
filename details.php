<?php
class Details extends DataBoundObject {
        protected $iddetails;
        protected $userid;
        protected $activity;
        protected $type;

        protected function DefineTableName() {
                return("login_details");
        }
        protected function DefineRelationMap() {
                return(array(
                        "login_details_id" => "iddetails",
                        "user_id" => "userid",
                        "last_activity" => "activity",
                        "is_type" => "type"));
        }
}

?>