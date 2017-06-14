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
 * Strings for component 'tool_userrestore', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_userrestore
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button:backtocourse'] = 'Regresar al curso';
$string['button:backtoform'] = 'Regresar al formato userrestore';
$string['button:userrestore:continue'] = 'Restaurar usuarios';
$string['config:cleanlogs:disabled'] = 'La limpieza de bitácoras automática está deshabilitada en la configuración global';
$string['config:tool:disabled'] = 'La Utilería para Restaurar Usuario está deshabilitada en la configuración global';
$string['deletedby'] = 'Eliminado por';
$string['email:user:restore:body'] = '<p>Estimado{fullname}</p>
<p>Su cuenta ha sido restaurada</p>
<p>Sin embargo, es posible que su nombre_de_usuario no haya sido capturado correctamente debido a la forma en la que Moodle maneja la eliminación de usuarios y el hecho de que se hayan o  no limpiado las bitácoras de eventos. Su nombre_de_usuario es  {username}</p>
<p>si Usted siente que esto no es lo deseado o tiene alguna pregunta,
por favor contacte a  {contact}</p>
<p>Usted debería de poder usar su antigua contraseña para ingresar al sitio.<br/>
En caso contrario, use la dirección de Email a la que se envió este correo para solicitar un re-inicio de contraseña.<br/>
Por favor re-ingrese al sitio para re-escribir toda su información usando el enlace inferior:<br/>
{loginlink}</p>
<p>Regards<br/>{signature}</p>';
$string['email:user:restore:subject'] = 'Su cuenta ha sido restaurada';
$string['err:statustable:set_sql'] = 'set_sql() está deshabilitada. Esta tabla define su propia y no es personalizable.';
$string['form:label:email'] = 'Cuerpo del Email';
$string['form:label:sendmail'] = 'Enviar Email';
$string['form:label:subject'] = 'Asunto del Email';
$string['hasloginfo'] = '¿Tiene información en bitácora?';
$string['label:users:potential'] = 'Usuarios potenciales';
$string['link:currentstatus:overview'] = 'Ver cambios del estatus actual';
$string['link:log'] = 'Restaurar bitácoras de usuarios';
$string['link:log:overview'] = 'Ver biácoras de cambios de estatus';
$string['link:restore'] = 'Restaurar usuarios';
$string['msg:no-users-to-restore'] = 'No se encontraron cuentas eliminadas de usuarios para restaurar.';
$string['page:view:log.php:introduction'] = 'La tabla inferiro muestra las bitácoras de estatus de los usuarios que han  restaurados';
$string['pluginname'] = 'Restaurar Usuario';
$string['restore:deleted-user-not-found'] = 'Nopuede restaurarse usuario: no se encontró al usuario eliminado';
$string['restoresettings'] = 'Configuraciones de Restauración de Usuario';
$string['restore:username-exists'] = 'No puede restaurarse usuario: el nombre_de_usuario \'{$a->username}\' ya existe para un usuario activo diferente';
$string['restore:user-restored'] = 'El usuario <i>\'{$a->username}\'</i> (\'{$a->email}\') fue restaurado exitosamente';
$string['setting:cleanlogsafter'] = 'Frecuencia para Limpiar Bitácoras';
$string['setting:desc:cleanlogsafter'] = 'Configurar la frecuencia con la que se limpian las bitácoras. Cualquier bitácora más antigua que esta configuración será físicamente removida.';
$string['setting:desc:enablecleanlogs'] = 'Habilita o deshabilita la limpieza automática de la bitácora de historia.';
$string['setting:enablecleanlogs'] = 'Habilitar limpia-bitácoras';
$string['table:log:all'] = 'Bitácora histórtica de restauración';
$string['table:log:latest'] = 'Bitácoras más recientes de restauración';
$string['table:logs'] = 'Bitácoras';
$string['task:logclean'] = 'Limpiar bitácoras para restauración de usuarios';
$string['th:action'] = 'Acción';
$string['th:mailedto'] = 'Email enviado a';
$string['th:mailsent'] = 'Email enviado';
$string['th:name'] = 'Nombre';
$string['th:restored'] = 'Restaurada';
$string['th:timecreated'] = 'Creada en';
$string['th:userid'] = 'ID del usuario';
$string['timedeleted'] = 'Eliminado en';
