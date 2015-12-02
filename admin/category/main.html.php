  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Categorías
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-folder-open"></i> Categorías
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            <div class="btn-new col-lg-6">
            <h2>Añadir categorías:</h2>
            <form action="?add" method="POST">
                <div class="form-group">
                    <label for="name">Nombre :</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre de la categoria...">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block btn-new-post" value="Nuevo...">
                </div>
            </form>    
            </div>    
            <div class="row col-lg-6">
                <h2>Lista de Categorías</h2>
                <table class="table table-striped">
                    <?php if (empty($listOfCategories)) :?>
                        <thead>
                            <tr>
                                <th>Sin categorias...</th>
                            </tr>
                        </thead>
                    <?php else: ?>   
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                        <?php foreach($listOfCategories as $list) :?>
                        <tr>
                            <td><?=$list['name']?></td>
                            <td>
                                <form action="?edit" method="post">
                                        <input type="hidden" name="id" value="<?=$list['id']?>">
                                        <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-edit"></i></button>
                                </form>
                            </td>
                            <td><i class="glyphicon glyphicon-trash"></i></td>
                        </tr>
                        <?php endforeach; ?> 
                    <?php endif; ?>    
                </table>
            </div>
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
