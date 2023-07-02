<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="main">
      <div class="abbas">
      <form action="insert.php" method="POST" enctype="multipart/form-data" >
    <p class="h3">Add Items</p>
    <div class="mb-3">
    <input type="text" name="title" class="form-control"  placeholder="Title">
    </div>
    <div class="mb-3">
    <input type="int" name="price" class="form-control"  placeholder="Price">
    </div>
    <div class="mb-3">
    <input type="text" name="accessories" class="form-control"  placeholder="Accessories">
    </div>
    <div class="mb-3">
    <input type="int" name="paccessories" class="form-control"  placeholder="Price of Accessories">
    </div>
    <div class="mb-3">
     <h6>Add Image</h6>
    <input class="form-control" type="file" name="image">
     </div>
     <button type="submit" name="upload" class="btn btn-outline-success">Upload</button>
     </form>
</div>
 </div>
<br>
 <table class="table">
  <thead class="table-success">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Accessories</th>
        <th>Price Of Accessories</th>
        <th>Image</th>
        <th></th>
    </tr>
  </thead>
  <tbody>
  <form action="insert.php" method="POST"  >
    <?php
    include 'db.php';
    $pic = mysqli_query($con,"SELECT * FROM `table`");
           while($row = mysqli_fetch_array($pic)){
    echo "
    <tr>
    <td>$row[id]</td>
    <td>$row[Title]</td>
    <td>$row[Price]</td>
    <td>$row[Accessories]</td>
    <td>$row[Price_of_Accessories]</td>
    <td><img src='$row[Image]'  width = '200px'  height = '70px'></td>
    <td><button class='btn btn-outline-success'>Select</button></td>
    </tr>
    </form>
    ";
    };
    ?>
    </tbody>
</table> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>