<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>validateform</title>
	<link rel="icon" type="img/icon type" href="./300.ico">
</head>
<link rel="stylesheet" type="text/css" href="khu.css">
<body >
<div id="tong">
	<div id="giua">
	<form id="form" method="post" action="process.php">
	<h1>Nhập thông tin</h1>
	<br>
	<input type="text" id="ten" class="nhap" placeholder="Nhập tên" name="ten">*
	<br>
	<span id="loi_ten"></span>
	<br>
	<br>
	<input type="text" class="nhap" placeholder="Giới tính*" disabled>
	<br>
	<br>
	<input type="radio" name="gioi_tinh" class="nam" value="Nam">Nam
	<input type="radio" name="gioi_tinh" value="Nữ">Nữ
	<br>
	<span id="loi_gioi_tinh"></span>
	<br>
	<br>
	<input type="email" id="email" class="nhap" placeholder="Nhập Email" name="email">*
	<br>
	<span id="loi_email"></span>
	<br>
	<br>
	<input type="password" id="mk" class="nhap" placeholder="Nhập mật khẩu" name="mat_khau">*
	<br>
	<span id="loi_mk"></span>
	<br>
	<br>
	<input type="text" id="so_thich" class="nhap" placeholder="Nhập sở thích, VD:Chơi game" name="so_thich">
	<br>
	<br>
	<br>
	<button type="submit" onclick="return dk()" class="dk">Đăng kí</button>
	</form>
	</div>
</div>
</body>
<script type="text/javascript">
	function dk(){
		let kiem_tra_loi = false;
		// Tên
		let ten = document.getElementById('ten').value;
		if (ten.length === 0) {
			document.getElementById('loi_ten').innerHTML = 'Tên chưa được nhập vào';
			kiem_tra_loi = true;
		}
		else{
		let regex_ten = /^[A-VXYỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ][a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]+(\s{1}[A-VXYỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ][a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]*)+$/;
		if (!regex_ten.test(ten)) {
			document.getElementById('loi_ten').innerHTML = 'Tên không hợp lệ';
			kiem_tra_loi = true;
			}
		else{
			document.getElementById('loi_ten').innerHTML = '';
		}
		}
		

		// Giới tính
		let mang_gioi_tinh = document.getElementsByName('gioi_tinh');
		let kiem_tra_gioi_tinh = false;
		for(let i = 0; i < mang_gioi_tinh.length; i++){
			if (mang_gioi_tinh[i].checked){
				kiem_tra_gioi_tinh = true;
			}
		}
		if (kiem_tra_gioi_tinh == false){
			document.getElementById('loi_gioi_tinh').innerHTML = 'Giới tính chưa được chọn';
			kiem_tra_loi = true;
		}
		else{
			document.getElementById('loi_gioi_tinh').innerHTML = '';
		}

		// // Email

		let email = document.getElementById('email').value;
		if (email.length === 0) {
			document.getElementById('loi_email').innerHTML = 'Email chưa được điền';
			kiem_tra_loi = true;
		}
		else{
			let regex_email = /^\w+([\.-]?\w+)*\@\w+([\.-]?\w+)*(\.\w{2,3})+$/
			if (!regex_email.test(email)) {
				document.getElementById('loi_email').innerHTML = 'Email không hợp lệ';
			kiem_tra_loi = true;
			}
			else{
				document.getElementById('loi_email').innerHTML = ''
			}
		}

		// // Mật khẩu

		let mk = document.getElementById('mk').value;
		let regex_mk = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/
		if (!regex_mk.test(mk)) {
			document.getElementById('loi_mk').innerHTML = 'Password phải có ít nhất 8 kí tự, có chữ in hoa, có kí tự đặt biệt';
			kiem_tra_loi = true;	
		}
		else{
			document.getElementById('loi_mk').innerHTML = ''
		}

		if (kiem_tra_loi) {
			return false;
		}
	}
</script>
</html>