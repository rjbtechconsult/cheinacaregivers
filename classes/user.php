<?php 

    class Users{
        function __construct(){
        }

        function get_current_user_info(){
            $database = new databaseClass();
            $get_current_user_info = $database->getRow('SELECT * FROM users WHERE id = ?',[$_SESSION['session_id']]);
            if ($get_current_user_info) {
               return json_encode($get_current_user_info);
            }
        }
    }
?>