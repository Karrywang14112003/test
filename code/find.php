<?php
include('connect.php');
$timkiem=$_GET['timkiem'];
$sql="SELECT * FROM tongketnamhoc WHERE hocsinh_id LIKE '%$timkiem' ";
$stmt=$conn->prepare($sql);
$query=$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tim thong tin HS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<center><h1><font color="blue">Ket qua tim kiem</h1></font></center>
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
				</tr>
			</thead>
			<tbody>
				<?php
					if ($query){
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
							</tr>
							<?php
						}
					}
				?>
			</tbody>				
		</table>
	</div>
</body>
</html>