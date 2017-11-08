<?php $__env->startSection('titulo', $produto->descricao); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container center" >
        <div class="">
            <div>
                <h1><?php echo e($produto->descricao); ?></h1>
            </div>
        </div>
        <div class="row" id="">
            <div class=""  >
                <div class="carousel carousel-slider center">
                    <a class="carousel-item"  href=""><img src="http://www.g39.com.tw/images/detail/1304/4560177466734(R).jpg"></a>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>