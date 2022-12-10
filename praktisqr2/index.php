<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input data</h2>
  <form action="proses.php" method="POST">
    <div class="form-group">
      <label for="id_matrik">ID Data:</label>
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
    <a href="http://localhost/QRCSystem/" class="btn btn-primary">Back </a>&nbsp; 
   &nbsp; <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>

</body>
</html>
