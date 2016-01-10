@extends('layouts.principal')

@section('title', 'Videos')

@section('content')


		<div class="video-content">
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3 class="head">Ultimas peliculas agregadas</h3>
					</div>
				</div>
				<!-- pop-up-box --> 
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		 <script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				});
		</script>		

		<!--//pop-up-box -->

				<div class="content-grids">
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum1.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div id="small-dialog" class="mfp-hide">
						<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum2.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum3.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid last-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum4.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum5.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum6.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum7.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid last-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum8.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum9.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum10.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum11.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
					<div class="content-grid last-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum1.jpg" title="allbum-name" /></a>
						<h3>Titulo de la pelicula.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Ver Ahora</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>	

@stop