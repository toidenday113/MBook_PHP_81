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
	<meta charset="UTF-8"/>
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
					<h2 class="title">Hãng Sửa</h2>
					<!-- code -->
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Mã HS</th>
                            <th>Tên hãng sửa</th>
                            <th>Địa chỉ</th>
                            <th>SĐT</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
							<?php 
								$con = @mysqli_connect("localhost", "root", "");
								if(!$con){
									echo "Không thể kết nối đến csdl";
									exit;
								}

								$db = mysqli_select_db($con, "ql_ban_sua");
								if(!$db){
									echo "Không có csdl mà bạn đã chọn";
									exit;
								}
								
								mysqli_set_charset($con, "utf8");

								$sql ="SELECT * FROM  hang_sua";
								$result = mysqli_query($con, $sql);
								
								while($row = mysqli_fetch_object($result)){
							?>
								<tr>
									<td><?php echo $row->Ma_hang_sua; ?></td>
									<td><?php echo $row->Teng_hang_sua; ?></td>
									<td><?php echo $row->Dia_chi; ?></td>
									<td><?php echo $row->Dien_thoai; ?></td>
									<td><?php echo $row->Email; ?></td>
								</tr>
						<?php } ?>
                       
                        </tbody>
                    </table>
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