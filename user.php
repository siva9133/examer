<?php
    include("../connect.php");
    if(isset($_POST['use'])){
        $name = $_POST['name'];
        $admin_id = $_POST['admin_id'];
        $eamil = $_POST['email'];
        $user_id = "user".date('dmy').rand(100,999);
        $pass = md5($_POST['pass']);
        $sql = "INSERT INTO  user (name ,  email , user_id ,  admin_id, password) VALUES ('$name','$eamil','$user_id','$admin_id', '$pass')";
        mysqli_query($db,$sql);
        $sqls = "SELECT * FROM admin WHERE admin_id='$admin_id'";
        $stmt = mysqli_query($db,$sqls);
        if($stmt->num_rows>0){
            while($row = $stmt->fetch_assoc()){
                $users = $row['users'] + 1;
            }
        }
        $sqlss = "UPDATE  admin  SET  users ='$users' WHERE admin_id='$admin_id'";
        mysqli_query($db,$sqlss);
        session_start();
        $_SESSION['id'] = 'admin';
        $_SESSION['admin_id']=$admin_id; 
        header("Location:../../admin_pan.php?id=".$admin_id);

        exit();
    }