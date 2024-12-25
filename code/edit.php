<?php
include('connect.php');
$id=$_GET['id'];
$sql="SELECT * FROM tongketnamhoc WHERE id='$id'";
$stmt=$conn->prepare($sql);
$query=$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);
if(!empty($_POST['submit']))
{
	if (isset($_POST['hocsinh_id']) && isset($_POST['namhoc']) && isset($_POST['nhanxetchung']) && isset($_POST['uudiem']) && isset($_POST['cachkhacphuc']) && isset($_POST['duoclenlop'])) {
		$hocsinh_id=$_POST['hocsinh_id'];
		$namhoc=$_POST['namhoc'];
		$nhanxetchung=$_POST['nhanxetchung'];
		$uudiem=$_POST['uudiem'];
		$cachkhacphuc=$_POST['cachkhacphuc'];
		$duoclenlop=$_POST['duoclenlop'];
		$sql1="UPDATE tongketnamhoc SET hocsinh_id='$hocsinh_id',namhoc='$namhoc',nhanxetchung='$nhanxetchung',uudiem='$uudiem',cachkhacphuc='$cachkhacphuc',duoclenlop='$duoclenlop' WHERE id='$id'";
		$stmt=$conn->prepare($sql1);
		$query=$stmt->execute();
		if($query)
		{
			header("location:index.php");
		}else
		{
			echo "Không thành công";
		}

		# code...
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SỬA THÔNG TIN</title>
</head>
<body>
	<div class="container">
		<form method="post">
			<table class="table table-inverse">
				<tbody>
					<tr>
						<td>Nhập họ tên</td>
						<td><input type="text" name="hocsinh_id" value="<?php echo $result['hocsinh_id']?>"></td>
					</tr>
					<tr>
						<td>Nhập năm học</td>
						<td><input type="text" name="namhoc" value="<?php echo $result['namhoc']?>"></td>
					</tr>
					<tr>
						<td>Nhập nhận xét chung</td>
						<td><input type="text" name="nhanxetchung" value="<?php echo $result['nhanxetchung']?>"></td>
					</tr>
					<tr>
						<td>Nhập ưu điểm</td>
						<td><input type="text" name="uudiem" value="<?php echo $result['uudiem']?>"></td>
					</tr>
					<tr>
						<td>Nhập cách khắc phục</td>
						<td><input type="text" name="cachkhacphuc" value="<?php echo $result['cachkhacphuc']?>"></td>
					</tr>
					<tr>
						<td>Được lên lớp</td>
						<td><input type="text" name="duoclenlop" value="<?php echo $result['duoclenlop']?>"></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" name="submit" value="submit">Lưu</button>
		</form>
	</div>
</body>
</html>