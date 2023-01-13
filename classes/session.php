<?php
    session_start();
    require 'databaseClass.php';
    class Session{

        function __construct()
        {
            if (!isset($_SESSION['session_id'])) {
               header('location: index');
            }
        }

        function get_session_id(){
            if (isset($_SESSION['session_id'])) {
                return $_SESSION['session_id'];
            }
        }
    }

?>