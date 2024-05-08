<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/LATEST_VERSION/jquery.min.js"></script>
  <!-- jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery.min.js"></script>

  <!-- Start Custom CSS -->
  <!-- End Custom CSS -->
 <!-- Start custom script -->
 <script src="admin_lang/lang/javascript/login.js"></script>
 <!-- End custom script -->
 
 <style>
    body {
      background-color: #000000;
    }
    
    .login-container {
      max-width: 400px;
      margin: auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #191C24;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);

    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;

    }
    .form-group {
      margin-bottom: 20px;
    }
    .btn{
        background-color: #8F5FE8;
    }
  </style>
</head>
<body>
  <div class="container ">
    <div class="login-container container_login">
      <h2 class="text-white">Login</h2>
      <form id="loginForm">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn  btn-block">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
