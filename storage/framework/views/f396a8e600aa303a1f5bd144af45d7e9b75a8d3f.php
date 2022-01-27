<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>


<body style="background-color:#393939">
<?php if (isset($component)) { $__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Nav::class, ['logo' => 'false']); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480)): ?>
<?php $component = $__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480; ?>
<?php unset($__componentOriginal4ef3f5a8a8724cef81dcbc68e612558cabc1c480); ?>
<?php endif; ?>
<div class="float-left w-4/5">
  <section class="bg-white relative" style="height:1124px;font-family: 'Ubuntu', sans-serif;">
    <div class="grid gap-x-28 gap-y-10 ml-auto mr-auto" style="width:592px;padding-top:180px;grid-template-columns: 240px 240px; grid-template-rows:240px 240px">
    <?php if (isset($component)) { $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Option::class, ['text' => '<h1>Dodaj zgłoszenie</h1>']); ?>
<?php $component->withName('option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6)): ?>
<?php $component = $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6; ?>
<?php unset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Option::class, ['text' => 'Moje zgłoszenia']); ?>
<?php $component->withName('option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6)): ?>
<?php $component = $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6; ?>
<?php unset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Option::class, ['text' => 'Moje konto']); ?>
<?php $component->withName('option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6)): ?>
<?php $component = $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6; ?>
<?php unset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Option::class, ['text' => 'Lorem ipsum']); ?>
<?php $component->withName('option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6)): ?>
<?php $component = $__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6; ?>
<?php unset($__componentOriginal5b95222ba631b6a2f496c127eafb27b814614da6); ?>
<?php endif; ?>
    </div>


  </section>
  <?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footer::class, []); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>
</div>
  <!--  <h1>Home Page</h1>
    <a href="<?php echo e(route('login')); ?>">Login</a>-->

</body>
</html>
<?php /**PATH C:\Users\user\Documents\Projects\Applinear\resources\views/dashboard.blade.php ENDPATH**/ ?>