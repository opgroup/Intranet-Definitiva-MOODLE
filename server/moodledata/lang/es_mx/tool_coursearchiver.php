<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_coursearchiver', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_coursearchiver
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Último acceso anterior';
$string['anycategory'] = 'Cualquier Categoría';
$string['archive'] = 'Archivar Cursos';
$string['archiveemail'] = 'Mandar Emails "Cursos a ser Archivados"';
$string['archivelocation'] = 'Subdirectorio de archivo de curso';
$string['archivewarningemailsetting'] = 'Advertencia por defecto del Email para Archivar Curso';
$string['archivewarningemailsettingdefault'] = '%to

Le queremos informar que los siguentes cursos Moodle que Usted ha enseñado pronto serán archivados.
Esto significa que el curso será respaldado en su estado actual y después será removido de Moodle. Si Usted quisiera salirse de este proceso para alguno de los cursos siguientes, por favor haga click sobre el enlace que está a un lado del curso que desea evitar que sea archivado.

%courses

Gracias.';
$string['archivewarningemailsetting_help'] = 'Estos son los contenidos de un Email que será enviado a todos los profesores de un curso que sea seleccionado para ser archivado.';
$string['archivewarningsubject'] = 'Aviso: Cursos serán archivados pronto.';
$string['back'] = 'Comenzar de nuevo';
$string['cannotdeletecoursenotexist'] = 'No puede eliminarse un curso que no existe';
$string['category'] = 'Categoría';
$string['cli_cannot_continue'] = 'DETENIDO: No hay datos suficientes para continuar.';
$string['cli_question_archive'] = '¿Archivar y eliminar estos {$a} cursos?';
$string['cli_question_archiveemail'] = 'Mandar a estos {$a} usuarios  un Email de "Curso a ser archivado"?';
$string['cli_question_delete'] = '¿Eliminar estos {$a} cursos?';
$string['cli_question_hide'] = '¿Ocultar estos {$a} cursos?';
$string['cli_question_hideemail'] = 'Mandar a estos {$a} usuarios un Email de "Curso a ser ocultado"?';
$string['confirm'] = 'Continuar';
$string['confirmmessage'] = '¿Está Usted seguro de que quiere {$a}';
$string['confirmmessagearchive'] = 'archivar y quitar estos {$a} cursos?';
$string['confirmmessagearchiveemail'] = 'mandarles un Email a estos  {$a} propietarios de curso?';
$string['confirmmessagedelete'] = '¿quitar completamente estos {$a} cursos?';
$string['confirmmessagehide'] = 'ocultar estos {$a} cursos?';
$string['confirmmessagehideemail'] = 'mandarles un Email a estos {$a} propietarios de cursos?';
$string['coursearchiver'] = 'Archivador de Cursos';
$string['coursearchiver_help'] = 'Buscar cursos usando los siguientes criterios: coincidir nombre-corto, nombre-completo, idnumber, courseid, última fecha de acceso al curso, o *cursos vacíos.n
Los cursos son mostrados en-gris si ya estaban previamente ocultos. El nombre-completo del curso estará rayado (tachado) si el curso fuera un *curso vacío.nn
NOTA: LA búsqueda por último acceso solamente regresará cursos que fueron creados antes de la fecha proporcionada.n
Nota: La cantifdad de direcciones Email encontradas puede diferir de las Emails enviadas. Esto tiene 2 causas. n
1. A un curso que ya esté oculto no se le mandará un Email para notificarle al propietario si el curso estuviera seleccionado para ocultarse.n
2. A una sola dirección que se muestre para varios cursos se le juntarán en un solo Email.nn
*los cursos vacíos están definidos como  de 0 tareas, 0 recursos, 0 categorías en el Libro de calificaciones y 0 ítems de calificación en el Libro de calificaciones.';
$string['coursearchiverpath'] = 'Ruta a la carpeta para cursos archivados';
$string['coursearchiverpath_help'] = 'Esta ruta es relativa al Moodle $CFG->dataroot';
$string['coursearchiverpreview'] = 'Vista previa de subir cursos';
$string['coursearchiverresult'] = 'Resultados de subir cursos';
$string['coursearchiver_settings'] = 'Configuraciones del Archivador de Cursos';
$string['coursedeleted'] = 'Curso eliminado';
$string['coursedeletionnotallowed'] = 'No está permitida la eliminación del curso';
$string['coursefullname'] = 'Nombre completo del curso';
$string['courseid'] = 'ID del curso';
$string['courseidnum'] = 'idnumber del curso';
$string['courseselector'] = 'Resultados de búsqueda de curso';
$string['courseshortname'] = 'Nombre corto del curso';
$string['course_skipped'] = '{$a->fullname} será saltado por los próximos  {$a->optoutyears} año(s). Gracias.';
$string['createdbefore'] = 'Creada anteriormente';
$string['delete'] = 'Eliminar Cursos';
$string['deselectall'] = 'Des-seleccionar Todo';
$string['email'] = 'Enviar Email';
$string['emailselector'] = 'Usuarios seleccionados para recibir Emails.';
$string['emptycourse'] = 'Curso Vacío';
$string['emptyonly'] = 'Regresar solamente cursos vacíos';
$string['errorarchivefile'] = 'No existe el archivo de curso archivado.';
$string['errorarchivepath'] = 'No pudo crearse la ruta para archivar.';
$string['errorarchivingcourse'] = 'El curso: ({$a->id}) {$a->fullname} no pudo ser archivado.';
$string['errorbackup'] = 'Fallo al Respaldar.';
$string['errordeletingcourse'] = 'Curso: ({$a->id}) {$a->fullname} no pudo ser eliminado.';
$string['erroremptysearch'] = 'No se dió criterio para búsqueda.';
$string['errorhidingcourse'] = 'El curso: ({$a->id}) {$a->fullname} no pudo ocultarse.';
$string['errorinsufficientdata'] = 'No hay suficiente información para realizar esta acción';
$string['error_key'] = 'La clave de seguridad es incorrecta';
$string['errormissingcourses'] = 'Falta la variable %courses en la plantilla del Email. Esta es una lista de los cursos.';
$string['errormissingto'] = 'Falta la variable %toen la plantilla del Email. Este es el nombre del destinatario.';
$string['error_nocourseid'] = 'El registro del curso no contiene una ID';
$string['errornoform'] = 'Formato no dado.';
$string['errornonnumericaccess'] = 'El acceso debe ser numérico (estampa-de-tiempo UNIX)';
$string['errornonnumericid'] = 'La ID del curso debe ser numérica';
$string['errors'] = 'Errores';
$string['errors_count'] = 'Errores: {$a}';
$string['errorsendingemail'] = 'Falló Email para {$a->firstname} {$a->lastname} ({$a->email}).';
$string['errorvalidarchive'] = 'No es un archivo de respaldo válido.';
$string['hide'] = 'Ocultar cursos';
$string['hideemail'] = 'Mandar Emails "Curso a ser Ocultado"';
$string['hidewarningemailsetting'] = 'Advertencia por defecto del Email para Ocultar Cursos';
$string['hidewarningemailsettingdefault'] = '%to

Quisieramos informarle que los siguientes cursos Moodle que Usted ha enseñado pronto serán ocultados.
Esto significa que los estudiantes que todavía estén inscritos en el curso ya no tendrán acceso a los cursos. Si Usted quisiera evitar este proceso para alguno de los cursos siguientes, por favor haga click  en el enlace junto al curso que quiere evitar que sea ocultado.

%courses

Gracias.';
$string['hidewarningemailsetting_help'] = 'Este es el contenido de un Email que será enviado a todos los profesores de un curso que es seleccionado para ser ocultado.';
$string['hidewarningsubject'] = 'Aviso: Pronto se ocultarán cursos.';
$string['invalidmode'] = 'No se dió un modo válido para la herramiento.';
$string['messageprovider:courseowner'] = 'Notificaciones de la herramienta para archivar/ocultar curso.';
$string['never'] = 'Nunca';
$string['nocoursesfound'] = 'La búsqueda resultó en 0 curtsos encontrados.';
$string['nocoursesselected'] = 'Para realizar esta acción Usted necesita tener al menos 1 curso seleccionado.';
$string['noticecoursehidden'] = 'El curso: ({$a->id}) {$a->fullname} ya estaba oculto.';
$string['notices'] = 'Avisos';
$string['notices_count'] = 'Avisos: {$a}';
$string['nousersfound'] = 'No hay propietarios de cursos a quienes notificar';
$string['nousersselected'] = 'Para realizar esta acción Usted necesita tener al menos 1 usuario seleccionado.';
$string['optoutarchive'] = 'No archivar este curso';
$string['optouthide'] = 'No ocultar este curso';
$string['optoutyearssetting'] = 'Curso optó por salir de persistencia';
$string['optoutyearssetting_help'] = 'Por cuantos años aplicará el optar por salir para cada curso';
$string['outaccess'] = 'Último acceso';
$string['outemail'] = 'Email';
$string['outfirstname'] = 'Nombre';
$string['outfullname'] = 'Nombre completo';
$string['outid'] = 'ID';
$string['outidnumber'] = 'idnumber';
$string['outlastname'] = 'Apellido(s)';
$string['outowners'] = 'Propietarios de Cursos';
$string['outselected'] = 'Seleccionado';
$string['outshortname'] = 'Nombre corto';
$string['outuse'] = 'Último Uso';
$string['pluginname'] = 'Archivador de Cursos';
$string['processarchiving'] = 'Archivando los cursos seleccionados';
$string['processcomplete'] = 'Proceso Completado';
$string['processdeleting'] = 'Eliminando cursos seleccionados';
$string['processemailing'] = 'Enviando Emails';
$string['processhiding'] = 'Ocultando cursos seleccionados';
$string['processstarted'] = 'El proceso ya ha iniciado';
$string['results'] = 'Resultados';
$string['results_archive'] = 'Cursos archivados: {$a}';
$string['results_archiveemail'] = 'Emails de advertencia de archivar curso enviados: {$a}';
$string['results_courselist'] = 'Cursos enlistados: {$a}';
$string['results_delete'] = 'Cursos seleccionadoss: {$a}';
$string['results_getemails'] = 'Direcciones Email recolectadas: {$a}';
$string['results_hide'] = 'Cursos ocultados: {$a}';
$string['results_hideemail'] = 'Emails de advertencias de curso ocultado enviados: {$a}';
$string['resume'] = 'Resumen';
$string['resumenone'] = 'No se encontraron guardados';
$string['resumeselect'] = 'Elegir un punto para guardar';
$string['save'] = 'Crear Punto para Guardar';
$string['saved'] = 'Se ha hecho un Punto para guardar';
$string['search'] = 'Buscar cursos';
$string['selectall'] = 'Seleccionar todo';
$string['status'] = 'Estatus';
$string['step2savetitle'] = '{$a} lista de curso guardar';
$string['step3savetitle'] = '{$a} lista de Email guardar';
$string['unknownerror'] = 'El proceso ha resultado en un error que requiere un re-inicio del proceso.';
