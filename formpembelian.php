<?php
session_start();
include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> LOGIN PET SHOP </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>    
body {
    color: #000;
    background: white;
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px auto;
}	
.contact-form h1 {
    font-size: 42px;
    font-family: 'Pacifico', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: #e2c705;
}
.contact-form .form-control:focus {
    border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
    <?php
		if(isset($_POST['nama'])){
	    $nama = $_POST['nama'];
	    $nomorhp = $_POST['nomorhp'];
	    $email = $_POST['email'];
	    $pembayaran = $_POST['pembayaran'];
	    $total = $_POST['total'];
	    $alamat = $_POST['alamat'];

			$query =mysqli_query($conn, "INSERT INTO tableorder(nama,nomorhp,email,pembayaran,total,alamat) values('$nama','$nomorhp','$email','$pembayaran','$total','$alamat')");
	  	if($query) {
			echo '<script>alert("Order Berhasil");
			location.href="awal
			.php"</script>';
	  	}else {
			echo '<script>alert("Register Gagal")</script>';
	  	}
		}
        ?>
<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Pemesanan</h1>
				<form action="" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Nama barang</label>
								<input type="text" class="form-control" id="inputName" name="nama" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputHp">nomorhp</label>
								<input type="text" class="form-control" id="inputEmail" name="nomorhp" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputemail">email</label>
								<input type="text" class="form-control" id="inputname" name="email" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputpembayaran">pembayaran</label>
								<input type="text" class="form-control" id="inputpembayaran" name="pembayaran" required>
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputtotal">Total</label>
						<input type="text" class="form-control" id="inputtotal" name="total" required>
					</div>
					<div class="form-group">
						<label for="inputalamat">Alamat</label>
						<textarea class="form-control" id="inputMessage" rows="5" name="alamat" required></textarea>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Order </button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>