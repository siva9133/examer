<?php
    include('./php/connect.php');
    session_start();
    $admin = $_SESSION['id'];
    $admin_id = $_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="assets/css/table.css">
    <script src="table.js"></script>
</head>

<body>
<?php
    if(isset($_SESSION['id'])){
        $sql = "SELECT  *  FROM  students  WHERE stu_id = '$admin_id'";
        $stmt = mysqli_query($db,$sql);
?>
  <header>
    <div class="menu-btn" style="position:fixed;">
      <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <div class="menu">
        <div class="item"><a href="#"><i class="fas fa-desktop"></i>Home</a></div>
        <div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
        <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About us</a></div>
        <div class="item"><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></div>
      </div>
    </div>
        <div class="main">
            <div class="main2">
                <h2>Specifications</h2>
        
                <input type="text" id="myInput" onkeyup="myFunction()"  class="form-control" placeholder="Search for names.." title="Type in a name">
    
                <table  class="table table-hover"  id="myTable">
                    <tr>
                        <th>S.No</th>
                        <th>Test Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Marks</th>
                    </tr>
                    <?php
                      if($stmt->num_rows>0){
                          while($row = $stmt->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td>Ds</td>
                        <td>01/02/2021</td>
                        <td><a href="quiz.html">Start Exam</a></td>
                        <td>-</td>
                    </tr>
                    <?php
                          }
                        }
                    ?>
                    
                </table>
            </div>
        </div>

    <script type="text/javascript">
      $(document).ready(function () {
        //jquery for toggle sub menus
        $('.sub-btn').click(function () {
          $(this).next('.sub-menu').slideToggle();
          $(this).find('.dropdown').toggleClass('rotate');
        });

        //jquery for expand and collapse the sidebar
        $('.menu-btn').click(function () {
          $('.side-bar').addClass('active');
          $('.menu-btn').css("visibility", "hidden");
        });

        $('.close-btn').click(function () {
          $('.side-bar').removeClass('active');
          $('.menu-btn').css("visibility", "visible");
        });
      });
    </script>
  </header>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php
    }
    else{
        header("Location:./login.html");
    }
    session_destroy();
?>

</body>

</html>