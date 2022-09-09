<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
      header('location: login.php'); 
    }
    // connect the datbase
    include ('C:/xampp/htdocs/DBMS/connectDB/config.php');

    $sql = "SELECT * from post WHERE type = 'Competition'";

    $result = mysqli_query($conn, $sql); // get the result set (set of rows)

    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC); // fetch the resulting rows as an array

?>


<!DOCTYPE html>
<html lang="en">
<!-- for posted opportunity-->
<!DOCTYPE html>
<!-- Path: post.html -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yotunities | Compettions</title>
        <link rel="stylesheet" href="browse/comptitions.css">
        <link rel="shortcut icon" href="icons/opportunity.png" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      </head>
      <body>

<!-- navbar-->
<div class="wrapper">
  <header>
      <div class="logo">
          <a href="index.html"><img src="icons/opportunity.png" alt=""></a>
      </div>
      <nav>
          <ul>
              <li><a href="index.html">Home</a></li>
              <!-- search an opportunity -->
              <li><a href="search.html">Search</a></li>
              <li><a href="login.html">Log out</a></li>
              <li><a href="about.php">About</a></li>
          </ul>
      </nav>
  </header>
</div>

<div class="container-fluid post-margin bg-header">
  <div class="row">
    <div class="col-md-12 mt-4 mb-0">
      <h1 class="text-left t-blue mb-4 ">Competitions</h1>
      <p class="text-left t-blue mb-5 ">Here you can find all the compettions that are going on.</p>
    </div>
  </div>
  </div>

  <!-- adding card all over the page -->
  <div class="m-5">
    <div class="m-3">
      <div class="container-fluid ">
          <div class="row">
              <div class="col-md-12">
                  <div class="slider">
                      <div class="slide">
                          <div class="row">
                              <?php 
                              if($arr == null){
                                echo "No data found";
                              }else{
                                foreach($arr as $arrData){ ?>
                                  <div class="col-md-4 card-description ">
                                      <div class="card card-color">
                                      <img class="card-img-top" src= "<?php echo $arrData['featuredImage']?>" alt="Card image cap">
                                          <!-- <img class="card-img-top" src="./web/<?php echo $arrData['featuredImage']; ?>"> -->
                                          <div class="card-body text-dark">
                                              <h5 class ='card-title'><b><?php echo htmlspecialchars($arrData['title']); ?></b></h6>
                                              <div><p class=" card-text text-truncate"><?php echo htmlspecialchars($arrData['description']); ?></p></div>
                                          </div>
                                          <div class="card-action text-center">
                                              <button class="btn button-color" name="moreInfo">More info</button>
                                          </div>
                                      </div>
                                  </div>
                                <?php } ?>
                              <?php } ?>

                          </div>
                      </div>
                  </div>
              </div>  
              </div>
      </div>
      </div>

<!-- latest post with slider
<div class="m-3">
   <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <div class="slide">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-color">
                                    <img class="card-img-top" src="images/opportunity.jpg" alt="Card image cap">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's consdasajdhjhjdhfjdhgjdhjdhfgkjdhkjghkjdhgjksdghjkhkjhkjhkjhkjhkjhjhjhjhjhkhjhjhkjhuhdfjhdfdsjjfhsdhfkjhdskjfhdjfhjsdhfjhdjhftent.</p>
                                        <a href="#" class="btn button-color">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-color">
                                    <img class="card-img-top" src="images/opportunity.jpg"
                                        alt="Card image cap">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn button-color">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-color">
                                    <img class="card-img-top" src="images/opportunity.jpg"
                                        alt="Card image cap">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn button-color">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            </div>
    </div>
  </div> -->
  <!-- <div class="m-3">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <div class="slide">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-color">
                                    <img class="card-img-top" src="images/opportunity.jpg" alt="Card image cap">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's consdasajdhjhjdhfjdhgjdhjdhfgkjdhkjghkjdhgjksdghjkhkjhkjhkjhkjhkjhjhjhjhjhkhjhjhkjhuhdfjhdfdsjjfhsdhfkjhdskjfhdjfhjsdhfjhdjhftent.</p>
                                        <a href="#" class="btn button-color">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-color">
                                    <img class="card-img-top" src="images/opportunity.jpg"
                                        alt="Card image cap">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-truncate ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn button-color">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-color">
                                    <img class="card-img-top" src="images/opportunity.jpg"
                                        alt="Card image cap">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn button-color">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            </div>
    </div>
    </div>

latest post with slider 
<div class="m-3">
 <div class="container-fluid ">
      <div class="row">
          <div class="col-md-12">
              <div class="slider">
                  <div class="slide">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="card card-color">
                                  <img class="card-img-top" src="images/opportunity.jpg" alt="Card image cap">
                                  <div class="card-body text-dark">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's consdasajdhjhjdhfjdhgjdhjdhfgkjdhkjghkjdhgjksdghjkhkjhkjhkjhkjhkjhjhjhjhjhkhjhjhkjhuhdfjhdfdsjjfhsdhfkjhdskjfhdjfhjsdhfjhdjhftent.</p>
                                      <a href="#" class="btn button-color">Apply Now</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="card card-color">
                                  <img class="card-img-top" src="images/opportunity.jpg"
                                      alt="Card image cap">
                                  <div class="card-body text-dark">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn button-color">Apply Now</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="card card-color">
                                  <img class="card-img-top" src="images/opportunity.jpg"
                                      alt="Card image cap">
                                  <div class="card-body text-dark">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn button-color">Apply Now</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>  
          </div>
  </div>
  </div> -->
  </div>


<!-- footer -->
<div id="footer">
    <footer class="bg-black page-footer font-small blue pt-4">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="t-orange text-uppercase">About Us</h5>
            <h5 class="text-uppercase text-bg-light t-color">Yotunities</h5>
            <p class="text-white">We are a group of students from the University of the Immaculate Conception and passionate about opportunities and want to help others find them.</p>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase t-orange">Links</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase t-orange">Contact Us:</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-white footer-copyright text-center py-3">© 2022 Copyright: All Rights Reserved || Yotunities Team
      </div>
      </footer>
      </div>




      </body>
     </html>