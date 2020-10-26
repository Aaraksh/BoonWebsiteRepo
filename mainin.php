<!DOCTYPE html>
<html>
<head>
	<title>Academy Drop-Down</title>
	 <meta charset="UTF-8">
 	 <meta name="description" content="Free Web tutorials">
 	 <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	 <meta name="author" content="John Doe">
  	 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="sty.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		a
		{
			border-style: none;
			text-decoration: none;
			color: black;
		}
		.ps
		{
			width: 55%;
			height: 200px;
			box-shadow: 1px 2px 7px #888888;
			border-style: none;
			border-radius: 5px;
			padding: 4px;
			/*margin: 30px 20px 20px 160px;*/
			margin: 5% 5% 5% 10%;
			display: inline-block;
		}
		.ps1
		{
			width: 20%;
			height: 200px;
			/*box-shadow: 1px 2px 7px #888888;*/
			border-style: none;
			border-radius: 5px;
			padding: 4px;
			/*margin: 30px 20px 20px 160px;*/
			margin: 9% 5% 5% 5%;
			display: inline-block;
			float: right;
		}
		button
		{
			width: 120px;
			height: 40px;
			background: rgb(47,202,183);
			border-style: none;
			border-radius: 5px;
			margin: 5% 5% 2% 15%;
			cursor: pointer;
		}
		button:hover
		{
			background: rgb(0,176,176);
		}
	</style>
</head>
<body>
  <div>
	<div class="menu">
		<h1>Boon Software Solutions</h1>
		<ul>
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="#"><i class="fa fa-user"></i> AboutUs</a>
				<div class="sub1">
					<ul>
						<li><a href="mission.php"> Mission</a></li>
						<li><a href="vision.php"> Vision</a></li>
						<li><a href="testi.php"><i class="fa fa-angellist"></i> Testimonials</a></li>
					</ul>
				</div>

			</li>
			
			<li><a href="#"><i class="fa fa-clone"></i> courses</a>
			    <div class="sub1">
					<ul>
						<li><a href="cpage.php"> C/C++</a></li>
						<li><a href="#"> J2SE</a></li>
						<li><a href="#"> J2EE</a></li>
						<li class="hov"><a href=""> Web</a><i id="s1" class="fa fa-angle-right"></i>
							<div class="sub2">
								<ul>
									<li><a href="#">Html/Css</a></li>
									<li><a href="#">JS/PHP</a></li>
								</ul>
							</div>

						</li>
						<li><a href="#"> .Net</a></li>
					</ul>
				</div>
			</li>
			<li><a href="#"><i class="fa fa-edit"></i> Internship</a></li>
			<li><a href="contact.php"><i class="fa fa-phone"></i> contact</a></li>
		</ul>
	</div>
</div>

	<div>
		<img src="comimg.jpg" width="100%" height="585px">
	</div>
	<div class="ps">

		<p>Career and future of the student depends on their academic performance.
           Our aim is to provide conceptual and in depth training to make their base strong as well as scoring good marks which helps them to get admission in good college.

           We want to grow in terms of quality and then quantity

           STUDENT SUCCESS IS OUR ACHIEVEMENT. We aim to provide a user friendly environment to our students with latest hardware and software technologies. Students are provided with flexible practical timings as per the convenience. At MICE, each student is given a special attention and importance. Our aim is to provide best education so that a student can have bright career in IT field.
       </p>
	</div>
	<div class="ps1">
		<h3>Click here to register!!</h3>

		<button><a href="https://docs.google.com/forms/d/e/1FAIpQLSdF-AjcSwXgKcaduJhq8SsmafCCs5lUQPm5zEonR1Cicb3-rw/viewform?usp=sf_link"> Register</a></button>
	</div>

</body>
</html>