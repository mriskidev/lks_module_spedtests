

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

$width = 50;
$height = 200;

$gbr = @imagecreate($width, $height) or die (" tes");
imagecolorallocate($gbr, 16,16,16);
$chars = "0 1 2 3 4 5 6 7 8 9 a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W  X Y Z";
$chars = explode(" ", $chars);
$color = imagecolorallocate($gbr, 255,255,255);
$red = imagecolorallocate($gbr, 255,0,0);

for ($i=0; $i<3; $i++){
    $ranchar = rand(0,count($chars)-1);
    $kemiringan = rand(-25, 25);
    $size = rand(-20, 20);

    imagettftext($gbr, $width, $height, $kemiringan, $size, $color, 'ARIAL.TTF', $chars[$ranchar] );
    
}
for ($i=0; $i<3; $i++){
    imageline($gbr, 20+rand(0,$width-20),10+rand(0,$height-40),rand(0,$width),rand(0,$height),$red);
}

imagepng($gbr, "img/gambar.png");
imagedestroy($gbr);

echo "<img src='img/gambar.png'>";

?>

    <form action="">
    <input type="text" name="ranchar">
    <button>Submit</button>
    </form>

</body>
</html>

