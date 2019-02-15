<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ArmeriaLab</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="jquery-ui.min.css">
		<script src="jquery-3.3.1.min.js"></script>
		<script src="jquery-ui.min.js"></script>
		<script src="jquery.form.js"></script>
		<script src="script.js"></script>
</head>
<body>
	<div class="site-wrapper">
		<header class="flex-row" id="header">
			<div class="header-leftSide flex-row">
				<img src="./header-logo.png" alt="header-logo">
				<span>Тайное<br>Мировое<br>Правительство</span>
			</div>
			<div class="header-rightSide flex-row">
				<nav class="header-menu">
					<span>+1 666 666 66 66</span>
					<span>О власти рептилоидов</span>
					<span>Крах доллара</span>
					<span>Теории заговора</span>
				</nav>
			</div>
			<div class="active">
			<div id="mini-menu">
				<div class="sandwich">
					<span class="sandwichLine sandwichLineTop"></span>
					<span class="sandwichLine sandwichLineMiddle"></span>
					<span class="sandwichLine sandwichLineBottom"></span>
				</div>
				<div class="display-menu flex-column">
					<span>+1 666 666 66 66</span>
					<span>О власти рептилоидов</span>
					<span>Крах доллара</span>
					<span>Теории заговора</span>
				</div>
			</div>
			</div>
		</header>	
	
		<div class="content-wrapper ">
			<form class="content-form" action="calc.php" method="post">
				<div>
					<p class="form-title">Подписаться на ежемесячные взносы на строительство секретной базы в антарктиде</p>
					<div class="flex-column">
						<div class="flex-row mobile-flex-column">
							<div class="flex-row" >
							<div class="flex-column date-of-deposit">
								<span class="formSpan-rLight">Дата вклада</span>
								<input type="text" id="datepicker" name="date" required="required" />
							</div>
							<div class="flex-column term-of-deposit">
								<span class="formSpan-rLight">Срок вклада</span>
								<select name="years">
									<datalist id="term-of-deposit">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</datalist>
								</select>
							</div>
						</div>
							<div class="flex-column automatic-renewal">
								<span class="formSpan-rLight">Автоматическое продление</span>
								<div class="radio-wrapper flex-row">
									<div class="radio-circle">
										<input type="radio" id="auto-renewal-yes" name="auto-renewal" value="Да"/>
										<label for="auto-renewal-yes">Да</label>
									</div>
									<div class="radio-circle">
										<input type="radio" id="auto-renewal-no" name="auto-renewal" value="Нет"  checked="checked"/>
										<label for="auto-renewal-no">Нет</label>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-row deposit-amount mobile-flex-column">
								<div class="flex-column ">
									<span class="formSpan-rLight">Сумма вклада</span>
									<input type="number" id="deposit-amount" name="deposit-amount" />
								</div>
								<div class="range">
									<span class="formSpan-rMedium">100 р</span>
									<input type="range" min="100" max="3000000" step="1" value="100" id="deposit-amount-range"> 
									<span class="formSpan-rMedium">3 000 000 р</span>
								</div>
						</div>
						<div class="deposit-replenishment">
							<span class="formSpan-rLight ">Пополнение вклада</span>
							<div class="radio-wrapper flex-row">
								<div class="radio-circle">
									<input type="radio" id="deposit-replenishment-yes" name="deposit-replenishment" value="Да"/>
									<label for="deposit-replenishment-yes">Да</label>
								</div>
								<div class="radio-circle">
									<input type="radio" id="deposit-replenishment-no" name="deposit-replenishment" value="Нет" checked="checked"/>
									<label for="deposit-replenishment-no">Нет</label>
								</div>
							</div>
						</div>
						<div class="flex-row amount-per-month mobile-flex-column">
							<div class="flex-column">
								<span class="formSpan-rLight">Сумма в месяц</span>
								<input type="number" id="amount-per-month" name="amount-per-month" />
							</div>
							<div class="range">
								<span class="formSpan-rMedium">100 р</span>
								<input type="range" min="100" max="3000000" step="1" value="50" id="amount-per-month-range"> 
								<span class="formSpan-rMedium">3 000 000 р</span>
							</div>
						</div>
						<div class="final-deposit flex-row">
							<span class="formSpan-rLight-last">Мой вклад в деятельность тайного<br>мирового правительства составит:</span>
							<span class="final-deposit-value" id="final-value">---</span>
						</div>
						<input class="btn-submit" type="submit" value="Подписаться"/>					
					</div>
				</div>
			</form>
		</div>

		<footer class="flex-row mobile-flex-column">
			<div class="footer-menu flex-row mobile-flex-column">
				<div class="flex-row">
					<span>Об организации</span>
					<span>Клоны президентов</span>
				</div>
				<span>Политика конфиденциальности</span>
			</div>
			<div class="we-are-anonymous">
				<span>Сделано анонимно</span>
			</div>
		</footer>
	</div>
</body>
</html>