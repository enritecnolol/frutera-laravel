<?php $__env->startSection('title', 'Agregar Categoria'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center">
    <h1>Agregar Categoria</h1>
    </div>
    <div style="margin-top: 20px;height: 500px;" class="col-sm">
        <form action="/categorias" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id=""  name="categoria" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="" rows="3" name="descripcion"></textarea>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id=""  name="slug" placeholder="">
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>