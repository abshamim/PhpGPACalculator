<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>

<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap');

    
*{
        margin: 0 auto;
        text-align: center;
    }

    div{
        
        height: 100vh !important;
        position: relative;
        background: rgb(215,17,124);
        background: linear-gradient(90deg, rgba(215,17,124,1) 0%, rgba(98,0,97,1) 68%);
    }


    h1{
        font-size: 40px;
        color: #fff;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
    }

    h2{
        font-size: 20px;
        color: #fff;
        padding: 40px 0 10px 0;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
    }

    input{
        margin-top: 20px;
        width: 200px;
        height: 30px;
        border-radius: 50px;
        border: 0px;
        font-size: 18px;
        font-weight: 500;
        font-family: 'Montserrat', sans-serif;
    }

</style>

  
<div>

<h2>Please input your marks of Preferable Subjects</h2> 

<form name="form" action="" method="get">
  <input type="number" name="result" id="result" value="">
</form>


<?php


$result = isset($_GET['result']) ? $_GET['result'] : "";

if($result >= 0 && $result <= 32){

    echo "<h1>You're Fail! Hope for the best in next exam.</h1>";

}elseif($result >= 33 && $result <= 39){

    echo "<h1>You got D in the exam.</h1>";

}elseif($result >= 40 && $result <= 49){

    echo "<h1>You got C in the exam.</h1>";

}elseif($result >= 50 && $result <= 59){

    echo "<h1>You got B in the exam.</h1>";

}elseif($result >= 60 && $result <= 69){

    echo "<h1>You got A- in the exam.</h1>";

}elseif($result >= 70 && $result <= 79){

    echo "<h1>You got A in the exam. Very good, Keep it up.</h1>";

}elseif($result >= 80 && $result <= 100){

    echo "<h1>You got A+ in the exam. Congratulations!</h1>";
    
}elseif($result == NULL){

    echo "<h1>Please Submit Your Marks!</h1>";
    
}else{

    echo "<h1>Unknown Marks! We're sorry.</h1>";

}

?>
</div>

</body>
</html>
