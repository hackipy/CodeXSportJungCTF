<?php
session_start();

if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}

$username = $_SESSION["username"];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIET CTF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="display-4">User Section</h1>
        <?php if($username == "sarimraza"){ echo '<p class="alert alert-success">KIET_CTF{y0u_pr0_h4ck3r_u_d1d_1t_<3}</p>'; } ?>
    </div>
    <a class="btn btn-outline-danger" href="logout.php">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>