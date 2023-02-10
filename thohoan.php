<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #forml {
            text-align: center;

            font-size: 25px;
            margin-left: 40%;

        }

        .stylel2 {
            margin-right: 60%;
            color: pink;

        }
    </style>
</head>

<body>

    <form id="forml" name="forml" method="post">
        <span class="stylel2" style="font-size:40px; te"><b>Tính tiền</b></span>
        <table>


            <td></td>
            </tr>
            <tr class="tabletr">
                <td><span class="style4">Loại phòng:</span></td>
                <td><label>
                        <select style="background:pink; border:2px solid pink; border-radius:15px;" name="loaiphong"
                            id="loaiphong">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </label>

                </td>
            </tr>
            <tr class="tabletr">
                <td><span class="style4">Check in:</span></td>
                <td><label>
                        <input style="background:pink; border:2px solid pink; border-radius:15px;" type="date"
                            name="checkin">
                    </label>

                </td>
            </tr>
            <tr class="tabletr">
                <td><span class="style4">Check out:</span></td>
                <td><label>
                        <input style="background:pink; border:2px solid pink; border-radius:15px;" type="date"
                            name="checkout">
                    </label>
                </td>
            </tr>
            <tr class="tabletr1">
                <td>
                    <span class="style4">Tiền ăn:</span>
                </td>
                <td>
                    <label>
                        <input style="background:pink; border:2px solid pink; border-radius:15px;" type="text"
                            name="food">
                    </label>
                </td>
            </tr>
            <tr class="tabletr1">
                <td>
                    <span class="style4">Dịch vụ:</span>
                </td>
                <td>
                    <label>
                        <input style="background:pink; border:2px solid pink; border-radius:15px;" type="checkbox"
                            name="an" value="Ăn sáng">Ăn sáng <br>
                    </label><br>
                    <label>
                        <input style="background:pink; border:2px solid pink; border-radius:15px;" type="checkbox"
                            name="giat" value="Giặt là">Giặt là <br>
                    </label><br>
                    <label>
                        <input style="background:pink; border:2px solid pink; border-radius:15px;" type="checkbox"
                            name="tam" value="Tắm hơi">Tắm hơi
                    </label>
                    <br> <br>
                    <label>
                    <input type="submit" name="Ok" value="Ok">
                    <input type="submit" name="Cancle" value="Cancle"> 
                    </label>
                </td>
            </tr>
            
        </table>
    </form>
    <?php
    $hours_difference = 0;
    $starttimestamp = strtotime($_POST["checkin"]);
    $endtimestamp = strtotime($_POST["checkout"]);
    $hours_difference = ($endtimestamp - $starttimestamp)/3600;
        $A = 0;
    $B = 0;
    $C = 0;
    $g = 0;
    $a = 0;
    $t = 0;
    $lp = $_POST["loaiphong"];
    switch ($lp) {
        case "A":
            $A = (1000 * $hours_difference )/24;
            break;
        case "B":
            $B = (800 * $hours_difference )/24;
            break;
        case "C":
            $C = (500 * $hours_difference )/24;
            break;
    }
    
    if ($_POST["Ok"]) {
        if($_POST["giat"]){
            $g = 30;
        } elseif($_POST["an"]) {
            $a = 500;
        } elseif($_POST["tam"]) {
            $t = 200;
        }
        $services = $g + $a + $t + $A + $B + $C;
        $food = $_POST["food"];
        $totalm = $A + $B + $C + $g + $a + $t + $food;
        echo "Bill <br/>";
        echo "Type Room : " . $lp . "<br/>";
        echo "Rental Hours :".$hours_difference."<br/>";
        echo "Money for meals : " .$food. "  <br/>";
        echo "Money for services : " .$services. "<br/>";
        echo "Total : " . $totalm;
    }
    ?>
</body>

</html>