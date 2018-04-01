<!DOCTYPE html>
<html>
<head>
	<title>Random Quote</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style type="text/css">
		body{
			background-color: black;
		}

		.col-centered{
    float: none;
    margin: 0 auto;
}



	</style>


</head>
<body>

		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
      					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>                        
      					</button>
      				<a class="navbar-brand" href="#">Random Quote</a>
    			</div>
    			
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"> <a href="#"> About Us</a>  </li>
					<li> <a href="#" id="getquote">Quote</a>  </li>
					<li> <a href="#">Quote Code</a> </li>
					<li> <a href="#">Contact Us</a></li>
				</ul>
			</div>
			</div>
		</nav>

			<div class="row">
				<div class="col-lg-10 col-centered">
						<div class="image-conatiner">
							<img   class="img-responsive bd " id="imag">
						</div>
				</div>
			</div>


<script type="text/javascript">
	var number = 1 + Math.floor(Math.random() * 10);

	var get_img = "img" + number + ".jpg";

	var set_img = "images/" + get_img;

	$("#imag").attr("src",set_img);


	$("#getquote").click(function(){
		location.reload();
		
	});
// auto refresh
	 setTimeout(function(){
       location.reload();
   },10000);

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>