 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Comentarios
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-pencil"></i> Comentarios
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->    
            <div class="col-lg-12">
            <h2>Comentarios</h2>
                <table class="table table-striped">
                    <?php if (empty($listOfComments)) :?>
                        <thead>
                            <tr>
                                <th>Sin comentarios...</th>
                            </tr>
                        </thead>
                    <?php else: ?>   
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Comentario</th>
                            <th>Título del Artículo</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                        <?php foreach($listOfComments as $list) :?>
                        <tr>
                            <td><?=$list['usser_nick']?></td>
                            <td><?=$list['email_usser']?></td>
                            <td><?=$list['content']?></td>
                            <td><?=$list['title']?></td>
                            <td>
                                <form action="?eddit" method="post">
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
