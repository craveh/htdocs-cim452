<!-- hello -->

<?php
//gets php version and modules
// phpinfo();

// Use $ for variables
// $_GET;
// $_POST;

//gives you structured info about the variable
// var_dump($_GET);
// var_dump($_POST);

$order = $_POST;

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Pizza Order</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


   </head>
   <body>
    <div class="container">
      <div class="row">
        <div class="col col-6">
          <p>
            <strong>First Name: </strong>
            <?php echo $order['firstName']; ?>
          </p>
          <p>
            <strong>Last Name: </strong>
            <?php echo $order['lastName']; ?>
          </p>
          <p>
            <strong>Address: </strong>
            <?php echo $order['address']; ?>
          </p>
          <p>
            <strong>Toppings: </strong>
            <?php
            if(isset($order['toppings'])):
            $toppings = $order['toppings'] ?>
            <?php foreach ($toppings as $key => $value):?>
              <?php echo $value; ?>
            <?php endforeach; ?>


          <?php endif; ?>
          </p>
          <p>
            <strong>Comment: </strong>
            <?php echo $order['comments']; ?>
          </p>
        </div>





      </div>
    </div>
  </body>
</html>
