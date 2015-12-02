<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Editar Etiqueta
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-tag"></i></i><a href="<?=$base_admin_path?>tag"> Etiquetas </a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-plus-sign"></i> Editar Etiqueta
                            </li>
                        </ol>
                    </div>
                </div>
                <div>
                    <div class="col-lg-12">
                        <form action="?updateTag" method="POST">
                             <div class="form-group">
                                <label for="name">Nombre :</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombre de la etiqueta..." value="<?php if (isset($tag['name'])) echo $tag['name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?=$tag['id']?>">
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