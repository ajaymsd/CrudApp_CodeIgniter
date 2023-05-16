<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<?php
$username=$userDetail[0]->username;
$company=$userDetail[0]->company;
$salary=$userDetail[0]->salary;
?>
<body class="container w-50 mt-5">
    <h3 class=" mt-3 fs-bolder text-primary">UPDATE USER</h3>
    <form method="post" class="mt-3" action="<?php echo base_url('Home/update')?>">
      <label>Name :</label><br>
      <input type="text" class="form-control" name="username" value="<?php echo $username?>"/><br><br>
      <label>Company :</label><br>
      <input type="text" class="form-control" name="company" value="<?php echo $company?>"/><br><br>
      <label>Salary :</label><br>
      <input type="text" class="form-control" name="salary" value="<?php echo $salary?>"/><br><br>
      <input type="Submit" class="btn btn-primary btn-md" value="Submit" name="updatebut"/>
    </form><br>
    <a href="<?php echo base_url('home')?>" class="btn btn-md btn-danger">Back To Home </a>
</body>
</html>