<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <div class="text">
            Login Form
         </div>
         <form action="login_backend.php" method="post">
            <div class="field">
                <input type="text" name='email' required>
                <span class="fas fa-user"></span>
                <label>Email or phone</label>
             </div>
            <div class="field">
               <input type="password" name='password' required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <div class="forgot-pass">
               <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" name='submit'>Submit</button>
            <div class="sign-up">
               Don't Have a account ?
               <a href="index.php">signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>