<?php

    namespace App\database;

    use Illuminate\Database\Capsule\Manager as Capsule;

    class DB {

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

        public function show($table)
        {
            return Capsule::table($table)->get();
        }

        public function showEach($table,$id) {
            return Capsule::table($table)->where('id',$id)->first();
        }

        public function insert($table,$query)
        {
            $insert = Capsule::table($table)->insert($query);
            return $insert;
        }

        public function delete($table,$id) {
            $delete = Capsule::table($table)->where('id',$id)->delete();
            return $delete;
        }

        public function truncate($table) {
            try{
                return Capsule::table($table)->truncate();
            }catch(PDOException $error){
                var_dump($error);
            }
        }

        public function update($table,$id,$queryData){

            $update = Capsule::table($table)
                                ->where('id',$id)
                                ->update($queryData);

            return $update;
        }



    }

    

    
    


?>