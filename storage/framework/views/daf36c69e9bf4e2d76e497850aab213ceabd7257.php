

<?php $__env->startSection('page_title', ' - Home'); ?>

<?php $__env->startSection('content'); ?>

    <br>
    <h1>Escolha um filme</h1>
    <br>
    <br>

    <ul class="list-group">

        <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        

        <li class="list-group-item d-flex justify-content-between align-items-center">
            Nome: <?php echo e($item->name); ?> <br> Valor: <?php echo e($item->value); ?> <br> Descrição: <?php echo e($item->description); ?>

            <div>
                <a href="<?php echo e(route('remove', $item->id)); ?>" class="badge badge-danger">Alugar</a>
            </div>
        </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\projeto Plantae\ProjetoDoZero\projeto do zero\resources\views/pages/selectFilme.blade.php ENDPATH**/ ?>