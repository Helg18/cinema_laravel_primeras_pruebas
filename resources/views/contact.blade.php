@extends('layouts.principal')

@section('title', 'Contact')

@section('content')

			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACTOS</h3>
		 <p>Estamos para ayudarte</p>
		 <div class="contact-form">
			 <form>
				 <div class="col-md-6 contact-left">
					  <input type="text" placeholder="Nombre" required/>
					  <input type="text" placeholder="E-mail" required/>
					  <input type="text" placeholder="Telefono" required/>
				  </div>
				  <div class="col-md-6 contact-right">
					 <textarea placeholder="Mensaje..."></textarea>
					 <input type="submit" value="Enviar"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
	     </div>
		 <div class="contact_info">
			 <h3>Ubicanos</h3>
			 <div class="map">
				<iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#000;text-align:left;font-size:12px">Ver Mapa Mas Grande</a></small>
			</div>
	 </div>
</div>

@stop