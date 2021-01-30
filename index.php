<?php
    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM fam_quotes");

    //initialize session
    session_start();

    if( !isset($_SESSION['email']) || empty($_SESSION['email']))
    {
        header('location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 


    <title>CRUD</title>
    
</head>
<body style = "background-image: url('bg.jpg')" >
    <h1 class=" text-center display-50 text-light shadow mb-10 mt-3"> <?php  echo "PHP CRUD"; ?></h1>
    <div class= container-sm>
        <table class="table table-bordered table-dark">
		<a class="text-light mr-1 float-center btn btn-link" href = "add.html"><strong>ADD NEW DATA</strong></a>
		<br>
		

            <tr bgcolor='#12232f'>
                <td> Authors </td>
                <td> Famous Quotes</td>
                <td> Update</td> 
             </tr>
        
            <?php
                while( $res = mysqli_fetch_array($result))
                {
                    echo "<tr>";

                    echo "<td>".$res['author']."</td>";
                    echo "<td>".$res['quote']."</td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
                    echo "</tr>";
                }
            
            ?>
      
        </table>
		<p><a href="logout.php" class="btn btn-dark">Logout</a></p>
    </div>



</body>
</html>