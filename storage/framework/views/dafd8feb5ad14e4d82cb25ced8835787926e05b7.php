<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('titulo'); ?></title>

        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
        <script language="JavaScript" src="<?php echo e(asset('js/script.js')); ?>"></script>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

        <script type="text/javascript">

            $(document).ready(function () {
                Materialize.updateTextFields();

                $(".button-collapse").sideNav();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
                $('.modal').modal({
                        dismissible: true, // Modal can be dismissed by clicking outside of the modal
                        opacity: .5, // Opacity of modal background
                        inDuration: 300, // Transition in duration
                        outDuration: 200, // Transition out duration
                        startingTop: '4%', // Starting top style attribute
                        endingTop: '10%', // Ending top style attribute
                    }
                );
            });
        </script>

    </head>
    <body>
    <div class="geral">
        <nav class="conteudo">
            <header>
                <div class="nav-wrapper" >
                    <a href="#!" class="brand-logo">Kilax Japan</a>
                    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Home</a></li>

                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login.index')); ?>">Login</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('admin.produtos')); ?>">Produtos</a></li>
                            <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                            <li><a href="<?php echo e(route('site.login.sair')); ?>">Sair</a></li>
                        <?php endif; ?>


                    </ul>
                    <ul class="side-nav" id="mobile">
                        <li><a href="/">Home</a></li>

                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login.index')); ?>">Login</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('admin.produtos')); ?>">Produtos</a></li>
                            <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                            <li><a href="<?php echo e(route('site.login.sair')); ?>">Sair</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </header>
        </nav>
