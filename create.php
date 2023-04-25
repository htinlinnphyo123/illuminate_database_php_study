<?php

    require_once __DIR__ . '/vendor/autoload.php';
    use App\database\DB;

    $database = new DB();
    $countries = $database->show('countries');

?>

<!DOCTYPE html>
<head>
    <title>Create Beers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
        
    <div class="container">
        <div class="row mt-4 p-3 shadow rounded-sm">
            <div class="col-11 mx-auto">
                <div class="">
                    <form action="./app/service/create.php" method="POST">
                        <h3 class="display-5 text-center text-shadow">Create Beers</h3>
                        <?php if(isset($_GET['error'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            Something wrong
                        </div>
                        <?php endif; ?>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your beer Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="country">Made By Country : </label>
                            <select name="country" class="form-select">
                                <option value="" selected>Choose your country</option>
                                <?php foreach($countries as $c) : ?>
                                    <option value="<?php echo $c->short_term ?>"><?php echo $c->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Price (Eg:5000)">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>