<?php 

    session_start();
    if (!isset($_SESSION['user_id'])) {
    header('location: login.php'); 
    }
    // connect the datbase
    include ('connectDB/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/opportunity.png" type="image/png">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" media="screen" href="particles/demo/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Search Opportunity</title>
</head>
<body>
    <!-- create a background blur search form with dropdown  -->
  
        <div class="wrapper">
            <div class="">
                <form action="" class="d-flex">
                    <div class="input-field">
                        <i class="fas fa-filter"></i>
                        <select name="filter" id="filter">
                            <option value="any opportunity">Any Opportunity</option>
                            <option value="internships">Internships</option>
                            <option value="scholarships">Scholarships</option>
                            <option value="competitions">Competitions</option>
                            <option value="jobs">Jobs</option>
                            <option value="workshops">Workshops</option>
                            <option value="fellowships">Fellowships</option>
                            <option value="miscellaneos">Miscellaneos</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <h3> in</h3>
                    </div>
                    <div class="">
                        <i class="fas fa-filter"></i>
                        <select name="filter" id="filter">
                            <option value="dhaka">Dhaka</option>
                            <option value="barishal">Barishal</option>
                            <option value="chattogram">Chattogram</option>
                            <option value="rangpur">Rangpur</option>
                            <option value="mymensingh">Mymensingh</option>
                            <option value="khulna">Khulna</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="rajshahi">Rajshahi</option>
                        </select>
                    </div>
                    <input type="submit" value="Explore" class="btn solid button-color" />
                </form>
            </div>
        </div>

            <!-- create a back button for-->
            <!-- check from which user is right now -->
            <!-- if user is from main page then back button will take him to main page -->
            <!-- if user is from profile page then back button will take him to profile page -->
            <!-- if user is from search page then back button will take him to search page -->
            <!-- if user is from opportunity page then back button will take him to opportunity page -->
            <!-- Write down the php code -->

            <div class="back">
                <a href="main.php" class="btn solid button-color2" name = 'back'>Back</a>
            </div>
</body>
</html>