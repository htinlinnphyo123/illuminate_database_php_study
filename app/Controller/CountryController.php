<?php

    namespace App\Controller;

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Model\Country;

    class CountryController {
        public function __construct()
        {
            $capsule = new Capsule;

            $capsule->addConnection([
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'h4p6_company',
                'username' => 'root',
                'password' => '12345',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => '',
            ]);
        
            // Make this DB instance available globally via static methods... (optional)
            $capsule->setAsGlobal();
        
            // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
            $capsule->bootEloquent();

        }

        public function show() {
            return Country::get();
        }


}

?>
