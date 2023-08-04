<?php
session_start(); // Start a new session or resume an existing one
include('starter.php');
include('nav.php');
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

//   $stmt = $conn->prepare("INSERT INTO users (name, email, pass) VALUES (?, ?, ?)");
  $stmt = $conn->prepare("INSERT INTO users ( Id, name , pass) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username,$name, $password); // Bind the parameters to the statement
  $stmt->execute(); // Execute the statement

  // Check if the user was successfully created
  if($stmt->affected_rows === 1) {
    // User creation succeeded
    // $_SESSION['logged_in'] = true;
    header('Location: login.php'); // Redirect to dashboard page
    exit();
  } else {
    // User creation failed
    $error = "Failed to create user";
  }


  
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }
    .container {
      width: 50%;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      margin-bottom: 20px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
    .error {
      color: red;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="container">

    <?php if(isset($error)) { ?>
      <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form method="post">
      <label>Name:</label>
      <input type="text" name="name">
      <label>Username/ID:</label>
      <input type="text" name="username">
      <label>Password:</label>
      <input type="password" name="password">
      <input type="submit" value="Sign Up">
    </form>
    <p>If you already have an account?</p><a href="login.php">login</a>
  </div>

</body>
</html>
