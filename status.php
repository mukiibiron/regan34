       <?php
           include("header.php");
       ?>
       <div class="row">
            <?php include 'includes/nav.php';
                
            ?>
        
        </div>
        <div class="row">
            <?php
                include("Dconnect.php");
            ?>

            
            
            
          <table >
          <div class="row">
            <div class="col-lg-6">
            <h6 id="b-title">PROJECT TABLE</h6>
            </div>
                    <!-- Button triggler modal -->
            <div class="col-lg-6">
                <p style="float:right">
                <button class="btn btn-primary btn-mr-10" data-toggle="modal" data-target="#exampleModal">ADD TASK </button>

                </p>
                
              </div>
          </div>  
            <thead>
            <th>
              <tr>
              <th scope="col"> ID</th>
              <th scope="col"> Task</th>
              <th scope="col"> Time</th>
              <th scope="col"> Goal</th>
              <th scope="col">Upadate</th>
              <th scope="col">Delete</th>
              <th scope="col"> Image</th>

              </tr>
            </thead>
            <?php
                // a query to select all tasks if the page is visited or refreshed
                $query = "SELECT * FROM task";
                //   function for the connection
                
                $result = mysqli_query($connection,$query);
                //    check connection function

            //     if(!$result){
            //         die("query failed".mysqli_error());
            // }
            
                //   fetch each row data 
                while($row = mysqli_fetch_assoc($result)){
                    ?> 
                     
                        
                     <tr class="table-info">
                        <td><?php echo $row['ID'] ?></td>
                        <td><?php echo $row['Task'] ?></td>
                        <td><?php echo $row['Goal'] ?></td>
                        <td><?php echo $row['Date'] ?></td>
                        <td><a href="#" class="btn btn-success">Update</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        <td><img src="" alt=""></td>
                     </tr>
                  <?php
                  
                }
                  
                  
                
                
                 

            ?>
              
              
           
          </table>

        </div>
        <form>
          <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                            <!--  <div class="form-group"> -->
                                <label for="f_name"> Task</label>
                                <input type="text" name="f_name"  class=" form-control">

                            </div>
                            <div class="form-group">
                                <label for="f_name"> Goal</label>
                                <input type="text" name="f_name"  class=" form-control">

                            </div> 
                            <form action="includes/process_task.php" method="post" >
                                <div class="form-group">
                                    <label for="f_name"> Task</label>
                                    <input type="text" name="Task"  class=" form-control" placeholder="Task" value="">
                                    <button>submit</button>
                                </div>  
                                <div class="form-group">
                                    <label for="f_name"> Goal </label>
                                    <input type="text" name="Goal"  class=" form-control" placeholder="Goal" value="">
                                    <button>submit</button>
                                </div>
                                <div class="form-group">
                                    <label for="f_name"> Date </label>
                                    <input type="text" name="Date"  class=" form-control" placeholder="Date" value="">
                                     <button>submit</button>
                                </div>
                                        
                       
                        

                            </form>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>

        
       <?php
            //  footer section  
           include("footer.php");
       ?>