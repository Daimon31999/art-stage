<?php 
	$id = "main";
	$main_slider = '
	<div id="wrapper">
		<div id="container">
			<div class="sliderbutton" id="slideleft" onclick="slideshow.move(-1)"></div>
			<div id="slider">
				<ul>
					<li><img src="img/photos/1.jpg" class="photo" alt="Первое фото" /></li>
					<li><img src="img/photos/2.jpg" class="photo" alt="Второе фото" /></li>
					<li><img src="img/photos/3.jpg" class="photo" alt="Третье фото" /></li>
					<li><img src="img/photos/4.jpg" class="photo" alt="Четвертое фото" /></li>
					<li><img src="img/photos/5.jpg" class="photo" alt="Пятое фото" /></li>
					<li><img src="img/photos/6.jpg" class="photo" alt="Шестое фото" /></li>
					<li><img src="img/photos/7.jpg" class="photo" alt="Седьмое фото" /></li>
				</ul>
			</div>
			<div class="sliderbutton" id="slideright" onclick="slideshow.move(1)"></div>
			<ul id="pagination" class="pagination">
				<li onclick="slideshow.pos(0)"></li>
				<li onclick="slideshow.pos(1)"></li>
				<li onclick="slideshow.pos(2)"></li>
				<li onclick="slideshow.pos(3)"></li>
				<li onclick="slideshow.pos(4)"></li>
				<li onclick="slideshow.pos(5)"></li>
				<li onclick="slideshow.pos(6)"></li>
			</ul>
		</div>
	</div>
<br>
<script type="text/javascript">
var slideshow=new TINY.slider.slide("slideshow",{
	id:"slider",
	auto:4,
	resume:false,
	vertical:false,
	navid:"pagination",
	activeclass:"current",
	position:0,
	rewind:false,
	elastic:true,
	left:"slideleft",
	right:"slideright"
});
</script>
';
	include "template.php";
?>
