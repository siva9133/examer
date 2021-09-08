<?php
  $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Register</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/register_admin.css">
</head>
<body>
  <div class="signup__container">
    <div class="container__child signup__thumbnail">
      <div class="thumbnail__content text-center">
        <h1 class="heading--primary">Welcome to Exam Cube.User-Register</h1>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="./php/input/user.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="name" id="username" placeholder="Name" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="email" name="email" id="email" placeholder="Email" required />
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="admin_id" id="adminid" value="<?php echo $id; ?>" hidden />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="pass" id="password" placeholder="Password" required />
        </div>
        <div class="m-t-lg">
          <ul class="list-inline">
            <li>
              <input class="btn btn--form" type="submit" value="Register" name="use"/>
              <br>
              <br>
            </li>
          </ul>
        </div>
      </form>  
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
