<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Trang chủ | Chia sẻ kiến thức công nghệ</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body >
	<marquee bgcolor="#F9F336">Xin chào quý khách đến với website của chúng tôi. Hôm nay là ngày 06/05/2023</marquee>
	<header>
		<h1>Chia sẻ kiến thức công nghệ, kỹ thuật </h1>
	</header>
	
	
<!--	Thanh menu -->
	<nav>
		<ul>
			<li><a href"#"> Trang chủ </a></li>
		    <li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Công nghệ thông tin</a>
				<div class="dropdown-content">
					 <a href="#">Website</a>
					 <a href="#">Xử lý ảnh</a><hr>
					 <a href="#">Nguyên lý máy học</a>
           		 </div>
			</li>
				 
			<li><a href"#"> Cơ điện tử </a></li>
			<li><a href"#"> Tự động hóa </a></li>
			<li><a href"#"> Tuyển dụng </a></li>
		</ul>
	</nav>
	
	<main>
		<section>
			<a href="#">WEBSITE</a>
			<a href="#">ROBOT</a>
			<a href="#">THỊ GIÁC MÁY TÍNH</a>
			<a href="#">XỬ LÝ ẢNH</a>
			<a href="#">PLC</a>
			<a href="#">Đăng Nhập/Đăng Ký</a>
		</section>

		<section id="xinchao">
			<h1>Xin chào Thanh Huy nhé!</h1>
			<p>Xin chào Thanh Huy</p>
			<p>Xin chào Thanh Huy</p>
			<p>Xin chào Thanh Huy</p>
			<p>Xin chào Thanh Huy</p>
			<p>Xin chào Thanh Huy</p>
			<p>Xin chào Thanh Huy</p>
			
			<?php


// connect to a database 
$dbConn = pg_connect("host=<ec2-44-213-228-107.compute-1.amazonaws.com> port=<5432> dbname=<duge63lregjm7> user=<tsfdnzfevzaigp> password=<98638e683f0711f3d801aeb83587b7ecbe33617836980f9eb641d38442598395>");
if (!$dbConn) {
    echo "An error occurred.\n";
    exit;
}
// Query data
$result = pg_query($dbConn, 'SELECT TieuDe FROM BAI_BAO WHERE MaSoBaiBao='1';);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
// Show value
while ($row = pg_fetch_assoc($result)) {
    var_dump($row);
}

?>
			
		</section>

		<section id="xinchao1">
			<h1>Bai viet noi bat so 1</h1>
		</section>
		
		
		
		
		
		

		<aside>
		  <h2>BÀI VIẾT ĐƯỢC XEM NHIỀU</h2>
			<HR>
			<p>Công ty cổ phần Sony</p>
			<p>Công ty cổ phần Sony</p>
			<p>Công ty cổ phần Sony</p>
			<p>Công ty cổ phần Sony</p>
			<p>Công ty cổ phần Sony</p>
			<p>Công ty cổ phần Sony</p>
		</aside>
			
		<footer>
			<p>Website chia sẻ kiến thức công nghệ</p>
			<p>Email: huyb1809579@student.ctu.edu.vn</p>
			<p>Phone: 0353114448</p>
			<h2>Thống kê truy cập</h2>
		</footer>

		
	</main>
</body>
</html>
