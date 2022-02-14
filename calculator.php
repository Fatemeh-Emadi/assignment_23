<html>
    <head>

    </head>
<body>
<?php 
$number1=45;
$number2=37;
$operator="+";
print("number1=".$number1);
print("<br>");
print("number2=".$number2);
print("<br>");

    if($operator=="+"){
     $result=$number1+$number2;
     print("result=".$result);
    }
    else if($operator=="-"){
     $result=$number1-$number2;  
     print("result=".$result);
    }
    else if($operator=="*"){
     $result=$number1*$number2; 
     print("result=".$result);
       }
    else if($operator=="/"){
        $result=$number1/$number2;
     print("result=".$result);
    }


?>


</body>
</html>
