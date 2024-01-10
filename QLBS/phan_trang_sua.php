
<?php 

class Pager{
    /*************************
    *Ham int findStart(int limit)	
    * Tra ve dong bat dau cua trang duoc chon dua tren trang lay duoc va bien limit
    **************************/
    function findStart($limit){
        if((!isset($_GET['page'])) || ($_GET['page'] =="1")){
            $start = 0;
            $_GET['page'] = 1;
        }
        else{
            $start = ($_GET['page']-1) * $limit;
        }
        return $start;
    }
    /*************************
    *Ham int findPages(int count, int limits)	
    * Tra ve so luong trang can thiet dua tren tong so dong co trong table va limit
    **************************/
    function findPages($count, $limit){
        $pages = (($count % $limit) == 0) ? $count/$limit :floor($count / $limit) + 1;
        return $pages;
    }
    /*************************
    *Ham string pageList(int curpage, int pages)	
    * Tra ve danh sach trang theo dinh dang "Trang dau tien <[cac trang]> Trang cuoi cung"
    **************************/
    function pageList($curpage,$pages){
        $page_list = "";

        /*In trang dau tien va nhung link toi trang truoc neu can*/
        if(($curpage != 1) && ($curpage)){
            $page_list .= "<li> <a href=\"".$_SERVER['PHP_SELF']."?page=1\" title=\"Trang đầu\"><<</a></li>";
        }
        if(($curpage-1)>0){
            $page_list .= "<li><a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\" title=\"Về trang trước\"><</a></li>";
        }
        /*In ra danh sach cac trang va lam cho trang hien tai dam hom va mat link o chan */
        for($i=1;$i<=$pages;$i++){
            
            if($i == $curpage){
                $page_list .= "<li class='active'><a>".$i."</a></li>";
            }
            else{
                $page_list .= "<li><a href=\"".$_SERVER['PHP_SELF']."?page=".$i."\" title=\"Trang ".$i."\">".$i."</a></li>";
    
            }
            $page_list .= " </li>";
        }

        /*In linh cua trang tiep theo va trang cuoi cung neu can*/
        if(($curpage+1) <= $pages){
            $page_list .= "<li> <a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\" title=\"Đến trang sau\">></a></li>";
        }
        if(($curpage != $pages) && ($pages !=0)){
            $page_list .= "<li><a href=\"".$_SERVER['PHP_SELF']."?page=".$pages."\" title=\"Trang cuối\">>></a> </li>";
        }
        $page_list .= "\n";

        return $page_list;
    }
    /*************************************************************************
    * Ham string nextPrev (int curpage, int pages)
    * Returns "Previous | Next" string for individual pagination (it's a word!)
    **************************************************************************/
    
    function nextPrev($curpage, $pages){
        $next_prev = "";
        if(($curpage-1)<=0){
            $next_prev .= "Về trang trước";
        }
        else{
            $next_prev .= "<li><a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\" title=\"Về trang trước\">></a></li>";
        }
        $next_prev .= " | ";

        if(($curpage+1) > $pages){
            $next_prev .= "Đến trang sau";
        }
        else{
            $next_prev .= "<li> <a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\">Đến trang sau</a></li>";
        }
        return $next_prev;
    }
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
					<h2 class="title">Thông Tin Sửa</h2>
					<!-- code -->
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Sửa</th>
                            <th>Hãng sữa</th>
                            <th>Loại sữa</th>
                            <th>Trọng lượng</th>
                            <th>Đơn giá</th>
                        </tr>
                        </thead>
                        <tbody>
                            
								<tr>
									<td><?php  echo $stt; ?></td>
									<td><?php  echo $row->Ten_sua; ?></td>
									<td><?php  echo $row->Teng_hang_sua; ?></td>
									<td><?php  echo $row->Ten_loai ?></td>
									<td><?php  echo $row->Trong_luong; ?></td>
									<td><?php  echo $row->Don_gia; ?></td>
								</tr>
						
                       
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