<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'editar_pn' => \App\Http\Middleware\Admin_edit_pnMiddleware::class,
        'eliminar_pn' => \App\Http\Middleware\Admin_elim_pnMiddleware::class,

        /*aqui comienzan los de afiliados*/
        'insert_af' => \App\Http\Middleware\afiliacion\Admin_insert_afMiddleware::class,
        'edit_af' => \App\Http\Middleware\afiliacion\Admin_edit_afMiddleware::class,
        'elim_af' => \App\Http\Middleware\afiliacion\Admin_elim_afMiddleware::class,
        /*aqui comienzan los de las citas*/
        'insert_cit' => \App\Http\Middleware\citas\Admin_insert_citMiddleware::class,
        'edit_cit' => \App\Http\Middleware\citas\Admin_edit_citMiddleware::class,
        'elim_cit' => \App\Http\Middleware\citas\Admin_elim_citMiddleware::class,
        /*aqui comienzan los de los ingresos*/
        'elim_ingre' => \App\Http\Middleware\ingresos\Admin_elim_ingreMiddleware::class,
        'edit_ingre' => \App\Http\Middleware\ingresos\Admin_edit_ingreMiddleware::class,
        'insert_ingre' => \App\Http\Middleware\ingresos\Admin_insert_ingreMiddleware::class,
        /*aqui comnienzan los de autorizacion*/
        'insert_auto' => \App\Http\Middleware\autorizacion\Admin_insert_autoMiddleware::class,
         'edit_auto' => \App\Http\Middleware\autorizacion\Admin_edit_autoMiddleware::class,
         'elim_auto' => \App\Http\Middleware\autorizacion\Admin_elim_autoMiddleware::class,
         /*aqui comienzan los de historial clinico*/
         'insert_hitcl' => \App\Http\Middleware\historiacl\Admin_insert_historiaclMiddleware::class,
         'edit_hitcl' => \App\Http\Middleware\historiacl\Admin_edit_historiaclMiddleware::class,
         'elim_hitcl' => \App\Http\Middleware\historiacl\Admin_elim_historiaclMiddleware::class,
         /*aqui comienzan los de entidades*/
         'insert_entity' => \App\Http\Middleware\entity\Admin_insert_entyMiddleware::class,
         'edit_entity' => \App\Http\Middleware\entity\Admin_edit_entyMiddleware::class,
         'elim_entity' => \App\Http\Middleware\entity\Admin_elim_entyMiddleware::class,
         /*aqui comienzan los de servicios*/
         'insert_service' => \App\Http\Middleware\service\Admin_insert_serviceMiddleware::class,
         'edit_service' => \App\Http\Middleware\service\Admin_edit_serviceMiddleware::class,
         'elim_service' => \App\Http\Middleware\service\Admin_elim_serviceMiddleware::class,
         /*aqui los de tipo de productos*/
         'insert_tiproduct' => \App\Http\Middleware\tip_product\Admin_insert_tiproductMiddleware::class,
         /*aqui los de productos*/
         'insert_product' => \App\Http\Middleware\product\Admin_insert_productMiddleware::class,
         'edit_product' => \App\Http\Middleware\product\Admin_edit_productMiddleware::class,
         'elim_product' => \App\Http\Middleware\product\Admin_elim_productMiddleware::class,
         /*aqui los de devolucion*/
         'insert_dev' => \App\Http\Middleware\devolucion\Admin_insert_devMiddleware::class,
         'elim_dev' => \App\Http\Middleware\devolucion\Admin_elim_devMiddleware::class,
         /*aqui los de ventas*/
            'indx_sales' => \App\Http\Middleware\ventas\Admin_indx_saleMiddleware::class,
            /*aqui los de facturas*/
            'insert_factura' => \App\Http\Middleware\factura\Admin_insert_facturaMiddleware::class,
            'elim_factura' => \App\Http\Middleware\factura\Admin_elim_facturaMiddleware::class,
            /*aqui los de abonos*/
            'insert_abonos' => \App\Http\Middleware\abonos\Admin_insert_abonosMiddleware::class,
             'edit_abonos' => \App\Http\Middleware\abonos\Admin_edit_abonosMiddleware::class,
             'elim_abonos' => \App\Http\Middleware\abonos\Admin_elim_abonosMiddleware::class,
        
        
    ];
}
