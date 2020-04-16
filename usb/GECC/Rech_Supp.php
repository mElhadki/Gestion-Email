<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    
  

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row pt-1 pb-1">
        <div class="col-lg-12">
            <h4 class="text-center">Carousel with Three input search</h4>
            <h6 class="text-center">awesome responsive image slider with search bar</h6>
            <center>for more <a style="text-align:center;" href="https://www.myprogrammingtutorials.com/unordered-list-into-multiple-columns.html">css tutorials</a> visit here.</center>
        </div>
    </div>
</div>
        <section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Drop City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Vehicle</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <?php
session_start();
require_once('Connection.php');
      ini_set('max_execution_time', 300);
    
    if (!mysqli_set_charset($con, "utf8")) {
printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
exit();
} 
  
    
                echo '<center><h2> List of Customers   </h2><center><br/>';    
$sql =   " SELECT client.*, employee.UName FROM `client` , `employee` WHERE client.E_ID = employee.E_ID and  employee.UName = '".$_SESSION['User']."' GROUP BY client.C_ID";
    if (!$sql) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
$result = $con->query($sql);
    if ($result->num_rows > 0) {
          echo "<table style='border: solid 1px white;'sss>
          <tr>
         <th>ID</th>
          <th>C_origine</th>
          <th>First_name</th>
          <th>Last_name</th>
          <th>Middle_Name</th>
          <th>Fonction</th>
          <th>Company</th>
          <th>Country</th>
          <th>Email</th>
          <th>Phone_Number</th>
          <th>Intéressé</th>
          <th>Source</th>
          <th>Date_Time</th>
          <th>Black_Liste</th>
          <th>Commercial</th>
          </tr>
          </tr>
          
 
          ";

    while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['C_ID'] . "</td><td>" . $row['C_origine'] . "</td><td>" . $row['First_name'] . "</td><td>" . $row['Last_name'] . "</td><td>" . $row['Middle_Name'] . "</td><td>" . $row['Fonction'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Phone_Number'] . "</td><td>" . $row['interesse'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Date_Inscr'] . "</td><td>" . $row['Black_Liste'] . "</td><td>" . $row['UName'] . "</td></tr>";  
}
  echo "</table>";
}
    else {
    echo "0 results";
}
    $con->close();

?> 
    </div>
</section>

          </body>
</html>