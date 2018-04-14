
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

#person1{

	width: 550%;
	
padding: 500px;

}

/*#person2{

  width: 250%;
  
padding: 500px;

}*/
body {font-family: Arial; color: black;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 20px;
}

.topright:hover {color: red;}
   
</style>













 



        
@include('partials.messages')
@include('Diagnostic.searchcreate')
            <div class="panel panel-info">
               <!--  <div class="panel-heading">
                    Crear 
                </div> -->

                <div class="panel-body">
                    <p>Click en las ventanas para ver opciones:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'diagnostico')">Diagnostico</button>


  <button class="tablinks" onclick="openCity(event, 'Paris')">Ojo Derecho</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ojo Izquierdo</button>
 <!--  <button class="tablinks" onclick="openCity(event, 'previus')">Segmento anterior</button> -->
  <button class="tablinks" onclick="openCity(event, 'rear')">Segmento trasero</button>
  <button class="tablinks" onclick="openCity(event, 'formula')">Formula</button>
  

</div>


					{!! Form::open(['route'=>'diagnostic.store']) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->
         
    @include('Diagnostic.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

    {!! Form::close() !!}

<h3>&nbsp</h3>
    
    


</div>
        
      </div>
        
    
  @include('Diagnostic.indexcreate') 
    <script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@stop