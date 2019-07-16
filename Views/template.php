<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/template.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<title>Site</title>
</head>
	<body>

		<header class="header">
			<div class="container">
				<div class="logo">
					<a class="logo_style" href="<?php BASE_URL; ?>">Logo</a>
				</div>
				<div class="menu">
					<nav class="nav">
						<div class="m_mobile">
							<div class="m_line"></div>
							<div class="m_line"></div>
							<div class="m_line"></div>
						</div>
						<ul class="nav_ul">
							<li class="nav_li active"><a  class="nav_a" href="">HOME</a></li>
							<li class="nav_li"><a class="nav_a" href="">PRODUTOS</a></li>
							<li class="nav_li"><a class="nav_a" href="">SOBRE</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<?php $this->setLoadViewInTemplate($viewName, $viewData); ?>
	
	</body>

	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</html>