<?php
    require '../classes/databaseClass.php';
    session_start();

    $database = new databaseClass();

    if (isset($_POST['post_type'])) {

        //update nurse
        if ($_POST['post_type'] == 'nurse_update') {
            $user_id = $_POST['user_id'];
            $why_job = implode(', ',$_POST['why_job']);
            $job_search_level = $_POST['job_search_level'];
            $start_date =date('Y-m-d', strtotime(str_replace('-', '/', $_POST['start_date'])));;
            $drive = $_POST['drive'];
            $have_car = $_POST['have_car'];
            $nmc_pin = $_POST['nmc_pin'];
            $registration_type = implode(', ', $_POST['registration_type']);
            $qualification = $_POST['qualification'];
            $additional_qualification = $_POST['additional_qualification'];

            $update = $database->updateRow('UPDATE users SET why_job=?,job_search_level=?,`start_date`=?,drive=?,have_car=?,nmc_pin=?,
            registration_type=?,qualification=?,additional_qualification=? WHERE id = ?',[$why_job, $job_search_level, $start_date, $drive, $have_car,
            $nmc_pin, $registration_type, $qualification, $additional_qualification, $user_id]);

            if ($update) {
                $data['code']=200;
                $_SESSION['continue']=false;
            }else{
                $data['code']=500; 
            }

            echo json_encode($data);
            exit;
        }
    }else{
        echo $data['error']='There is some error!';
        exit;
    }

?>