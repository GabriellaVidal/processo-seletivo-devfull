@if (session('flash_error'))
	<div class="alert alert-danger alert-dismissible">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	    <h4><i class="icon fa fa-ban"></i> Erro!</h4>
	    {{ session('flash_error') }}
	</div>
@endif

@if (session('flash_success'))
	<div class="alert alert-success alert-dismissible">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	    <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
	    {{ session('flash_success') }}
	</div>
@endif