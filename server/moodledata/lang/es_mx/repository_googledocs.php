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
 * Strings for component 'repository_googledocs', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Interno y Externo';
$string['cachedef_folder'] = 'IDs de Archivo Google para carpetas en la cuenta del sistema';
$string['clientid'] = 'ID del cliente';
$string['configplugin'] = 'Configurar plugin de Google Drive';
$string['defaultreturntype'] = 'Tipo de retorno por defecto';
$string['docsformat'] = 'Formato por defecto para importar documento';
$string['drawingformat'] = 'Formato por defecto para importar dibujo';
$string['external'] = 'Externo (solamente enlaza almacenados en Moodle)';
$string['fileoptions'] = 'Los tipos y configuraciones por defecto  para archivos regresados es configurable aquí. Tome nota de que todos los archivos ligados externamente serán actualizados de forma tal que el propietario sea la cuenta del sistema de Moodle.';
$string['googledocs:view'] = 'Ver repositorio Google Drive';
$string['importformat'] = 'Configurar los formatos por defecto para importar desde Google';
$string['internal'] = 'Interno (archivos guardados en Moodle)';
$string['issuer'] = 'Servicio OAuth 2';
$string['issuer_help'] = 'Seleccionar el servicio OAuth 2 que está configurado para hablarle al API de Google Drive. Si el servicio aun no existe, Usted necesitará crearlo.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth Services configuration">Configuración de servicios OAuth 2</a>';
$string['oauthinfo'] = '<p>Para usar este plugin, Usted debe registrar su sitio con Google, tal como se describe en la documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Como parte del proceso de registro, Usted deberá introducir la siguiente URL como (URLs de redireccionamiento autorizadas) \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Una vez registrado, se le proporcionará una ID de cliente y un secreto que podrá entonces emplear para configurar todos los plugins de Google Drive y Picasa.</p><p>Por favor tome nota de que Usted también tendrá que habilitar el servicio  \'Drive API\'.</p>';
$string['owner'] = 'Propiedad de: {$a}';
$string['pluginname'] = 'Google Drive';
$string['presentationformat'] = 'Formato por defecto para importar presentación';
$string['searchfor'] = 'Buscar {$a}';
$string['secret'] = 'Secreto';
$string['servicenotenabled'] = 'Acceso no configurado. Asegúrese de que el servicio de \'Drive API\' esté habilitado.';
$string['spreadsheetformat'] = 'Formato por defecto para importar hoja-de-cálculo';
$string['supportedreturntypes'] = 'Archivos soportados';
