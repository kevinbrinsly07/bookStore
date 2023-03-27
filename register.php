<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>

  <!-- font awsome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="form-container">
    <h3>Register Now</h3>

    <form action="" method="post">
      <input type="text" name="name" id="name" placeholder="enter your name" required class="box" >

      <input type="email" name="email" id="email" placeholder="enter your email address" required class="box" >

      <input type="password" name="password" id="password" placeholder="enter your password" required class="box" >

      <input type="password" name="cpassword" id="name" placeholder="conform your your password" required class="box" >
      <select name="user_type" id="user_type">
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>

      <input type="submit" name="submit" value="register now" class="btn" >
      <p>already have a account? <a href="login.php"></a></p>
    </form>
  </div>


  
</body>
</html>