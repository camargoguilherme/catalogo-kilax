<?php $__env->startSection('titulo', 'Login'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
            <form class="" action="<?php echo e(route('site.login.entrar')); ?>" method="post" >
                <?php echo e(csrf_field()); ?>


                <div class="input-field">
                    <input type="text" name="email">
                    <label>E-mail</label>
                </div>
                <div class="input-field">
                    <input type="password" name="senha">
                    <label>Senha</label>
                </div>

                <button class="waves-effect waves-light btn deep-orange">Entrar</button>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>