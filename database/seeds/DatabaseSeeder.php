<?php

use Illuminate\Database\Seeder;
use App\Models\gender\Gender;
use App\Models\identification_description\Identification_description;
use App\Models\natural_person\Natural_person;
use App\Models\entity_type\Entity_type;
use App\Models\legal_entity\Legal_entity;
use App\Models\affiliation\Affiliation;
use App\Models\appointment_calendar\Appointment_calendar;
use App\Models\user_type\User_type;
use App\User;
use App\Models\state\State;
use App\Models\type_service\Type_service;
use App\Models\service\Service;
use App\Models\service_order\Service_order;
use App\Models\patient_income\Patient_income;
/*use App\Models\refractive\Refractive;*/
use App\Models\principal_diagnostic\Principal_diagnostic;
use App\Models\category\Category;
use App\Models\product\Product;

use App\Models\productImage\ProductImage;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(gender::class, 4)->create();
        factory(Identification_description::class, 4)->create();
        factory(Natural_person::class, 80)->create();
        factory(Entity_type::class, 4)->create();
        factory(Legal_entity::class, 5)->create();
        factory(Affiliation::class, 80)->create();
        
        factory(User_type::class, 3)->create();
        factory(User::class, 80)->create();
        factory(State::class, 3)->create();
        factory(Appointment_calendar::class, 80)->create();
        factory(Type_service::class, 3)->create();
        factory(Service::class, 3)->create();
         factory(Service_order::class, 80)->create();
        factory(Patient_income::class, 80)->create();
        /*factory(Refractive::class, 80)->create();*/
        factory(Principal_diagnostic::class, 5)->create();
        factory(Category::class, 10)->create();
        factory(Product::class, 50)->create();
        
        // factory(ProductImage::class, 100)->create();       
    }
}
