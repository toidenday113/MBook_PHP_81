<?php 
    $bankinh = null;
    $chuvi = null;
    $dientich = null;
    define("PI", 3.14);
    if(isset($_POST['bankinh']) ){

        $bankinh = $_POST['bankinh'];
        $dientich = PI *pow($bankinh, 2);
        $chuvi = 2 * PI * $bankinh;

        echo pow($bankinh, 3);
        
        // function SoNgu($bankinh, $n){
        //     $r = 1;
        //     for($i=1;$i<=$n; $i++){
        //         $r = $bankinh * $r;
        //     }
        //     return $r;

        // }
        // echo SoNgu($bankinh, 3);
           
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích và chu vi hình tròn</title>
    <style>
        #container{
            width: 300px;
            margin: auto;

        }
        table{
            background-color: #fdeccb;
        }
        .tr-center{
            text-align: center;
        }
        
    </style>


</head>
<body>
    <div id="container">
        <form action="chuvidientichhinhtron.php" method="post">
            <table>
                <tr class="tr-center">
                    <td colspan="2">
                    Tính diện tích và chu vi hình tròn
                    </td>
                </tr>

                <tr>
                    <td>
                        Bán kính:
                    </td>

                    <td>
                        <input type="text" name="bankinh" required value="<?php echo $bankinh; ?>"/>
                    </td>
                </tr>

                <tr>
                    <td>Diện tích: </td>
                    <td><input type="text"  disabled  value="<?php echo $dientich; ?>"/> </td>
                </tr>

                <tr>
                    <td>Chu Vi:</td>
                    <td><input type="text" disabled value="<?php echo $chuvi;?>"/> </td>
                </tr>

                <tr class="tr-center">
                    <td colspan="2">
                    <button>Tính</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>