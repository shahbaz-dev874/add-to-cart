<?php 

    require_once("./config.php");

    $result = mysqli_query($con, "SELECT * FROM tbl_products");

 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
</head>
<body>

    <div class="container fluid">
        <div class="jumbotron">
            <h1>AddToCart in Php</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <table>
                    <tr>
                        <th>id</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Remove</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td style="width:40%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, nostrum!</td>
                        <td> <img src="./uploads/image1.jpg" style="width: 100px; height:100px"  alt=""> </td>
                        <td>I phone X</td>
                        <td>80000</td>
                        <td>2</td>
                        <td>160000</td>
                        <td><button class="btn btn-danger">Delete</button> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td style="width:40%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, nostrum!</td>
                        <td> <img src="./uploads/image1.jpg" style="width: 100px; height:100px"  alt=""> </td>
                        <td>I phone X</td>
                        <td>40000</td>
                        <td>2</td>
                        <td>80000</td>
                        <td><button class="btn btn-danger">Delete</button> </td>
                    </tr>
                </table>
                <br>
                    <div class="float-left mb-5">
                        <button class="btn btn-info">Empty Cart</button>
                    </div>
                    <div class="float-right mb-5">
                        <span>Quantity: </span>
                        <span>2</span>
                    </div>
                    <div class="float-right mb-5">
                        <span>Total: </span>
                        <span>25000</span>
                    </div>
                <hr>
                <br>
            </div>
        </div>
        

        <div class="row">

            <?php 
                while( $row = $result->fetch_assoc()){
            ?>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" >
                    <img class="card-img-top" style="width:100%; height:210px;" src="<?php echo $row["image"]; ?>" alt="image" style="width:100%" />
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row["name"]; ?> <small class="float-right">Rs <?php echo $row["price"]; ?>  </small> </h4>
                        <p class="card-text"><?php echo $row["description"]; ?> </p>
                        <div class="text-center">
                            <input type="text" class="mt-1" name="quantity" size="2" >
                            <a href="javascript:void(0)" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>