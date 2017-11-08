<?php $__env->startSection('titulo', 'Produtos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Adicionar Produto</h3>
        <div class="row">
            <form class="" action="<?php echo e(route('admin.produtos.salvar')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <?php echo $__env->make('admin.produtos._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <button class="waves-effect waves-light btn green">Salvar</button>
                <button class="waves-effect waves-light btn red" href="<?php echo e(route('admin.produtos')); ?>" >Cancelar</button>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>