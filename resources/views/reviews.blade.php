@extends('layouts.principal')

@section('title', 'Opiniones')

@section('content')


<div class="review-content">
	<div class="reviews-section">
		<h3 class="head">Criticas de peliculas</h3>
			<div class="col-md-9 reviews-grids">
				<div class="review">
					<div class="movie-pic">
						<a href="{{ route('single') }}"><img src="images/r4.jpg" alt="" /></a>
					</div>
					<div class="review-info">
						<a class="span" href="{{ route('single') }}">Lorem  <i>Interestelar</i></a>
						<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>								
						<p class="ratingview">Critic's Rating:</p>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<p class="ratingview">
						&nbsp;3.5/5  
						</p>
						<div class="clearfix"></div>
						<p class="ratingview c-rating">Avg Readers' Rating:</p>
						<div class="rating c-rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div> 	
						<p class="ratingview c-rating">								
						&nbsp; 3.3/5</p>
						<div class="clearfix"></div>
						<div class="yrw">
							<div class="dropdown-button">           			
								<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
								<option value="0">Su calificacion</option>	
								<option value="1">1. Mala</option>
								<option value="2">1.5 Pobre</option>
								<option value="3">2. Normal</option>
								<option value="4">2.5 Buena</option>
								<option value="5">3.Muy Buena</option>
								<option value="6">3.5 Recomendable</option>
								<option value="7">4.5 Excelente</option>
								<option value="8">5.O La mejor</option>
							  </select>
							</div>
							<div class="rtm text-center">
								<a href="#">Revisar esta pelicula</a>
							</div>
							<div class="wt text-center">
								<a href="#">Ver este trailer</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<p class="info">ELENCO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
						<p class="info">DIRECCION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
						<p class="info">GENERO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crimen</p>
						<p class="info">DURACION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="review">
					<div class="movie-pic">
						<a href="{{ route('single') }}"><img src="images/r6.jpg" alt="" /></a>
					</div>
					<div class="review-info">
						<a class="span" href="{{ route('single') }}">Lorem  <i>Movie Review</i></a>
						<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
						<p class="ratingview">Critic's Rating:</p>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<p class="ratingview">
						&nbsp;3.5/5  
						</p>
						<div class="clearfix"></div>
						<p class="ratingview c-rating">Avg Readers' Rating:</p>
						<div class="rating c-rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div> 	
						<p class="ratingview c-rating">								
						&nbsp; 3.3/5</p>
						<div class="clearfix"></div>
						<div class="yrw">
							<div class="dropdown-button">           			
								<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
								<option value="0">Su calificacion</option>	
								<option value="1">1. Mala</option>
								<option value="2">1.5 Pobre</option>
								<option value="3">2. Normal</option>
								<option value="4">2.5 Buena</option>
								<option value="5">3.Muy Buena</option>
								<option value="6">3.5 Recomendable</option>
								<option value="7">4.5 Excelente</option>
								<option value="8">5.O La mejor</option>
							  </select>
							</div>
							<div class="rtm text-center">
								<a href="#">Revisar esta pelicula</a>
							</div>
							<div class="wt text-center">
								<a href="#">Ver este trailer</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<p class="info">ELENCO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
						<p class="info">DIRECCION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
						<p class="info">GENERO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crimen</p>
						<p class="info">DURACION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="review">
					<div class="movie-pic">
						<a href="{{ route('single') }}"><img src="images/r5.jpg" alt="" /></a>
					</div>
					<div class="review-info">
						<a class="span" href="{{ route('single') }}">Lorem  <i>Movie Review</i></a>
						<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
						<p class="ratingview">Critic's Rating:</p>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<p class="ratingview">
						&nbsp;3.5/5  
						</p>
						<div class="clearfix"></div>
						<p class="ratingview c-rating">Avg Readers' Rating:</p>
						<div class="rating c-rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div> 	
						<p class="ratingview c-rating">								
						&nbsp; 3.3/5</p>
						<div class="clearfix"></div>
						<div class="yrw">
							<div class="dropdown-button">           			
								<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
								<option value="0">Su calificacion</option>	
								<option value="1">1. Mala</option>
								<option value="2">1.5 Pobre</option>
								<option value="3">2. Normal</option>
								<option value="4">2.5 Buena</option>
								<option value="5">3.Muy Buena</option>
								<option value="6">3.5 Recomendable</option>
								<option value="7">4.5 Excelente</option>
								<option value="8">5.O La mejor</option>
							  </select>
							</div>
							<div class="rtm text-center">
								<a href="#">Revisar esta pelicula</a>
							</div>
							<div class="wt text-center">
								<a href="#">Ver este trailer</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<p class="info">ELENCO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
						<p class="info">DIRECCION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
						<p class="info">GENERO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crimen</p>
						<p class="info">DURACION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="review">
					<div class="movie-pic">
						<a href="{{ route('single') }}"><img src="images/r1.jpg" alt="" /></a>
					</div>
					<div class="review-info">
						<a class="span" href="{{ route('single') }}">Lorem  <i>Movie Review</i></a>
						<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
						<p class="ratingview">Critic's Rating:</p>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<p class="ratingview">
						&nbsp;3.5/5  
						</p>
						<div class="clearfix"></div>
						<p class="ratingview c-rating">Avg Readers' Rating:</p>
						<div class="rating c-rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div> 	
						<p class="ratingview c-rating">								
						&nbsp; 3.3/5</p>
						<div class="clearfix"></div>
						<div class="yrw">
							<div class="dropdown-button">           			
								<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
								<option value="0">Su calificacion</option>	
								<option value="1">1. Mala</option>
								<option value="2">1.5 Pobre</option>
								<option value="3">2. Normal</option>
								<option value="4">2.5 Buena</option>
								<option value="5">3.Muy Buena</option>
								<option value="6">3.5 Recomendable</option>
								<option value="7">4.5 Excelente</option>
								<option value="8">5.O La mejor</option>
							  </select>
							</div>
							<div class="rtm text-center">
								<a href="#">Revisar esta pelicula</a>
							</div>
							<div class="wt text-center">
								<a href="#">Ver este trailer</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<p class="info">ELENCO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
						<p class="info">DIRECCION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
						<p class="info">GENERO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crimen</p>
						<p class="info">DURACION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="review">
					<div class="movie-pic">
						<a href="{{ route('single') }}"><img src="images/r3.jpg" alt="" /></a>
					</div>
					<div class="review-info">
						<a class="span" href="{{ route('single') }}">Lorem  <i>Movie Review</i></a>
						<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
						<p class="ratingview">Critic's Rating:</p>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<p class="ratingview">
						&nbsp;3.5/5  
						</p>
						<div class="clearfix"></div>
						<p class="ratingview c-rating">Avg Readers' Rating:</p>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div> 	
						<p class="ratingview">								
						&nbsp; 3.3/5</p>
						<div class="clearfix"></div>
						<div class="yrw">
							<div class="dropdown-button">           			
								<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
								<option value="0">Su calificacion</option>	
								<option value="1">1. Mala</option>
								<option value="2">1.5 Pobre</option>
								<option value="3">2. Normal</option>
								<option value="4">2.5 Buena</option>
								<option value="5">3.Muy Buena</option>
								<option value="6">3.5 Recomendable</option>
								<option value="7">4.5 Excelente</option>
								<option value="8">5.O La mejor</option>
							  </select>
							</div>
							<div class="rtm text-center">
								<a href="#">Revisar esta pelicula</a>
							</div>
							<div class="wt text-center">
								<a href="#">Ver este trailer</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<p class="info">ELENCO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
						<p class="info">DIRECCION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
						<p class="info">GENERO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crimen</p>
						<p class="info">DURACION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			@include('layouts.aside')
		<!---->

			</div>

			<div class="clearfix"></div>
	</div>
	</div>
<div class="review-slider">
	 <ul id="flexiselDemo1">
	<li><img src="images/r1.jpg" alt=""/></li>
	<li><img src="images/r2.jpg" alt=""/></li>
	<li><img src="images/r3.jpg" alt=""/></li>
	<li><img src="images/r4.jpg" alt=""/></li>
	<li><img src="images/r5.jpg" alt=""/></li>
	<li><img src="images/r6.jpg" alt=""/></li>
</ul>
	<script type="text/javascript">
$(window).load(function() {
	
  $("#flexiselDemo1").flexisel({
		visibleItems: 6,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: false,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
				changePoint:480,
				visibleItems: 2
			}, 
			landscape: { 
				changePoint:640,
				visibleItems: 3
			},
			tablet: { 
				changePoint:768,
				visibleItems: 3
			}
		}
	});
	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
</div>		

@stop