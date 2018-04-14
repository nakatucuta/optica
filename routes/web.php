<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

/*RUTAS PARA EL CRUD DE LOS METODOS*/
Route::resource('natural_person','Natural_person\Natural_PersonController')->middleware('auth');
Route::resource('legalentity','Legal_entity\Legal_EntityController');
Route::resource('affiliation','Affiliation\AffiliationController');
Route::resource('appointment_calendar','Appointment_calendar\Appointment_calendarController')->middleware('auth');
Route::resource('service','Service\ServiceController');
Route::resource('service_order','Service_order\Service_orderController');
Route::resource('patient_income','Patient_income\Patient_incomeController');
Route::resource('diagnostic','Diagnostic\DiagnosticController');
Route::resource('product','Test\TestController');
Route::resource('category','Category\CategoryController');
Route::resource('devolution','Devolution\DevolutionController');
Route::resource('credit','Credit\CreditController');
Route::resource('cart','Cart\CartController');
Route::resource('permission','Permission\PermissionController');

/*RUTAS PARA LOS RESPORTES EN PDF*/
route::get('/Affiliation/reports/affiliationpdf/{id}','Affiliation\AffiliationController@affiliationPDF')->name('pdfaffiliation');

route::get('/Diagnostic/reports/diagnosticPDF/{id}','Diagnostic\DiagnosticController@diagnosticPDF')->name('pdfdiagnostic');

route::get('/Diagnostic/reports/FormulaPDF/{id}','Diagnostic\DiagnosticController@FormulaPDF')->name('pdfformula');

route::get('/details_venta/reports/facturaPDF/{id}','CartDetail\CartDetailController@facturaPDF')->name('pdffactura');


/*RUTA PARA LA AUTENTICASION*/
Auth::routes();
Route::get('/search', 'Search\SearchController@show');
Route::get('/products/json', 'Search\SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');

/*estas  rutas son la de la pgina inicia donde se listan y muestran con imagens tdos los productos*/
Route::get('/Products/index', 'Test\TestController@welcome');





/*RUTAS PARA LOS DETALLES DE LAS TABLAS*/

Route::get('/Appointment_calendar/detalle/{id}', 'Appointment_calendar\Appointment_calendarController@detalle')->name('mostrar_cita');/*ruta alternativa para mostrar en las citas*/

/*para mostrar detalle en  affiliations*/
Route::get('/Affiliation/detail/{id}', 'Affiliation\AffiliationController@detail')->name('mostrar_afiliado');

/*para mostrar detalle en natural_person*/
Route::get('/Natural_person/detail/{id}', 'Natural_person\Natural_personController@detail')->name('mostrar_persona');

/*para mostrar detalle en legal_entity*/
Route::get('/Legal_entity/detail/{id}', 'Legal_entity\Legal_EntityController@detail')->name('mostrar_entidad');

/*para mostrar en service*/
Route::get('/Service/detail/{id}', 'Service\ServiceController@detail')->name('mostrar_servicio');

/*para mostrar en service order*/
Route::get('/Service_order/detail/{id}', 'Service_order\Service_orderController@detail')->name('mostrar_ordenservicio');


/*para mostrar en patient income*/
Route::get('/Patient_income/detail/{id}', 'Patient_income\Patient_incomeController@detail')->name('mostrar_ingreso');


/*para mostrar en devoluciones*/
Route::get('/Devolution/detail/{id}', 'Devolution\DevolutionController@detail')->name('mostrar_devolucion');

/*para mostrar en abonos*/
Route::get('/Credit/detail/{id}', 'Credit\CreditController@detail')->name('mostrar_detalle');




Route::get('grafic',
[
'as'=>'grafic',
'uses'=> 'Appointment_calendar\Appointment_calendarController@charts'
]);/*ruta para la grafica*/



/*Rutas del carrito de compra UDEMY*/

Route::get('/admin/products', 'Product\ProductController@index');
Route::get('/admin/products/detail1{id}', 'Product\ProductController@detail1')->name('ver');
Route::get('/admin/products/detail{id}', 'Product\ProductController@detail')->name('detalle_producto');

Route::get('/admin/products/create', 'Product\ProductController@create');
Route::get('/admin/products/{id}', 'Product\ProductController@show');


Route::post('/admin/products', 'Product\ProductController@store');
Route::get('/admin/products/{id}/edit', 'Product\ProductController@edit');
Route::post('/admin/products/{id}/edit', 'Product\ProductController@update');
Route::delete('/admin/products/{id}', 'Product\ProductController@destroy');/*aqui le pusiste delte pero es el mismo metodo post que antes era asi: Route::post('/admin/products/{id}/delete', 'Product\ProductController@destroy'); y en la index  le pones esto en la url url('/admin/products/'.$product->id.'/delete') del form para eliminar y le borras este metodo {{ method_field('DELETE') }} y listo queda con post*/


/*aqui terminan*/


/*Rutas para las imagenes*/
Route::get('/admin/products/{id}/images', 'Image\ImageController@index');
Route::post('/admin/products/{id}/images', 'Image\ImageController@store');
Route::delete('/admin/products/{id}/images', 'Image\ImageController@destroy');
Route::get('/admin/products/{id}/images/select/{image}', 'Image\ImageController@select');
/*aui terminan las rutas de imagenes*/


/*RUTAS PARA EL CARRITO DE COMPRA*/
Route::get('/cart', 'CartDetail\CartDetailController@index');
Route::get('/details_venta/{id}/show', 'CartDetail\CartDetailController@show');
Route::post('/cart', 'CartDetail\CartDetailController@store');
Route::delete('/cart', 'CartDetail\CartDetailController@destroy');

/*para finalizar carrito o cambiarlo de estado*/
Route::post('/order', 'Cart\CartController@update');
/*aqui terminan las rutas para el carrito de compras*/


/*Rutas para categorias*/
/*Route::get('/categories', 'Category\CategoryController@index');
Route::get('/categories/create', 'Category\CategoryController@create');
Route::get('/categories/{id}', 'Category\CategoryController@show');
Route::post('/categories', 'Category\CategoryController@store');
Route::get('/categories/{id}/edit', 'Category\CategoryController@edit');
Route::post('/categories/{id}/edit', 'Category\CategoryController@update');
Route::delete('/categories/{id}', 'Category\CategoryController@destroy');*/
/*aqui terminan las rutas para categorias*/


/*ruta para buscar en ingreso*/
Route::get('patient_incomee', 'Patient_income\Patient_incomeController@search')->name('income');

/*Route::get('appointment_calendar', 'Appointment_calendar\Appointment_calendarController@search')->name('appoinmet');
*/
