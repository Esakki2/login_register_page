<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <div class="text">
            Register Form
         </div>
         <form action="register_backend.php" method="post">
            <div class="field">
               <input type="text" name='name' required>
               <span class="fas fa-user"></span>
               <label>Name</label>
            </div>
            <div class="field">
                <input type="text" name='email' required>
                <label>Email</label>
             </div>
             <div class="field">
                <input type="text" name='age' required>
                <label>Age</label>
             </div>
             <div class="field">
                <input type="text" name='gender' required>
                <label>gender</label>
             </div>
            <div class="field">
               <input type="password" name='password' required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <div class="forgot-pass">
               <a href="#">Forgot Password?</a>
            </div>
            <button type="submit">Submit</button>
            <div class="sign-up">
               Already Have a account ?
               <a href="login.php">login now</a>
            </div>
         </form>
      </div>
   </body>
</html>