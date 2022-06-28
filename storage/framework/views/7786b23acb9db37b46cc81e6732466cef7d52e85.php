
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

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">

            <table>
                <tr Style="background-color: black">
                    <td Style="padding:20px; color:red;">Customer name</td>
                    <td Style="padding:20px; color:red;">Phone</td>
                    <td Style="padding:20px; color:red;">Address</td>
                    <td Style="padding:20px; color:red;">Product title</td>
                    <td Style="padding:20px; color:red;">Price</td>
                    <td Style="padding:20px; color:red;">Quantity</td>
                    <td Style="padding:20px; color:red;">Status</td>
                    <td Style="padding:20px; color:red;">Action</td>
                </tr>

                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr align="center" background-color:black;>
                    <td style="padding:10px; color:blue;"><?php echo e($orders->name); ?></td>
                    <td style="padding:10px; color:blue;"><?php echo e($orders->phone); ?></td>
                    <td style="padding:10px; color:blue;"><?php echo e($orders->address); ?></td>
                    <td style="padding:10px; color:blue;"><?php echo e($orders->product_name); ?></td>
                    <td style="padding:10px; color:blue;"><?php echo e($orders->price); ?></td>
                    <td style="padding:10px; color:blue;"><?php echo e($orders->quantity); ?></td>
                    <td style="padding:10px; color:blue;"><?php echo e($orders->status); ?></td>
                    <td style="padding:10px; color:blue;"><a class="btn btn-success" href="<?php echo e(url('updatestatus',$orders->id)); ?>">Delivered</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

            </div>
            </div>
      
          <!-- partial -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH D:\New folder\htdocs\Ecommerce\resources\views/admin/showorder.blade.php ENDPATH**/ ?>