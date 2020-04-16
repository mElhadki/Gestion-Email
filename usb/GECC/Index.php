<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body{
           background-color: #90caf9 ;
            color: black;
        }
        
    </style>
</head>
<body>
                    <?php if(@$_GET['Empty']==true){   ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div> <?php }  ?>
                    <?php  if(@$_GET['Invalid']==true){  ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>  <?php }  ?>
                         <div class="container">
                <div style="width: 500px; margin: 50px auto;">
                        <form action="process.php" method="post">
                            <center><h2>Login</h2></center>
                                        <hr/>
                                            <div class="form-group">
                            <input type="text" name="UName" placeholder="UName" class="form-control mb-3">
                                                </div>
                             <div class="form-group">
                            <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                                 </div>
                            <div class="form-group">
                           <center>  <button class="btn btn-success mt-3" name="Login">Login</button></center>
                                </div>
                               <hr/>
                        </form>
                    </div>
                </div>
</body>
</html>


             
