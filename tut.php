<?php
$f_name = 'Mihkel';
$l_name = 'Mölder';
$age = 19;
$can_vote = true;
$fav_foods = array('borger', 'fries', "two number 9's");
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="keywords" content="HTML,CSS,HTML5,CSS3">
  <title>Megaphaggot</title>
  <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body>
  <h1>Name:</h1>
  <div>
  <p><?php echo $f_name . ' ' . $l_name ?></p>
</div>
</body>
</html>
