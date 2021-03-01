<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Add User  - Fincor Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body data-background-color="dark">
	<div class="wrapper sidebar_minimize">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="index.html" class="logo">
					<img src="assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret" title="Open Messenger">
							<a class="nav-link dropdown-toggle" href="mail.php" id="messageDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>					
						</li>
						
						<li class="nav-item dropdown hidden-caret" title="Quick Tools">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="addCurrency.php">
												<div class="quick-actions-item">
													<i class="flaticon-coins"></i>
													<span class="text">Add Currency</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="addUser.php">
												<div class="quick-actions-item">
													<i class="flaticon-add-user"></i>
													<span class="text">Create New User</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="manageUsers.php">
												<div class="quick-actions-item">
													<i class="flaticon-users"></i>
													<span class="text">Manage All Users</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="manageCurrencies.php">
												<div class="quick-actions-item">
													<i class="flaticon-coins"></i>
													<span class="text">Manage Currencies</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="tradeDashboard.php">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Manage Trades</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="ratesConfig.php">
												<div class="quick-actions-item">
													<i class="flaticon-graph"></i>
													<span class="text">Rate Management</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						
				
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="index.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard </p>					
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Management</h4>
						</li>
						<li class="nav-item">
							<a  href="trades.php">
								<i class="fas fa-layer-group"></i>
								<p>Trades</p>	
							</a>
						</li>
						
						<li class="nav-item active">
							<a  href="#">
								<i class="flaticon-add-user"></i>
								<p>Add New User</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a  href="manageUsers.php">
								<i class="flaticon-users"></i>
								<p>Manage Users</p>
							</a>
							
						</li>
							<li class="nav-item">
							<a  href="ratesConfig.php">
								<i class="flaticon-graph"></i>
								<p>Manage Rates</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a  href="cpanel/index.php">
								<i class="flaticon-interface-3"></i>
								<p>Control Panel</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a  href="settings.php">
								<i class="flaticon-settings"></i>
								<p>Settings</p>
							</a>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<!--Main Panel -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Add New User </h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="index.php">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Add New User</a>
							</li>
							
						</ul>
					</div>
					<?php
if($_SERVER['REQUEST_METHOD']=='POST'){    
$conn = new PDO(
"mysql:host=127.0.0.1;dbname=fincor", 'root', '',
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
$statement = $conn->prepare('INSERT INTO users (
username,
first_name,
last_name,
phone,
email,
password
) VALUES (
:username,
:first_name,
:last_name,
:phone,
:email,
:password
);
');
$username = $_POST['un'];
$fname    = $_POST['fn'];
$lname    = $_POST['ln'];
$phone    = $_POST['pn'];
$email    = $_POST['em'];
$password = $_POST['pw'];
$statement->execute([
':username'   =>  $username,
':first_name' =>  $fname,
':last_name'  =>  $lname,
':phone'      =>  $phone,
':email'      =>  $email,
':password'   =>  $password
]);
echo ("<script> var a = 'User was successfully added'; alert(a);</script>");
}else{
	 
}

?>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Add New User Account</div>
								</div>
								<div class="card-body">
									<div class="row">
						<form action="" method="POST">
										<div class="col-md-6 col-lg-4">
											<div class="form-group" style="width: 350px;">
												<label>First Name :</label><div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-user-alt"></i>
													</span>
													<input name="fn" type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="form-group" style="width: 350px;">
												<label>Last Name :</label><div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-user-alt"></i>
													</span>
													<input name="ln" type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="form-group" style="width: 350px;">
												<label>User Name :</label><div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-user"></i>
													</span>
													<input name="un" type="text" class="form-control" placeholder="User Name">
												</div>
											</div>
											<div class="form-group" style="width: 350px;">
												<label>Email :</label><div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa flaticon-mailbox"></i>
													</span>
													<input name="em" type="text" class="form-control" placeholder="Email Address">
												</div>
											</div>
											<div class="form-group" style="width: 350px;">
												<label>Phone Number :</label><div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-mobile"></i>
													</span>
													<input name="pn" type="tel" class="form-control" placeholder="Phone">
												</div>
											</div>
											<div class="form-group" style="width: 350px;">
												<label>Password :</label><div class="input-icon">
													<span class="input-icon-addon">
														<i class="fa fa-key"></i>
													</span>
													<input name="pw" type="password" class="form-control" placeholder="Password">
												</div>
											</div>
                                <div class="card-action">
									<button type="submit" class="btn btn-success">Add User</button>
								</div>
										</div>	
						            </div>
								</div>
	</form>
							
					</div>
					
			
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
</body>
</html>