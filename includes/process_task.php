<?php 
     

       require_once "Dconnect.php";
      
          
    $query = "INSERT INTO task ( Task, Goal, Date ) values( ?,?,?)";
    
    $stmt =mysqli_prepare($connection,$query);


    if($stmt){
        die( "Prepared Failed.".mysqli_error($connection));
    }
    mysqli_stmt_bind_param($stmt,"sss",$Task,$Goal,$Date);
    $Task=$Post["Task"];
    $Goal=$Post["Goal"];
    $Date=$Post["Date"];

    if(mysqli_stmt_execute($stmt)){
        echo"Data inserted successfully.";
    }
    else{
        die("execute failed.".mysqli_error($connect));

    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);




     
?>