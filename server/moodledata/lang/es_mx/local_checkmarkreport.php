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
 * Strings for component 'local_checkmarkreport', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   local_checkmarkreport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additional_columns'] = 'Columnas adicionales';
$string['additional_information'] = 'Información adicional';
$string['additional_settings'] = 'Configuraciones adicionales';
$string['attendances'] = 'Asistencias';
$string['by'] = 'por';
$string['checkmarkreport:view'] = 'Ver reporte de marca de verificación';
$string['checkmarkreport:view_courseoverview'] = 'Ver reporte-de-curso de marca de verificación';
$string['checkmarkreport:view_own_overview'] = 'Ver mi reporte de marca de verificación';
$string['checkmarkreport:view_students_overview'] = 'Ver reporte-de-usuario de marca de verificación';
$string['error_retriefing_members'] = 'Error al obtener los miembros-del-grupo';
$string['eventexported'] = 'Reporte-de-marca de verificación exportado';
$string['eventoverviewexported'] = 'Vista general de Reporte-de-marca de verificación exportada';
$string['eventoverviewviewed'] = 'Vista general de Reporte-de-lista-de-verificación vista';
$string['eventuseroverviewexported'] = 'Vista-general-del-usuario de Reporte-de-marca de verificación exportada';
$string['eventuseroverviewviewed'] = 'Vista-general-del-usuario de Reporte-de-marca de verificación vista';
$string['eventuserviewexported'] = 'Vista-del-usuario de Reporte-de-marca de verificación exportada';
$string['eventuserviewviewed'] = 'Vista-del-usuario de Reporte-de-marca de verificación vista';
$string['eventviewed'] = 'Reporte-de-marca de verificación vista';
$string['example'] = 'Ejemplo';
$string['examples'] = 'Ejemplos';
$string['exportas'] = 'Exportar como';
$string['filter'] = 'Filtro';
$string['grade'] = 'Calificación';
$string['grade_help'] = 'Mostrar calificación, calificación sumada para marcas de verificación mostradas y también como puntos teóricos por la revisión de los ejemplos.';
$string['grade_useroverview'] = 'Calificación';
$string['grade_useroverview_help'] = 'La calificación muestra la calificación actual dada por el profesor para cada marca de verificación.<br />Los valores en línea con los ejemplos muestran la cantidad teórica de puntos ganables para los ejemplos seleccionados.<br />La calificación de la marca de verificación y la suma de calificaciones de marca de verificación mostradas del curso pueden diferir de la suma de puntos de ejemplo, debido a que los profesores den calificaciones diferentes (por ejemplo, cuando los estudiantes seleccionaron o dejaron sin seleccionar ejemplos al principio de la lección, o si los ejemplos seleccionados no han sido resueltos adecuadamente).<br />La suma para una sola marca de verificación (en la línea de  "marcas_ de_verificación S") muestra la calificación del profesor. Un "-" es igual a que no hay calificación actual presente.<br />La suma de todas las marcas de verificación(línea "total S") suma todas las calificaciones del profesor mostradas.<br />Por favor tenga en cuenta que estos valores se están actualizando solos de acuerdo al estatus actual de la calificación.';
$string['groupings'] = 'Agrupamientos';
$string['groups'] = 'Grupos';
$string['groups_help'] = 'Use esto para seleccionar los grupos a mostrar. Los grupos vacíos están deshabilitados y solamente son mostrados los miembros de los grupos seleccionados en la selección de usuarios (después de la actualización).';
$string['loading'] = 'Cargando...';
$string['noaccess'] = 'Usted no tiene acceso a este módulo.  A Usted le faltan las capacidades necesarias para ver este contenido.';
$string['overview'] = 'Vista general';
$string['overview_alt'] = 'Ver reporte-del-curso de marca de verificación';
$string['overwritten'] = 'Sobre-escrito';
$string['pluginname'] = 'Reporte de marca de verificación';
$string['pluginname_help'] = 'Los reportes de marca de verificación extienden la funcionalidad del mod_checkmark al hacer conveniente el poder ver reportes de vista general del curso para todas las marcas de verificación disponibles.';
$string['pluginnameplural'] = 'Reportes de marca de verificación';
$string['showattendances'] = 'Mostrar asistencias';
$string['showattendances_help'] = 'Si se habilita, las asistencias de los estudiantes estarán incluidas en el reporte si al menos una de las instancias de marca de verificación monitorea la asistencia. ¡Si las instancias no monitorean la asistencia, entonces no se mostrará información para la instancia!';
$string['showexamples'] = 'Mostrar ejemplos';
$string['showexamples_help'] = 'Si se habilita, serán incluidos en los reportes los ejemplos de instancias de marca de verificación con información detallada.';
$string['showgrade'] = 'Mostrar calificación';
$string['showpoints'] = 'Mostrar puntos';
$string['showpoints_help'] = 'Mostrar los puntos correspondientes para cada ejemplo en lugar de símbolos de seleccionado (☒) o no-seleccionado (☐).';
$string['showpresentationgrades'] = 'Mostrar calificación de presentación';
$string['showpresentationgrades_help'] = 'Mostrar la retroalimentación a la calificación dada para las presentaciones de los estudiantes';
$string['showsignature'] = 'Incluir campos de firma en archivos XLSX y ODS';
$string['showsignature_help'] = 'Si se habilita, las áreas reservadas para las firmas de los estudiantes se incluirán en las exportaciones XLSX y ODS. Esto no está disponible para las exportaciones TXT ni XML.';
$string['signature'] = 'Firma';
$string['status'] = 'Estatus';
$string['sumabs'] = 'Mostrar x/y ejemplos';
$string['sumabs_help'] = 'Mostrar cuantos ejemplos han sido seleccionados en el curso completo y para cada marca de verificación.';
$string['sumrel'] = 'Mostrar % de ejemplos/calificaciones';
$string['sumrel_help'] = 'Mostrar valores relativos  ( XX % ) de ejemplos seleccionados y también de calificaciones calculadas por ejemplos seleccionados para el curso en total y para cada marca de verificación.';
$string['update'] = 'Actualizar';
$string['useroverview'] = 'Vista general del estudiante';
$string['useroverview_alt'] = 'Ver reporte-del-usuario de marca de verificación';
$string['userview'] = 'Vista del usuario';
$string['userview_alt'] = 'Ver mi reporte de marca de verificación';
$string['xlsover256'] = 'El formato de archivo XLS solamente soporta 256 columnas como máximo. El archivo que Usted está a punto de generar excede este límite. Por favor, des-seleccione algunas instancias o evite emplear XLS.';
