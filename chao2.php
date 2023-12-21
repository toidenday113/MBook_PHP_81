<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào 2</title>
    <style>
        table{
            background-color: #c6edec;
            text-align: center;
            margin: auto;
        }
      
        #container{
            width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php 
        $chao ="";

        if(isset($_POST['ten'])){

            $chao = $_POST['ten'];
        }
    ?>
    <div id="container">
        <form action="chao2.php" method="post">
            <table>
                <tr style="background-color: #039ca1;">
                    <td colspan="2">
                        IN LỜI CHÀO
                    </td>
                </tr>
                <tr>
                    <td >
                        Họ tên:
                    </td>
                    <td>
                        <input type="text" name="ten"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php 
    
                            echo $chao;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button>Chào</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>