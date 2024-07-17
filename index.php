<?php 
echo"Hey Esther. Your first PHP code.<br>";
echo "Congrats!<br>";
// Yoo
?>

<!-- variables -->
<?php
// Strings
$name = "Esther Nyumu <br>";
echo"Hello {$name}";

// Integers
$age = 21;
echo "You are {$age} years old<br>";
// Floats

$gpa = 2.5;
echo "Your gpa is {$gpa}<br>";
$price = 4.99;
echo "Your price is \${$price}<br>";
// Booleans

$employed = true;
$online = false;
echo "Online status: {$online}<br>";
echo "Employed: {$employed}<br> <br>";
?>

<?php
/*
arithmetic operatorss
    + addition
    - subtraction
    * multiplication
    / division
    ** power
    % modulus

increment/decrement operators
    ++
    --
    +=
    -=

operator precedence(BODMAS)
    ()
    **
    *
    /
    %
    +
    -
*/
?>
<!-- 
 $_GET = Data is appended to the url
        Not Secure
        Char limit
        Bookmark is possible with values
        GET requests can be cached
        Better for a search page

$_POST = Data is packaged inside of the HTML body
        More Secure
        No data limit
        Cannot Bookmark
        Requests cannot be cahed
        Better for submitting credentials   
  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity</label><br>
        <input type="text" name = "quantity">
        <input type="submit" value = "total"><br>
    </form>
</body>
</html>

<?php
    $food = "pizza";
    $price = 5.99;
    $total = null;
    $quantity = $_POST ["quantity"];
    $total = intval($quantity) * $price;
    echo "You have ordered {$quantity} {$food}s" . "<br>";
    echo "Your total price is \$$total <br>";

?>
<!-- Math Functions
    abs()
    round()
    floor()
    ceil()
    sqrt()
    power($X,$Y)
    max($x,$y,$z)
    min($x,$y,$z)
    pi()
    rand()
    rand(1,6)
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
        <label>radius:</label><br>
        <input type="text" name = "radius">
        <input type="submit" value = "calculate"><br>
    </form>
</body>
</html>
<?php
$radius = $_POST ["radius"];
$circumference = round(2 * pi() * $radius,2);
$area = round(pi() * pow($radius,2),2);
$volume = round(4/3 * pi() * pow($radius,3),2);


echo "Circumference : $circumference cm<br>";
echo "Area : $area cm^2<br>";
echo "Volume : $volume cm^3 <br>"
?>

<?php
// if statements - pay attention to order of your conditions
$age = 21;

if($age>=18){
    echo "Enter<br>";
}
else if($age<= 0){
    echo "Really";
}
else{
    echo "Nope";
}

/*
Logical Operators
&& = True if both conditions are true
|| = True if at least one condition is true
! = True if false. False if true.
*/

// Switch
$grade = "B";
switch ($grade) {
    case "A":
        echo "Great";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Okay";
        break;
    case "D":
        echo "Poor";
        break;
    case "E":
        echo "Fail";
        break;
    default:
        echo "$grade is not a grade";
}
?>

<!-- for loop -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
        <label>Enter a number:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
 </body>
 </html>

 <?php
 $counter = $_POST ["counter"];
 for($i = 1;$i <= $counter;$i++){
    echo $i . "<br>";
 }
 ?>

 <!-- while loop -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="index.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
  </body>
  </html>
<?php
$seconds = 0;
$running =  true;

while($running){
    if(isset( $_POST ["stop"] )){
        $running = false;
    }
    else{
        $seconds++;
        echo $seconds . "<br>" ;
    }
}

?>