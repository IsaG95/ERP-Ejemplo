

<?php $__env->startSection('title', 'Entrar'); ?>

<?php $__env->startSection('content'); ?>

<div class="container ml-0" style="max-width: none">
        <div class="row">
            <div class="col-6 col-bg-6 text-center bg-danger text-light" style="height: 100vh; padding-top: 8%">
                <center>
                    <h1 class="mt-5 mb-4">Bem vindo!</h1>
                    <p style="max-width: 300px; font-size: 18px">Para acessar o programa, por favor faça login. Caso não possua uma conta, cadastre-se clicando no botão abaixo.</p>
                        <form action="/registers" method="GET">
                            <input type="submit" class="btn btn-outline-light" style="border-radius: 20px" value="Cadastrar">
                        </form>
                </center>
            </div>

            <div class="col-6 col-bg-6 text-center bg-white" style="height: 80vh; padding-top: 8%">
                <center>

                    <h1 class="mt-5 mb-4 text-danger">Login</h1>
                    <form class="mb-5" method="POST" action="/login">
                        <div class="form-row" style="justify-content: center">
                            <div class="form-group col-sm-1">
                                <h3><i class="fa fa-envelope-o" aria-hidden="true"></i></h3>
                            </div>

                            <div class="form-group col-sm-6 mr-5">
                                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-row" style="justify-content: center">
                            <div class="form-group col-sm-1">
                                <h3><i class="fa fa-unlock-alt" aria-hidden="true"></i></h3>
                            </div>

                            <div class="form-group col-sm-6 mr-5">
                                <input type="password" name="password" class="form-control" id="inputSenha" placeholder="Senha">
                            </div>
                        </div>

                        <div class="form-row" style="justify-content: center">
                            <div class="form-group col-sm-1">

                            </div>

                            <div class="form-group col-sm-6 mr-5 text-left">
                                <a href="/password" class="text-danger">Esqueceu sua senha?</a>
                            </div>
                        </div>
                        

                        <div class="form-row" style="justify-content: center">
                            <div class="col-sm-7">
                                <input type="submit" class="btn btn-danger" style="border-radius: 20px" value="Entrar">
                            </div>
                        </div>
                    </form>
                    <?php if($message[0]['type'] != 'message'): ?>

                        <div class = "alert alert-danger">
                            <h6> <?php echo e($message[0]['content']); ?> </h6>
                        </div>

                    <?php endif; ?>
                <br><br><br>

                </center>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.template-secondary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\xfly-erp\resources\views/login.blade.php ENDPATH**/ ?>