<?php $__env->startSection('titulo', 'Produto'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Editando <?php echo e($produto->descricao); ?></h3>
        <div class="row">
            <form class="" action="<?php echo e(route('admin.produtos.atualizar', $produto->codbarra)); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="put">
                <?php echo $__env->make('admin.produtos._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <button class="waves-effect waves-light btn deep-orange">Atualizar</button>
                <button class="waves-effect waves-light btn red" href="<?php echo e(route('admin.produtos')); ?>">Cancelar</button>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>