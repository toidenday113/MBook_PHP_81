<?php 
    $chieudai = null;
    $chieurong = null;
    $dientich = null;

    if(isset($_POST['chieudai'])  && isset($_POST['chieurong'])){

        $chieudai = $_POST['chieudai'];
        $chieurong = $_POST['chieurong'];

        $dientich = $chieudai * $chieurong;
           
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện tích hình chữ nhật</title>
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
        <form action="dientichhcn.php" method="post">
            <table>
                <tr class="tr-center">
                    <td colspan="2">
                        DIỆN TÍCH HÌNH CHỮ NHẬT
                    </td>
                </tr>

                <tr>
                    <td>
                        Chiều dài:
                    </td>

                    <td>
                        <input type="text" name="chieudai" required value="<?php echo $chieudai; ?>"/>
                    </td>
                </tr>

                <tr>
                    <td>Chiều rộng: </td>
                    <td><input type="text"  name="chieurong" required value="<?php echo $chieurong; ?>"/> </td>
                </tr>

                <tr>
                    <td>Diện tích:</td>
                    <td><input type="text" disabled value="<?php echo $dientich;?>"/> </td>
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