<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
        <div class="panel-heading">
            
            <span><?php echo e($d->user->name); ?>, <b> <?php echo e($d->created_at->diffForHumans()); ?></b></span>
            <a href="<?php echo e(route('discussion', ['slug' => $d->slug])); ?>" class="btn btn-default pull-right">view</a>
        </div>
        <div class="panel-body">
            <h4 class="text-center">
               <b> <?php echo e($d->title); ?> </b>
            </h4>

            <hr>
            <p class="text-center">
                <?php echo e($d->content); ?>

            </p>
        </div>

        <div class="panel-footer">

            <p>
                <?php echo e($d->replies->count()); ?> Comment
            </p>
        </div>
    </div>

    <?php $__currentLoopData = $d->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="panel panel-default">
            <div class="panel-heading">
                
                <span><?php echo e($r->user->name); ?>, <b> <?php echo e($r->created_at->diffForHumans()); ?></b></span>
               
            </div>
            <div class="panel-body">
                
                <p class="text-center">
                    <?php echo e($r->content); ?>

                </p>
            </div>
    
            <div class="panel-footer">
    
                <p>
                    like
                </p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="<?php echo e(route('discussion.reply', ['id'=>$d->id])); ?>" method="POST">

                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="reply">Comment</label>
                    <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <button class="btn pull-right">comment</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>