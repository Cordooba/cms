  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Etiquetas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-tag"></i> Etiquetas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            <div class="addTag col-lg-6">
            <h2>Añadir Etiquetas:</h2>
                <form action="?add" method="POST">
                    <div class="form-group">
                        <label for="name">Nombre :</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre de la etiqueta...">
                    </div>        
                <input type="submit" class="btn btn-primary btn-lg btn-block btn-new-post" value="Nuevo...">
                </form>
            </div>    
            <div class="col-lg-6">
            <h2>Lista de Etiquetas</h2>
                <table class="table table-striped">
                    <?php if (empty($listOfTags)) :?>
                        <thead>
                            <tr>
                                <th>Sin etiquetas...</th>
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
                        <?php foreach($listOfTags as $list) :?>
                        <tr>
                            <td><?=$list['name']?></td>
                            <td>
                                <form action="<?=$base_admin_path?>tag/edittag" method="post">
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
