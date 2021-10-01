<?php 
if(isset($_GET['input'])){
    $input =$_GET['input'];
    if($_GET['input']>20){
        echo "The number is greater than 20";
    }
    else{
        echo "The number is less than 20";
    }
}
if(isset($_GET['lan'])){
function  lan($lang){
    
  

    $lang=$_GET['lan'];

    if ($lang=='en'){
     echo "hello ";
    }
    else if($lang=='fr'){
   echo "hola";
    }
    else{
        echo "You don't type a correct lang";
    }

}
lan($_GET['lan']);

} 



// to change the argument of the function you must add & in the argument
function triple(&$value){
    $value=$value*3;
};
$a=5;
echo triple($a);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taha Zalzali </title>
</head>
<body>
    <h3><form action="" method="GET">
        <div>
        <input type="text" name="lan">
        <button type="submit">Send</button>
      
    </div> </form> </h3>
    <h1>Welcome to taha guess page zalzali page</h1>
    <input type="number" name="input" placeholder="0">
</body>
</html>