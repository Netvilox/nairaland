<?php $__env->startSection('content'); ?>

            <div class="panel panel-default">
                <div class="panel-heading text-center">Create a new discussion</div>

                <div class="panel-body">
                   <form action="<?php echo e(route('discussions.store')); ?>" method="POST">

                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <label for="title">Title</label>

                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">

                        <label for="channel">Pick a Channel</label>
                        <select name="channel_id" id="channel_id" class="form-control">
                            <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($channel->id); ?>"><?php echo e($channel->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="content">Say something</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit">Create discussion</button>
                    </div>
                   </form>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>