<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
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
        </div>
      </nav>
      <?php if(session()->has('message')): ?>
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <?php echo e(session()->get('message')); ?>

      </div>
      <?php endif; ?>
    </header>

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

<button class="btn btn-success">Confirm Order</button>

   </form>
   </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
<?php /**PATH D:\laravel\Ecommerce\resources\views/user/showcart.blade.php ENDPATH**/ ?>