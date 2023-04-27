<?php

    namespace App\Controller;

    require_once __DIR__ . "/../../vendor/autoload.php";

    use Illuminate\Database\QueryException as PDOException;
    use Symfony\Component\HttpFoundation\Request;
    use App\Model\Beer;
    use App\Model\Country;

    class RouteController {
        public $request;
        public function __construct()
        {
            $this->request = Request::createFromGlobals();
        }

        public function index()
        {
            $beers = Beer::get();
            view('index.php',['beers'=>$beers]);
        }

        public function create()
        {
            $countries = Country::get();
            view('create.php',['countries'=>$countries]);
        }

        public function store() 
        {
            try{
                Beer::create($this->request->request->all());
                header("location: /");
            }catch(PDOException $err){
                $error = $err->getMessage();
                back("?error=$error");
            }
        }
        
        public function edit()
        {
            $id = $this->request->query->get("id");
            $beer = Beer::find($id);
            $countries = Country::get();
            view('editPage.php',['beer'=>$beer , 'countries'=>$countries]);
        }

        public function update()
        {
            if($this->validate($this->request->request->all())===false){
                back('&error=something wrong');
            }
            $id = $this->request->request->get("id");
            Beer::find($id)->update($this->request->request->all());
            header("location: /");
        }   

        public function delete()
        {
            $id = $this->request->query->get("id");
            Beer::destroy($id);
            $beers = Beer::get();
            header('location: /');
        }





        public function validate($requests)
        {
            foreach($requests as $request){
                if($request==='') {
                    return false;
                }
            }
            return true;
        }
    }


?>