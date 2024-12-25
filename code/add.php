<?php
include('connect.php');
if(!empty($_POST['submit']))
{
	if (isset($_POST['hocsinh_id']) && isset($_POST['namhoc']) && isset($_POST['nhanxetchung']) && isset($_POST['uudiem']) && isset($_POST['cachkhacphuc']) && isset($_POST['duoclenlop'])) {
		$hocsinh_id=$_POST['hocsinh_id'];
		$namhoc=$_POST['namhoc'];
		$nhanxetchung=$_POST['nhanxetchung'];
		$uudiem=$_POST['uudiem'];
		$cachkhacphuc=$_POST['cachkhacphuc'];
		$duoclenlop=$_POST['duoclenlop'];
		$sql="INSERT INTO tongketnamhoc(hocsinh_id,namhoc,nhanxetchung,uudiem,cachkhacphuc,duoclenlop) VALUES('$hocsinh_id','$namhoc','$nhanxetchung','$uudiem','$cachkhacphuc','$duoclenlop')";
		$stmt=$conn->prepare($sql);
		$query=$stmt->execute();
		if($query)
		{
			header("location:index.php");
		}else
		{
			echo "Thêm thất bại, vui lòng thử lại";
		}

		# code...
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>THÊM SINH VIÊN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<form method="post">
			<table class="table table-inverse">
				<tbody>
					<tr>
						<td>Nhập họ tên</td>
						<td><input type="text" name="hocsinh_id"></td>
					</tr>
					<tr>
						<td>Nhập năm học</td>
						<td><input type="text" name="namhoc"></td>
					</tr>
					<tr>
						<td>Nhập nhận xét chung</td>
						<td><input type="text" name="nhanxetchung"></td>
					</tr>
					<tr>
						<td>Nhập ưu điểm</td>
						<td><input type="text" name="uudiem"></td>
					</tr>
					<tr>
						<td>Nhập cách khắc phục</td>
						<td><input type="text" name="cachkhacphuc"></td>
					</tr>
					<tr>
						<td>Được lên lớp</td>
						<td><input type="text" name="duoclenlop"></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" name="submit" value="submit">Lưu</button>
		</form>
	</div>
</body>
</html>