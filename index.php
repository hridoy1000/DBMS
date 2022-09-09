<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
      header('location: login.php'); 
    }
    // connect the datbase
    include ('connectDB/config.php');
    
    $sql = "SELECT * from post ORDER by sDate LIMIT 0,3";

    $result = mysqli_query($conn, $sql); // get the result set (set of rows)

    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC); // fetch the resulting rows as an array

    $sqll = "SELECT * from post ORDER by eDate LIMIT 0,3";

    $resultt = mysqli_query($conn, $sqll); // get the result set (set of rows)

    $arrr = mysqli_fetch_all($resultt, MYSQLI_ASSOC); // fetch the resulting rows as an array



?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yotunities</title>
    <link rel="shortcut icon" href="icons/opportunity.png" type="image/png">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>


<body>
 

  <div class="wrapper">
    <header>
        <div class="logo">
            <a href="#"><img src="icons/opportunity.png" alt=""></a>
        </div>
        <nav>
            <ul>
                <li><a href="login.php">Browse Opportunities</a>
                    <ul>
                        <li><a href="#">Near Deadline</a></li>
                        <li><a href="#">Compettions</a></li>
                        <li><a href="#">Scholarships</a></li>
                        <li><a href="#">Fellowships</a></li>
                        <li><a href="#">Internships</a></li>
                        <li><a href="#">Workshops</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Miscellaneos</a></li>
                    </ul>
                </li>
                <li><a href="login.php">Post an Opportunity</a></li>
                <li><a class="btn" href="login.php">Sign Up</a></li>
             </ul>
        </nav>
      </header>


    <div class="content">
        <div class="text">
            <p><span><b>Yotunities</b>, </span>Where one can find their Dream and get chance to fulfill it..</p>
            <a href="login.php" class= " btn">Explore !</a>
        </div>
        <div class="img">
            <div class="social-icons">
                <img src="images/social-icon1.png" alt="">
                <img src="images/social-icon2.png" alt="">
                <img src="images/social-icon3.png" alt="">
                <img src="images/social-icon4.png" alt="">
                <img src="images/social-icon5.png" alt="">
            </div>
            <img class="email-icon" src="images/star.png" alt="">
        </div>
    </div>

<div class="wave">
    <img src="images/wave.svg" alt="">
</div>

</div>













<!-- adding approching deadline with card-->
<!-- start slider -->
<div class="margin-slider">
  <!-- deadline approaching post with slider -->
  <div class="">
      <div class="container-fluid ">
          <div class="row ">
              <div class="col-md-5 ">
                  <div class="title_color">
                      <h3 class="t-name"><u>LATEST</u></h3>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="slider">
                      <div class="slide">
                          <div class="row">


                            <?php foreach($arr as $arrData){ ?>


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
                              <!-- <div class="col-md-4">
                                  <div class="card card-color">
                                      <img class="card-img-top" src="images/opportunity.jpg"
                                          alt="Card image cap">
                                      <div class="card-body text-dark">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <a href="#" class="btn button-color">Apply Now</a>
                                      </div>
                                  </div>
                              </div> -->
                          </div>
                      </div>
                  </div>
              </div>  
              </div>
      </div>
  </div>

  <!-- latest post with slider -->
  <div>
      <div class="container-fluid page-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="title_color">
                    <!-- line style="border: 1px solid-->

                      <h3  class="t-name"><u>DEADLINE APPROACHING</u></h3>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="slider">
                      <div class="slide">
                          <div class="row">
                          <?php foreach($arrr as $arrData){ ?>


                                <div class="col-md-4">
                                    <div class="card card-color">
                                    <img class="card-img-top" src= "<?php echo $arrData['featuredImage']?>" alt="Card image cap">
                                    <!-- <img src='".$row['img_dir']."'> -->
                                        <div class="card-body text-dark">
                                            <h5 class ='card-title'><b><?php echo htmlspecialchars($arrData['title']); ?></b></h6>
                                            <div><p class="card-text text-truncate"><?php echo htmlspecialchars($arrData['description']); ?></p></div>
                                        </div>
                                        <div class="card-action text-center">
                                            <a class="card-text " href="#">More info</a>
                                        </div>
                                    </div>
                                </div>


                            <?php } ?>
                              <!-- <div class="col-md-4">
                                  <div class="card card-color">
                                      <img class="card-img-top" src="images/opportunity.jpg"
                                          alt="Card image cap">
                                      <div class="card-body text-dark">
                                          <h5 class="card-title">Card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          <a href="#" class="btn button-color">Apply Now</a>
                                      </div>
                                  </div>
                              </div> -->
                          </div>
                      </div>
                  </div>
              </div>  
              </div>
      </div>



  </div>
  </div>

  <!-- end of slideer -->












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



 
















  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>