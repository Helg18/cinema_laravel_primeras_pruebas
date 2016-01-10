<div class="top-header">
	<div class="logo">
		<a href="{{ route('home') }}"><img src="images/logo.png" alt="" /></a>
		<p>Cinema</p>
	</div>
		@if(Auth::user())
	<div class="search">
		<form>
			<input type="text" value="Buscar.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
			<input type="submit" value="">
		</form>
	</div>
		@else
		<!-- Small modal -->
		<div class="col-xs-10"></div>
		<div align="rigth" class="col-xs-2">
<button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar Sesion</button>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" align="center">
      <form >
      <table class="table table-hover">
      <thead align="center"><h3>Inicio de sesion</h3></thead>
      	<tr>
      		<td>
      			<strong>Email</strong>
      		</td>
      		<td>
      			<input class="form-control" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email..';}" required autofocus/>      			
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<strong>Password</strong>
      		</td>
      		<td>
      			<input class="form-control" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required/>
      		</td>
      	</tr>
      	<tr>
      		<td colspan="2" align="center">
			      <input type="submit" value="Entrar">
      		</td>
      	</tr>
      </table>
      </form>
    </div>
  </div>
</div>
		</div>
		@endif
	<div class="clearfix"></div>
</div>



