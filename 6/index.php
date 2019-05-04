<?php
	include('connect.php');
?>
<!doctype html>
<html>
	<head>
		<title>aplikasi quick count</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">
		<style type="text/css">
			.card
			{
				margin: 15px;
			}
			.satu {
				padding: 5% 0;
			}
			.dua {
				padding: 6% 0;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<?php
				$query = mysqli_query($kon, "select * from candidates");
				while($fetch = mysqli_fetch_array($query))
				{
			?>
			<div class="card">
				<div class="card-body">
					<div class="container">
						<div class="row" style="border: solid 1px #dddd">
							<div class="col">
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><?php echo $fetch["name"]; ?></li>
									<li class="list-group-item">Perolehan suara: <?php echo $fetch["earned_vote"]; ?></li>
								</ul>
							</div>
							<div class="col-12 col-lg-4" style="border: solid 1px #dddd">
								<div class="satu">
									<div class="dua">
										<center>
										<a href="tambah_data.php?id=<?php echo $fetch["id"]; ?>" class="btn btn-danger ">Tambah</a>
										</center>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<?php
		}
			?>
		</div>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
	</body>
</html>