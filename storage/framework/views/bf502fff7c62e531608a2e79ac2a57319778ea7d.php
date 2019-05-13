<?php $__env->startSection('title', 'Categoria'); ?>

<?php $__env->startSection('content'); ?>

    <div class="text-center">
        <h3>Categorias</h3>
        <a style="margin-top: 10px;" class="btn btn-info" href="/categorias/create" role="button"><i class="fas fa-plus-square"></i> Agregar categoria</a>
         <div style="margin-top: 50px;">
             <table class="table">
                 <thead class="thead-dark">
                 <tr>
                     <th scope="col">Categoria</th>
                     <th scope="col">Descripcion</th>
                     <th scope="col">Slug</th>
                     <th scope="col">Editar</th>
                     <th scope="col">Eliminar</th>
                 </tr>
                 </thead>
                 <tbody>
                 <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                     <td><?php echo e($categ->categoria); ?></td>
                     <td><?php echo e($categ->descripcion); ?></td>
                     <td><?php echo e($categ->slug); ?></td>
                     <td><a href="/categorias/<?php echo e($categ->slug); ?>/edit">editar</a></td>
                     <td> <?php echo Form::open(['route' => ['categorias.destroy',$categ->slug ], 'method' => 'DELETE']); ?>

                         <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger']); ?>

                         <?php echo Form::close(); ?></td>
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </tbody>
             </table>
         </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>