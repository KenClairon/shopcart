<?php 
   session_start(); 
    $arrProducts = array(
        array(
            'name'          => "Cool Tshirt plane",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "180",
            'photo1'        => 'produc1A.jpg',
            'photo2'        => 'produc1B.jpg',
        ),
        array(
            'name'          => " Stripe cool shirt",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "250",
            'photo1'        => 'produc2A.jpg',
            'photo2'        => 'produc2B.jpg',
        ),
        array(
            'name'          => "Cool Jackets ",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "900",
            'photo1'        => 'produc3A.jpg',
            'photo2'        => 'produc3B.jpg',
        ),
        array(
            'name'          => "Polo Shirt",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc4A.jpg',
            'photo2'        => 'produc4B.jpg',
        ),
        array(
            'name'          => "Long Sleeve",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "500",
            'photo1'        => 'produc5A.jpg',
            'photo2'        => 'produc5B.jpg',
        ),
        array(
            'name'          => "Cool Long SLeeve",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "500",
            'photo1'        => 'produc6A.jpg',
            'photo2'        => 'produc6B.jpg',
        ),
        array(
            'name'          => "Korean Jacket",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "1000",
            'photo1'        => 'produc7A.jpg',
            'photo2'        => 'produc7B.jpg',
        ),
        array(
            'name'          => " Cool Polo shirt ",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "150",
            'photo1'        => 'produc8A.jpg',
            'photo2'        => 'produc8B.jpg',
        )
    );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="shopping_cart.css">
    <title> Mens Jeans | Shopping Cart</title>
</head>
<body>
<form method="post">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-10">
                    <h1><i class="fa fa-store"></i> Tshirts Shops </h1>
                </div>
                <div class="col-md-2">
                    <a href="cart.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <?php 
                        if(isset($_SESSION['totalQuantity']))
                            echo '<span class="badge badge-light">' . $_SESSION['totalQuantity'] . '</span>';
                        else
                            echo '<span class="badge badge-light">0</span>';
                    ?>    
                    </a>
                </div>
            </div>
        <hr>

        <div class="row">
           <?php foreach ($arrProducts as $key => $value): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="details.php?k=<?php echo $key; ?>">
                                <img class="pic-1" src="img/<?php echo $value['photo1'];?>">
                                <img class="pic-2" src="img/<?php echo $value['photo2'];?>">
                            </a>
                            <a class="add-to-cart" href="details.php?k=<?php echo $key; ?>"><i class="fa-sharp fa-solid fa-cart-plus"></i> <b>Add to cart</b></a>
                        </div>
                        <div class="product-content">
                            <h3 class="title">
                                <b><?php echo $value['name'];?></b>
                                <span class="badge badge-dark">???<?php echo $value['price'];?></span>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </form>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>