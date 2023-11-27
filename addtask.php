<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <?php
        include "includes/head.html";
        include "includes/connect.php";
    ?>
</head>
<body>
              <?php
                                            // delete task
                      if (isset($_GET['del_task'])) {
                        $ID = $_GET['del_task'];

                        mysqli_query($connection, "DELETE FROM tasks2 WHERE id=".$ID);
                        header('location: addtask.php');
                      }
                    // initialize errors variable
                    $errors = "";

                    // connect to database
                    $connection = mysqli_connect (HOSTNAME,USERNAME,PASSWORD,DATABASE);

                    // insert a quote if submit button is clicked
                    if (isset($_POST['submit'])) {
                            if (empty($_POST['task'])) {
                                    $errors = "You must fill in the task";
                            }else{
                                    $task = $_POST['task'];
                                    $sql = "INSERT INTO tasks2 (task) VALUES ('$task')";
                                    mysqli_query($connection, $sql);
                                    header('location: addtask.php');
                            }
                    }       

                    // ...

                  
              ?> 
                  
              
    <div class="container">
        <div class="row">
                 <?php include 'includes/nav.php';
                
                ?>
    
        </div>
        <div class="row">
            <div class="col-lg-4">
              <h6 class="heading "style="font-style: 'Hervetica';" >Task Bar</h6>
              
              <form method="post" action=".">
                 <?php
                      
                 ?>
                <input type="text" name="task" class="task-input">
                <button type="submit" name="submit" id="add_btn" class="add_btn">
                  Add Task
                </button>

              </form>
              


                        <table>
                                <thead>
                                        <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tasks</th>
                                                <th scope="col">Goal</th>
                                                <th scope="col">Time</th>
                                                <th scope="col" style="width: 30px;">Action</th>
                                        </tr>
                                </thead>

                                <tbody>
                                        <?php 
                                        // select all tasks if page is visited or refreshed
                                        $tasks = mysqli_query($connection, "SELECT * FROM tasks2");

                                        $ID = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
                                                <tr>
                                                        <td> <?php echo $ID; ?> </td>
                                                        <td class="Tasks"> <?php echo $row['Tasks']; ?> </td>
                                                        <td class="Goal"> <?php echo $row['Goal']; ?> </td>
                                                        <td class="Time"> <?php echo $row['Time']; ?> </td>
                                                        <td class="delete"> 
                                                                <a href="addtask.php?del_task=<?php echo $row['ID'] ?>">x</a> 
                                                        </td>
                                                </tr>
                                        <?php $ID++; } ?> 
                                        <tr>
                                          <td>3</td>
                                          <td>Drawing</td>
                                          <td>Improve on creativity and innovation</td>
                                          <td>2024-11-20</td>
                                          <td class="delete"> 
                                                                <a href="addtask.php?del_task=<?php echo $row['ID'] ?>">x</a> 
                                          </td>

                                        </tr>
                                        <tr>
                                                <tr>
                                                <td>4</td>
                                                <td>Readin</td>
                                                <td>Genius</td>
                                                <td>2024-11-20</td>
                                                <td class="delete"> 
                                                                        <a href="addtask.php?del_task=<?php echo $row['ID'] ?>">x</a> 
                                                </td>

                                                </tr> 
                                        </tr>
                                </tbody>
                        </table>

              
    

            </div>
           

        </div>
        <div class="row">
            <form action="." method="post">
              <div class="form-group">
                  <input type="text" name="Task"  placeholder="Task">

              </div>
  
            </form>
            

        </div>
     
    
</body>
</html>
