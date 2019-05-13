<?php $__env->startSection('title', 'Editar Categoria'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <h1>Editar Categoria</h1>
    </div>
    <div style="margin-top: 20px;height: 500px;" class="col-sm">
        <form action="/categorias/<?php echo e($categoria->slug); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id=""  name="categoria" value="<?php echo e($categoria->categoria); ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?php echo e($categoria->descripcion); ?>">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id=""  value="<?php echo e($categoria->slug); ?>" name="slug" placeholder="">
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>