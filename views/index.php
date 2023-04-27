<!DOCTYPE html>
<html lang="en">
<head>
    <title>H4P6 Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto mt-4">
                <a href="/create" class="btn btn-primary rounded-sm">Add Beers</a>
                <a href="./app/service/truncate.php" class="btn btn-danger rounded-sm">Delete All</a>
                <?php if(count($beers)==0) : ?>
                    <p class="fw-bolder display-5 text-primary mt-4 text-center">No beer in this list. please fill your beer by clicking "Add Beers" button.</p>
                <?php else : ?>
                <table class="table bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Country</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($beers as $beer) : ?>
                        <tr>
                            <td><?php echo $beer->id ?></td>
                            <td><?php echo $beer->name ?></td>
                            <td><?php echo $beer->price ?></td>
                            <td><?php echo $beer->country ?></td>
                            <td>
                                <a href="./edit?id=<?php echo $beer->id ?>" class="btn btn-primary">Edit</a>
                                <a href="./delete?id=<?php echo $beer->id ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>
</html>