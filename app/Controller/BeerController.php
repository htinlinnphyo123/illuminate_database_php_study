<?php

    namespace App\Controller;

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Model\Beer;

    class BeerController {
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
            return Beer::get();
        }

        public function showEach($id) {
            return Beer::find($id);
        }

        public function destroy($id){
            return Beer::find($id)->delete();
        }

        public function insert($query) {
            try{
                Beer::create();
            }catch(PDOException $err){
                var_dump($err);
                // return $err->getMessage();
            }
        }



        //update function is tested in app/service/update.php file

    }

?>