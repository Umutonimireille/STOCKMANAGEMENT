<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
    body{
        background-color: plum;
    }
  


</style>
<body>
<section>



<section style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
      <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
          <h2 class="text-uppercase text-center mb-5">Insert Inventory</h2>
  <form action="" method="post">

   <div class="form-outline mb-4">
    <input type="number" value=<?php echo $outgoing->quantity?> name="name" id="form3Example1cg" class="form-control form-control-lg">
    <label class="form-label" for="form3Example1cg">Quantity</label>
 </div>
 <div class="form-outline mb-4">
    <input type="number" value=<?php echo $outgoing->productId?> name="number" id="form3Example4cg" class="form-control form-control-lg">
    <label class="form-label" for="form3Example4cg">ProductId</label>
 </div>
 <div class="mt-4 pt-2">
    <input type="submit" value="update" name="update"class="btn btn-primary btn-lg" >
 </div>

  </form>
        </div>
        </div>
      </div>
    </div>
      </div>
  </div>
  </section>
    
</body>


</html>