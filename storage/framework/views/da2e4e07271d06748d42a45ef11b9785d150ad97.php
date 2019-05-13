<?php $__env->startSection('title', 'Creando Frutas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <h1>Agrega una fruta</h1>
    </div>
    <div style="margin-top: 20px;height: 500px;" class="col-sm">

        <form action="/frutas" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio"  name="precio" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Categorias</label>

                    <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <input type="checkbox" name="categorias[]" value="<?php echo e($categ->id); ?>"> <?php echo e($categ->categoria); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="img"/>
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>