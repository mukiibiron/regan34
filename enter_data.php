<?php
     require_once("Dconnect.php");
    include 'Dconnection.php';
     if(isset($_POST['add_task'])){
        
        $Task = $_POST['f_name'];
        $Goal = $_POST['I_name'];
        $Date = $_POST['Date'];


        if($fname == "" || empty($fname)){
            header("location:status.php?message=You need to fill in the name! ");

        }
        else{
            $query = "insert into 'task' ('Task','Goal','Date') values('$fname',' $lname','$Date')";
             
             $result = mysqli_query($connection,$query);
              
             if(!$rersult){
                die("Query Failed".mysqli_error($connection));

             }
             else{
                header("loaction:staus.php?insert_message=You data has been added successfully!");

             }
        }
     }
?>