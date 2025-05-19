<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <style type="text/css">
    body{
        margin: 0;
        padding: 0;
        font-family:Arial, Helvetica, sans-serif;
    }
    #filters{
        margin-left: 10%;
        margin-top: 2%;
        margin-bottom: 2%;
    }
 </style>
</head>
<body>

   <div id="filters">
    <span>fetch results by &nbsp;</span>
    <select name="fetchval" id="fetchval">
        <option value="" disabled="" selected="">Select Filter</option>
        <option value="">test1</option>
        <option value="">test2</option>
        <option value="">test3</option>
    </select>
   </div>

   <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>roolno</th>
                <th>name</th>
                <th>mob</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query="SELECT * FROM `hh`"
            $r=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($r)){
             ?>


            <tr>
                <td><?php echo $row['roolno']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['mob']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
   </div>

    
</body>
</html>