<?php
    session_start();
    require '../classes/databaseClass.php';
    $database = new databaseClass();

    //For nurses
    if (isset($_POST['nurse'])) {
        $first_name = ucfirst(trim($_POST['first_name']));
        $last_name = ucfirst(trim($_POST['last_name']));
        $email = trim($_POST['email']);
        $address_1 = ucfirst(trim($_POST['address_1']));
        $address_2 = ucfirst(trim($_POST['address_2']));
        $ghana_post = trim($_POST['ghana_post']);
        $password = md5(trim($_POST['password']));
        $type = 'nurse';

        //check if email already exists
        $check = $database->getRow('SELECT email from users WHERE email = ? AND type != ?',[$email,'admin']);
        if ($check) {
            $data['code']=300;
            $data['message']="Email already exists!";
        }else{
            $insert = $database->insertRow('INSERT INTO users (first_name,last_name,email,address_1,address_2,ghana_post,`password`,`type`) VALUES (?,?,?,?,?,?,?,?)', [
                $first_name, $last_name, $email, $address_1, $address_2, $ghana_post, $password, $type
            ]);

            if ($insert) {
                $data['code'] = 200;
                $data['message'] = 'Success';
                $_SESSION['session_id']=$database->lastInsertId;
                $_SESSION['continue']=true;
            }else{
                $data['code']=400;
                $data['message']='Sign up error.';
            }
        }

        echo json_encode($data);        
    }
?>