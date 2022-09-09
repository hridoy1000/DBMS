<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
      header('location: login.php'); 
    }
    // connect the datbase
    include 'config.php';

    $sql = "SELECT * from post ORDER by sDate LIMIT 0,3";

    $result = mysqli_query($conn, $sql); // get the result set (set of rows)

    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC); // fetch the resulting rows as an array

    $sqll = "SELECT * from post ORDER by eDate LIMIT 0,3";

    $resultt = mysqli_query($conn, $sqll); // get the result set (set of rows)

    $arrr = mysqli_fetch_all($resultt, MYSQLI_ASSOC); // fetch the resulting rows as an array

?>


 <!DOCtype html>
 <html>
 <head>
	<meta charset="utf-8">
	<title> Container | Cereal Code </title>
	<link rel="stylesheet" href="style.css">
 </head>
 
 <body>

		<div class="container">
					
			<div class="card">
				<div class="imgBx">
					<a href="#">
					    <img class="card-img-top" src= "<?php echo $arrData['featuredImage']?>" alt="Card image cap">
					</a>
				
					<h2>Baked Feta Pasta with Shrimp  </h2>
					<p><br>Creamy, tangy, cheesy, and packed 
					with extra herbs and perfectly cooked shrimp, 
					this version of baked feta pasta is truly next 
					level and totally worth the hype. 
					</p>
					
				</div>
			</div>

		
			<div class="card">
				<div class="imgBx">
					<a href="#">
					<img src="./image/img2.jpg">
					</a>
					<h2>Mango Chicken Rice Paper Rolls  </h2>
					<p><br>Tender chicken breast, naturally sweet mango,
					crunchy carrots and romaine, thin vermicelli, fresh
					cilantro wrapped in a rice paper roll. 
					</p>					

				</div>	
			</div>	
			
			<div class="card">
				<div class="imgBx">
					<a href="#">
					<img src="./image/img3.jpg">
					</a>
					<h2>Pink Dragon Fruit Smoothie  </h2>
					<p><br>Dragon fruit aka pitaya, pitahaya or 
					strawberry pear, is high in nutrients, fiber and 
					antioxidants. This superfood smoothie is creamy.
					</p>
				</div>	
			</div>	
			
		</div>	
 
 		

 
 </body>
 </html>