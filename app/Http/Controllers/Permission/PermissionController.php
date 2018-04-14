<?php

namespace App\Http\Controllers\Permission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\permission\Permission;
use App\User;
use App\Models\permission_serventity\Permission_serventity;
use App\Http\Requests\permits\permits_insertCreateRequest;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*LO QUE HABIA*/
        $permisos = Permission::orderBy('id','DESC')->paginate();
         
        
        return view('permits.index')->with(compact('permisos'));



       /* $citaconsulta = \DB::table('users')
         ->select( \DB::raw('CONCAT(users.name) AS citaconsulta '),'users.id')
         
        ->whereNotIn('users.id', function($q){
 $q->select('user_id')->from('permissions');
     })
         
         ;

  
    

         $person = $citaconsulta->get()->pluck('citaconsulta','id')->prepend('selecciona',0);

         return view('permits.create',["person"=>$person]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $person = User::get()->pluck('name','id')->prepend('selecciona',0);

         



           



           

         $citaconsulta = \DB::table('users')
         ->select( \DB::raw('CONCAT(users.name) AS citaconsulta '),'users.id')
         
        ->whereNotIn('users.id', function($q){
 $q->select('user_id')->from('permissions');
     })
         
         ;

  
    

         $person = $citaconsulta->get()->pluck('citaconsulta','id')->prepend('selecciona',0);

         return view('permits.create',["person"=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(permits_insertCreateRequest $request)
    {
        $permisos = new Permission;
        $permisos2 = new Permission_serventity;
        
        $permisos->user_id = $request->user_id;
        $permisos->insert_n = $request->insert_n;
        $permisos->editar_natural =$request->editar_natural;
        $permisos->eliminar_natural =$request->eliminar_natural;
                    
                        
        $permisos->insertar_afiliacion = $request->insertar_afiliacion;
        $permisos->editar_afiliacion = $request->editar_afiliacion;
        $permisos->eliminar_afiliacion = $request->eliminar_afiliacion;


         $permisos->insertar_citas = $request->insertar_citas;
        $permisos->editar_citas = $request->editar_citas;
        $permisos->eliminar_citas = $request->eliminar_citas;


        $permisos->insertar_ingreso = $request->insertar_ingreso;
        $permisos->editar_ingreso = $request->editar_ingreso;
        $permisos->eliminar_ingreso = $request->eliminar_ingreso;


        $permisos->insertar_autorizacion = $request->insertar_autorizacion;
        $permisos->editar_autorizacion = $request->editar_autorizacion;
        $permisos->eliminar_autorizacion = $request->eliminar_autorizacion;


            

        $permisos->insertar_historialc = $request->insertar_historialc;
        $permisos->editar_historialc = $request->editar_historialc;
        $permisos->eliminar_historialc = $request->eliminar_historialc;
        $permisos->save();


        $permisos2->insertar_entidades = $request->insertar_entidades;
        $permisos2->editar_entidades = $request->editar_entidades;
        $permisos2->eliminar_entidades = $request->eliminar_entidades;

        $permisos2->insertar_producto = $request->insertar_producto;
        $permisos2->editar_producto = $request->editar_producto;
        $permisos2->eliminar_producto = $request->eliminar_producto;



        




        $permisos2->insertar_devolucion = $request->insertar_devolucion;
        $permisos2->eliminar_devolucion = $request->eliminar_devolucion;

        $permisos2->vender = $request->vender;
        

        $permisos2->insertar_factura = $request->insertar_factura;
        
        $permisos2->eliminar_factura = $request->eliminar_factura;
        $permisos2->insertar_abonos = $request->insertar_abonos;
        $permisos2->editar_abonos = $request->editar_abonos;
        $permisos2->eliminar_abonos = $request->eliminar_abonos;


        $permisos2->insertar_servicios = $request->insertar_servicios;
        $permisos2->editar_servicios = $request->editar_servicios;
        $permisos2->eliminar_servicios = $request->eliminar_servicios;
        $permisos2->tipo_producto = $request->tipo_producto;
        $permisos2->permission_id = $permisos->id ;
             $permisos2->save();
        


                   
                     
                    
                     
      
                 return redirect()->route('permission.index')
                  ->with('info','Los Permisos Fueron Agregados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permisos = Permission::find($id);
        $permisos2 =  Permission_serventity::find($id);


        $citaconsulta = \DB::table('users')
         ->select( \DB::raw('CONCAT(users.name) AS citaconsulta '),'users.id');
         
        

        $person = $citaconsulta->get()->pluck('citaconsulta','id');



         return view('permits.edit',["permisos"=>$permisos,"person"=>$person,"permisos2"=>$permisos2]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $permisos = Permission::find($id);
        $permisos2 =  Permission_serventity::find($id);

        $permisos->user_id = $request->user_id;
        $permisos->insert_n = $request->insert_n;
        $permisos->editar_natural =$request->editar_natural;
        $permisos->eliminar_natural =$request->eliminar_natural;
                    
                        
        $permisos->insertar_afiliacion = $request->insertar_afiliacion;
        $permisos->editar_afiliacion = $request->editar_afiliacion;
        $permisos->eliminar_afiliacion = $request->eliminar_afiliacion;


         $permisos->insertar_citas = $request->insertar_citas;
        $permisos->editar_citas = $request->editar_citas;
        $permisos->eliminar_citas = $request->eliminar_citas;


        $permisos->insertar_ingreso = $request->insertar_ingreso;
        $permisos->editar_ingreso = $request->editar_ingreso;
        $permisos->eliminar_ingreso = $request->eliminar_ingreso;


        $permisos->insertar_autorizacion = $request->insertar_autorizacion;
        $permisos->editar_autorizacion = $request->editar_autorizacion;
        $permisos->eliminar_autorizacion = $request->eliminar_autorizacion;


            

        $permisos->insertar_historialc = $request->insertar_historialc;
        $permisos->editar_historialc = $request->editar_historialc;
        $permisos->eliminar_historialc = $request->eliminar_historialc;
        $permisos->save();


        $permisos2->insertar_entidades = $request->insertar_entidades;
        $permisos2->editar_entidades = $request->editar_entidades;
        $permisos2->eliminar_entidades = $request->eliminar_entidades;

        $permisos2->insertar_producto = $request->insertar_producto;
        $permisos2->editar_producto = $request->editar_producto;
        $permisos2->eliminar_producto = $request->eliminar_producto;



        




        $permisos2->insertar_devolucion = $request->insertar_devolucion;
        $permisos2->eliminar_devolucion = $request->eliminar_devolucion;

        $permisos2->vender = $request->vender;
        

        $permisos2->insertar_factura = $request->insertar_factura;
        
        $permisos2->eliminar_factura = $request->eliminar_factura;
        $permisos2->insertar_abonos = $request->insertar_abonos;
        $permisos2->editar_abonos = $request->editar_abonos;
        $permisos2->eliminar_abonos = $request->eliminar_abonos;


        $permisos2->insertar_servicios = $request->insertar_servicios;
        $permisos2->editar_servicios = $request->editar_servicios;
        $permisos2->eliminar_servicios = $request->eliminar_servicios;
        $permisos2->tipo_producto = $request->tipo_producto;
        $permisos2->permission_id = $permisos->id ;
             $permisos2->save();



             return redirect()->route('permission.index')->with('info',' El Historial Clinico Fue Modificado Exitosamente..!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
