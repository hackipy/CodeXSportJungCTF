<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XSS Challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
    </li>
    </div>
  </div>
</nav>
<div class="container-fluid bg-dark " style="height: 600px;">
<br><br><br>
<div class="card justify-content-center mx-auto" style="width: 38rem;">
  <div class="card-body">
    <h5 class="card-title">XSS Challenge</h5>
    <form method="get" action="index.php">
    <div class="mb-3">
        <label class="form-label">Search Something</label>
        <input type="text" name="search" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Search</button>
    </form>
    </div>
</div>
</div>
<script>
    var javascriptVariable = "<?php if(isset($_GET["search"])){ echo $_GET["search"]; }?>" 
</script>
<div class="container-fluid bg-danger" id="dataContainer" style="height: 300px;">
<br><br>
<p class="text-center text-white">
<?php
$searchValue = isset($_GET['search']) ? $_GET['search'] : '';
if($searchValue == "\";alert('done')//"){
    $Flag = "Here is your Flag: KIET_CTF{X55_M45T3R_W311_D0N3_00}";
    echo $Flag;
}
?>
</p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>