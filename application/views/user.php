<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<div class="card shadow mb-3 m-3 p-3 text-center">
		<div class="row">
			<div class="tampung"></div>
			<?= $this->session->flashdata('message'); ?>
			<h3>ABSEN</h3>
			<div id="time" class="h3"></div>

			<h3>Hello, <?= $profil['name']; ?></h3>
			<h5>Departemen : <?= $profil['departemen']; ?></h5>
			<h5>Position : <?= $profil['position']; ?></h5>
			<a href="<?= base_url('/user/prosesIn'); ?>" class="btn btn-primary btn-in col p-3 m-5">IN</a>
			<a href="<?= base_url('/user/prosesOut'); ?>" class="btn btn-primary btn-out col p-3 m-5 ">OUT</a>

		</div>
		<div class="row">
			<a href="<?= base_url(); ?>" class="btn btn-primary btn-out col p-3 m-5 ">LOGOUT</a>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var timeDisplay = document.getElementById("time");



		function refreshTime() {
			var dateString = new Date().toLocaleString("en-US", {
				timeZone: "Asia/Jakarta"
			});
			var formattedString = dateString.replace(", ", " - ");
			timeDisplay.innerHTML = formattedString;
		}

		setInterval(refreshTime, 1000);

		// document.querySelector('.btn-in').addEventListener('click', () => {
		// 	document.querySelector('.tampung').innerHTML += `<div class="alert alert-warning alert-dismissible fade show" role="alert">
		// 		<strong>Holy guacamole!</strong> You should check in on some of those fields below.
		// 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 			<span aria-hidden="true">&times;</span>
		// 		</button>
		// 	</div>`;
		// });
	</script>
</body>

</html>