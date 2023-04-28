<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Doctor</title>
	<link rel="stylesheet" type="text/css" href="null_style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
		<div class="container">
			<a href="#" class="navbar-brand">MedLink</a>

			<div class="navbar-wrap">
				<ul class="navbar-menu">
					<li><a href="#">Онлайн прийом</a></li>
					<li><a href="#">Замовлення ліків</a></li>
					<li><a href="#">Донорство крові</a></li>
					<li><a href="#">Вакцинація</a></li>
				</ul>
			</div>

			<a href="#" class="callback">Особистий кабінет</a>
		</div>
		<main>
			<article class="top-menu">
				<h2>Знайдіть лікарів, клініку або ліки онлайн</h2>
				<h3>Записуйтесь не виходячи з дому</h3>
				<form class="find-med">
					<div class="find-input" id="drop-item-1">
						<div class="dropdown">
							<button type="button" class="dropdown-button">Записатися до лікаря</button>
							<ul class="dropdown-list">
								<li class="dropdown-list-item" data-value="lol1">Записатися до лікаря</li>
								<li class="dropdown-list-item" data-value="lol">Знайти клініку</li>
								<li class="dropdown-list-item"  data-value="lol">Замовити ліки</li>
							</ul>	
							<input type="text" name="select-find-inputaction" value="lol1" class="dropdown-input-hidden">
						</div>			
					</div>
					<div class="find-input" id="drop-item-2">
						<input class="find_query" placeholder="Введіть прізвище або спеціальність" type="text" name="find_query">
					</div>
					<div class="find-input" id="drop-item-3">
						<button class="find-submit-button">
							Знайти
						</button>
					</div>
				</form>
				<div class="top-cards">
					<div class="card_item_box">
						<div class="card_item1"></div>
						<div class="card_item2"></div>
					</div>
					<div class="card_item_box">
						<div class="card_item2"></div>
						<div class="card_item1"></div>
					</div>
					<div class="card_item_box">
						<div class="card_item1"></div>
						<div class="card_item2"></div>
					</div>
					<div class="card_item_box">
						<div class="card_item2"></div>
						<div class="card_item1"></div>
					</div>
				</div>
			</article>
		</main>
	</div>
<script src="dropdown.js"></script>
</body>
</html>