<?php
 require_once(__DIR__."/connect.php");
session_start();
if(isset($_SESSION['user_id'])){
    $user_id =$_SESSION['user_id'] ;
}else{
    $user_id='';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <!-- custom cdn link -->
     <link rel="stylesheet" href="style1.css">
</head>
<body>
    
<!-- header section starts -->
<?php require_once(__DIR__."/user_header.php"); ?>
<!-- header section ends -->



















    <!-- custom js link -->
    <script src="script.js"></script>

</body>
</html>