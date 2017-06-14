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
 * Strings for component 'attendance', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   attendance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['acronym'] = 'Acrónimo';
$string['add'] = 'Añadir';
$string['addmultiplesessions'] = 'Sesiones múltiples';
$string['addsession'] = 'Añadir sesión';
$string['adduser'] = 'Añadir usuario';
$string['Afull'] = 'Ausente';
$string['all'] = 'Todos';
$string['allcourses'] = 'Todos los cursos';
$string['allpast'] = 'Todos los pasados';
$string['allsessions'] = 'Todas las sesiones';
$string['attendance:addinstance'] = 'Añadir una nueva actividad con asistencia';
$string['attendance_already_submitted'] = 'Usted no puede auto-registrar asistencia que ya ha sido configurada.';
$string['attendance:canbelisted'] = 'Aparecer en la lista';
$string['attendance:changeattendances'] = 'Cambiando Asistencias';
$string['attendance:changepreferences'] = 'Cambiando Preferencias';
$string['attendancedata'] = 'Datos de Asistencia';
$string['attendance:export'] = 'Exportar Reportes';
$string['attendanceforthecourse'] = 'Asistencia para el curso';
$string['attendancegrade'] = 'Calificación por asistencia';
$string['attendance:manageattendances'] = 'Gestionar Asistencias';
$string['attendance:managetemporaryusers'] = 'Gestionar usuarios temporales';
$string['attendancenotset'] = 'Usted debe de configurar su asistencia';
$string['attendancenotstarted'] = 'Asistencia no ha iniciado para este curso';
$string['attendancepercent'] = 'Porcentaje de asistencia';
$string['attendancereport'] = 'Reporte de asistencia';
$string['attendancesuccess'] = 'Se tomó exitosamente la asistencia';
$string['attendance:takeattendances'] = 'Tomando Asistencias';
$string['attendanceupdated'] = 'Se actualizó exitosamente la asistencia';
$string['attendance:view'] = 'Viendo Asistencias';
$string['attendance:viewreports'] = 'Viendo Reportes';
$string['attforblockdirstillexists'] = 'Aún existe un directorio antiguo mod/attforblock - Usted debe eliminar este directorio antes de correr esta actualización.';
$string['attrecords'] = 'Registros de asistencia';
$string['calclose'] = 'Cerrar';
$string['caleventcreated'] = 'Evento de calendario para sesión creado exitosamente';
$string['caleventdeleted'] = 'Evento de calendario para sesión eliminado exitosamente';
$string['calmonths'] = 'Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre';
$string['calshow'] = 'Fecha de término';
$string['caltoday'] = 'Hoy';
$string['calweekdays'] = 'Do,Lu,Ma,Mi,Ju,Vi,Sa';
$string['cannottakeforgroup'] = 'Usted no puede tomar asistencia para el grupo "{$a}"';
$string['changeattendance'] = 'Cambiar asistencia';
$string['changeduration'] = 'Cambiar duración';
$string['changesession'] = 'Cambiar sesión';
$string['checkweekdays'] = 'Seleccionar días de la semana que caen dentro del rango de fechas de sus sesiones seleccionadas.';
$string['column'] = 'columna';
$string['columns'] = 'columnas';
$string['commonsession'] = 'Todos los estudiantes';
$string['commonsessions'] = 'Todos los estudiantes';
$string['confirmdeletehiddensessions'] = '¿Está Usted seguro de querer eliminar {$a->count} sesiones agendadas para antes de la fecha de inicio del curso ({$a->date})?';
$string['confirmdeleteuser'] = '¿Está Usted seguro de querer eliminar al usuario \'{$a->fullname}\' ({$a->email})?<br/>Todos sus registros de asistencia serán eliminados permanentemente.';
$string['copyfrom'] = 'Copiar datos de asistencia desde';
$string['countofselected'] = 'Número de seleccionados';
$string['createmultiplesessions'] = 'Crear múltiples sesiones';
$string['createmultiplesessions_help'] = 'Esta función le permite crear sesiones múltiples en un paso simple. Las sesiones empiezan en la fecha de la sesión base y continúan hasta la fecha de  \'repetir hasta\'.

 * <strong>Repetir en</strong>: Seleccione los días de la semana cuando se reunirá su clase (por ejemplo, Lunes/Miércoles/Viernes).
* <strong>Repetir cada</strong>: Estop permite una configuración de frecuencia. Si su clase se reune cada semana, seleccione 1; si se reunirá una semana si y otra no, seleccione 2; y así sucesivamente
* <strong>Repetir hasta</strong>: Seleccione el último día de clase (el último día que Usted quiere tomar asistencia).';
$string['createonesession'] = 'Crear una sesión para el curso';
$string['days'] = 'Días';
$string['defaultdisplaymode'] = 'Modo de visualización por defecto';
$string['defaults'] = 'Ajustes por defecto';
$string['defaultsessionsettings'] = 'Configuraciones por defecto de la sesión';
$string['defaultsessionsettings_help'] = 'Estas configuraciones definen los valores por defecto para todas las sesiones nuevas';
$string['defaultsettings'] = 'Configuraciones por defecto de asistencia';
$string['defaultsettings_help'] = 'Estas configuraciones definen los valores por defecto para todas las asistencias nuevas';
$string['defaultstatus'] = 'Estatus por defecto configurado';
$string['defaultsubnet'] = 'Rango de sub-red por defecto';
$string['defaultsubnet_help'] = 'Las grabaciones de Asistencia pueden restringirse a subredes particulares al especificar una lista separada por comas de las direcciones IP parciales o completas. Este es el valor por defecto usado al crear nuvevas sesiones.';
$string['delete'] = 'Eliminar';
$string['deletedgroup'] = 'El grupo asociado con esta sesión ha sido eliminado';
$string['deletehiddensessions'] = 'Eliminar todas las sesiones ocultas';
$string['deletelogs'] = 'Eliminar datos de asistencia';
$string['deleteselected'] = 'Eliminar seleccionado';
$string['deletesession'] = 'Eliminar sesión';
$string['deletesessions'] = 'Eliminar todas las sesiones';
$string['deleteuser'] = 'Eliminar usuario';
$string['deletingsession'] = 'Eleminando sesión para el curso';
$string['deletingstatus'] = 'Eleminando estatus para el curso';
$string['description'] = 'Descripción';
$string['display'] = 'Mostrar';
$string['displaymode'] = 'Modo de visualización';
$string['donotusepaging'] = 'No usar buscapersonas';
$string['downloadexcel'] = 'Descargar en formato Excel';
$string['downloadooo'] = 'Descargar en formato OpenOffice';
$string['downloadtext'] = 'Descargar en formato de texto';
$string['duration'] = 'Duración';
$string['Eacronym'] = 'E';
$string['editsession'] = 'Editar sesión';
$string['edituser'] = 'Editar usuario';
$string['Efull'] = 'Excusado (Justificado)';
$string['emptyacronym'] = 'No están permitidos los acrónimos vacíos. Registro de estatus no actualizado.';
$string['emptydescription'] = 'No están permitidas las descripciones vacías. Registro de estatus no actualizado.';
$string['endofperiod'] = 'Fin del período';
$string['endtime'] = 'Hora de fin de sesión';
$string['enrolmentend'] = 'La inscripción del usuario termina en {$a}';
$string['enrolmentstart'] = 'La inscripción del usuario principia en {$a}';
$string['enrolmentsuspended'] = 'Inscripción suspendida';
$string['errorgroupsnotselected'] = 'Seleccionar uno o más grupos';
$string['errorinaddingsession'] = 'Error al añadir sesión';
$string['erroringeneratingsessions'] = 'Error al generar sesión';
$string['eventdurationupdated'] = 'Duración de sesión actualizada';
$string['eventreportviewed'] = 'Reporte de asistencia visto';
$string['eventsessionadded'] = 'Sesión añadida';
$string['eventsessiondeleted'] = 'Sesión eliminada';
$string['eventsessionupdated'] = 'Sesión actualizada';
$string['eventstatusadded'] = 'Estatus añadido';
$string['eventstatusupdated'] = 'Estatus actualizado';
$string['eventtaken'] = 'Asistencia tomada';
$string['eventtakenbystudent'] = 'Asistencia tomada por el estudiante';
$string['export'] = 'Exportar';
$string['extrarestrictions'] = 'Restricciones extra';
$string['from'] = 'desde:';
$string['gradebookexplanation'] = 'Calificación en Libro de Calificaciones';
$string['gradebookexplanation_help'] = 'El módulo de asistencia muestra su calificación actual por asistencia basada en el número de puntos que Usted ha ganado a la fecha y el número total de puntos que podría haber ganado a la fecha; no incluye los períodos de clase del futuro. En el libro de calificaciones, su calificación de asistencia se basa en su porcentaje actual de asistencia y el número de puntos que pueden ganarse sobre la duración completa del curso, incluyendo a los períodos de clases futuras. Como tal, sus calificaciones de asistencia mostradas en el módulo de asistencia y en el libro de calificaciones puede que no sean el mismo número de puntos, pero son el mismo porcentaje.

Por ejemplo, si Usted ha ganado 8 de 10 puntos a la fecha (80% de asistencia), y la asistencia para el curso completo vale 50 puntos, el módulo de Asistencia le mostrará 8/10 y el Libro de calificaciones le mostrará 40/50. Usted no se ha ganado 40 puntos todavía, pero 40 es el equivalente del valor en puntos a su porcentaje de asistencia actual del 80%. El valor en puntos que Usted ha ganado en el módulo de Asistencia nunca puede disminuir, porque está basado únicamente en la asistencia a la fecha; sin embargo, el valor en puntos por asistencia mostrado en el Libro de calificaciones puede aumentar o disminuir dependiendo de sus asistencias futuras, dado que está basado en la asistencia al curso completo.';
$string['gridcolumns'] = 'Columnas de rejilla';
$string['groupsession'] = 'Grupo de estudiantes';
$string['hiddensessions'] = 'Sesiones ocultas';
$string['hiddensessionsdeleted'] = 'Todas las sesiones ocultas fueron eliminadas';
$string['hiddensessions_help'] = 'Las sesiones se ocultan si están agendadas para la fecha de inicio del curso.

Usted puede usar esta característica para ocultar sesiones antiguas en lugar de eliminarlas. Recuerde que solamente las sesiones visibles aparecerán en el Libro de Calificaciones.';
$string['hidensessiondetails'] = 'Ocultar detalles de sesiones';
$string['identifyby'] = 'Identificar al estudiante por';
$string['includeall'] = 'Seleccionar todas las sesiones';
$string['includenottaken'] = 'Incluir sesiones no tomadas';
$string['includeremarks'] = 'Incluir comentarios';
$string['incorrectpassword'] = 'Usted ha ingresado una contraseña incorrecta y su asistencia no ha sido grabada; por favor ingrese la contraseña correcta.';
$string['indetail'] = 'En detalle ...';
$string['invalidaction'] = 'Usted tiene que seleccionar una acción';
$string['invalidsessionenddate'] = 'Esta fecha no puede ser anterior a la fecha de la sesión';
$string['invalidsessionendtime'] = 'La hora final debe ser posterior a la hora inicial';
$string['invalidstatus'] = 'Usted ha seleccionado un estatus inválido; por favor inténtelo nuevamente';
$string['jumpto'] = 'Saltar a';
$string['Lacronym'] = 'R';
$string['Lfull'] = 'Retrasado';
$string['lowgrade'] = 'Calificación baja';
$string['maxpossible'] = 'Máximo posible';
$string['maxpossible_help'] = 'Mostrar el puntaje que cada usuario puede alcanzar si recibe el máximo de puntos posibles en cada sesión que todavía no haya tomado (pasadas y futuras):
<ul>
<li><strong>Puntos</strong>: puntos máximos que cada usuario puede alcanzar sobre todas las sesiones.</li>
<li><strong>Porcentaje</strong>: porcentaje máximo que cada usuario puede alcanzar sobre todas las sesiones.</li>
</ul>';
$string['maxpossiblepercentage'] = 'Porcentaje posible máximo';
$string['maxpossiblepoints'] = 'Puntos posibles máximos';
$string['mergeuser'] = 'Juntar usuario';
$string['modulename'] = 'Asistencia (Attendance)';
$string['modulename_help'] = 'El módulo de actividad Asistencia (Attendance) le permite al maestro pasar lista durante la clase y a los estudiantes les permite ver su propio registro de asistencias.

El maestro puede crear sesiones múltiples y puede calificar el status de asistencia como "Presente", "Ausente", "Retardo", o "Justificado" o modificar los estatus para que se adapten a sus necesidades.

Hay reportes disponibles para la clase completa o para alumnos individuales.';
$string['modulenameplural'] = 'Asistencias';
$string['months'] = 'Meses';
$string['moreattendance'] = 'La asistencia ha sido tomada exitosamente para esta página';
$string['moveleft'] = 'Mover a la izquierda';
$string['moveright'] = 'Mover a la derecha';
$string['mustselectusers'] = 'Debe seleccionar los usuarios a exportar';
$string['newdate'] = 'Nueva fecha';
$string['newduration'] = 'Nueva duración';
$string['newstatusset'] = 'Nuevo conjunto de estatuses';
$string['noattendanceusers'] = 'No es posible exportar ningun dato porque no hay estudiantes inscritos en el curso.';
$string['noattforuser'] = 'No hay registros de asistencia para el usuario';
$string['nodescription'] = 'Sesión de clase regular';
$string['nogroups'] = 'Usted no puede añadir sesiones de grupo. No existen grupos en este curso.';
$string['noguest'] = 'Los invitados no pueden ver la asistencia';
$string['noofdaysabsent'] = 'Número de días ausente';
$string['noofdaysexcused'] = 'Número de días disculpado';
$string['noofdayslate'] = 'Número de días con retardo';
$string['noofdayspresent'] = 'Número de días presente';
$string['nosessiondayselected'] = 'No se seleccionó día de sesión';
$string['nosessionexists'] = 'No existe sesión para este curso';
$string['nosessionsselected'] = 'Número de sesiones seleccionadas';
$string['notfound'] = '¡ No se encontró actividad de asistencia en este curso !';
$string['notmember'] = 'no&nbsp;miembro';
$string['noupgradefromthisversion'] = 'El módulo de Asistencia (Attendance) no puede actualizarse desde la versión de attforblock que Usted tiene instalada. - Por favor, elimine attforblock o actualícelo a la versión más reciente antes de instalar el nuevo módulo de asistencia.';
$string['olddate'] = 'Fecha antigua';
$string['onlyselectedusers'] = 'Exportar usuarios específicos';
$string['overallsessions'] = 'Sobre todas las sesiones';
$string['overallsessions_help'] = 'Mostrar estadísticas para todas las sesiones incluyendo aquellas aun no tomadas (pasadas y futuras):
<ul>
<li><strong>Sesiones</strong>: número total de sesiones.</li>
<li><strong>Puntos</strong>: puntos otorgados basados en las sesiones tomadas.</li>
<li><strong>Porcentaje</strong>: porcentaje de puntos otorgados sobre el máximo posible de puntos para todas las sesiones.</li>
</ul>';
$string['oversessionstaken'] = 'Sobre sesiones tomadas';
$string['oversessionstaken_help'] = 'Mostrar estadísticas para sesiones en donde se ha tomado asistencia:
<ul>
<li><strong>Sesiones</strong>: número de sesiones ya tomadas.</li>
<li><strong>Puntos</strong>: puntos otorgados basados en las sesiones tomadas.</li>
<li><strong>Porcentaje</strong>: porcentaje de puntos otorgados sobre el máximo de puntos posibles de las sesiones tomadas.</li>
</ul>';
$string['Pacronym'] = 'P';
$string['participant'] = 'Participante';
$string['password'] = 'Contraseña';
$string['passwordgrp'] = 'Contraseña del estudiante';
$string['passwordgrp_help'] = 'Si se activa, a los estudiantes se les pedirá que ingresen esta contraseña antes de que ellos puedan configurar su propio estatus de asistencia para la sesión. Si se deja vacío, no se necesitará contraseña.';
$string['passwordrequired'] = 'Usted debe de ingresar la contraseña de sesión antes de que Usted pueda enviar su asistencia';
$string['percentage'] = 'Porcentaje';
$string['percentageallsessions'] = 'Porcentaje sobre todas las sesiones';
$string['percentagesessionscompleted'] = 'Porcentaje sobre las sesiones tomadas';
$string['Pfull'] = 'Presente';
$string['pluginadministration'] = 'Administración de asistencia';
$string['pluginname'] = 'Asistencia';
$string['points'] = 'Puntos';
$string['pointsallsessions'] = 'Puntos sobre todas las sesiones';
$string['pointssessionscompleted'] = 'Puntos sobre las sesiones tomadas';
$string['priorto'] = 'La fecha de la sesión es anterior a la fecha de inicio del curso ({$a}) de forma tal que las nuevas sesiones agendadas antes de esta fecha estarán ocultas (no accessibles).Usted puede cambiar la fecha de inicio del curso en cualquier momento  (vea las configuraciones del curso) para sí tener acceso a sesiones anteriores.<br><br>Por favor, cambie la fecha de la sesión o simplemente haga click en  el botón para "Añadir sesión" para confirmar?';
$string['randompassword'] = 'Contraseña aleatoria';
$string['remark'] = 'Comentario para: {a}';
$string['remarks'] = 'Observaciones';
$string['repeatasfollows'] = 'Repetir la sesión de arriba como sigue';
$string['repeatevery'] = 'Repetir cada';
$string['repeaton'] = 'Repetir en';
$string['repeatuntil'] = 'Repetir hasta';
$string['report'] = 'Reporte';
$string['required'] = 'Requerida*';
$string['requiredentries'] = 'Registros temporales sobre-escriben registros de asistencia de participante';
$string['requiredentry'] = 'Guía para ayuda con unión de usuario temporal';
$string['requiredentry_help'] = '<p align="center"><b>Asistencia (Attendance)</b></p>
<p align="left"><strong>Unir Cuentas</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Usuario Moodle</th>
<th>Usuario Temporal</th>
<th>Acción</th>
</tr>
<tr>
<td>Datos de asistencia</td>
<td>Datos de asistencia</td>
<td>Usuario temporal anulará a usuario Moodle</td>
</tr>
<tr>
<td>Sin datos de asistencia</td>
<td>Datos de asistencia</td>
<td>La sistencia del usuario temporal será transferida al usuario Moodle</td>
</tr>
<tr>
<td>Datos de asistencia</td>
<td>Sin datos de asistencia</td>
<td>El usuario temporal será eliminado</td>
</tr>
<tr>
<td>Sin datos de asistencia</td>
<td>Sin datos de asistencia</td>
<td>El usuario temporal será eliminado</td>
</tr>
</table>

</p>
<p align="left"><strong>El usuario temporal será eliminadoen todos los casos después de la acción de juntar</strong></p>';
$string['requiresubnet'] = 'Los estudiantes solamente pueden grabar su propia asistencia desde estas computadoras.';
$string['requiresubnet_help'] = 'La grabación de asistencia puede restringirse a sub-redes particulares al especificar una lista separada por comas de direcciones IP parciales o completas.';
$string['resetdescription'] = 'Recuerde que al eliminar datos de asistencias eliminará información de la BasedeDatos. ¡ Usted puede simplemente ocultar las sesiones antiguas al cambiarles la fecha de inicio del curso !';
$string['resetstatuses'] = 'Reiniciar estatus a como estaban por defecto';
$string['restoredefaults'] = 'Restaurar por defecto';
$string['resultsperpage'] = 'Resultados por página';
$string['resultsperpage_desc'] = 'Número de estudiantes mostrados en una página';
$string['save'] = 'Guardar asistencia';
$string['search:activity'] = 'Asistencia - información de actividad';
$string['session'] = 'Sesión';
$string['sessionadded'] = 'Sesión actualizada exitosamente';
$string['sessionalreadyexists'] = 'La sesión ya existe para esta fecha';
$string['sessiondate'] = 'Fecha';
$string['sessiondays'] = 'Días de sesión';
$string['sessiondeleted'] = 'Sesión eliminada exitosamente';
$string['sessionexist'] = 'Sesión no añadida (Ya existe)';
$string['sessiongenerated'] = 'Se ha generado exitosamente una sesión';
$string['session_help'] = 'Sesión';
$string['sessions'] = 'Sesiones';
$string['sessionscompleted'] = 'Sesiones tomadas';
$string['sessionsgenerated'] = '{$a}  sesiones fueron generadas exitosamente';
$string['sessionsids'] = 'IDs de sesiones:';
$string['sessionsnotfound'] = 'No hay sesiones en el rango de fechas-horas seleccionado';
$string['sessionstartdate'] = 'Fecha de inicio de sesión';
$string['sessionstotal'] = 'Número total de sesiones';
$string['sessiontype'] = 'Tipo';
$string['sessiontype_help'] = 'Usted puede añadir sesiones para todos los estudiantes o para un grupo de estudiantes. La habilidad para añadir diferentes tipos depende del modo de grupo de la actividad.

 * En el modo de grupos "Sin grupos" Usted solamente puede añadir sesiones comunes.}
* En el modo de grupo  "Grupos Separados" Usted solamente puede añadir sesiones para un grupo de estudiantes.
* En el modo de grupo "Grupos visibles" Usted puede añadir ambos tipos de sesiones.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionupdated'] = 'Sesión actualizada exitosamente';
$string['setallstatuses'] = 'Configurar estatus para todos los usuarios';
$string['setallstatusesto'] = 'Configurar estatus para todos los usuarios a «{$a}»';
$string['set_by_student'] = 'Auto-grabada';
$string['settings'] = 'Configuraciones';
$string['showdefaults'] = 'Mostrar valores por defecto';
$string['showduration'] = 'Mostrar duración';
$string['showsessiondetails'] = 'Mostrar detalles de sesiones';
$string['somedisabledstatus'] = '(Algunas opciones han sido eliminadas porque la sesión ha comenzado).';
$string['sortedgrid'] = 'Parrilla ordenada';
$string['sortedlist'] = 'Lista ordenada';
$string['startofperiod'] = 'Inicio del período';
$string['status'] = 'Estatus';
$string['statusdeleted'] = 'Estatus eliminado';
$string['statuses'] = 'Estatus';
$string['statusset'] = 'Estatus configurado {$a}';
$string['statussetsettings'] = 'Estatus configurado';
$string['strftimedm'] = '%b %d';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p';
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentavailability'] = 'Disponible para estudiantes (minutos)';
$string['studentavailability_help'] = 'Cuandolos estudiantes están marcando sus propias asistencias, el número de minutos después de que inicia la sesión en los cuales este estatus está disponible. <br/>Si estuviera vacío, este estatus siempre estará disponible. Si se configura a 0 siempre estará oculto a los estudiantes.';
$string['studentid'] = 'ID del estudiante';
$string['studentpassword'] = 'Contraseña del estudiante';
$string['studentscanmark'] = 'Permitirles a los estudiantes grabar su propia asistencia';
$string['studentscanmark_desc'] = 'Si se activa, los profesores podrán permitirles a los estudiantes el que marquen su propia asistencia.';
$string['studentscanmark_help'] = 'Si se activa, los estudiantes podrán cambiar el estatus de su propia asistencia para la sesión.';
$string['studentscanmarksessiontime'] = 'Los estudiantes registran asistencia durante el tiempo de la sesión';
$string['studentscanmarksessiontime_desc'] = 'Si se activa, los estudiantes solamente pueden registrar sus asistencias durante la sesión.';
$string['studentscanmarksessiontimeend'] = 'Fin de sisión (minutos)';
$string['studentscanmarksessiontimeend_desc'] = 'Si la sesión no tiene una hora de terminación, por cuantos minutos debería de estar disponible la sesión para que los estudiantes registren su asistencia.';
$string['submitattendance'] = 'Enviar asistencia';
$string['subnetwrong'] = 'La asistencia solamente puede ser grabada desde ciertas localidades, y esta computadora no está en la lista permitida.';
$string['summary'] = 'Resumen';
$string['tablerenamefailed'] = 'Falló al renombrar tabla attforblock hacia asistencia';
$string['tactions'] = 'Acción';
$string['takeattendance'] = 'Tomar asistencia';
$string['takensessions'] = 'Sesiones tomadas';
$string['tcreated'] = 'Creado';
$string['tempaddform'] = 'Añadir usuario temporal';
$string['tempexists'] = 'Ya existe un usuario temporal con esta dirección Email';
$string['temptable'] = 'Lista de usuarios temporales';
$string['tempuser'] = 'Usuario temporal';
$string['tempusermerge'] = 'Unir usuario temporal';
$string['tempusers'] = 'Usuarios temporales';
$string['tempusersedit'] = 'Editar usuario temporal';
$string['tempuserslist'] = 'Usurios temporales';
$string['thiscourse'] = 'Este curso';
$string['time'] = 'Hora';
$string['timeahead'] = 'No pueden crearse sesiones múltiples que excedan de un año; por favor, ajuste las fechas de inicio y fin.';
$string['to'] = 'hasta:';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Nombre completo';
$string['unknowngroup'] = 'Grupo desconocido';
$string['update'] = 'Actualizar';
$string['userexists'] = 'Ya existe un usuario real con esta dirección email';
$string['users'] = 'Usuarios a exportar';
$string['usestatusset'] = 'Estatus configurado';
$string['variable'] = 'variable';
$string['variablesupdated'] = 'Variables actualizadas exitosamente';
$string['versionforprinting'] = 'versión para imprimir';
$string['viewmode'] = 'Modo de vista';
$string['week'] = 'semana(s)';
$string['weeks'] = 'Semanas';
$string['youcantdo'] = 'Usted no puede hacer nada';
