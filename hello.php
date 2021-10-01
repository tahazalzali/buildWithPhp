<?php

$za=array();
$za["name"]="taha";
$za["course"]="PHP";
if (array_key_exists('course',$za)){
    echo "course is there "."<br>";
     
}else{

}
// echo isset($za['name']) ? "Name is there "."<br>":"Name is not there";
// echo isset($za['hello']) ? "hello is there "."<br>":"hello is not there";

$name=$za["ed"] ??  'Name not found';
echo $name;
?>