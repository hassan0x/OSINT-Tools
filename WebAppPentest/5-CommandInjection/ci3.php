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

<h2>Command injection 3</h2>

<form action="">
  Solve This:<br>
  <input type="text" name="solve">
  <br>
  <input type="submit" value="Submit">
</form>

<?php
if (array_key_exists ("solve", $_GET) && $_GET["solve"] != NULL && $_GET["solve"] != '') {
    $IP = $_GET['solve'];
    $substitutions = array(
        '& '  => '',
        ';'  => '',
        '| ' => '',
        '-'  => '',
        '$'  => '',
        '('  => '',
        ')'  => '',
        '`'  => '',
        '||' => '',
    );
    // Remove any of the charactars in the array (blacklist).
    $IP = str_replace( array_keys( $substitutions ), $substitutions, $IP );
    $cmd = shell_exec('ping -c 4 ' . $IP);
    echo $cmd; 
}
?>

</body>
</html>
