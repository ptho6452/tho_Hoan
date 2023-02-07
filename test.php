<!DOCTYPE html>
<html lang="en">
<body>
    <style>
        #red {
            border: 1px solid black;
            width:40px;
            height:40px;
            background-color: red;
            display: inline-block;
        }
        .a{
            display:left;
        }
        #blue{
            border: 1px solid black;
            width:40px;
            height:40px;
            background-color: blue;
            display: inline-block;
        }
    </style>
<?php
for($i= 0; $i <= 4 ; $i++){
    for ($j = 1 ;$j <= 4 ; $j++){
        if($i % 2 == 0){
            echo "<script> document.write(`<div id='blue'></div>`)</script>" ; 
        }
        else {
            echo "<script> document.write(`<div id='red'></div>`)</script>";
        }
    }
    echo '<br>';
}
?>
</body>
</html>