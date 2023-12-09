<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/css01.css">
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 form-container">
      <!-- Login Form -->
      <h2>Login</h2>
      
      <!-- Form submission to database.php using the POST method -->
      <form action="database.php" method="post">
        <div class="form-group">
          <label for="loginEmail">Email address</label>
          
          <!-- Input field for the email address, required for form validation -->
          <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
        </div>
        <div class="form-group">
          <label for="loginPassword">Password</label>

          <!-- Input field for the password, required for form validation -->
          <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
        </div>

        <!-- Submit button for the form -->
        <button type="submit" class="btn btn-primary">Login</button>
        
        <!-- Link to the registration page -->
        <a href="register.php" target="_blank" rel="noopener noreferrer">Register here</a>
      </form>
    </div>
  </div>
</div>

<!-- JavaScript libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
