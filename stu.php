<?php
    include("../connect.php");
    $users = '';
    $sqr = '';

    if(isset($_POST['stu'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user_id = $_POST['user_id'];
        $pass = md5($_POST['pass']);
        $sql = "SELECT * FROM user WHERE user_id='$user_id'";
        $stu_id = "stu".date("dmy").rand(100,999);
        $stmt = mysqli_query($db,$sql);
        if($stmt->num_rows>0){
            while($row = $stmt->fetch_assoc()){
                $users = $row['admin_id'];
                $sqq = $row['students']+1;
            }
        }
        $sqls = "INSERT INTO students(name, email,stu_id,user_id,admin_id,password) VALUES('$name', '$email', '$stu_id', '$user_id', '$users','$pass')";
        mysqli_query($db,$sqls);
        $f = "SELECT * FROM admin WHERE admin_id = '$users'";
        $sl = mysqli_query($db,$f);
        if($stmt->num_rows>0){
            while($row = $stmt->fetch_assoc()){
                $sqr = $row['stu']+1;
            }
        }
        $sqq = "UPDATE  admin  SET stu = $sqr  WHERE admin_id = '$users'";
        mysqli_query($db,$sqq);
        session_start();
        $_SESSION['id'] = 'admin';
        $_SESSION['admin_id']=$user_id; 
        header("Location:../../user.php?id=".$user_id);
    }