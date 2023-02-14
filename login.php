<?php

include "header.php";

include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $myusername = mysqli_real_escape_string($dbconnection, $_POST["username"]);
  $mypassword = mysqli_real_escape_string($dbconnection, $_POST["password"]);

  $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";

  $result = $dbconnection->query($sql);

  if ($result->fetch_assoc()) {
    setcookie("username", $myusername, time() + 86400 * 30, "/");
    header("Location: index.php");
  }
}
?>

<title>Login</title>
<nav class="navbar bg-body-tertiary bg-dark fixed-top">
  <div class="container-fluid">
    <span class="navbar-brand" style="color:black;">Task Master</span>

  </div>
</nav>



<div class="container mt-5 ">
  <div class="row">
    <div class="col-md-5 mx-auto" style="margin-top:18%">
      <div class="card ">
        <div class="card-header">
          <h3>Login</h3>
        </div>
        <div class="card-body">
          <form action="login.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>