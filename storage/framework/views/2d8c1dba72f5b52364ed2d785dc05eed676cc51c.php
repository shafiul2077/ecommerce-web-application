
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
   
      <!-- partial -->

      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      
    
        <!-- partial -->
        <div stlye="padding-bottom:30px" class="container-fluid page-body-wrapper">
            <div class="container" align="center">

            <?php if(session()->has('message')): ?>
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <?php echo e(session()->get('message')); ?>

      </div>
      <?php endif; ?>


            <div>


            <table>

            <tr style="background-color: grey ;" >

            <td style="padding:20px;">Title</td>
            <td style="padding:20px;">Description</td>
            <td style="padding:20px;">Quantity</td>
            <td style="padding:20px;">Price</td>
            <td style="padding:20px;">Image</td>
            <td style="padding:20px;">Update</td>
            <td style="padding:20px;">Delete</td>


            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr align="center" style="background-color: black ;">

            <td ><?php echo e($product->title); ?></td>
            <td ><?php echo e($product->description); ?></td>
            <td ><?php echo e($product->quantity); ?></td>
            <td ><?php echo e($product->price); ?></td>
            <td >
                <img height="100" width="100" src="<?php echo e(asset('app/'.$product->image)); ?>">
            </td>

            <td>
                <a class="btn btn-primary" href="<?php echo e(url('updateview',$product->id)); ?>">Update</a>
            </td>

            <td>
                <a class="btn btn-danger" href="<?php echo e(url('deleteproduct',$product->id)); ?>">Delete</a>
            </td>


            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </table>



            </div>
          <!-- partial -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH D:\Drive4\Ecommerce-web-application\resources\views/admin/showproduct.blade.php ENDPATH**/ ?>