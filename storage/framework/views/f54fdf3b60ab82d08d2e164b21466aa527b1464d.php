<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                
                <span><?php echo e($d->user->name); ?>, <b> <?php echo e($d->created_at->diffForHumans()); ?></b></span>
                <a href="<?php echo e(route('discussion', ['slug' => $d->slug])); ?>" class="btn btn-default pull-right">view</a>
            </div>
            <div class="panel-body">
                <h4 class="text-center">
                   <b> <?php echo e($d->title); ?> </b>
                </h4>

                <p class="text-center">
                    <?php echo e(str_limit($d->content, 50)); ?>

                </p>
            </div>

            <div class="panel-footer">

                <p>
                    
                </p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="text-center">
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>