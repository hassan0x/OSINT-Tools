<?php

if (isset($_POST['ToolID'])) {

$JSONDATA = '{"name":"'.$_POST['ToolID'].'", "age":31, "pets":[{ "animal":"dog", "name":"Fido" }]}';

header('Content-type: application/json');
echo $JSONDATA;

}

?>
