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
 * Strings for component 'report_customsql', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   report_customsql
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Añadir una nueva categoría';
$string['addcategorydesc'] = 'Para cambiar una categoría de un reporte, Usted deb editar ese reporte. Aquí puede Usted editar textos de la categoría, eliminar un acategoría o añadir una categoría nueva.';
$string['addreport'] = 'Añadir una nueva consulta';
$string['addreportcategory'] = 'Añadir una nueva categoría para reportes';
$string['anyonewhocanveiwthisreport'] = 'Cualquiera puede ver este reporte (report/customsql:view)';
$string['archivedversions'] = 'Versión archivada de esta consulta';
$string['at'] = 'en';
$string['automaticallydaily'] = 'Agendada, diariamente';
$string['automaticallymonthly'] = 'Agendada, el primer día de cada mes';
$string['automaticallyweekly'] = 'Agendada, el primer día de cada semana';
$string['availablereports'] = 'Consultas sobre-demanda';
$string['availableto'] = 'Disponible parao {$a}.';
$string['backtoreportlist'] = 'Regresar a la lista de consultas';
$string['categorycontent'] = '({$a->manual} bajo-demands, {$a->daily} diariamente, {$a->weekly} semanalmente, {$a->monthly} mensualmente)';
$string['categoryexists'] = 'Los nombres de categoría deben ser únicos; este nombre ya existe';
$string['categorynamex'] = 'Nombre de categoría: {$a}';
$string['changetheparameters'] = 'Cambiar los parámetros';
$string['customsql:definequeries'] = 'Definir consultas personalizadas';
$string['customsql:managecategories'] = 'Definir categorías personalizadas';
$string['customsql:view'] = 'Ver reporte de consultas personalizadas';
$string['dailyheader'] = 'Diariamente';
$string['dailyheader_help'] = 'Estas consultas son corridas automáticamente cada día en la hora especificada. Estos enlaces le permiten ver los resultados que ya se han acumulado.';
$string['defaultcategory'] = 'Miscelaneos';
$string['delete'] = 'Eliminar';
$string['deleteareyousure'] = '¿Está seguro de querer eliminar esta consulta?';
$string['deletecategoryareyousure'] = '<p>¿Está seguro de querer eliminar esta categoría? </p><p>Nopuede contener ninguna consulta.</p>';
$string['deletecategoryyesno'] = '<p>¿Está seguro de querer eliminar esta categoría? </p>';
$string['deletethiscategory'] = 'Eliminar esta categoría';
$string['deletethisreport'] = 'Eliminar esta consulta';
$string['description'] = 'Descripción';
$string['displayname'] = 'Nombre de consulta';
$string['displaynamerequired'] = 'Usted debe escribir un nombre de consulta';
$string['displaynamex'] = 'Nombre de consulta: {$a}';
$string['downloadthisreportascsv'] = 'Descargar estos resultados como CSV';
$string['edit'] = 'Añadir/Editar';
$string['editcategory'] = 'Actualizar categoría';
$string['editingareport'] = 'Editando una consulta ad-hoc de BasedeDatos';
$string['editthiscategory'] = 'Editar esta categoría';
$string['editthisreport'] = 'Editar esta consulta';
$string['emailbody'] = 'Estimado/a {$a}';
$string['emailink'] = 'Para acceder al reporte, haga click en este enlace: {$a}';
$string['emailnumberofrows'] = 'Solamente el número de filas y el enlace';
$string['emailresults'] = 'Poner los resultados en el cuerpo del Email';
$string['emailrow'] = 'El reporte regresó {$a} fila.';
$string['emailrows'] = 'El reporte regresó {$a} filas.';
$string['emailsent'] = 'Se ha enviado una notificación por Email a {$a}';
$string['emailsentfailed'] = 'No pudo enviarse  un Email a {$a}';
$string['emailsubject'] = 'Consulta {$a}';
$string['emailto'] = 'Automáticamente mandar Email a';
$string['emailwhat'] = 'Qué poner en Email';
$string['enterparameters'] = 'Escriba parámetros para consulta ad-hoc a BasedeDatos';
$string['errordeletingcategory'] = '<p>Error al eliminar una categoría de consulta.</p><p>Debe estar vacía para eliminarla.</p>';
$string['errordeletingreport'] = 'Error al eliminar una consulta.';
$string['errorinsertingreport'] = 'Error al insertar una consulta.';
$string['errorupdatingreport'] = 'Error al actualizar una consulta.';
$string['invalidreportid'] = 'ID de consulta inválida {$a}.';
$string['lastexecuted'] = 'Esta consulta se corrió por última vez en {$a->lastrun}. Tardó {$a->lastexecutiontime}s en correr.';
$string['managecategories'] = 'Gestionar categorías de reporte';
$string['manual'] = 'Bajo-demanda';
$string['manualheader'] = 'Bajo-demanda';
$string['manualheader_help'] = 'Estas consultas se corren bajo-demanda, cuando Usted haga click en el enlace para ver el resultado.';
$string['messageprovider:notification'] = 'Notificaciones y alertas de reporte SQL personalizadas';
$string['monthlyheader'] = 'Mensualmente';
$string['monthlyheader_help'] = 'Estas consultas se corren automáticamente el primer día de cada mes, para reportar el mes anterior. Estos enlaces le permiten ver los resultados que ya han sido acumulados.';
$string['monthlynote_help'] = 'Estas consultas se corren automáticamente el primer día de cada mes, para reportar el mes anterior. Estos enlaces le permiten ver los resultados que ya han sido acumulados.';
$string['morethanonerowreturned'] = 'Se regresó más de una fila. Esta consulta debería de regresar una fila.';
$string['nodatareturned'] = 'Esta consulta no regresó datos algunos.';
$string['noexplicitprefix'] = 'Por favor, no incluya el prefijo de nombre de tabla <tt>{$a}</tt> en el SQL. En su lugar, ponga el nombre de la tabla sin-prefijado dentro de caracteres <tt>{}</tt>.';
$string['noreportsavailable'] = 'Sin consultas disponibles';
$string['norowsreturned'] = 'No se regresaron filas. Esta consulta debería regresar una fila.';
$string['noscheduleifplaceholders'] = 'Las consultas que contienen remplazables (placeholders) solamente pueden ser corridas bajo-demanda.';
$string['nosemicolon'] = 'Usted no tiene permitido un caracter  ; en el SQL.';
$string['notallowedwords'] = 'Usted no tiene permitido usar las palabras <tt>{$a}</tt> en el SQL.';
$string['note'] = 'Notas';
$string['notrunyet'] = 'Esta consulta todavía no se ha corrido.';
$string['onerow'] = 'La consulta regresó una fila, acumula los resultados a razón de una fila a la vez.';
$string['parametervalue'] = '{$a->nombre}: {$a->valor}';
$string['pluginname'] = 'Consultas ad-hoc a BasedeDatos';
$string['query_deleted'] = 'Consulta eliminada';
$string['query_edited'] = 'Consulta editada';
$string['queryfailed'] = 'Error al ejecutar la consulta: {$a}';
$string['querylimit'] = 'Filas límite regrsadas';
$string['querylimitrange'] = 'El número debe estar entre 1 y  {$a}';
$string['querynote'] = '<ul>
<li>La ficha ( token) <tt>%%WWWROOT%%</tt> en los resultados serán remplazados con <tt>{$a}</tt>.</li>
<li>Cualquier valor en la salida que parezca una URLse hara automáticamente un enlace.</li>
<li>Si un nombre de columna en el resultado termina con los caracteres <tt>date</tt> (fecha), y la columna contiene valores enteros, entonces éstos serán tratados como sellos-de-tiempo Unix (time-stamps), y serán automáticamente convertidos a fechas legibles-por-humanos.</li>
<li>La ficha (token) <tt>%%USERID%%</tt> en la consulta será remplazada con la ID del usuario que ve el reporte antes de que sea ejecutado el reporte.</li>
<li>Para los reportes agendados, las fichas  (tokens) <tt>%%STARTTIME%%</tt> y <tt>%%ENDTIME%%</tt> son remplazadas por los sellos-de-tiempo Unix (timestamp) del inicio y del final de la semana/mes reportada en la consulta antes de que ésta sea ejecutada.</li>
<li>Usted puede  poner parámetros dentro del SQL usando remplazables (placeholders) nombrados, por ejemplo <tt>:parameter_name</tt>. Entonces, cuando se corra el reporte, el usuario puede escribir valores para los parámetros a usar al correrse la consulta.</li>
<li>Si el <tt>:parameter_name</tt> (nombre del parámetro) principia o termina con los caracteres <tt>date</tt> (fecha) entonces se usará un selector de fecha-hora para ingresar dicho valor, de otra manera se usará una caja de texto simple.</li>
<li>Usted no puede usar los caracteres <tt>:</tt> or <tt>?</tt> en cadenas de caracteres en su consulta. Si Usted los necesita, Usted puede usar <tt>CHR(58)</tt> y <tt>CHR(63)</tt> respectivamente, junto con la concatenación de la cadena de caracteres. (Esto es  <tt>CHR</tt> para Postgres o para Oracle, <tt>CHAR</tt> para Servidor MySQL o SQL.)</li>
</ul>';
$string['queryparameters'] = 'Parámetros de la consulta';
$string['queryparams'] = 'Por favor, escriba los valores por defecto para los parámetros de la consulta.';
$string['queryparamschanged'] = 'Los remplazables (placeholders) en la consulta han cambiado.';
$string['queryrundate'] = 'fecha de corrida de la consulta';
$string['querysql'] = 'Consulta SQL';
$string['querysqlrequried'] = 'Usted debe escribir algun SQL.';
$string['query_viewed'] = 'Consulta vista';
$string['recordlimitreached'] = 'Esta consulta alcanzó el límite de  {$a} filas. Algunas filas pudieron haberse omitido al final.';
$string['reportfor'] = 'Consulta corrida en {$a}';
$string['requireint'] = 'Se requiere número entero';
$string['runable'] = 'Correr';
$string['runablex'] = 'Correr: {$a}';
$string['schedulednote'] = 'Estas consultas son corridas automáticamente en el primer día de cada semana, o mes, para reportar acerca de la semana o mes anterior. Estos enlaces le permiten ver los resultados que ya se han acumulado.';
$string['scheduledqueries'] = 'Consultas agendadas';
$string['selectcategory'] = 'Seleccione categoría para este reporte';
$string['typeofresult'] = 'Tipo de resultado';
$string['unknowndownloadfile'] = 'Archivo de descarga desconocido.';
$string['userhasnothiscapability'] = 'El usuario  \'{$a->username}\' no tiene la capacidad \'{$a->capability}\'. Por favor, elimine a este usuario de la lista o cambie la elección en \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Entrada inválida, se requiere una lista separada por comas de nombres de usuarios';
$string['usernotfound'] = 'No existe usuario con el nombre_de_usuario \'{$a}\'';
$string['userswhocanconfig'] = 'Solamente administradores (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Usuarios que pueden ver reportes del sistema (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'Verifique el texto de Consulta SQL y actualice el formato';
$string['weeklyheader'] = 'Semanalmente';
$string['weeklyheader_help'] = 'Estas consultas son corridas automáticamente el primer día de cada semana, para reportar acerca de la semana anterior. Estos enlaces le permiten ver los resultados que ya se han acumulado.';
$string['whocanaccess'] = 'Quién puede acceder a esta búsqueda';
