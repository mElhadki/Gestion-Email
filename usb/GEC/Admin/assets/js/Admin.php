<html class="jumbotron" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
<head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
    </head>
    <body class="jumbotron" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
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
    </div>
  </div>
    </body>
</html>
