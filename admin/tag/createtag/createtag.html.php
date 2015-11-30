        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Crear Etiqueta
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-tag"></i></i><a href="<?=$base_admin_path?>category"> Etiquetas </a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-plus-sign"></i> Crear Etiquetas
                            </li>
                        </ol>
                    </div>
                </div>
                <div>
                    <div class="col-lg-12">
                        <form action="" method="POST">
                             <div class="form-group">
                                <label for="name">Etiqueta :</label>
                                    <?php if ( !isset($errores['errorName']) ) :?>
                                    <input type="text" class="form-control" name="name" placeholder="Etiqueta...">
                                    <?php else :?>
                                    <input type="text" class="form-control" name="name" aria-describedby="inputError2Status">
                                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                    <span id="inputError2Status" class="sr-only">(error)</span>
                                    <?php endif; ?>
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