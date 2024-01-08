<?php
session_start();

if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}

$username = $_SESSION["username"];

$host = 'localhost';
$dbname = 'skyfrgnancehs_kietctf';
$user = 'skyfrgnancehs_sarim';
$password = 'sky1337897frag';

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function fetchData($conn, $id) {
  $sql = "SELECT * FROM dummy WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      return $result->fetch_assoc();
  } else {
      return null;
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome, <?php echo $username; ?></a>
    <div class="vr"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h1 class="display-4">Staff</h1>
    
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="id">Enter ID:</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <button type="submit" class="btn btn-primary" name="action">Fetch Data</button>
    </form>
</div>
<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $data = fetchData($conn, $id);

    // Display Bootstrap card with dummy data
    if ($data) {
        ?>

<div class="container mt-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['title']; ?></h5>
                    <p class="card-text"><?php echo $data['description']; ?></p>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "Data not found.";
    }

    // Close the database connection
    $conn->close();
    exit();
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
