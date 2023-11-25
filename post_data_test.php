<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
<body>

<h2>AhmadLogs - Test POST data</h2>

<form method="POST" action="<?php echo POST_DATA_URL;?>">
  <label for="temperature">Temperature:</label><br>
  <input type="text" id="temperature" name="temperature" value="16.53"><br>
  <label for="humidity">Humidity:</label><br>
  <input type="text" id="humidity" name="humidity" value="55.67"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>