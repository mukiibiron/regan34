
    <?php
        include "includes/head.html";
        include("header.php");
                      // delete task
                      if (isset($_GET['del_task'])) {
                        $ID = $_GET['del_task'];

                        mysqli_query($connection, "DELETE FROM tasks2 WHERE id=".$ID);
                        header('location: index.php');
                      }
                    // initialize errors variable
                    $errors = "";

    ?>
   
<body>
  


    <div class="container">
        <div class="row">
            <?php include 'includes/nav.php';
                
            ?>
          
        </div>
        <div class="row">
          <div class="col-lg-3">
            <p>
              onsistent appearance: With Bootstrap, you can achieve a consistent and professional-looking design across your mobile application. It offers a set of predefined styles and themes that can be easily customized to match your brand's identity.

              Cross-browser compatibility: Bootstrap is designed to work well across different web browsers, ensuring that your mobile application functions consistently for users, regardless of the browser they prefer to use.

              <mark>Community </mark> and support: Bootstrap has a large and active community of developers who contribute to its improvement and provide support through forums and online resources. This can be helpful if you encounter any challenges or have questions during the development of your mobile application.

            </p>
          </div>
          <div class="col-lg-6" >
            <!-- <h1 class="text-center">Carousel example</h1> -->
            <div id="carouselExample" class="carousel slide">
              <center>
              <div class="carousel-inner bg-secondary">
                <div class="carousel-item active">
                <!-- <p class="text-bg-danger display-6">Slide 1</p> -->
                <img src="images/tutimg.jpeg" alt="GFG" width="600" height="300" class="d-block w-50" alt="...">
                </div>
                <div class="carousel-item">
                <!-- <p class="text-bg-danger display-6">Slide 2</p> -->
                <img src="images/profile.jpeg" alt="GFG" width="300" height="400" class="d-block w-50" alt="...">
                </div>
                <div class="carousel-item">
                <!-- <p class="text-bg-danger display-6">Slide 3</p> -->
                <img src="images/scenery.jpeg" alt="GFG" width="300" height="500" class="d-block w-50" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </center>
          </div>
        </div>
        <div class="col-lg-3">
            <p>
              Why to Learn Bootstrap?
              Responsive design: Bootstrap is built with a mobile-first approach, meaning it is designed to be responsive and adapt to different screen sizes. This ensures that your mobile application looks good and functions well on various devices, including smartphones and tablets.

             
            </p>
            
        </div>
        <div class="row">
                     
        </div>
        

    </div>
            
    </div>
     
    
</body>
</html>

    