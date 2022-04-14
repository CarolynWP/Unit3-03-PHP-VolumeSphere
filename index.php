<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- css -->
		<link rel="stylesheet" href="./css/style.css" />
		
		<!-- title -->
		<title>Sphere</title>
	</head>
	
	<!-- body -->
	<body>
<?php echo '<h1>Volume of a Sphere Calculator</h1>';?>
		<!-- input boxes -->
		<h3>
			<?php echo '<h3>Input the radius:</h3>' ?>
			<form method = "post">
				<?php echo '<p>Radius:</p>' ?><input type="number" step="0.01" name="radius">  
				<br>
				<br>
				<!-- button -->
				<input type = "submit" name = "submit" value="Calculate">  
			</form> 
		</h3>
		<!-- calculations -->
<?php   
if(isset($_POST["submit"]))  
{   
$radius= $_POST["radius"]; 
			
$volume = sprintf('%.2f',4/3*pi()*$radius**3);
	
	echo "<h4>The volume of your sphere is $volume cm<sup>3</sup>.</h4>";
}
?>   
  </body>
</html>