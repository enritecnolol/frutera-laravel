<?php $__env->startSection('title', 'Creando Frutas'); ?>

<?php $__env->startSection('content'); ?>
    <div style="margin: 20px;height: 500px;" class="col-sm">

        <form action="/frutas/<?php echo e($fruta->slug); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control"   value="<?php echo e($fruta->name); ?>" name="name" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control"  value="<?php echo e($fruta->description); ?>" name="description">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control"   value="<?php echo e($fruta->precio); ?>" name="precio" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Categorias</label>

                <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="vertical" style="">
                    <?php echo e($categ->categoria); ?>

                    <?php echo Form::checkbox('categorias[]', '<?php echo e($categ->id); ?>');; ?>

                <!--<input type="checkbox" name="categorias[]" value="<?php echo e($categ->id); ?>"> <?php echo e($categ->categoria); ?>-->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div >
                <img style="width: 200px" src="/imagenes/<?php echo e($fruta->fruta); ?>" alt="">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" value="<?php echo e($fruta->fruta); ?>" name="img"/>
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>