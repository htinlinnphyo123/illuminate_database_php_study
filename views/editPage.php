<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beer Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row mt-4 p-3 shadow rounded-sm">
            <div class="col-11 mx-auto">
                <div class="">
                    <form action="/update" method="POST">
                        <h3 class="display-5 text-center text-shadow">Edit Beer</h3>
                        <?php if(isset($_GET['error'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                Something wrong
                            </div>
                        <?php endif; ?>
                        <input type="hidden" name="id" value="<?php echo $beer->id ?>">
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $beer->name ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="country">Made By Country : </label>
                            <select name="country" class="form-select">
                                <?php foreach($countries as $c) : ?>
                                    <option value="<?php echo $c->short_term ?>" <?php if($c->short_term===$beer->country) echo "selected" ?>><?php echo $c->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" value="<?php echo $beer->price ?>">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>