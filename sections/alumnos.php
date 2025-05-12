<?php
include_once '../configurations/db.php';
$conexionDB = DB::crearInstancia();

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$cursos = isset($_POST['cursos']) ? $_POST['cursos'] : [];
$accion = isset($_POST['accion']) ? strtolower($_POST['accion']) : '';

if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            $sql = "INSERT INTO alumnos(id, nombre, apellidos) VALUES (NULL, :nombre, :apellidos)";
            $consulta = $conexionDB->prepare($sql);
            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':apellidos', $apellidos);
            $consulta->execute();
            $id = $conexionDB->lastInsertId();

            foreach ($cursos as $curso) {
                $sql = "INSERT INTO alumnos_cursos(id,idalumno, idcurso) VALUES (NULL,:idalumno, :idcurso)";
                $consulta = $conexionDB->prepare($sql);
                $consulta->bindParam(':idalumno', $id);
                $consulta->bindParam(':idcurso', $curso);
                $consulta->execute();
            }
            
            break;
            case 'Seleccionar':
                $sql = "SELECT * FROM alumnos WHERE id = :id";
                $consulta = $conexionDB->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $alumno = $consulta->fetch(PDO::FETCH_ASSOC);
            
                $nombre = $alumno['nombre'];
                $apellidos = $alumno['apellidos'];
                
                $sql = "SELECT cursos.id FROM alumnos_cursos
                        INNER JOIN cursos ON cursos.id = alumnos_cursos.idcurso
                        WHERE alumnos_cursos.idalumno = :idalumno";
                $consulta = $conexionDB->prepare($sql);
                $consulta->bindParam(':idalumno', $id); 
                $consulta->execute();
                $cursosAlumno = $consulta->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($cursosAlumno as $curso) {
                    echo $curso['id'];
                    $arregloCursos[] = $curso['id'];
                }
                break;
            
            break;

        case 'editar':
            $sql = "UPDATE alumnos SET nombre = :nombre, apellidos = :apellidos WHERE id = :id";
            $consulta = $conexionDB->prepare($sql);
            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':apellidos', $apellidos);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            
            if(isset($cursos)){
                $sql = "DELETE FROM alumnos_cursos WHERE idalumno = :idalumno";
                $consulta = $conexionDB->prepare($sql);
                $consulta->bindParam(':idalumno', $id);
                $consulta->execute();
                
                foreach ($cursos as $curso) {
                    $sql = "INSERT INTO alumnos_cursos(id,idalumno, idcurso) VALUES (NULL,:idalumno, :idcurso)";
                    $consulta = $conexionDB->prepare($sql);
                    $consulta->bindParam(':idalumno', $id);
                    $consulta->bindParam(':idcurso', $curso);
                    $consulta->execute();
                }
                $arregloCursos = $cursos;
            } 
            
            break;

        case 'borrar':
            $sql = "DELETE FROM alumnos WHERE id = :id";
            $consulta = $conexionDB->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;


    }
}

$sql = "SELECT * FROM alumnos";
$listaAlumnos = $conexionDB->query($sql);
$alumnos = $listaAlumnos->fetchAll();

foreach ($alumnos as $clave => $alumno) {
    $sql = "SELECT * FROM cursos 
            WHERE id IN (SELECT idcurso FROM alumnos_cursos WHERE idalumno = :idalumno)";
    $consulta = $conexionDB->prepare($sql);
    $consulta->bindParam(':idalumno', $alumno['id']); 
    $consulta->execute();
    $cursosAlumno = $consulta->fetchAll();
    $alumnos[$clave]['cursos'] = $cursosAlumno;
}
$sql = "SELECT * FROM cursos";
$listaCursos = $conexionDB->query($sql);
$cursos = $listaCursos->fetchAll();







?>