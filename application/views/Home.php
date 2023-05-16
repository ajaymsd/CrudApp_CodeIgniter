<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDAPP-CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body class="container">
    <h1 class="text-center mt-3">CRUDAPP USING CODEIGNITER</h1>
    <table class="table mt-5">
        <thead>
        <tr>
        <th>S.NO</th>    
        <th>NAME</th>    
        <th>COMPANY</th>    
        <th>SALARY</th>    
        <th>Action</th> 
</tr>   
</thead>
    <tbody>
    
    <?php foreach($usersData as $userData){ ?>
        <tr>
    <td><?php echo $userData->id ;?></td>
                    <td><?php echo $userData->username ;?></td>
                    <td><?php echo $userData->company ;?></td>
                    <td><?php echo $userData->salary ;?></td>
                    <td class="d-flex">
                        <a href="<?php echo base_url() ?>Home/update?userid=<?php echo $userData->id ?>" class="btn btn-success btn-md ">Edit</a>
                        <a href="<?php echo base_url() ?>Home/delete?userid=<?php echo $userData->id?>" class="btn btn-danger btn-md mx-2">Delete</a>
                    </td>
                <?php } ?>
    </tr>
            </tbody>
        
        
     </table>
    <a href="<?php echo base_url('home/add') ?>" class="btn btn-primary btn-md mt-3">Add Another User + </a>
</body>
</html>