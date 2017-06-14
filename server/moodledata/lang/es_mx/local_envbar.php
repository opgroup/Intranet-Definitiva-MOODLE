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
 * Strings for component 'local_envbar', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   local_envbar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfields'] = 'Añadir otro entorno';
$string['bgcolour'] = 'Color del fondo';
$string['cachedef_records'] = 'Los registros de la BasedeDatos de la Barra del entorno';
$string['colourerror'] = 'Código HTML de color especificado inválido';
$string['colourplaceholder'] = 'Código HTML de color; por ejemplo, #fff O #000000';
$string['configurehere'] = 'Editar configuración de Barra-del-Entorno en ESTE entorno';
$string['configureinprod'] = 'Editar configuración de Barra-del-Entorno en PROD';
$string['dividerselector'] = 'Selector divisor';
$string['dividerselector_help'] = 'Esta es una clase CSS que es usada para el elemento divisor del menú. Si su tema usa HTML diferente, entonces Usted podría necesitar ajustar este selector.';
$string['extracss'] = 'CSS extra';
$string['extracss_help'] = 'Este CSS es añadido solamente cuando la barra está visible y clavada en la parte superior de la página. Su tema podría también tener encabezados fijos que podrían chocar, por lo que este CSS extra debería de resolver el choque y mover su encabezado principal del tema hacia abajo. Si su encabezado está fijado solamente en ciertos puntos_de_quiebre (breakpoints), entonces la consulta de medios en este CSS extra debería de ser idéntica a la de su tema.';
$string['header_envbar'] = 'Barra del Entorno';
$string['help'] = '<p><b>ADVERTENCIA:</b> Generalmente estas configuraciones solamente deberían de ser configuradas una sola vez en el sistema de producción.</p><p>Si Ustedy NO está en el sistema en producción, y estos valores están vacíos, entonces idealmente vaya y llénelos en producción y entonces refresque su BasedeDatos otra vez para aquí.</p>';
$string['menuselector'] = 'Selector de menú';
$string['menuselector_help'] = 'Este es un selector CSS o XPATH para encontrar el elemento ul del menú para inyectarle el menú alternador env. Si su tema usa HTML diferente entonces Usted podría necesitar ajustar este selector.';
$string['nextrefreshin'] = '- Reinicio en {$a}';
$string['notconfigured'] = '¡Advertencia! Este es un entorno deconocido';
$string['pluginname'] = 'Barra del Entorno';
$string['prod'] = 'PROD';
$string['prodwwwrootautobutton'] = 'Auto-llenar';
$string['prodwwwrootplaceholder'] = '$CFG->wwwroot en producción';
$string['prodwwwroottext'] = 'wwwroot Producción';
$string['refreshedago'] = '- Refrescado hace {$a}';
$string['refreshednever'] = '- Nunca ha sido refrescado';
$string['setdeleted'] = 'Eliminar';
$string['setenabled'] = 'Habilitar';
$string['showtext'] = 'Texto a mostrar';
$string['showtextplaceholder'] = 'Por ejemplo: Usted está en un entorno de andamiaje';
$string['textcolour'] = 'Color del texto';
$string['urlmatch'] = 'Patrón de concordancia de URL';
$string['urlmatch_help'] = 'Usted puede usar Expresiones Regulares que coincidan con su URL.<br />Por ejemplo http://stage[1,2,3].ejemplo.com para coincidir con http://stage2.ejemplo.com<br />Note que los siguientes caracteres especiales serán escapados:<br /> / - . ? * ^ $';
$string['urlmatchplaceholder'] = 'Por ejemplo: andamiaje';
