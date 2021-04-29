<?php

class Message extends DataBoundObject {
        protected $touser;
        protected $fromuser;
        protected $message;
        protected $time;
        protected $stat;

        protected function DefineTableName() {
                return("chat_message");
        }
        protected function DefineRelationMap() {
                return(array(

                        "to_user_id" => "ID",
                        "from_user_id" => "fromuser",
                        "chat_message" => "message",
                        "timestamp" => "time",
                        "status" => "stat"));
        }
}

?>
