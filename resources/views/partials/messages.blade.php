<!-- @if(count($errors)>0)
<div class="alert alert-danger" role="alert">

	<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }} </li>
	@endforeach	
	</ul>
</div>

@endif -->




@if(count($errors))

<div class="alert alert-danger">

<button type="button" class="close" data-dismiss="alert"><!-- la etiqueta del mensaje del error -->
    &times;<!-- este hace la x para cerrar el mensaje -->
</button>

<ul>
    
    @foreach($errors->all() as $error)
        
        <li> {{ $error }}</li>

    @endforeach
</ul>
    
</div>

@endif


@if(Session::has('save'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Guardado!</strong> {!!Session::get('save')!!}
        </div>
@endif


@if(Session::has('delete'))
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Eliminado!</strong> {!!Session::get('delete')!!}
        </div>
@endif


@if(Session::has('update'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Actualizado!</strong> {!!Session::get('update')!!}
        </div>
@endif


@if(Session::has('message-error'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Sin privilegios!</strong> {!!Session::get('message-error')!!}
        </div>
@endif

@if(Session::has('error-1'))
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
            <strong>ERROR!</strong> {!!Session::get('error-1')!!}
        </div>
@endif

@if(Session::has('error-2'))
<div class="col-ls-2">
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
            <strong>WARNIG!</strong> {!!Session::get('error-2')!!}
        </div>
        </div>
@endif


@if(Session::has('error-carrito'))
<div class="col-ls-2">
        <div class="alert alert-warning">
            <a class="close" data-dismiss="alert">×</a>
            <strong>WARNIG!</strong> {!!Session::get('error-carrito')!!}
        </div>
        </div>
@endif

<!-- @if(Session::has('error-3'))
<div class="container">
    <div class="row" id="error-container">
         <div class="span12">  
             <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>WARNIG!</strong> {!!Session::get('error-3')!!}
             </div>
         </div>
    </div>
</div>
@endif -->


@if(Session::has('privilegios'))

<div class="alert alert-warning" style=" border-style: dashed;">

<button type="button" class="close" data-dismiss="alert">
&times;
    
</button>
    <strong>Sin privilegios!</strong>{{Session::get('privilegios')}}
</div>

@endif