<?php include('../templates/header.php'); ?>
<?php include('../sections/cursos.php'); ?>

<div class="row">
    <div class="col-12">
        <br/>
        <div class="row">
        <div class="col-md-5">
        <form action="" method="post">
        <div class="card">
            <div class="card-header">Cursos</div>
            <div class="card-body">
            <div class="mb-3 d-none">
                <label for="" class="form-label">ID</label>
                <input
                    type="text"
                    class="form-control"
                    name="id"
                    id="id"
                    value="<?php echo $id; ?>"
                    aria-describedby="helpId"
                    placeholder="id"/>
            </div>
            <<div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input
                    type="text"
                    class="form-control"
                    name="nombre_curso"
                    id="nombre_curso"
                    value="<?php echo $nombre_curso; ?>"
                    aria-describedby="helpId"
                    placeholder="Nombre del curso"/>
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
            </div>
    
        </div>

    </form>
    
        
    </div>
    

    
</div>
<div class="col-md-7">

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre del curso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($listaCursos as $cursos) {?>
            <tr class="">
                <td> <?php echo $cursos['id'];?> </td>
                <td> <?php echo $cursos['nombre_curso'];?> </td>
                <td> 
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo $cursos['id']; ?>"/>
                    <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                </form>

                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>



</div>
</div>
</div>






<?php include('../templates/footer.php'); ?>