

<?php $__env->startSection('page_title', ' - Register'); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-signin" method="post" action="<?php echo e(route('registerFilme.post')); ?>">
        <?php echo csrf_field(); ?>
        <h1 class="h3 mb-3 font-weight-normal">Cadastrar Filme</h1>
        <label for="name" class="sr-only">Nome</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required>


        <label for="email" class="sr-only">Valor</label>
        <input type="text" id="value" name="value" class="form-control" placeholder="Valor" required>


        <label for="password" class="sr-only">Descrição</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="Descrição" required>


        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Cadastrar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\projeto Plantae\ProjetoDoZero\projeto do zero\resources\views/pages/registerFilme.blade.php ENDPATH**/ ?>