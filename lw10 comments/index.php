<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="web/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <title>Don`t do it</title>
</head>
<body>
	<header>
		<div class="logo">Don`t <span class="color-pink">do </span>it</div>
		<div class="header__navigation">
			<span class="header__navigation_items">Что будет на курсе?</span>
			<span class="header__navigation_items">Вопросы</span>
			<span class="header__navigation_items">Автор</span>
			<button class="button__short">Записаться на курс</button>
		</div>
	</header>
	<div class="main">
		<div class="main__block1">
			<div class="main__block1_logo">Не <span class="color-pink">делай</span> это</div>
			<div class="main__block1_description">Онлайн-курс для творческих людей, о том, как управлять своим временем </div>
			<button class="button__long">Записаться на курс</button>
		</div>
		<div class="main__block2">
			<img class="main__block2_image" src="web/images/done.png" alt="">
		</div>
	</div>
	<div class="for-whom">
		<div class="for-whom__block">
			<div class="for-whom__block1">
				<img src="web/images/Group.svg" alt="">
				<span class="for-whom__block1_text">Для тех, у кого слишком много идей и слишком мало времени</span>
			</div>
			<div class="for-whom__block2">
				<img src="web/images/notebook.svg" alt="">
				<span class="for-whom__block2_text">Метод «списка не дел», который позволит успевать и реализовывать</span>
			</div>
			<div class="for-whom__block3">
				<img src="web/images/target.svg" alt="">
				<span class="for-whom__block3_text">Курс научит творческих людей сосредоточиваться</span>
			</div>
		</div>
	</div>
	<div class="motivation">
		<div class="motivation1">
			<img class="motivation1__block1" src="web/images/finances.svg" alt="">
			<div class="motivation1__block2">
				<span class="motivation1__block2_text1">Ты не успеешь</span>
				<span class="motivation1__block2_text2">Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</span>
			</div>
		</div>
		<div class="motivation2">
			<div class="motivation2__block1">
				<span class="motivation2__block1_text1">Опять дедлайн</span>
				<span class="motivation2__block1_text2">В мире, где столько всего интересного, когда же успевать жить?</span>
			</div>
			<img class="motivation2__block2" src="web/images/mindblowing.svg" alt="">
		</div>
	</div>
	<div class="table">
		<h2 class="table__title">На курсе ты <span class="color-pink">сможешь</span></h2>
		<div class="table__content">
			<div class="table__block">
				<div>
					<img src="web/images/vector.svg" alt="">
				</div>
				<span class="table__text">Понять, что нужно делать, а что делать не стоит.</span>
			</div>
			<div class="table__block">
				<div>
					<img src="web/images/vector1.svg" alt="">
				</div>
				<span class="table__text">Перестать себя искусственно ограничивать.</span>
			</div>
			<div class="table__block">
				<div>
					<img src="web/images/vector2.svg" alt="">
				</div>
				 <span class="table__text">Определить сильные стороны и начать использовать слабые. </span>
			</div>
			<div class="table__block">
				<div>
					<img src="web/images/vector3.svg" alt="">
				</div>
				 <span class="table__text">Научиться достигать любой цели в 3 понятных шага. </span>
			</div>
			<div class="table__block">
				<div>
					<img src="web/images/vector4.svg" alt="">
				</div>
				 <span class="table__text">Сотрудничать эффективно и с правильными людьми. </span>
			</div>
			<div class="table__block">
				<div>
					<img src="web/images/vector5.svg" alt="">
				</div>
				 <span class="table__text">Оптимизировать общение с клиентами и проведение совещаний. </span>
			</div>
		</div>
    </div>
	<div class="popup__bg" id="popup__bg>
	  <?php
        include 'src/form.php'
  	  ?>
	</div>
	<footer>
		<div class="footer__logo logo">Don`t <span class="color-pink">do</span> it</div>
	</footer>
	<script src="web/js/popupAnimation.js"></script>
</body>
</html>
