<?php 
	include_once("config.php");
	
?>
<style>
<?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>PHP CRUD</title>
</head>
<body>

<?php
echo "<font color='whitesmoke'>submit value is :".$_POST['Submit'].'<br/>';
echo "<font color='whitesmoke'>submit value is :".$_POST['id'].'<br/>';
echo "<font color='whitesmoke'>submit value is :".$_POST['iso'].'<br/>';
echo "<font color='whitesmoke'>submit value is :".$_POST['name'].'<br/>';
echo "<font color='whitesmoke'>submit value is :".$_POST['nicename'].'<br/>';
echo "<font color='whitesmoke'>submit value is :".$_POST['iso3'].'<br/>';
echo "<font color='whitesmoke'>submit value is :".$_POST['numcode'].'<br/>';
echo "<font color='whitesmoke'>submit value is :".$_POST['phonecode'].'<br/>';
?>

<?php
if( isset($_POST['Submit'])){
	$id= mysqli_real_escape_string($mysqli, $_POST['id']);
	$iso = mysqli_real_escape_string($mysqli, $_POST['iso']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$nicename = mysqli_real_escape_string($mysqli, $_POST['nicename']);
	$iso3 = mysqli_real_escape_string($mysqli, $_POST['iso3']);
	$numcode = mysqli_real_escape_string($mysqli, $_POST['numcode']);
	$phonecode = mysqli_real_escape_string($mysqli, $_POST['phonecode']);
	


	if( empty($id) || empty($iso) || empty($name) || empty($nicename) || empty($iso3) || empty($numcode) || empty($phonecode) ){

		if(empty($id)){
			echo "<font color='red'> ID field is empty. </font><br/>";
		}

		if(empty($iso)){
			echo "<font color='red'> ISO field is empty. </font><br/>";
		}

		if(empty($name)){
			echo "<font color='red'> Name field is empty. </font><br/>";
		}
		
		if(empty($nicename)){
				echo "<font color='red'> Nice Name field is empty. </font><br/>";
		}
		if(empty($iso3)){
			echo "<font color='red'> ISO 3 field is empty. </font><br/>";
		}
		if(empty($numcode)){
			echo "<font color='red'> Num code field is empty. </font><br/>";
		}
		if(empty($phonecode)){
			echo "<font color='red'> Phone code field is empty. </font><br/>";
	    }
		


		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else {

		$result = mysqli_query($mysqli, "INSERT INTO users(id, iso, name, nicename, iso3, numcode, phonecode)
		 VALUES ('$id', '$iso', '$name', '$nicename', '$iso3', '$numcode', '$phonecode', )");
		echo "<font color='yellowgreen'> Data Added Successfully.";
		echo "<br/><a href='index.php'> View Result </a>";
	}


}
?>



	
</body>
</html>
