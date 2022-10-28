<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['insert'])){
        $message= "The insert function is called.";
    }
    if(isset($_POST['select'])){
        $message="The select function is called.";
    }
?>


<form  method="post">
    <input type="text" name="txt" value="<?php if(isset($message)){ echo $message;}?>" >
    <input type="submit" name="insert" value="insert">
    <input type="submit" name="select" value="select" >
</form>
</body>
</html>