<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Page 2 [Conversion]</p> 
   <p>Conversion site </p>
   1. <a href="home.php">Home</a> 2. <a href="conversion.php">Conversion Rate</a> 3. <a href="history.php">History</a>

   <p>Conversion Rate</p>
   <form class="" action="conversion.php" method="post">
   <select class="" name="Distance" required>
          <option value="Foot to Inch">Foot to Inch</option>
          <option value="Inch to Foot">Inch to Foot</option>
            </select>
            <input id="amount" type="text" name="amount" value="" placeholder="Enter a Value" required><br>
            <br>
            <br>
           

 <?php

if (isset($_POST['convert'])) {
  $amount=$_POST['amount'];
  $option=$_POST['Distance'];

  if ($option=='Foot to Inch') {
    $result=$amount*12;
    echo $amount." Foot = ".$result." Inch";
  }
  if ($option=='Inch to Foot') {
    $result=$amount/12;
    echo $amount." Inch = ".$result." Foot";
  }

}else {
  echo "Choose a Conversion Option";
}


?>
</h3>
<input id="convert" type="submit" name="convert" value="Convert">

</form>
</body>
</html>