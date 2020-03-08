<?php
    include 'dbconnect.php';
    
    $aadhar=$_POST["aadhar"];
    
    $name[0] = $_POST["n1"];
    $name[1] = $_POST["n2"];
    $name[2] = $_POST["n3"];
    $name[3] = $_POST["n4"];
    $name[4] = $_POST["n5"];

   
        
    $contact[0] = $_POST["c1"];
    $contact[1] = $_POST["c2"];
    $contact[2] = $_POST["c3"];
    $contact[3] = $_POST["c4"];
    $contact[4] = $_POST["c5"];
	
    
    $count=0;


    for($i=0;$i<5;$i++){
      
                $sql="Insert into emergency values(".$aadhar.",'".$name[$i]."',".$contact[$i].")";    

     
        if(mysqli_query($conn, $sql)){

            $count++;
           
        }
        else{
            echo mysql_error($conn);
        }
    }
  
    if($count==5)
        echo("Successful");
?>