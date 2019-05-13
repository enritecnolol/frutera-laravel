<?php $__env->startSection('title', 'Productos'); ?>

<?php $__env->startSection('content'); ?>

    <div class="text-center" style="margin-top: 20px;">
        <h1>Frutas</h1>
    </div>

    <a style="margin: 10px;" class="btn btn-info" href="/frutas/create" role="button"><i class="fas fa-plus-square"></i> Agregar Fruta</a>
    <div class="row">
        <?php $__currentLoopData = $frutas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm">
                <div class="card text-center" style="width: auto;height: auto">
                    <img class="card-img-top rounded-circle mx-auto d-block" style="height: 130px;width: 180px;margin: 20px; background-color: #fefefe" src="imagenes/<?php echo e($fruta->fruta); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($fruta->name); ?></h5>
                        <p class=""><?php echo e($fruta->description); ?></p>
                        <p>RD$: <?php echo e($fruta->precio); ?></p>
                        <a href="/frutas/<?php echo e($fruta->slug); ?>" class="btn btn-primary">Ver mas...</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>