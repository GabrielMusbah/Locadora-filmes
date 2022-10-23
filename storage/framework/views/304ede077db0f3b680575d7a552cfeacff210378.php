<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Musbah Flix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('select')); ?>">Escolher filme</a>
                </li>
                <li class="nav-item <?php echo e(request()->is('profile') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('registerFilme')); ?>">Registar Filme</a>
                </li>
            </ul>
            <a href="<?php echo e(route('logout')); ?>" class="btn btn-outline-danger my-2 my-sm-0">Sair</a>
        </div>
    </nav>
</header>
<?php /**PATH C:\Users\Debi daPupu\Desktop\programacao\projeto Plantae\ProjetoDoZero\projeto do zero\resources\views/partials/header.blade.php ENDPATH**/ ?>