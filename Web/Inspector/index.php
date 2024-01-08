<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $secret = $_POST['show-secret'];
    if(isset($name) && isset($secret)) 
    {
        if(empty($name) || empty($secret))
        {
           echo '<script>alert("empty fields!")</script>';
        }
        else if($secret === "True")
        {
           $Flag = "KIET_CTF{H3110_1NSP3CT0R_W311_D0N3}";
	    echo '<script>
		    // JavaScript code to show the Bootstrap toast and set dynamic content
		    document.addEventListener("DOMContentLoaded", function() {
		        var toast = new bootstrap.Toast(document.getElementById("liveToast"));
		        toast.show();
		        
		        // Set dynamic content based on PHP condition
		        document.getElementById("toast-body").innerText = "' . $Flag . '";
		    });
		  </script>';
        }
        else if($secret === "False")
        {
           echo "<script>alert('Sorry.')</script>";
        }
    }
    else
    {
    	echo "<script>alert('Error')</script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Inspector!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">My Website</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid bg-success text-center" style="height: 300px;">
            <br><br><br><br><br>
            <span class="display-4 text-white">Hello Inspector!</span>
      </div>
      <div class="container-fluid bg-light" style="height: 600px;"> 
        <br><br><br>
        <div class="container">
          <h1 display-4>Criminal Database</h1>
          <br>
          <div class="card" style="width: 38rem;">
            <div class="card-body">
              <form method="post" action=".">
                <div class="mb-3">
                  <label for="Criminal Name" class="form-label">Criminal Name</label>
                  <input type="text" name="name" class="form-control">
                  <input type="hidden" name="show-secret" value="False">
                  <div id="emailHelp" class="form-text">Enter correct name</div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
              </form>
            </div>
          </div>
        </div>        
      </div>
      <div class="container-fluid bg-dark text-center" style="height: 200px;">
        <br><br><br>
        <span class="text-center text-light">Good Luck!</span>
      </div>
      <div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-success text-light">
      <strong class="me-auto">Flag</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body" id="toast-body">
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
