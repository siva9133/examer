<?php
include("../connect.php");
if (isset($_POST['log'])) {
        $user = $_POST['name'];
        $pass = md5($_POST['pass']);
        if($_POST['type'] == "ad"){
            $sql = "SELECT * FROM admin WHERE name = '$user' AND password = '$pass'";
            $stmt = mysqli_query($db,$sql);   
            if($stmt->num_rows>0){
                while($row = $stmt->fetch_assoc()){
                    session_start();
                    $_SESSION['id'] = 'admin';
                    $_SESSION['admin_id']=$row['admin_id'];
                    header("Location:../../admin_pan.php?id=".$admin_id);
                    exit();
                }
            }else{
                echo"unseccessful";
            }
        }
        if($_POST['type'] == "fac"){
            $sql = "SELECT * FROM user WHERE name = '$user' AND password = '$pass'";
            $stmt = mysqli_query($db,$sql);   
            if($stmt->num_rows>0){
                while($row = $stmt->fetch_assoc()){
                    session_start();
                    $_SESSION['id'] = 'admin';
                    $_SESSION['admin_id']=$row['user_id']; 
                    header("Location:../../user.php?id=".$row['user_id']);
                }
            }else{
                echo"unseccessful";
            }
        }
        if($_POST['type'] == "stu"){
            $sql = "SELECT * FROM students WHERE name = '$user' AND password = '$pass'";
            $stmt = mysqli_query($db,$sql);   
            if($stmt->num_rows>0){
                while($row = $stmt->fetch_assoc()){
                    session_start();
                    $_SESSION['id'] = 'admin';
                    $_SESSION['admin_id']=$row['stu_id']; 
                    header("Location:../../stu_pan.php?id=".$row['stu_id']);
                }
            }else{
                echo"unseccessful";
            }
        }
}
     ?>