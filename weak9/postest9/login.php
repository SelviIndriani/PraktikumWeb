<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login Page</title>
		<style>
			body {
				display: flex;
				align-items: center;
				justify-content: center;
				height: 100vh;
				padding: 0;
				margin: 0;
			}
			h1 {
				margin: 0;
			}
			.box-login {
				background-color: beige;
				width: 100%;
				display: flex;
				flex-direction: column;
				gap: 100px;
				padding: 200px;
				text-align: center;
			}
			* {
				border-radius: 10px;
			}
			form {
				display: flex;
				flex-direction: column;
				gap: 20px;
			}
			input {
				height: 30px;
				padding: 5px 10px;
				font-size: 16px;
				/* mewarnai kolom input waktu dipencet */
				outline-color: azure;
			}
			input[type="text"] {
				border: 1px solid rgba(63, 63, 63, 0.5);
			}
			input[type="submit"] {
				color: azure;
				border: 1px solid rgba(76, 255, 70, 0);
				background-color: brown;
				padding: 10px;
				height: auto;
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<div class="box-login">
			<h1>Login Member Perpustakaan</h1>
			<!-- form login -->
			<form action="validasi.php" method="post">
				<label for="nama">Nama Member</label>
				<input type="text" name="nama" id="nama"/>

				<label for="pass">Password</label>
				<input type="text" name="pass" id="pass"/>

				<input type="submit" value="masuk" />
			</form>
		</div>
	</body>
</html>
