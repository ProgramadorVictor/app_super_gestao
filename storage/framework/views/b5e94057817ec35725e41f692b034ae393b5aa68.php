

<?php $__env->startSection('titulo', 'Produto'); ?>

<?php $__env->startSection('conteudo'); ?>
<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Listagem de Produtos</p>
    </div>
    <div class="menu">
        <ul>
            
            <li><a href="<?php echo e(route('produto.create')); ?>">Novo</a><li>
            <li><a href="">Consulta</a><li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 90%; margin-left: auto; margin-right:auto;">
            
            <table border="1" width ="100%"> 
                
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Unidade ID</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($produto->nome); ?></td>
                            <td><?php echo e($produto->descricao); ?></td>
                            <td><?php echo e($produto->peso); ?></td>
                            <td><?php echo e($produto->unidade_id); ?></td>
                            <td><a href="<?php echo e(route('produto.show', ['produto' => $produto->id] )); ?>">Visualizar</a></td>
                            
                            <td><a href="">Excluir</a></td>
                            
                            <td><a href="">Editar</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
            
            
            <?php echo e($produtos->appends($req)->links()); ?>

            
            
            <br>
            Exibindo <?php echo e($produtos->count()); ?> produtos de <?php echo e($produtos->total()); ?> (de <?php echo e($produtos->firstItem()); ?> a <?php echo e($produtos->lastItem()); ?>)
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Usuários\victor.andrade\Desktop\Victor\app_super_gestao\resources\views/app/produto/index.blade.php ENDPATH**/ ?>