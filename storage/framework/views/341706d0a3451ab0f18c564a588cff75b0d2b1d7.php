<?php $__env->startSection('page_title', ' - Register'); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-signin" method="post" action="<?php echo e(route('registerCliente.post')); ?>">
        <?php echo csrf_field(); ?>
        <h1 class="h3 mb-3 font-weight-normal">Cadastrar-se</h1>
        <label for="name" class="sr-only">Nome</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus value="<?php echo e(old('name')); ?>">



        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required value="<?php echo e(old('email')); ?>">



        <label for="password" class="sr-only">Senha</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>



        <label for="password_confirmation" class="sr-only">Confirmar senha</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Cadastrar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\projeto Plantae\ProjetoDoZero\projeto do zero\resources\views/pages/registerCliente.blade.php ENDPATH**/ ?>