<?php

    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;

    class Beer extends Model {
        protected $table = 'beers';
        protected $fillable = ['name','country','price'];
        public $timestamps = false;
    
        
    }
    

?>