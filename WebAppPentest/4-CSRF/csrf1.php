<html>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h2>CSRF 1</h2>

<form action="">
  Enter New Password: <br>
  <input type="text" name="solve1">
  <br>
  Confirm New Password: <br>
  <input type="text" name="solve2">
  <br>
  <input type="submit" value="Submit">
</form>

<?php
if (array_key_exists ("solve1", $_GET) && $_GET["solve1"] != NULL && $_GET["solve1"] != '') {
    if ($_GET["solve1"] == $_GET["solve2"]){
    echo 'Hello you have been changed your password to: ' . $_GET['solve1'];
    }
}
?>

</body>
</html>
