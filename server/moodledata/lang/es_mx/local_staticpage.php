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
 * Strings for component 'local_staticpage', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   local_staticpage
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Forzar Apache mod_rewrite';
$string['apacherewrite_desc'] = 'Servir solamente páginas estáticas con una URL limpia, re-escritas por Apache mod_rewrite. Vea el archivo  README para los detalles.';
$string['available'] = 'Disponible';
$string['cleanhtml'] = 'Código HTML limpio';
$string['cleanhtml_desc'] = 'Configurar si el código HTML de páginas estáticas debería ser limpiado (y por eso marcas -tags- especiales como <iframe>serían removidas. Vea README para los detalles.';
$string['cleanhtmlno'] = 'No, no limpiar código HTML.';
$string['cleanhtmlyes'] = 'Si, limpiar código HTML';
$string['documentheadingsource'] = 'Orígen de datos del encabezado del documento';
$string['documentheadingsource_desc'] = 'El orígen de los datos del encabezado de la página estática del documento';
$string['documentnavbarsource'] = 'Orígen de los datos del título de la ruta de navegación del ítem';
$string['documentnavbarsource_desc'] = 'El orígen de los datos de la ruta de navegación de la página estática del ítem (Usada en la Barra de Navegación de Moodle)';
$string['documents'] = 'Documentos';
$string['documents_desc'] = 'Los archivos .html con el código HTML de las páginas estáticas. Vea README para los detalles.';
$string['documenttitlesource'] = 'Orígen de los datos del título del documento';
$string['documenttitlesource_desc'] = 'El orígen de los datos del título de la página estática del ítem (Usada en la Barra de título del navegador)';
$string['documenttitlesourceh1'] = 'Primera marca (tag) h1 del código HTML (usualmente localizada poco después de abrir la marca (tag) del cuerpo (body)';
$string['documenttitlesourcehead'] = 'Primera marca del título en código HTML (usualmente localizada dentro de la marca (tag) del cuerpo (body)';
$string['forcelogin'] = 'Forzar ingresar';
$string['forcelogin_desc'] = 'Servir páginas estáticas solamente a usuarios ingresados o también a no-ingresados en visitantes. Este comportamiento puede configurarse específicamente para páginas estáticas o puede configurarse con respecto a la configuración global Moodle de forcelogin. Vea README para los detalles.';
$string['forceloginglobal'] = 'Respetar la configuración global  $CFG->forcelogin';
$string['notavailable'] = 'No disponible';
$string['pagenotfound'] = 'Página no encontrada';
$string['pluginname'] = 'Páginas estáticas';
$string['processcontent'] = 'Procesar contenido';
$string['processfilters'] = 'Procesar filtros';
$string['processfilters_desc'] = 'Configurar si los filtros de Moodle (especialmente el filtro multi-idioma) deberían de procesarse al servir el contenido de las páginas estáticas. Vea README para los detalles.';
$string['processfiltersno'] = 'No, no procesar filtros';
$string['processfiltersyes'] = 'Si, procesar filtros';
$string['settingspagelist'] = 'Lista de páginas estáticas';
$string['settingspagelistentryfilename'] = 'Se encontró el siguiente archivo de documento:<br /><strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'A partir del nombre de archivo del documento, Moodle obtuvo el siguiente nombre_de_página:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritefail'] = 'La página estática debería de estar disponible en la siguiente URL limpia, pero en realidad un navegador no podrá descargarla ni verla (posiblemente haya algo malo con la configuración de su servidor web o con la configuración de mod_rewrite - vea el archivo README para los detalles):<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritesuccess'] = 'La página estática está disponible y puede ser enlazada a la siguiente URL limpia:<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardfail'] = 'La página estática debería de estar disponible en la siguiente URL estándar, pero en realidad un navegador no podrá descargarla ni verla (posiblemente haya algo malo con la configuración de su servidor web - vea el archivo README para los detalles):<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'La página estática está disponible y puede ser enlazada a la siguiente URL estándar:<br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'Esta lista muestra todas las páginas estáticas que han sido subidas al <a href="{$a}">área de documento de páginas estáticas</a> y sus URLs';
$string['settingspagelistnofiles'] = 'No hay archivos .html files en el <a href="{$a}">área de documento de páginas estáticas</a>, por lo que no hay páginas estáticas para ser proporcionadas. Vea el archivo README para los detalles.';
$string['upgrade_notice_2016020307'] = '<strong>AVISO DE ACTUALIZACIÓN:</strong> Los archivos de documentos de páginas estáticas fueron movidos a la nueva área-de-archivo dentro de Moodle. Usted puede eliminar el antiguo directorio de documentos {$a} ahorita. Para más instrucciones sobre actualización, especialmente si Usted ha estado usando las características de multi-idioma de este plugin, vea el archivo README.';
