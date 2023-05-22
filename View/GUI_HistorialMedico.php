<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Easy Health</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/simple-datatables/style1.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style1.css" rel="stylesheet">
	<link href="./assets/css/output.css" rel="stylesheet">
	<!-- Template tailwind CSS -->
	<link href="./assets/css/output.css" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<!--------LINK BOOTSTRAP---------->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
	<?php
	include 'header1.php'
	?>
	<main id="main" class="main">
		<div class="flex flex-col space-y-30 space-y-3">
			<div class="flex flex-col space-y-5">
				<div class="pagetitle">
					<h1>Datos generales del paciente</h1>
					<div class="flex flex-col bg-white w-full rounded shadow-md px-3 p-3 space-y-2">
						<div class="flex w-full border-gray-900 justify-between">

							<div class="flex flex-col w-1/2 space-y-2 pr-2 pr-3">
								<div class="item-name flex justify-between w-full ">
									<p class="font-bold text-easyLetter">Nombre del paciente:</p>
									<p>Antonio Garcia</p>
								</div>
								<div class="item-name flex justify-between space-x-3 w-full">
									<p class="font-bold text-easyLetter">Fecha de nacimiento: </p>
									<p>12/03/78</p>
								</div>
								<div class="item-name flex justify-between space-x-3 w-full">
									<p class="font-bold text-easyLetter">Nacionalidad:</p>
									<p>Mexicana</p>
								</div>
								<div class="item-name flex justify-between space-x-3 w-full">
									<p class="font-bold text-easyLetter">Numero de seguro social:</p>
									<p>440-02-2763</p>
								</div>
							</div>

							<div class="flex flex-col w-1/2 space-y-2 pl-3">
								<div class="item-age flex justify-between space-x-3">
									<p class="font-bold text-easyLetter">Edad:</p>
									<p>58 años</p>
								</div>
								<div class="item-weigth flex justify-between space-x-3">
									<p class="font-bold text-easyLetter">Peso:</p>
									<p>104 kg</p>
								</div>
								<div class="item-sexo flex justify-between space-x-3">
									<p class="font-bold text-easyLetter">Sexo:</p>
									<p>masculino</p>
								</div>
							</div>

						</div>
						<div class="flex flex-col space-y-2">
							<div class="item-age flex justify-between space-x-3">
								<p class="font-bold text-easyLetter">Enfermedad crónica:</p>
								<p>Diabetes, hipertensión e insuficiencia renal</p>
							</div>
							<div class="item-weigth flex justify-between space-x-3">
								<p class="font-bold text-easyLetter">Alergías:</p>
								<p>Acido acetil salisilico y penicilina</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col space-y-5">
			<div class="pagetitle">
				<h1>Diagnósticos</h1>
				<div class="flex flex-col bg-white w-full rounded shadow-md px-3 p-3 space-y-2 mt-4">
					<div class="flex w-full border-gray-900 justify-between">

						<div class="flex flex-col w-1/2 space-y-2 pr-2 pr-3">
							<div class="item-name flex justify-between w-full ">
								<p class="font-bold text-easyLetter">Número de Diagnóstico :</p>
								<p>342452534</p>
							</div>
							<div class="item-name flex justify-between space-x-3 w-full">
								<p class="font-bold text-easyLetter">Descripción: </p>
								<p>Problemas con hipertensión</p>
							</div>
						</div>

						<div class="flex flex-col w-1/2 space-y-2 pl-3">
							<div class="item-age flex justify-between space-x-3">
								<p class="font-bold text-easyLetter">Fecha de emisión:</p>
								<p>19-05-2023</p>
							</div>
							<button class="align-self-end" style="font-size: 2em;">
								<i class="bi bi-download"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="flex flex-col bg-white w-full rounded shadow-md px-3 p-3 space-y-2 mt-4">
					<div class="flex w-full border-gray-900 justify-between">

						<div class="flex flex-col w-1/2 space-y-2 pr-2 pr-3">
							<div class="item-name flex justify-between w-full ">
								<p class="font-bold text-easyLetter">Número de Diagnóstico :</p>
								<p>342452534</p>
							</div>
							<div class="item-name flex justify-between space-x-3 w-full">
								<p class="font-bold text-easyLetter">Descripción: </p>
								<p>Problemas con hipertensión</p>
							</div>
						</div>

						<div class="flex flex-col w-1/2 space-y-2 pl-3">
							<div class="item-age flex justify-between space-x-3">
								<p class="font-bold text-easyLetter">Fecha de emisión:</p>
								<p>19-05-2023</p>
							</div>
							<button class="align-self-end" style="font-size: 2em;">
								<i class="bi bi-download"></i>
							</button>
						</div>
					</div>

				</div>
				<div class="flex flex-col bg-white w-full rounded shadow-md px-3 p-3 space-y-2 mt-4">
					<div class="flex w-full border-gray-900 justify-between">

						<div class="flex flex-col w-1/2 space-y-2 pr-2 pr-3">
							<div class="item-name flex justify-between w-full ">
								<p class="font-bold text-easyLetter">Número de Diagnóstico :</p>
								<p>342452534</p>
							</div>
							<div class="item-name flex justify-between space-x-3 w-full">
								<p class="font-bold text-easyLetter">Descripción: </p>
								<p>Problemas con hipertensión</p>
							</div>
						</div>

						<div class="flex flex-col w-1/2 space-y-2 pl-3">
							<div class="item-age flex justify-between space-x-3">
								<p class="font-bold text-easyLetter">Fecha de emisión:</p>
								<p>19-05-2023</p>
							</div>
							<button class="align-self-end" style="font-size: 2em;">
								<i class="bi bi-download"></i>
							</button>
						</div>
					</div>

				</div>
			</div>
		</div>
		</div>


	</main>
	<!-- Vendor JS Files -->
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/chart.js/chart.umd.js"></script>
	<script src="assets/vendor/echarts/echarts.min.js"></script>
	<script src="assets/vendor/quill/quill.min.js"></script>
	<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>