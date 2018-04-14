<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\cart\Cart;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function user_type ()
        {
        
            return $this->belongsTo('User_type::class');
        
        }


        public function permissions()
        {
             return $this->hasOne('App\Models\permission\Permission');
        }


     public function Appointment_calendars ()
     {
     
         return $this->hasMany('App\Models\appointment_calendar\Appointment_calendar');
     
     }


     public function carts ()
     {
     
         return $this->hasMany('App\Models\cart\Cart');
     
     }

     public function devolutions()
    {
         return $this->hasMany('App\Models\devolution\Devolution');
    }


    public function credits(){

            return $this->hasMany('App\Models\credit\Credit');
        }

     public function getCartAttribute(){

         $cart = $this->carts()->where('status', 'Active')->first();
        if ($cart) 
            return $cart;



            $cart = new Cart();
            $cart->status = 'Active';
            $cart->user_id = $this->id;
            
            $cart->save();
            return $cart;
        

     }



    

}
