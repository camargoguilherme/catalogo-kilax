<?php $__env->startSection('titulo', 'Produtos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Lista de Produtos</h3>
        <div class="row">
          <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="col m3 center">

                        <div class="card">
                            <div class="card-image">
                                <img id="<?php echo e($produto->codbarra); ?>" height="140" alt="<?php echo e($produto->descricao); ?>" src="http://www.g39.com.tw/images/detail/1304/4560177466734(R).jpg">

                            </div>
                            <div class="card-content">
                                <h4><?php echo e($produto->titulo); ?></h4>
                                <p><?php echo e($produto->descricao); ?></p>
                                <a href="<?php echo e(route('detalhes.produto', $produto->codbarra)); ?>"> Ver mais...</a>
                            </div>
                        </div>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>