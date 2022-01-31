<?php
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="proj";
     $res1 = $_POST['reservationtext'];
     $res= trim($res1);
     $selres = explode(" ", $res);
     $no_of_reservations= sizeof($selres);
 
     $conn=mysqli_connect($servername, $username, $password, $dbname);

    for($i=0; $i<$no_of_reservations; $i++){
        $sql="DELETE FROM reservations WHERE res_id = '$selres[$i]'";
        mysqli_query($conn,$sql);
    }

    header("refresh:1;url=admin_customerreservations.php");
     

?>