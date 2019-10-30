<html>
<style>
input[type=file], select {
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

<h2>File Upload 1</h2>

<form action="" method="POST" enctype="multipart/form-data">
    Solve This: <br>
    <input type="file" name="solve"> <br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_FILES['solve'])) {

    $target_path = "uploads/" . basename( $_FILES['solve']['name']);
    $uploaded_name = $_FILES['solve']['name'];
    $uploaded_type = $_FILES['solve']['type'];
    $uploaded_size = $_FILES['solve']['size']; 
    
    echo "Name: " . $uploaded_name;
    echo "<br>";
    echo "Type: " . $uploaded_type;
    echo "<br>";
    echo "Size: " . $uploaded_size;
    echo "<br>";

    if(($uploaded_type == "image/jpeg") && ($uploaded_size < 100000)){
	echo "Result: pass the validation test";
	echo "<br>";

    if(!move_uploaded_file($_FILES['solve']['tmp_name'], $target_path)) {
        echo 'Your image was not uploaded.';
        }
    else {
        echo $target_path . ' succesfully uploaded!';
        }
    }
    else {
	echo "Result: don't pass the validation test";
    }
}

?>

</body>
</html>
