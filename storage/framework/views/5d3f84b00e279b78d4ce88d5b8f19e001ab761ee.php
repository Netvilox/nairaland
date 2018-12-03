<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Category/Channel</div>

                <div class="panel-body">
                    <form action="<?php echo e(route('channels.update', ['channel'=>$channel->id])); ?>" method="POST">

                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PUT')); ?>


                        <div class="form-group">
                            <input type="text" name="title" value="<?php echo e($channel->title); ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">
                                    Update Channel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>