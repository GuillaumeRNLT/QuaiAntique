<?php 

include 'includes/head.html';
include 'includes/navbar.html';
include 'includes/connect.php';

$erreur="";

if(!empty($_POST)){
    if(isset($_POST["email"], $_POST["password"]) && !empty($_POST['email'] && !empty($_POST["password"]))){
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            //die("Ce nest pas un email");
        }

        if( $_POST["email"] == 'omkara88@hotmail.com'){



            $sql = "SELECT * FROM admin WHERE email = :email";
            $query = $pdo->prepare($sql);
            $query->bindvalue(":email", $_POST["email"], PDO::PARAM_STR);
            $query->execute();
            $admin = $query->fetch();
            if(!$admin){
                die("Lutilisateur nexiste pas");
            }
            //var_dump($admin);
            if(!password_verify($_POST["password"], $admin["password"])){
				$erreur="Mauvais login ou mot de passe!";
				//die();
            }else{
				header("Location: admin_panel/panel.php");
			}
            //header("Location: admin_panel/panel.php");

        }else{
            $sql = "SELECT * FROM users WHERE email = :email";
            $query = $pdo->prepare($sql);
            $query->bindvalue(":email", $_POST["email"], PDO::PARAM_STR);
            $query->execute();
            $user = $query->fetch();
            if(!$user){
                $erreur="Mauvais login ou mot de passe!";
            }
            //var_dump($user);
            if(!password_verify($_POST["password"], $user["password"])){
                $erreur="Mauvais login ou mot de passe!";
            }else{
				header("Location: index.php");
			}
            //header("Location: index.php");
        }
	}
}
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
							<h1 class="fs-4 card-title fw-bold mb-4">Se connecter</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="login.php">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Adresse email</label>
									<div class="erreur"><?php echo $erreur; ?></div>
									<input id="email" type="email" class="form-control" name="email" value="" required >
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="forgot.html" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-custom ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Vous n'avez pas de compte ? <a href="register.php" class="text-dark">Créez-en un ici</a>
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
