<?php 

include 'includes/head.html';
include 'includes/navbar.html';
include 'includes/connect.php';
error_reporting(E_ERROR | E_PARSE);

 $error="";
if(!empty($_POST)){
    if(isset($_POST["surname"], $_POST["name"], $_POST["email"], $_POST["password"], $_POST["allergy"])
    && !empty($_POST["surname"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["password"]) 
	&& !empty($_POST["allergy"])) 
    {
        $surname = strip_tags($_POST["surname"]);
        $name = strip_tags($_POST["name"]);
        $email = $_POST["email"];
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            //die("L'adresse email est incorrecte");
			$error="L'adresse email est incorrecte";
        }
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$allergy = $_POST["allergy"];
		$convives = $_POST["convives"];

        //ajoutez ici controle souhaités

		//Vérification si email existe
		$sql ="SELECT email FROM users WHERE email=:email";
		$query= $pdo -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query-> execute();
		$results = $query -> fetchAll(PDO::FETCH_OBJ);
		$cnt=1;
		if($query -> rowCount() > 0)
		{
		echo "<span style='color:red'> Cette adresse email existe déjà .</span>";
 		echo "<script>$('#submit').prop('disabled',true);</script>";
		$error=" Cette adresse email existe déjà.";
		}else{
		$sql = "INSERT INTO users (surname, name, email, password, allergy, convives) VALUES ('$surname', '$name', '$email', '$password', '$allergy', $convives)";

        $query = $pdo->prepare($sql);
        $query->bindValue(':surname', $surname, PDO::PARAM_STR);
        $query->bindValue(":name", $name, PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":password", $password, PDO::PARAM_STR);
		$query->bindValue(":allergy", $allergy, PDO::PARAM_STR);
		$query->bindValue(":convives", $convives, PDO::PARAM_INT);
        $query->execute();
		}
	}
}


		//suite

       /* $sql = "INSERT INTO users (surname, name, email, password, allergy, convives) VALUES ('$surname', '$name', '$email', '$password', '$allergy', $convives)";

        $query = $pdo->prepare($sql);
        $query->bindValue(':surname', $surname, PDO::PARAM_STR);
        $query->bindValue(":name", $name, PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":password", $password, PDO::PARAM_STR);
		$query->bindValue(":allergy", $allergy, PDO::PARAM_STR);
		$query->bindValue(":convives", $convives, PDO::PARAM_INT);
        $query->execute();
        
    
    }else{
        die ("LE FORMULAIRE EST INCOMPL2");
    }
}*/




?>



<body>
    
      <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="images/Logo.svg" alt="logo" width="300">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">S'inscrire</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="nom">Nom</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>
                                
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="nom">Prenom</label>
									<input id="lastname" type="text" class="form-control" name="surname" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>        
                                
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Adresse email</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Alergies</label>
										<select class="form-select" name="allergy">
											<option value="Aucune">Aucune</option>
  											<option value="Blé">Blé</option>
  											<option value="Arachides">Arachides</option>
  											<option value="Oeufs">Oeufs</option>
  											<option value="Lait">Lait</option>
										</select>
									<div class="invalid-feedback">
										Alergies
									</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="convives">Convives</label>
										<input class="form-control" type="number" name="convives" valeur="2">
									<div class="invalid-feedback">
										Alergies
									</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>-
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Vous avez un compte ? <a href="login.php" class="text-dark">Connectez-vous</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; Quai Antique 
					</div>
				</div>
			</div>
		</div>
	</section>



<?php
include 'includes/footer.html';
?>
</body>
</html>