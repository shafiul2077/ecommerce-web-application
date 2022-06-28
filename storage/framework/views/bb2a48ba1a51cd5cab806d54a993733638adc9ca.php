<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>E DEAL</title>

<link rel="canonical" href="<?php echo e(asset('css/headers.css')); ?>">
<link rel="canonical" href="<?php echo e(asset('css/navbar.css')); ?>">



<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>
<body>

<header class="p-3 bg-dark text-white">
<div class="container">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use/></svg> <h2>E DEAL</h2>
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    
    </ul>

    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
      <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
    </form>

    <div class="text-end">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
        
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">

              <?php if(Route::has('login')): ?>
                
                    <?php if(auth()->guard()->check()): ?>
              
                          <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('showcart')); ?>">
                <i class="fal fa-shopping-cart"></i>
                  Cart[<?php echo e($count); ?>]</a>
              </li>  
            

                        <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

                         <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        
                    <?php else: ?>
                        <li><a class="nav-link" href="<?php echo e(route('login')); ?>" >Log in</a><li>

                        <?php if(Route::has('register')): ?>
                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>" >Register</a><li>
                        <?php endif; ?>
                    <?php endif; ?>
                
            <?php endif; ?>
            <li>




            </ul>
          </div>
        
      </nav>
      </div>
  </div>
   
  <nav class="container navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sale</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




<?php if(session()->has('message')): ?>
  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <?php echo e(session()->get('message')); ?>

  </div>
  <?php endif; ?>
</header>



<!-- For checkout -->

<div style="padding:100px" align="center">
  <table>
      <tr style="background-color:gray;">
          <td style="padding:10px; font-size: 20px;">Product Name</td>
          <td style="padding:10px; font-size: 20px;">Quantity</td>
          <td style="padding:10px; font-size: 20px;">Price</td>
          <td style="padding:10px; font-size: 20px;">Action</td>
      </tr>
      <form action="<?php echo e(url('order')); ?>" method="POST">
          <?php echo csrf_field(); ?>
<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr style="background-color:black;">
          <td style="padding:10px; color:blue;"> <input type="text" name="productname[]" value="<?php echo e($carts->product_title); ?>" hidden=""> <?php echo e($carts->product_title); ?></td>
          <td style="padding:10px; color:blue;"> <input type="text" name="quantity[]" value="<?php echo e($carts->quantity); ?>" hidden=""><?php echo e($carts->quantity); ?></td>
          <td style="padding:10px; color:blue;"> <input type="text" name="price[]" value="<?php echo e($carts->price); ?>" hidden=""><?php echo e($carts->price); ?></td>
          <td style="padding:10px; color:white;"><a class="btn btn-danger" href="<?php echo e(url('delete',$carts->id)); ?>">Delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
 <br>
<button class="btn btn-success">Check Out</button>
<br>

  </form>
  <br>
  <button class="btn btn-dark"><a href="http://127.0.0.1:8000/">Home</a></button>
  
  </div>

  

   <!-- Additional Scripts -->


  
</body>
</html>
<?php /**PATH D:\Drive4\Ecommerce-web-application\resources\views/user/showcart.blade.php ENDPATH**/ ?>