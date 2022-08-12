<?php
$date= date("Y-m-d");
$time=date("H:m");
$datetime=$date."T".$time;


?>

<form action="form.php" method="get">
<input type="datetime-local" name="date" value="<?php echo $datetime; ?>">
<input type="submit" name="submit" value="submit">