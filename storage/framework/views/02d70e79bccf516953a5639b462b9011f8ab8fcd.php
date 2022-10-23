<?php $__env->startSection('page_title', ' - Home'); ?>

<?php $__env->startSection('content'); ?>

    <br>
    <h1>Filmes alugados</h1>
    <br>
    <br>

    <ul class="list-group">

    <?php $__currentLoopData = $filmeAlugados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filmeAlugado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if($filmeAlugado->cliente_id == $id): ?>

            <?php $__currentLoopData = $filmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($filme->id == $filmeAlugado->filme_id): ?>


                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        Nome: <?php echo e($filme->name); ?> <br> Valor: <?php echo e($filme->value); ?> <br> Descrição: <?php echo e($filme->description); ?>


                    </li>

                <?php endif; ?>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>   

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\projeto Plantae\ProjetoDoZero\projeto do zero\resources\views/pages/home.blade.php ENDPATH**/ ?>