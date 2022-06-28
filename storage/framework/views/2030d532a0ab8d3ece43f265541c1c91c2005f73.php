
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class=" ">Latest Products</h2>
              <form action="<?php echo e(url('search')); ?>" method="get" class="form-inline" style="float: right; padding: 10px;">

              <?php echo csrf_field(); ?> 

              
              </form>
            </div>
          </div>
          
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4">
            <div class="card">
              <a class="card-img-top" href="#"><img height="187" width="200" src="<?php echo e(asset('app/'.$product->image)); ?>" alt=""></a>
              <div class="card-body ">
                <h4 class="card-title"><?php echo e($product->title); ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo e($product->price); ?> TAKA</h6>
                <p class="card-text"><?php echo e($product->description); ?></p>
                
                <form action="<?php echo e(url('addcart',$product->id)); ?>" method="POST">
                  <?php echo csrf_field(); ?>

                  <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">

                  <br>


                  <input class="btn btn-primary" type="submit" value="Add Cart">
                </form>

              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php if(method_exists($data,'links')): ?>

          <div class="d-flex justify-content-center">

          <?php echo $data->links(); ?>


          </div>
          <?php endif; ?>



        </div>
      </div>
    </div><?php /**PATH D:\Drive4\Ecommerce-web-application\resources\views/user/product.blade.php ENDPATH**/ ?>