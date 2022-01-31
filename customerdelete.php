<?php
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="proj";
     $cust1 = $_POST['customertext'];
     $cust = trim($cust1);
     $selcust = explode(" ", $cust);
     $no_of_customer = sizeof($selcust);
 
     $conn=mysqli_connect($servername, $username, $password, $dbname);

    for($i=0; $i<$no_of_customer; $i++){
        $sql="DELETE FROM customer WHERE cust_id = '$selcust[$i]'";
        mysqli_query($conn,$sql);
    }

    header("refresh:1;url=admin_customerlist.php");
     

?>