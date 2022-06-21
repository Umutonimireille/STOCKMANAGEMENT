<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        background-color: plum;
    }
  


</style>
<body>
    <h1>Login</h1>
    <div class="container">
      
        <!-- <form action ="" method = "post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control"  id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <?php echo form_error('email'); ?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            <?php echo form_error('password'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <?php echo $this->session->flashdata('login_error'); ?>
        <?php form_close(); ?>
</form>
    </div> -->
</body>

<!--  -->

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login Here</h2>

              <form method="POST">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="email" />
                  <?php echo form_error('email'); ?>
                  <label class="form-label" for="form3Example1cg">Email Address</label>
                </div>



                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                  <?php echo form_error('password'); ?>
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
        <?php echo $this->session->flashdata('login_error'); ?>
        <?php form_close(); ?>

                


                

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>
