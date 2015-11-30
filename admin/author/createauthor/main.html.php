        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Crear Autor
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-user"></i></i><a href="<?=$base_admin_path?>author"> Autores </a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-plus-sign"></i> Crear Autor
                            </li>
                        </ol>
                    </div>
                </div>
                <div>
                    <div class="col-lg-12">
                        <form action="" method="POST">
                             <div class="form-group">
                                <label for="name">Nombre :</label>
                                    <?php if ( !isset($errores['errorNickname']) ) :?>
                                    <input type="text" class="form-control" name="nickname" placeholder="Nombre del autor...">
                                    <?php else :?>
                                    <input type="text" class="form-control" name="nickname" aria-describedby="inputError2Status">
                                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                    <span id="inputError2Status" class="sr-only">(error)</span>
                                    <?php endif; ?>
                                <label for="pswd">Contraseña :</label>    
                                    <?php if ( !isset($errores['errorPassword']) ) :?>
                                    <input type="text" class="form-control" name="password" placeholder="Contraseña del autor...">
                                    <?php else :?>
                                    <input type="text" class="form-control" name="password" aria-describedby="inputError2Status">
                                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                    <span id="inputError2Status" class="sr-only">(error)</span>
                                    <?php endif; ?>
                                <label for="mail">E-mail :</label>    
                                    <?php if ( !isset($errores['errorMail']) ) :?>
                                    <input type="text" class="form-control" name="email" placeholder="E-mail...">
                                    <?php else :?>
                                    <input type="text" class="form-control" name="email" aria-describedby="inputError2Status">
                                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                    <span id="inputError2Status" class="sr-only">(error)</span>
                                    <?php endif; ?>
                                <label for="rol">Rol :</label>    
                                    <select class="form-control" name="role">
                                        <option value="Admin">Admin</option>
                                        <option value="Editor">Editor</option>
                                    </select>    
                            </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Añadir</button>
                        </form>
                    </div> 
                </div>   
                <!-- /.row -->
              
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=$base_admin_path?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$base_admin_path?>js/bootstrap.min.js"></script>

</body>

</html>