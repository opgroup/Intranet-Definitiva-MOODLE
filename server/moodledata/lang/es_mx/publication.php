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
 * Strings for component 'publication', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   publication
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Añadir archivos';
$string['allfiles'] = 'Todos los archivos';
$string['allowedfiletypes'] = 'Tipos de archivos permitidos (,)';
$string['allowedfiletypes_err'] = '¡ Revise lo que puso! Extensión de archivo o separadores inválidos';
$string['allowedfiletypes_help'] = 'Configurar los tipos_de_archivos permitidos para subir en Tareas, separados por coma (,) como por ejemplo txt, jpg. Si fuera posible subir cualquier tipo, deje vacío este campo. El filtro no es sensible a minúsculas/MAYÚSCULAS, por lo que PDF es igual que pdf.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Los detalles de la tarea y el formato para envío estarán disponibles en <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'a partir de';
$string['allowsubmissionsfromdateh'] = 'Horarios ara Subida/Aprobación';
$string['allowsubmissionsfromdateh_help'] = 'Usted puede determinar el período de tiempo durante el cual los estudiantes pueden subir archivos o dar su aprobación para la publicación del archivo. Durante este período de tiempo, los estudiantes pueden editar sus archivos y también pueden quitar su aprobación para publicación.';
$string['allowsubmissionsfromdate_import'] = 'Aprobación a partir de';
$string['allowsubmissionsfromdatesummary'] = 'Esta Tarea aceptará envíos a partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate_upload'] = 'Es posible subir a partir de';
$string['alwaysshowdescription'] = 'Siempre  mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la Descripción de la Tarea de arriba solamente estará visible para los estudiantes a partir de la fecha de "Permitir envíos a partir de".';
$string['approval_timeover'] = 'Usted solamente puede cambiar su aprobación durante el período_de_cambios.';
$string['approved'] = 'Aprobado';
$string['approveusers'] = 'visible para todos';
$string['assignment'] = 'Tarea';
$string['assignment_help'] = 'Elija a tarea desde la cual importará archivos. En el momento, las tareas-grupales no están soportadas y por lo tanto, no son seleccionables.';
$string['assignment_notfound'] = 'La tarea a partir de la cual importar, no se encontró.';
$string['assignment_notset'] = 'No se han elegido Tareas.';
$string['autoimport'] = 'Sincronizar automáticamente con Tarea';
$string['autoimport_help'] = 'Si se activa, los envíos nuevos en la Tarea correspondiente serán automáticamente importados dentro del módulo Publicación. (Opcional). Debe obtenerse Aprobación_del_estudiante nuevamente para los archivos nuevos.';
$string['availability'] = 'Horario para Subida/Aprobación';
$string['choose'] = 'elija por favor...';
$string['configautoimport'] = 'Si Usted prefiere que los envíos de los estudiantes sean importados automáticamente dentro de las instancias de Publicación. Esta característica puede ser habilitada/deshabilitada separadamente para cada instancia de Publicación.';
$string['configmaxbytes'] = 'Tamaño máximo por defecto para todos los archivos en la carpeta_de_estudiante.';
$string['configmaxfiles'] = 'Número máximo por defecto de anexos permitidos por usuario.';
$string['configobtainstudentapproval'] = 'Los documentos son visibles después del consentimiento del estudiante.';
$string['configobtainteacherapproval'] = 'Los documento de los estudiantes por defecto son visibles para todos los otros participante.';
$string['configrequiremodintro'] = 'Deshabilite esta opción si no desea forzar a los usuarios a que escriban descripciones de cada actividad.';
$string['courseuploadlimit'] = 'Límite de subidas del curso';
$string['cutoffdate'] = 'Fecha límite';
$string['cutoffdatefromdatevalidation'] = 'La fecha de corte debe ser posterior a la fecha de "permitir envíos a partir de".';
$string['cutoffdate_help'] = 'Si se configura, las tareas no aceptarán envíos después de esta fecha si no hubiera una extensión.';
$string['cutoffdate_import'] = 'Última aprobación hasta';
$string['cutoffdate_upload'] = 'Última posibilidad de Subida hasta';
$string['cutoffdatevalidation'] = 'La fecha de corte no puede ser antes de la fecha esperada.';
$string['details'] = 'Detalles';
$string['downloadall'] = 'Descargar todos los archivos como ZIP';
$string['duedate'] = 'a';
$string['duedate_help'] = 'Esta es la fecha para la cual es esperada la tarea. Se seguirán permitiendo los envíos después de esta fecha, pero todos los envíos posteriores a esta fecha serán marcados como tardíos. Para impedir los envíos después de una cierta fecha - configure la fecha_de_corte de la Tarea.';
$string['duedate_import'] = 'Probar para';
$string['duedate_upload'] = 'Es posible subir hasta';
$string['duedatevalidation'] = 'La fehca esperada debe ser despues de la fecha de "permitir envíos después de ".';
$string['edit_timeover'] = 'Los archivos solamente pueden ser editados dentro del período_de_cambios.';
$string['edit_uploads'] = 'subir/editar archivos';
$string['entiresperpage'] = 'Participantes mostrados por página';
$string['extensionduedate'] = 'Extensión de fecha esperada';
$string['extensionnotafterduedate'] = 'La extensión de fecha esperada debe ser después de la fecha esperada.';
$string['extensionnotafterfromdate'] = 'La extensión de fecha esperada debe ser después de la fecha a partir de la cual se permiten los envíos';
$string['extensionto'] = 'Extensión para';
$string['filedetails'] = 'Detalles';
$string['go'] = 'Ir';
$string['grantextension'] = 'otorgar extensión';
$string['groupapprovalmode'] = 'Modo aprobación_de_grupo';
$string['groupapprovalmode_all'] = '<strong>TODOS</strong> los miembros del grupo tienen que aprobar';
$string['groupapprovalmode_help'] = 'Aquí Usted decide si se necesita que aprueben todos los miembros del grupo o solamente con que apruebe un miembro del grupo es suficiente para que los archivos sean visibles. Los archivos solamente serán visibles después de la aprobación por todos los miembros del grupo o al menos por un miembro del grupo.';
$string['groupapprovalmode_single'] = 'al menos <strong>UN</strong> miembro tiene que aprobar';
$string['guideline'] = 'visible para todos:';
$string['hidden'] = 'oculto/a';
$string['hideidnumberfromstudents'] = 'Ocultar Número_ID';
$string['hideidnumberfromstudents_desc'] = 'Oculatr la columna de Número-ID en las tablas públicas para los estudiantes';
$string['importfrom_err'] = 'Usted tiene que elegir una tarea a partir de la cual desea importar.';
$string['maxbytes'] = 'Tamaño máximo de anexo';
$string['maxfiles'] = 'Número máximo de anexos';
$string['mode'] = 'Modo';
$string['mode_help'] = 'Elija si es que los estudiantes pueden subir documentos en la carpeta de una tarea o documentos d una tarea de las que son orígenes.';
$string['modeimport'] = 'tomar documentos de una tarea';
$string['modeupload'] = 'los estudiantes pueden subir documentos';
$string['modulename'] = 'Carpeta del estudiante';
$string['modulename_help'] = 'La carpeta del estudiante ofrece las siguientes características:

* Los participantes pueden subir documentos que están disponibles inmediatamente para otros participante o que solamente están disponibles después de que los documentos hayan sido revisados y se haya dado su consentimiento.
* Puede elegirse una Tarea como la base para una carpeta del estudiante. El profesor puede decidir cuales documentos de la carpeta son visibles para todos los participantes. Los profesores también pueden permitir que los participantes decidan si es que sus documentos serán visibles para otros.';
$string['modulenameplural'] = 'Carpetas de estudiantes';
$string['myfiles'] = 'Archivos propios';
$string['mygroupfiles'] = 'Mis archivos del grupo';
$string['name'] = 'Nombre de carpeta del estudiante';
$string['noentries'] = 'Sin entradas';
$string['nofiles'] = 'Sin archivos disponibles';
$string['nofilestozip'] = 'Sin archivos para comprimir en ZIP';
$string['nopublicationsincourse'] = 'No hay instancias de publicación en este curso.';
$string['nothingtodisplay'] = 'No hay entradas para mostrar';
$string['notice'] = 'Aviso:';
$string['notice_groupimportrequireallapproval'] = 'Decidir si es que los archivos están disponibles para todos. Todos los miembros del grupo tienen que dar su aprobación antes de que el archivo sea visible.';
$string['notice_groupimportrequireoneapproval'] = 'Decidir si es que sus archivos están disponibles para todos, La aprobación de solamente un miembro del grupo es suficiente para que el archivo sea visible. ¡Por favor, discuta internamente en el grupo si es que su archivo debería de ser visible o no antes de aprobarlo!';
$string['notice_importnoapproval'] = 'Los archivos siguientes son visibles para todos.';
$string['notice_importrequireapproval'] = 'Decidir si sus archivos son disponibles para todos.';
$string['notice_uploadnoapproval'] = 'Todos los archivos serán visibles inmediatamente para todos en cuanto sean subidos. El profesor se reserva el derecho de ocultar archivos publicados en cualquier momento.';
$string['notice_uploadrequireapproval'] = 'Todos los archivos subidos serán hechos visibles ssolamente después de la revisión pro el profesor.';
$string['obtainstudentapproval'] = 'Obtener aprobación';
$string['obtainstudentapproval_help'] = 'Decida si se obtendrá aprobación por parte del estudiante: <br><ul><li> SI- los archivos serán visibles solamnte después de que el estudiante lo apruebe. El profesor puede seleccioanr estudiantes/archivos individuales a los cuales pedirles aprobación.</li><li> NO - No se obtendrá aprobación del estudiante mediante Moodle. La visibilidad del archivo es solamente la decisiónd el profesor.</li></ul>';
$string['obtainteacherapproval'] = 'Aprobado por defecto';
$string['obtainteacherapproval_help'] = 'Decida si es que los archivos serán hechos visibles inmediatamente al subirlos o no: <br><ul><li> SI- todos los archivos serán visibles para todos de inmediato</li><li> NO - los archivos serán publicados solamente después de la aprobación por el profesor</li></ul>';
$string['optionalsettings'] = 'Opciones';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de la carpeta del estudiante';
$string['pluginname'] = 'Carpeta del estudiante';
$string['publication:addinstance'] = 'Añadir una nueva carpeta del estudiante';
$string['publication:approve'] = 'Decidir si es que los archivos son visible spara todos los estudiantes.';
$string['publication:grantextension'] = 'Otorgar extensión';
$string['publication:upload'] = 'Subir archivos a una carpeta de estudiante';
$string['publication:view'] = 'Ver carpeta del estudiante';
$string['publicfiles'] = 'Archivos públicos';
$string['published_aftercheck'] = 'no, solamente después de la aprobación por un profesor';
$string['published_immediately'] = 'si inmediatamente, sin necesitarse aprobación por un profesor';
$string['rejected'] = 'Rechazado';
$string['rejectusers'] = 'invisible para todos';
$string['requiremodintro'] = 'Requerir descripción de la actividad';
$string['reset'] = 'Revertir';
$string['resetstudentapproval'] = 'Reiniciar estatus';
$string['reset_userdata'] = 'Todos los datos';
$string['saveapproval'] = 'guardar aprobación';
$string['save_changes'] = 'Guardar cambios';
$string['savestudentapprovalwarning'] = '¿Está Usted seguro de querer guardar estos cambios? Una vez configurado Usted no podrá cambiar el estatus.';
$string['saveteacherapproval'] = 'guardar aprobación';
$string['search:activity'] = 'Publicación - información de actividad';
$string['show_details'] = 'Mostrar detalles';
$string['status'] = 'Estatus';
$string['studentapproval'] = 'Estatus';
$string['studentapproval_help'] = 'La columna de estatus representa la respuesta de los estudiantes a la aprobaciónl:

* ? - aprobación pendiente
* ✓ - aprobación otorgada
* ✖ - aprobación  rechazada';
$string['student_approve'] = 'aprobar';
$string['student_approved'] = 'aprobada';
$string['student_pending'] = 'no visible (no aprobada)';
$string['student_reject'] = 'rechazar';
$string['student_rejected'] = 'rechazada';
$string['teacherapproval'] = 'Aprobación';
$string['teacher_approved'] = 'visible (aprobada)';
$string['teacher_pending'] = 'confirmación pendiente';
$string['teacher_rejected'] = 'rechazada';
$string['total'] = 'total';
$string['updatefiles'] = 'Subir archivos';
$string['updatefileswarning'] = 'Los archivos de un estudiante individual dentro de la carpeta del estudiante serán actualizados con su envío de la tarea. Los archivos que ya eran visibles de los estudiantes también serán remplazados si fueran eliminados o refrescados. Las configuraciones del estudiante con respecto a visibilidad no serán cambiadas.';
$string['visibility'] = 'visible para todos';
$string['visible'] = 'visible';
$string['visibleforstudents'] = 'visible para todos';
$string['visibleforstudents_no'] = 'Este archivo NO está visible a los estudiantes';
$string['visibleforstudents_yes'] = 'Los estudiantes SI pueden ver este archivo';
$string['warning_changefromobtainstudentapproval'] = 'Si Usted realiza este cambio, solamente Usted puede decidir cuales archivos son visibles para todos los estudiantes. A los estudiantes no se les pide su aprobación. Todos los archivos marcados como aprobados se volverán visibles para todos los estudiantes independientemente de la decisión de los estudiantes.';
$string['warning_changefromobtainteacherapproval'] = 'Después de arctivar esta configuración, todos los archivos subidos serán visibles para otros participantes. Todos los archivos subidos serán todos visibles.Usted puede hacer visibles manualmente archivos para ciertos estudiantes.';
$string['warning_changetoobtainstudentapproval'] = 'Si Usted realiza este cambio, a los estudiantes se les pedirá su aprobación para que todos los archivos sean marcados como visibles. Los archivos solamente serán visibles después de la aprobación por los estudiantes.';
$string['warning_changetoobtainteacherapproval'] = 'Deespués de desactivar esta opción los archivos subidos no serán visibles automáticamente para otros participantes. Usted tendrá que determinar cuales archivos serán visibles. Los archivos que ya eran visibles de volverán invisibles.';
$string['withselected'] = 'Con los seleccionados...';
$string['zipusers'] = 'Descargar como ZIP';
