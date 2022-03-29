<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="style.css">

   <title>Login Ngab</title>
</head>
<body>
   <div class="container">
      <form action="{{ route('login') }}" method="POST" class="login-email">
         @csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
         <div class="input-group">
            <a>Email</a>
            <input type="text" placeholder="Username" name="username">/<input>
         </div>
         <div class="input-group">
            <input type="email" placeholder="Email" name="email"></input>
         </div>
         <div class="input-group">
            <input type="password" placeholder="Password" name="password"></input>
            </div>
            <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword"></input>
         </div>
         <div class="input-group">
            <button name="submit" class="btn">Register</button>
         </div>
         <p class="login-register-text">udah punya akun belum? <a href="index.php">Login </a></p>
      </form>
   </div>
</body>
</html>