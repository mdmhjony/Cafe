
<?php


session_start(); // Start a new session or resume an existing one
include('starter.php');
include('nav.php');
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST['username'];
  $password = $_POST['password'];


  $stmt = $conn->prepare("SELECT Id FROM users WHERE id=? AND pass=?");
  $stmt->bind_param("ss", $username, $password); // Bind the parameters to the statement
  $stmt->execute(); // Execute the statement

  // Check if the credentials are correct (you should replace these with your own logic)
  $result = $stmt->get_result();


  if($result->num_rows === 1) {
    // Authentication succeeded
    $_SESSION['logged_in'] = true;
    header('Location: index.php'); // Redirect to dashboard page
    exit();
  } else {
    // Authentication failed
    $error = "Invalid username or password";
  }


  
}

?>

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
      <label>Username/Id:</label>
      <input type="text" name="username">
      <label>Password:</label>
      <input type="password" name="password">
      <input type="submit" value="Login">
    </form>
    <p>If your have no Account?</p><a href="signup.php">sing up</a>
  </div>

</body>
</html>
