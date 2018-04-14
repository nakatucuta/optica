@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')

    
@stop

@section('content')
<style>
  #person{

  width: 570%;
  
padding: 500px;

}

 

   
</style>

                

                <div class="panel-body">
                    
                    
                    @if (session('notification'))
                        <div class="alert alert-success">
                             <a class="close" data-dismiss="alert">×</a>
                            {{ session('notification') }}
                        </div>
                    @endif

                     @if (session('notification_save_carrito'))
                        <div class="alert alert-info">
                             <a class="close" data-dismiss="alert">×</a>
                            {{ session('notification_save_carrito') }}
                        </div>
                    @endif

<!-- <img src="{{ asset('images/products/5a3a48feca323error5.jpg') }}" alt="" width="50px" height="200px"> -->








<p>Tu carrito de compras presenta {{ auth()->user()->cart->details->count() }} Productos.</p>
                    <div class="content">

                        <a class="btn btn-primary pull-right"
    style="margin-top: -10px;
    margin-bottom: 5px" href="{{ url('/product') }}">Seguir comprando</a>


    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
        <table class="table table-responsive" id="account-table">
        <thead>

                        <tr id="tit">
                            
                            <th width="20px"  class="text-center">#</th>
                            <th class="col-md-2 text-center" >Nombre</th>
                            <th class="col-md-4 text-center">Descripcion</th>
                            
                            
                            <th class="col-md-2">Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>

                        </tr>
                            
                            <tbody>
                               @foreach(auth()->user()->cart->details as $detail)
                    <tr>
                        
                        
                        
                        <td>
                            <img src="{{  $detail->product->featured_image_url }}" alt="" width="150" height="150">
                            </td>
                        <td><a href="{{ url('/admin/details/'.$detail->product->id) }}" target="_blank">{{ $detail->product->name}}</a></td>
                        <td>{{ $detail->product->description}}</td>
                      
                        <td>{{ $detail->product->price}}</td>
                       
                        <td>{{ $detail->quantity}}</td>
                        <td>${{ $detail->quantity * $detail->product->price }}</td>
                        
                        



                        <td>
                    
                    
                    
                    
                    

                    

                            
                                    
                                    <form method="post" action="{{ url('/cart') }}">
                                    

                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">

                                <a href="{{ url('/admin/products/'. $detail->product->id) }}" title="DETALLE" class="btn btn-link"><span class="icon-zoom-in" ></span></a>

                            
                           



                             <button type="submit"  class="btn btn-link"><span class="icon-cross" ></span></button>
                                    

                                  

                                        
                                </form>

                            
                            
                            

                            
                    
                </td>

                     
                            @endforeach
                             </tr>
                            </tbody>
                        </table>
                                    
                                    <div class="col-md-2 col-md-offset-10">
                                     <p><strong style="color: black">TOTAL A PAGAR:</strong> <h3 style="color: black">${{ number_format(auth()->user()->cart->total , 0) }}</h3></p>
                                     </div>
                            <!-- ojo otra modal -->
                                            

                <form method="post" action="{{ url('/order') }}">
                        {{ csrf_field() }}


                                            
                                              <div class="row">
                    <div class="col-md-7 col-md-offset-0">
                    <div class="form-group">
                    {!!Form::label('natural_people_id','CLIENTE')!!}
                    {!!Form::select('natural_people_id',$person,null,['id'=>'person','name'=>'natural_people_id','class'=>'form-control selectpicker'])  !!}
                    </div>
                    </div>
                    
                    <div align="right" class="col-md-5 col-md-offset-0">
                            {!!Form::label('paid_value','Valor Pagado')!!}

                            {!!Form::number('paid_value',null,['class'=>'form-control','name'=>'paid_value'])!!}
                            </div>

                    </div>
                            

                     <button   ><i><span class="icon-checkmark2" title="ELIMINAR"></i>Finalizar Compra</button>
                </form>

                
            </div>
        </div>
    </div>



                   
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$("#person").select2({

/*dropdownParent: $('#myModal')*/


});





</script>
@stop
