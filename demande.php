<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script> 
	<script src="js/bootstrap.js"></script>

	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<style type="text/css">
		h6{
			margin: 30px;
			color: grey;
			line-height: 150%
		}
		#k
		{
			height: 200px;
			padding: 20px;
			border-right: solid 2px #ccc;
		}
		#sidebar
		{
			background: url(tool2.jpg);

    		background-size: 100% 200px;
    		height: 200px;

		}
		#barre
		{
			background-color: #ccc;
			height: 5px;
		}
		#corps
		{
			margin-top: 50px;
		}
		#bar
		{
			padding: 20px;
			border-right: solid 2px #ccc;
		}
		label
		{
			margin-right: 5px;
		}
		#delai
		{
			display: none;
		}
		#liste
		{
			height: 800px;
		}
		#bloc
		{
			box-shadow: 2px 10px 10px black;
			overflow: scroll;
			height: 600px;
		}
	</style>

</head>
<body>
<?php
// Accès à la BdD
if(isset($_POST['submit'])) 
{
	try {
$idcom = new PDO("mysql:host=127.0.0.1;dbname=igrilli","root","");
$idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		$q =$idcom->exec("INSERT INTO demande(type,etat,delai,emplacement, metier, email, telephone,sujet) VALUES 
        ('". $_POST['type'] . "',1, " . $_POST['delai'] . ",'" . $_POST['emplacement']. "','" . $_POST['metier'] . "','" . $_POST['email'] ."'," . $_POST['telephone'] .",'" . $_POST['sujet'] . "')"); 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
	}
 ?>

	<div class="container-fluid">
		<div class="row" id="content">
			<div class="col-md-3" id="k">
				<img src="profile.jpg" class="img-circle center-block" height="80px">
				<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor</h6>
			</div>
			<div class="col-md-9" id="sidebar">
				
			</div>
		</div>
		<div class="row" id="barre">
		</div>
		<div class="row" id="corps">
			<div class="col-md-3"></div>	
			<div class="col-md-9" id="liste">
				<div class="col-md-9 center-block" id="bloc">
				<form action="" method="POST" role="form">
				
					<legend>Demander un service</legend>
				
					<div class="form-group">
						<label for="">email: </label>
						<input type="email" class="form-control" id="" placeholder="Input field" name="email">
					</div>
					<div class="form-group" >
						<label for="">telephone: </label>
						<input type="tel" class="form-control" id="" placeholder="Input field" name="telephone">
					</div>
					<div class="form-group">
						<label for="">metier: </label>
						<select name="metier">
							<option value="elect">electricien</option>
  							<option value="mecan">mecanicien</option>
						</select>
					</div>
					<div class="form-group">
					<label for="" name="urgence">urgence</label>
						<input checked data-toggle="toggle" onchange="myFunction3()" type="checkbox" id="urgence" name="type">
					</div>
					<div class="form-group" id="delai" >
					<label for="">delais par jours</label>
						<input type="number" name="delai" min="0" max="30" step="1" value="0" >
					</div>
					<div class="form-group">
					<label>sujet: </label>
					<input type="sujet" class="form-control" id="sujet" placeholder="Enter sujet" name="sujet">
					</div>
					<div class="form-group">
					<label>emplacement: </label>
					<input type="emplacement" class="form-control" id="emplacement" name="emplacement"placeholder="enter emplacement">
					</div>

				
					
				
					<button type="submit" class="btn btn-primary"name="submit">Submit</button>
					
				</form>
				</div>
			</div>
		</div>		

	</div>
<script>
	function myFunction3() {
    if (document.getElementById("urgence").checked) {
    	$("#delai").hide();
    }
    else
    {
		$("#delai").show();
    }
        
        
 
}


</script>
</body>
</html>
