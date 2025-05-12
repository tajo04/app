<?php include('../templates/header.php'); ?>
<?php include('../sections/alumnos.php'); ?>

<div class="row">
    <div class="col-5">
        <form action="" method="post">
            <div class="card">
                <div class="card-header">Alumnos</div>
                <div class="card-body">

                <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input
        type="text"
        class="form-control"
        name="id"
        value="<?php echo $id; ?>"
        id="id"
        aria-describedby="helpId"
        placeholder="ID"
    />
</div>

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input
        type="text"
        class="form-control"
        name="nombre"
        value="<?php echo $nombre; ?>"
        id="nombre"
        aria-describedby="helpId"
        placeholder="Escriba el nombre"
    />
</div>

<div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input
        type="text"
        class="form-control"
        name="apellidos"
        value="<?php echo $apellidos; ?>"
        id="apellidos"
        aria-describedby="helpId"
        placeholder="Escriba los apellidos"
    />
</div>

<div class="mb-3">
    <label for="" class="form-label">Curso del alumno</label>
    <select
        multiple class="form-select"
        name="cursos[]"
        id="listaCursos">

        <?php foreach ($cursos as $curso) { ?>
            <option 
            <?php
            if(!empty($arregloCursos)):
                if(in_array($curso['id'], $arregloCursos)):
                    echo 'selected';
                endif;
            endif;
            ?>
                 value="<?php echo $curso['id']; ?>"
                <?php echo (in_array($curso['id'], array_column($cursosAlumno, 'id')) ? 'selected' : ''); ?>>
                <?php echo $curso['nombre_curso']; ?>
            </option>
        <?php } ?>
    </select>
</div>


                    </div>

                    <div class="btn-group" role="group" aria-label="Button group name">
                        <button
                            type="submit"
                            name="accion"
                            value="agregar"
                            class="btn btn-success"
                        >
                            Agregar
                        </button>
                        <button
                            type="submit"
                            name="accion"
                            value="editar"
                            class="btn btn-warning"
                        >
                            Editar
                        </button>
                        <button
                            type="submit"
                            name="accion"
                            value="borrar"
                            class="btn btn-danger"
                        >
                            Borrar
                        </button>
                    </div>

                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </form>
    </div>

    <div class="col-md-7">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre y Apellidos</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumnos as $alumno) : ?>
                        <tr>
                            <td><?php echo $alumno['id']; ?></td>
                            <td>
                                 <?php echo $alumno['nombre'] . ' ' . $alumno['apellidos']; ?>
                                     <br>
                            <?php foreach ($alumno['cursos'] as $curso) { ?>
                                 - <a href="certificado.php?idcurso=<?php echo $curso['id'];?>&idalumno=<?php echo $alumno['id'];?>"><?php echo $curso['nombre_curso']; ?></a><br>
                             <?php } ?>
                            </td>

                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
                                    <button type="submit" name="accion" value="seleccionar" class="btn btn-info">
                                        Seleccionar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/js/tom-select.complete.min.js"></script>
<script>
    new TomSelect('#listaCursos');
</script>
<?php include('../templates/footer.php'); ?>