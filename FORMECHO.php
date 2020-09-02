<?php
$msg="Values submitted by the user:<br>";
foreach($_POST as $key => $val){
if (is_array($val)){
$msg.="Item: $key<br>";
foreach($val as $v){
$v = stripslashes($v);
$msg.=" $v<br>";
}
} else {
$val = stripslashes($val);
$msg.="$key: $val<br>";
}
}
echo $msg;
?>