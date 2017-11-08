<?php $__env->startSection('titulo', 'Produtos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Lista de Produtos</h3>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Codigo de Barras</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>

                </thead>
                <tbody>
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <tr>
                            <td><?php echo e($registro->codbarra); ?></td>
                            <td><?php echo e($registro->descricao); ?></td>
                            <td><?php echo e($registro->valor); ?></td>
                            <td><?php echo e($registro->publicado); ?></td>
                            <td><img height="60" src="" alt="<?php echo e($registro->descricao); ?>"></td>

                            <th></th>
                            <td>
                                <a class="waves-effect waves-light btn deep-orange"  data-target="#editModal" data-toggle="modal" href="<?php echo e(route('admin.produtos.editar', $registro->codbarra)); ?>">Editar</a>
                                <a class="waves-effect waves-light btn red view" onclick="$('#modal1').modal('open');">Deletar</a>
                                <!-- Modal Structure -->
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <h4><?php echo e($registro->descricao.' - '.$registro->material); ?></h4>
                                        <p class="waves-effect waves-light">Deseja excluir?</p>
                                        <div class="modal-footer">
                                            <a href="<?php echo e(route('admin.produtos.deletar', $registro->codbarra)); ?>" class="modal-action modal-close waves-effect waves-green btn-flat red">Deletar</a>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
            </table>

        </div>
        <div class="row">
            <a class="waves-effect waves-light btn blue" href="<?php echo e(route('admin.produtos.adicionar')); ?>">Adicionar</a>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>