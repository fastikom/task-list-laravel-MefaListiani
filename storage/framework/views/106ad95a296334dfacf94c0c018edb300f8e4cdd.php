<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <div class="page-header">
                    <h3>Create new task.</h3>
                </div>
                <form action="<?php echo e(route('tasks.create')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <input type="text" name="title" class="form-control form-roll" placeholder="Judul . . ." />
                    </div>
                    <div class="form-group">
                        <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Keterangan . . ."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-default">
                    </div>
                </form>
            </div> <!-- Well -->
            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo e($job->name); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>