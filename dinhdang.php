<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Định dạng</title>
    <style>
        table{
            background-color: #fecccd;
           margin: auto;
           text-align: center;
        }
        #title{
            background-color: #dc4800;
            color: white;
            font-weight: 800;
        }
        #wrap{
            width: 300px;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php 
        
        print_r($_POST);
        $noidung = null;
        $mauchu = null;
        $maunen = null;
        
        if(
            isset($_POST['noidung'])
            && isset($_POST['mauchu'])
            && isset($_POST['maunen']) ) 
        {

            $noidung = $_POST['noidung'];
            $mauchu = $_POST['mauchu'];
            $maunen = $_POST['maunen'];
        }
    ?>
    <form action="dinhdang.php" method="post" >
        <div id="wrap">
            <table>
                <tr id="title">
                    <td colspan="2">
                        ĐỊNH DẠNG MÀU CHỮ - MÀU NỀN
                    </td>
                </tr><!-- het dòng 1-->

                <tr>
                    <td>Nội dung</td>
                    <td>
                        <input type="text" name="noidung"/>
                    </td>
                </tr><!-- het dòng 2-->

                <tr>
                    <td>Màu chữ</td>
                    <td>
                        <input type="text" name="mauchu"/>
                    </td>
                </tr><!-- het dòng 3-->

                <tr>
                    <td>Màu nền</td>
                    <td>
                        <input type="text" name="maunen"/>
                    </td>
                </tr><!-- het dòng 3-->

                <tr>
                    <td colspan="2">
                        <button>Xem kết quả</button>
                    </td>
                </tr>
            </table>
            <p>
                <?php echo $noidung;?>
            </p>
        </div> <!-- End Wrap-->
    </form> <!-- End Form -->
</body>
</html>