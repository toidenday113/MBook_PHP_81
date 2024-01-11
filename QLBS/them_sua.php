<?php 
	print_r($_POST);
	print_r($_FILES);
	//echo dirname(__FILE__);
	$thongbao = false;
	$con = mysqli_connect("localhost", "root", "");
	if(!$con){
		echo "Ket noi khong thanh cong";
		exit;
	}
	$db = mysqli_select_db($con, "ql_ban_sua");
	if(!$db){
		echo "Khong csdl da chon";
		exit;
	}
	mysqli_set_charset($con, "utf8");

	$sql_hangsua = "SELECT * FROM hang_sua";
	$hangsua = mysqli_query($con, $sql_hangsua);
	$sql_loaisua = "SELECT * FROM loai_sua";
	$loaisua = mysqli_query($con, $sql_loaisua);

	if(isset($_POST['masua']) && !empty($_POST['masua'])){
		
		$masua = $_POST['masua'];
		$tensua = $_POST['tensua'];
		$hangsua = $_POST['hangsua'];
		$loaisua = $_POST['loaisua'];
		$trongluong = $_POST['trongluong'];
		$dongia = $_POST['dongia'];
		$dinhduong = $_POST['dinhduong'];
		$loiich = $_POST['loiich'];
		$hinh = $_FILES['hinh']['name'];
		$sql_sua = "INSERT INTO sua(Ma_sua, Ten_sua, Ma_hang_sua, Ma_loai_sua, Trong_luong, Don_gia, Tp_dinh_duong, Loi_ich, Hinh) VALUES ('$masua', '$tensua','$hangsua','$loaisua',$trongluong,$dongia,'$dinhduong','$loiich', '$hinh')";
		//echo $sql_sua;
		if(mysqli_query($con, $sql_sua)){
			$thongbao = true;
            // upload file lên server
			move_uploaded_file($_FILES['hinh']['tmp_name'], dirname(__FILE__)."/img/images/$hinh");
		}
		//echo "Không lỗi";
	}


?>
<!DOCTYPE html>
<html>

<head>
    <title>[:. Quản Lý Bán Sữa .:]</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="Quản Lý Bán Sữa" />
    <meta name="keywords" content="Vinamilk,Nutifood,Abbort,Daisy,Dutch Lady,Dumex" />
    <meta name="SKYPE_TOOLBAR' content='SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
      <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
    <![endif]-->
    <link rel="icon" href="img/front/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/reset-intervale.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./css/common.css" type="text/css" media="screen" />
</head>

<body>

    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Quản Lý Bán Sữa</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-content">
            <div class="container">
                <div class="col-sm-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="/qlbs/hang_sua.php">Hãng sữa</a></li>
                        <li class="active"><a href="/qlbs/khach_hang.php">Khách hàng</a></li>
                        <li><a href="/qlbs/khach_hang_tuy_bien.php">Khách hàng</a></li>
                        <li class="active"><a href="/qlbs/luoi_phan_trang.php">Thông tin sữa</a></li>
                    </ul>
                </div>
                <div class="col-sm-10">
                    <h2 class="title">Thêm sữa</h2>
                    <!-- code -->
                    <?php 
						if($thongbao){
								echo "<div class='alert alert-success'>
									<strong>Success!</strong> Thêm dữ liệu thành công.
								</div>";
						}
					?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form enctype="multipart/form-data" class="form-horizontal"
                                action="/mbook_php/qlbs/them_sua.php" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Mã sữa:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="masua" placeholder="Mã Sữa">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Tên sữa:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tensua" placeholder="Tên sữa">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Hãng sữa:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="hangsua">
                                            <?php 
												while($row = mysqli_fetch_object($hangsua)){
											?>
                                            <option value="<?php echo $row->Ma_hang_sua ;?>">
                                                <?php echo $row->Teng_hang_sua ;?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Loại sữa:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="loaisua">
                                            <?php 
												while($row = mysqli_fetch_object($loaisua)){
											?>
                                            <option value="<?php echo $row->Ma_loai_sua ;?>">
                                                <?php echo $row->Ten_loai ;?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Trọng lượng:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="trongluong"
                                            placeholder="Trọng Lượng">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Đơn giá:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="dongia" placeholder="Đơn giá">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Thành phần dinh dưỡng:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" name="dinhduong"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Lợi ích:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" name="loiich"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Lợi ích:</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="hinh"></input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Thêm mới</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright © Site name, 20XX</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>