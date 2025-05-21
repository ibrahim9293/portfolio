<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessory Shop</title>

    <style>
        body {
           
            margin: 0;
            padding: 0;
            background-color:white;
            color: green;
          

        }

        .container {
            
            padding: 30px;
            background-color: white;
            border-radius: 8px;
          
        }

        h1 {
            color : green;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        p {
         
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            font-size: 1.2rem;
            margin: 12px 0;
            padding: 12px;
            background-color : white;
            border-radius: 5px;
    
    
        }

      
      
    </style>
</head>
<body>

    <?php
    $shopname = "Accessory Shop";
    $location = "Mirpur";
    $products = array("Shoes", "Bags", "Shirts", "Watches");
    ?>

    <div class="container">
        <h1><?php echo $shopname; ?></h1>
        <p>Welcome to our shop! Check out our amazing products and get your favorites now!</p>

        <ul>
        <?php 
        foreach ($products as $product) {
            echo "<li>$product</li>";
        }
        ?>
        </ul>
    </div>

   

</body>
</html>
