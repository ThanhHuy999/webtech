<!--
<?php
  header( 'Location: /index.html' ) ;
?>
-->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Trang chủ | Chia sẻ kiến thức công nghệ</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
	  
  </head>

  <body
    style="background-color: rgba(255, 255, 255, 0)"
    leftmargin="100px"
    rightmargin="100px"
    scroll="yes"
    text="black"
   
  >
    <!-- //marquee -->
    <marquee style="margin-top: 0;" bgcolor="yellow" behavior="" direction=""
      >Chào mừng các bạn đến với website kiến thức công nghệ. Nơi chia sẻ kiến
      thức kỹ thuật cao đến mọi người</marquee
    >
    <!-- header -->
    <header>
      <h1>KIẾN THỨC CÔNG NGHỆ</h1>
      <h3 align="right">
        <i><u>Công nghệ cho cuộc sống!</u></i>
      </h3>
    </header>

    <!--	Thanh menu -->
    <nav align="center">
      <ul>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">NVIDIA Jetson</a>
          <div class="dropdown-content">
            <a href="#">Jetson Nano</a>
            <a href="#">Orgin Nano</a>
          </div>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">PLC Siemens</a>
          <div class="dropdown-content">
            <a href="#">LOGO</a> <a href="#">S7-1200</a> <a href="#">S7-1500</a>
          </div>
        </li>
       
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Intel Realsense</a>
          <div class="dropdown-content">
            <a href="#">D435i</a>
            <a href="#">D455</a>
          </div>
        </li>
        
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Lập trình di động</a>
          <div class="dropdown-content">
            <a href="#">Android</a>
            <a href="#">IOS</a>
          </div>
        </li>

        <a href="iframe2.html">Đăng nhập</a>
        <span align="right" topmargin="10px">
          <form action="/abc.php">
            <input
              type="text"
              id="fname"
              name="fname"
              placeholder="Bạn đang tìm gì ?"
            />
            <input type="submit" value="Tìm kiếm" />
          </form>
        </span>

        <!-- <a href="iframe1.html">Đăng nhập/</a>
        <a href="">Đăng ký</a> -->
      </ul>
    </nav>


      <article
        style="
          float: left;
          width: 75%;
          background-color: rgb(222, 230, 230);
          min-height: 1000px;
        "
      >

        <blockquote>
          <h3 style="background-color: rgb(131, 190, 54); height: 20px; text-align: center; padding: 12px;">BÀI VIẾT MỚI NHẤT</h3>
			<?php
        </blockquote>
<div style="background-color: white; height: 100px; text-align: left; padding: 12px;">
    $conn = pg_pconnect("host=
    ec2-52-206-14-156.compute-1.amazonaws.com dbname=dd0rh3ee26895h user=ehtzfqtqzxozgn password=b7a63cc9772e6c064149a311258bb0c7f0e74612470b7a2865ca1599130d06ab");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT Tieu_de_bai_viet FROM bai_viet WHERE Ma_so_bai_viet=17;");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

    while ($row = pg_fetch_row($result)) {
 

	<h1> <a style="text-decoration: none"  href="https://www.w3schools.com">$row[0]</a> </h1>
    }
			?>
   
    </div>
        <hr>

       <div style="background-color: white; height: 100px; text-align: left; padding: 12px;">
   <h1> <a style="text-decoration: none" href="https://www.w3schools.com">Visit W3Schools</a> </h1>
   
    </div>
        <hr>

        <div style="background-color: white; height: 100px; text-align: left; padding: 12px;">
    <h1> <a style="text-decoration: none" href="https://www.w3schools.com">Visit W3Schools</a> </h1>
    </div>
        <hr>
        
       <div style="background-color: white; height: 100px; text-align: left; padding: 12px;">
  <h1> <a style="text-decoration: none" href="https://www.w3schools.com">Visit W3Schools</a> </h1>
   
    </div>
        <hr>

       <div style="background-color: white; height: 100px; text-align: left; padding: 12px;">
    <h1> <a style="text-decoration: none" href="https://www.w3schools.com">Visit W3Schools</a> </h1>
    </div>
      </article>
    </main>

    <!-- aside -->
    <aside
      style="
        float: right;
        width: 25%;
        background-color: #DF67D3;
        min-height: 600px;
      "
    >
      <blockquote>
        <h3 style="background-color: rgb(131, 190, 54); height: 20px; text-align: center; padding: 12px;"> XEM NHIỀU NHẤT</h3>
      </blockquote>
<div style="background-color: white; height: 80px; text-align: center; padding: 12px;">
    <b style="margin-left: 5px;">Rasberry pi là gì ?</b>
    <p>Rasberry Pi là nền kinh tế dựa trên tri thức. Trong cuộc cách mạng lần thứ 2 thì nền công nghiệp này là nền công nghiệp rất vĩ đại</p>
    </div>
      <hr>

      <div style="background-color: white; height: 80px; text-align: center; padding: 12px;">
        <b style="margin-left: 5px;">Rasberry pi là gì ?</b>
        <p>Rasberry Pi là nền kinh tế dựa trên tri thức. Trong cuộc cách mạng lần thứ 2 thì nền công nghiệp này là nền công nghiệp rất vĩ đại</p>
      </div>
      <hr>

      <div style="background-color: white; height: 80px; text-align: center; padding: 12px;">
        <b style="margin-left: 5px;">Rasberry pi là gì ?</b>
        <p>Rasberry Pi là nền kinh tế dựa trên tri thức. Trong cuộc cách mạng lần thứ 2 thì nền công nghiệp này là nền công nghiệp rất vĩ đại</p>
      </div>
      <hr>

      <div style="background-color: white; height: 80px; text-align: center; padding: 12px;">
        <b style="margin-left: 5px;">Rasberry pi là gì ?</b>
        <p>Rasberry Pi là nền kinh tế dựa trên tri thức. Trong cuộc cách mạng lần thứ 2 thì nền công nghiệp này là nền công nghiệp rất vĩ đại</p>
      </div>
      <hr>

      <div style="background-color: white; height: 80px; text-align: center; padding: 12px;">
        <b style="margin-left: 5px;">Rasberry pi là gì ?</b>
        <p>Rasberry Pi là nền kinh tế dựa trên tri thức. Trong cuộc cách mạng lần thứ 2 thì nền công nghiệp này là nền công nghiệp rất vĩ đại</p>
      </div>
      <hr>
      

    </aside>

    <footer style="background-color: blueviolet; min-height: 100px;">
      <form>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    </form>
    <b>Website kiến thức công nghệ</b>
    <p>Vui lòng ghi rõ nguồn khi copy nội dung từ trang web này</p>
  
    </footer>
  </body>
</html>
