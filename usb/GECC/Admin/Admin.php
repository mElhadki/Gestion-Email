<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Admin</title>
    <style>
           body{
            background-color: #90caf9 ;
            color: black;
        }
    </style>
</head>
<body>
      <?php if(@$_GET['Empt']==true){   ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empt'] ?></div> <?php }  ?>
                    <?php  if(@$_GET['Inval']==true){  ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Inval'] ?></div>  <?php }  ?>
                         <div class="container">
                <div style="width: 500px; margin: 50px auto;">
                        <form action="Proce.php" method="post">
                            <center><h2>Admin</h2></center>
                                        <hr/>
                                            <div class="form-group">
                            <input type="text" name="A_Login" placeholder="A_Login" class="form-control mb-3">
                                                </div>
                             <div class="form-group">
                            <input type="password" name="A_Passw" placeholder=" A_Passw" class="form-control mb-3">
                                 </div>
                            <div class="form-group">
                           <center>  <button class="btn btn-success mt-3" name="Logine">Login</button></center>
                                </div>
                               <hr/>
                        </form>
                    </div>
                </div>
<!-- </div> -->

</body>
</html>
