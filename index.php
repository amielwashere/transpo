<!DOCTYPE html>
<html>
<head>
	<title>CIM Transportation charges</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<div class="cont">
		<h1 class="heade">CIM TRANSPORT CHARGES</h1>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="computation">   
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title"> White van</h5>
								<h6 class="card-subtitle mb-2 text-muted"></h6>
								<p class="card-text">
									<form method="post">  
										Total Kilometers:  
										<input type="number" name="number1" required /><br>
										<small style="color:red">please check the total Km on Googlemaps</small><br>  
										Kilometers per Liter:  
										<input type="number" name="number2" value="13" disabled  /><br>  
										Price of the Gasoline (updated):  
										<input type="number" name="number3" required /><br>
										<small style="color:red">please check the updated price of gasoline</small><br>
										<input class="btn btn-primary"  type="submit" name="submit" value="Compute">  
									</form>  
								</p>
								<?php  
								if(isset($_POST['submit']))  
								{  
									$number1 = $_POST['number1'];  
									$number2 = $_POST['number2']; 
									$number3 = $_POST['number3']; 
									$sum =  $number1/13*$number3;     
									echo "Total: ".$sum;   
								}  
								?>
							</div>
						</div>
					</div>

				</div>
				<div class="col">
					<div class="computation">   
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">Innova</h5>
								<h6 class="card-subtitle mb-2 text-muted"></h6>
								<p class="card-text">
									<form method="post">  
										Total Kilometers:  
										<input type="number" name="number4" required /><br>
										<small style="color:red">please check the total Km on Googlemaps</small></br>
										Kilometers per Liter:  
										<input type="number" name="number2" value="13" disabled  /><br>    
										Price of the Diesel (updated):  
										<input type="number" name="number6" required /><br>
										<small style="color:red">please check the updated price of gasoline</small><br>
										<input class="btn btn-primary"  type="submit" name="submit2" value="Compute">  
									</form>  
								</p>
								<?php  
								if(isset($_POST['submit2']))  
								{  
									$number4 = $_POST['number4'];  
									$number5 = $_POST['number5']; 
									$number6 = $_POST['number6']; 
									$sum =  $number4/$number5*$number6;     
									echo "Total: ".$sum;   
								}  
								?>
							</div>
						</div>
					</div>

				</div>
			</div>





			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		</body>
		</html>