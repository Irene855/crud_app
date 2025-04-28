<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <h1>Insert new employe</h1>

<form action="create_form.php" method="POST">
<div class="card" style="width: 30rem;"> 
  <div class="card-body">
    <h5 class="card-title">Identification</h5>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Names</label>
    <div class="col-sm-10">
      <input type="text" name="names" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Salary</label>
    <div class="col-sm-10">
      <input type="number" name="salary" class="form-control" id="inputPassword3">
    </div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-secondary">Add New Employee</button>
</form>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
