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

a {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

a {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h2>Redirect 3 MD5 Hash</h2> <br>

<a href="?solve=http://www.google.com&hash=ed646a3334ca891fd3467db131372140">Try visit Google website !</a>

<?php
if (array_key_exists ("solve", $_GET) && $_GET["solve"] != NULL && $_GET["solve"] != '') {
    $solve = $_GET['solve'];
    $hash = $_GET['hash'];

    if ($hash == hash("md5", $solve)){
        header('Location: ' . $solve);
    }
}
?>

</body>
</html>
