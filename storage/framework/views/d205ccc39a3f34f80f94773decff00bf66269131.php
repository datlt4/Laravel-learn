<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH /mnt/2B59B0F32ED5FBD7/Projects/F8-Official/PHP/Laravel-app/resources/views/layouts/header.blade.php ENDPATH**/ ?>