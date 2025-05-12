# README: Aplicación Web con Base de Datos

## Introducción
Este repositorio contiene el código fuente de una aplicación web que se conecta a una base de datos. La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en registros de cursos y alumnos, además de generar certificados en formato PDF.

## Contenido del Proyecto
### 1. **Introducción a la aplicación web con base de datos** 
   - Demostración inicial de la aplicación y sus características principales.

### 2. **Estructura del Proyecto** 
   - **Creación de carpetas**: Organización del proyecto en carpetas y archivos.
   - **Extensiones de Visual Studio Code**: Herramientas recomendadas para facilitar el desarrollo de la aplicación web.

### 3. **Desarrollo de la Interfaz de Usuario**
   - **Login y Cabecera/Pie de Página** 
     - Diseño de la interfaz de inicio de sesión y la cabecera y pie de página.
   - **Menú de Navegación** 
     - Creación del menú de navegación para acceder a las distintas funcionalidades de la aplicación.

### 4. **Interfaz de CRUD de Cursos** 
   - **Operaciones CRUD**: 
     - **Lectura de cursos**: Recuperación de registros desde la base de datos.
     - **Inserción de datos**: Agregar un nuevo curso a la base de datos.
     - **Selección y consulta de registros**: Recuperación de datos específicos de un curso.
     - **Borrado de registros**: Eliminar un curso de la base de datos.
     - **Edición de registros**: Modificar la información de un curso.

### 5. **Conexión a la Base de Datos**
   - **Creación de Base de Datos y Tablas** 
     - Diseño de las tablas y relaciones entre ellas.
     - Relación entre alumnos y cursos.
   - **Conexión y Recepción de Datos**: 
     - Establecimiento de la conexión con la base de datos.
     - Recepción de datos POST desde la interfaz web.

### 6. **Interfaz de Alumnos**
   - **Gestión de Alumnos**:
     - **Lectura de registros**: Mostrar todos los alumnos registrados.
     - **Mostrar Alumnos-Cursos**: Relación entre alumnos y cursos.
     - **Agregar cursos**: Asignar cursos a los alumnos mediante un dropdown.
   - **Operaciones CRUD**:
     - **Inserción de cursos relacionados**: Asignar cursos a un alumno.
     - **Borrado de alumnos**: Eliminar registros de alumnos.

### 7. **Generación de Certificados en PDF**
   - **Enlace para generar certificados**:
     - Creación de un enlace para generar un certificado PDF para un alumno.
   - **Uso de FPDF**:
     - **Configuración de FPDF**: Instalación y configuración de la librería FPDF para crear los certificados en PDF.
     - **Mostrar Imagen y Agregar Texto**: Personalización del PDF, mostrando imágenes (como un logo) y agregando texto dinámico.
     - **Datos Dinámicos**: Inserción de datos del alumno en el certificado generado.

### 8. **Ajustes Finales y Seguridad**
   - **Inicio de sesión y cierre de sesión**: Funcionalidades de autenticación.
   - **Bloqueo de accesos**: Implementación de medidas de seguridad para prevenir accesos no autorizados.
   - **Ajustes finales**: Optimización y configuración de la aplicación web con base de datos para un funcionamiento óptimo.

## Tecnologías Utilizadas
- **Frontend**: PHP
- **Backend**: PHP
- **Base de Datos**: PHP
- **Librerías**: FPDF para generación de PDF, TomSelect para dropdowns interactivos.

## Instalación
1. Clona este repositorio en tu máquina local:
   ```bash
   git clone https://github.com/tajo04/app.git
