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
 * Strings for component 'report_benchmark', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   report_benchmark
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Comparativo del Sistema';
$string['benchfail'] = '<b>¡Advertencia!</b><br />Su Moodle parece tener algunas dificultades.';
$string['benchmark'] = 'Comparativo';
$string['benchmark:view'] = 'Ver el reporte del comparativo';
$string['benchshare'] = 'Compartir mi puntaje en el foro';
$string['benchsuccess'] = 'b>¡Felicitaciones!</b><br />Al parecer, su Moodle parece funcionar perfectamente.';
$string['cloadmoreinfo'] = 'Correr el archivo de configuración &laquo;config.php&raquo;';
$string['cloadname'] = 'Tiempo para cargar Moodle';
$string['coursereadmoreinfo'] = 'Probar la velocidad de la Base de datos para leer un curso';
$string['coursereadname'] = 'Leyendo curso';
$string['coursewritemoreinfo'] = 'Probar la velocidad de la Base de datos para escribir un curso';
$string['coursewritename'] = 'Escribiendo curso';
$string['description'] = 'Descripción';
$string['during'] = 'Tiempo en segundos';
$string['filereadmoreinfo'] = 'Probar la velocidad de lectura en una carpeta temporal de Moodle';
$string['filereadname'] = 'Leyendo archivos';
$string['filewritemoreinfo'] = 'Probar la velocidad con la que Moodle escribe a una carpeta temporal';
$string['filewritename'] = 'Creando archivos';
$string['info'] = 'Esta prueba de Comparativo no debe demorar más de un minuto; se detiene a los 2 minutos. Por favor, espere hasta que aparezcan los resultados.';
$string['infoaverage'] = 'Lo invitamos a tomar esta prueba varias veces para obtener el promedio.';
$string['infodisclamer'] = 'No es recomendable el correr esta prueba de Comparativo en una plataforma en producción.';
$string['limit'] = 'Límite aceptable';
$string['loginguestmoreinfo'] = 'Midiendo el tiempo usado para cargar la página de ingreso con la cuenta de invitado';
$string['loginguestname'] = 'Tiepo para conectarse con la cuenta d invitado';
$string['loginusermoreinfo'] = 'Midiendo el tiempo usado para cargar la página de ingreso con una cuenta de usuario falsa';
$string['loginusername'] = 'Tiempo para conectarse con una cuenta de usuarios falsa';
$string['modulename'] = 'Comparativo de Moodle';
$string['modulenameplural'] = 'Comparativos de Moodle';
$string['over'] = 'Límite crítico';
$string['pluginname'] = 'Comparativos de Moodle';
$string['points'] = '{$a} puntos';
$string['processormoreinfo'] = 'Se llama a una función en un bucle para probar la velocidad del procesador';
$string['processorname'] = 'Función llamada varias veces';
$string['querytype1moreinfo'] = 'Probar la velocidad de la Base de datos para ejecutar una solicitud compleja';
$string['querytype1name'] = 'Solicitud compleja (n°1)';
$string['querytype2moreinfo'] = 'Probar la velocidad de la Base de datos para ejecutar una solicitud compleja';
$string['querytype2name'] = 'Solicitud compleja (n°2)';
$string['redo'] = 'Iniciar nuevamente la revisión';
$string['score'] = 'Puntuación';
$string['scoremsg'] = 'Puntuación del Comparativo :';
$string['seconde'] = '{$a} segundos';
$string['slowdatabaselabel'] = 'La Base de Datos es demasiado lenta.';
$string['slowdatabasesolution'] = '<ul><li>Revise<a href="http://dev.mysql.com/doc/refman/5.7/en/mysqlcheck.html" target="_blank">the database integrity</a></li><li>Optimizar <a href="http://dev.mysql.com/doc/refman/5.7/en/server-parameters.html" target="_blank">la Base de datos</a></li></ul>';
$string['slowharddrivelabel'] = 'El disco duro es demasiado lento.';
$string['slowharddrivesolution'] = '<ul><li>Revise el estado del Disco Duro / temp folder</li><li>Cambie su Disco Duro o la carpeta Temp</li></ul>';
$string['slowprocessorlabel'] = 'Su procesador es demasiado lento.';
$string['slowprocessorsolution'] = '<ul><li>Revisar que el equipo sea suficiente para correr Moodle.</li></ul>';
$string['slowserverlabel'] = 'Su servidor web es demasiado lento.';
$string['slowserversolution'] = '<ul><li>Configure su Apache en modo <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multi-processing</a>o active  <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>Si su Moodle está instalado  en su computadora, Usted puede intentar desactivar su antivirus en donde se encuantra Moodle. Hágalo con precaución.</li></ul>';
$string['slowweblabel'] = 'La página es demasiado lenta para cargar.';
$string['slowwebsolution'] = 'ul><li>Limpiarel Caché de Moodle</a></li></ul>';
$string['start'] = 'Iniciar la revisión';
$string['total'] = 'Tiempo total';
