<?php 
session_start();
if (isset($_SESSION['loggedin'])== null||isset($_SESSION['loggedin'])== false) {
    header('Location: dang_nhap.php');
    exit();
}
include 'connect.php';
$sql="SELECT * FROM tongketnamhoc";
$stmt=$conn->prepare($sql);
$query=$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEST PDO</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
		<form action="find.php" method="GET">
			<div class="input-group search">
            <input type="text" name="timkiem" class="form-control" placeholder="">
            <button type="submit" class="btn btn-secondary">Tìm kiếm</button>                    
        </div>   
		</form>
	<div class="container">
		<table class="table table-inverse">
			<thead>
				<tr>
					<th>ID</th>
					<th>Họ tên</th>
					<th>Năm học</th>
					<th>Nhận xét chung</th>
					<th>Ưu điểm</th>
					<th>Cách khắc phục</th>
					<th>Được lên lớp</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if ($query) {
						while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['hocsinh_id']?></td>
								<td><?php echo $row['namhoc']?></td>
								<th><?php echo $row['nhanxetchung']?></th>
								<th><?php echo $row['uudiem']?></th>
								<th><?php echo $row['cachkhacphuc']?></th>
								<th><?php echo $row['duoclenlop']?></th>
								<span>
									<td>
										<a href="edit.php?id=<?php echo $row['id']?>">Sửa</a>
										<a href="delete.php?id=<?php echo $row['id']?>">Xóa</a>
									</td>
								</span>
							</tr>
							<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>
	<div >
		<center>
			<button class="btn btn-info"><a href="add.php">Them sinh vien</a></button>
			<button class="btn btn-danger"><a href="log_out.php">Dang xuat</a></button>
		</center>
	</div>
</body>
</html>
