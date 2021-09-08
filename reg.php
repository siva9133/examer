<?php
    include("../connect.php");
    if(isset($_POST['reg'])){
        $name = $_POST['name'];
        $inst = $_POST['inst'];
        $eamil = $_POST['email'];
        $admin_id = "adm".date('dmy').rand(100,999);
        $pass = md5($_POST['pass']);
        $sqls = "SELECT * admin WHERE admin_id='$admin_id'";
        $stmt = mysqli_query($db,$sql);
        $sql = "INSERT INTO  admin (name ,  inst ,  email ,  admin_id,password) VALUES ('$name','$inst','$eamil','$admin_id','$pass')";
        mysqli_query($db,$sql);
        session_start();
        $_SESSION['id'] = 'admin';
        $_SESSION['admin_id']=$admin_id;
        header("Location:../../admin_pan.php?id=$admin_id");
        exit();
    }