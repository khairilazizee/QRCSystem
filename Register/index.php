<!DOCTYPE html>
<html lang="en">
<head>
<title>QRC System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="../index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../Register/index.php">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../list/index.php">List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../qrcodecam/index.php">Cam Scanner</a>
    </li>
  </ul>
</nav>

<div class="container">
  <h2>Register Form</h2>
  <form action="proses.php" method="POST">
    <div class="form-group">
      <label for="id_matrik">ID Matrik:</label>
      <input type="text" class="form-control" name="id_matrik">
    </div>
    <div class="form-group">
      <label for="fullname">Nama:</label>
      <input type="text" class="form-control" name="fullname">
    </div>
    <div class="form-group">
      <label for="department">Department:</label>
          <select id="department" class="form-control" name="department" >
            <option value="-Options-">-Options-</option>
            <option value="Computer System">Computer System</option>
            <option value="Culinary">Culinary</option>
            <option value="Information System">Information System</option>
            <option value="Food And Beverage">Food And Beverage</option>
          </select>
      <!--<input type="text" class="form-control" name="fullname">-->
    </div>
    <div class="form-group">
      <label for="level">Level:</label>
          <select id="level" class="form-control" name="level">
            <option value="-Options-">-Options-</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
      <!--<input type="text" class="form-control" name="fullname">-->
    </div>
    <div class="form-group">
      <label for="branch">Branch:</label>
          <select id="branch" class="form-control" name="branch">
            <option value="-Options-">-Options-</option>
            <option value="Breyer Kuala Lumpur">Breyer Kuala Lumpur</option>
            <option value="Breyer Gombak">Breyer Gombak</option>
            <option value="Delta">Delta</option>
          </select>
      <!--<input type="text" class="form-control" name="fullname">-->
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>

</body>
</html>
