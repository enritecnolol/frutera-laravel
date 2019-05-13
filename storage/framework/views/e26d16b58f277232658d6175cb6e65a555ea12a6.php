<?php $__env->startSection('title', 'Fruta'); ?>

<?php $__env->startSection('content'); ?>

    <div style="margin: 5%">
        <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px;width: 200px;margin: 20px; background-color: #fefefe" src="/imagenes/<?php echo e($fruta->fruta); ?>" alt="Card image cap">
        <div class="text-left">
            <h1 class="card-title"><?php echo e($fruta->name); ?></h1>
            <h3><?php echo e($fruta->description); ?></h3>
            <h6>RD$: <?php echo e($fruta->precio); ?></h6>
            <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="vertical" style="">
                <?php echo e($categ->categoria); ?>

                <?php echo Form::checkbox('categorias[]', '<?php echo e($categ->id); ?>');; ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="text-center">
            <div class="form-group">
                <a href="/frutas/<?php echo e($fruta->slug); ?>/edit" class="btn btn-warning" style="margin: 10px">Editar</a>
                <?php echo Form::open(['route' => ['frutas.destroy',$fruta->slug ], 'method' => 'DELETE']); ?>

                <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>