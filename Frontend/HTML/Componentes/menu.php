<?php
include "../../Backend/Service/SessionService.php"
?>
<div class="Container_header_menu">
	<nav>
		<div class="logo-section">
			<img src="../Resources/hotellogo.png" alt="">
		</div>
		<div class="middle-section">
			<button class="botones_menu <?php echo ($currentPage == 'index') ? 'active' : ''; ?>" id="Button_Main">
				<a class="link_botones" href="index.php">Principal</a>
			</button>
			<button class="botones_menu <?php echo ($currentPage == 'services') ? 'active' : ''; ?>" id="Button_Services">
				<a class="link_botones" href="Main_Services.php">Servicios</a>
			</button>
			<button class="botones_menu <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>" id="Button_Contact">
				<a class="link_botones" href="Contac_Us.php">Contacto</a>
			</button>
			<button class="botones_menu <?php echo ($currentPage == 'about') ? 'active' : ''; ?>" id="Button_About">
				<a class="link_botones" href="About_Us.php">Nosotros</a>
			</button>
		</div>
		<div class="end-section">

			<?php
			$session = new SessionService();
			if ($session->isLoggedIn()){
				echo '<div class="logout-section">
				<button class="botones_menu" id="Button_menu">
					<img src="../Resources/Comments/Carlos.jpg" alt="" id="userimage">
				</button>
			</div>
			<div id="esconder-menu">
				<nav class="menu-desplegable">
					<a class="botones">Ver reservaciones</a>
					<a class="botones" href="../HTML/Reservation.php">Reservar</a>
					<a class="botones">Editar reservaciones</a>
					<a class="botones" id="logout_button" href="#">Cerrar Sesion</a>
				</nav>
			</div>';
			} else {
				echo '<div class="login-section">
				<button id="Button_Login" class="botones_menu <?php echo ($currentPage == "login") ? "active" : " "; ?>
					<a class="link_botones" href="Login.php">Ingresar</a>
				</button>
			</div>';
			}

			?>

			<script src="../JS/menu-desplegable.js"></script>
			<script src="../JS/auth-request.js"></script>


			
		</div>
	</nav>
</div>
