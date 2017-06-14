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
 * Strings for component 'tool_usersuspension', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_usersuspension
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-exclusion'] = '¿Está seguro de querer eliminar este ítem de la lista de exclusión?';
$string['action:delete-exclusion'] = 'Eliminar ítem de lista_de_exclusiones';
$string['action:exclude:add:cohort'] = 'Añadir exclusión de cohorte';
$string['action:exclude:add:user'] = 'Añadir exclusión de usuario';
$string['button:backtocourse'] = 'Regresar al curso';
$string['button:backtoexclusions'] = 'Regresar a vista general de exclusiones';
$string['button:backtouploadform'] = 'regresar a formato de subida';
$string['button:continue'] = 'Continuar';
$string['config:cleanlogs:disabled'] = 'La limpieza de bitácoras automática está deshabilitada en la configuración global';
$string['config:cleanup:disabled'] = 'La opción para  \'limpieza\' en la Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['config:fromfolder:disabled'] = 'La opción para  \'suspender de subir\' en la Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['config:smartdetect:disabled'] = 'La \'detección inteligente\' en la Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['config:tool:disabled'] = 'La utilería de Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['csv:delimiter'] = 'Delimitador';
$string['csv:upload:continue'] = 'Continuar';
$string['email:user:delete:body'] = '<p>Estimado/a {$a->name}</p>
<p>Su cuenta ha sido eliminada después de haber sido suspendida por {$a->timesuspended}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['email:user:delete:subject'] = 'Su cuenta ha sido eliminada';
$string['email:user:suspend:auto:body'] = '<p>Estimado/a {$a->name}</p>
<p>Su cuenta ha sido suspendida después de haber estado inactiva por {$a->timeinactive}</p>
<p>Si Usted siente que esto es incorrecto, o si desea tener reactivada su cuenta nuevamente, por favor contacte a  {$a->contact}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>Estimado/a {$a->name}</p>
<p>Su cuenta ha sido suspendida.</p>
<p>Si Usted siente que esto es incorrecto, o si desea tener reactivada su cuenta nuevamente, por favor contacte a  {$a->contact}</p>
<p>Atentamente <br/>{$a->signature}</p>';
$string['email:user:suspend:subject'] = 'Su cuenta ha sido suspendida';
$string['email:user:unsuspend:body'] = '<p>Estimado/a{$a->name}</p>
<p>Su cuenta ha sido reactivada.</p>
<p>Si USted siente que esto no es lo que correspondía, o si quiere tener suspendida nuevamente su cuenta, por favor contacte a {$a->contact}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = 'Su cuenta ha sido reactivada';
$string['excludeuser'] = 'excluir usuario del procesamiento';
$string['info:no-exclusion-cohorts'] = 'Ya no se pueden configurar más cohortes para ser excluidas. Todas ya han sido añadidas a la lista de exclusión';
$string['label:users:excluded'] = 'Usuarios excluidos';
$string['label:users:potential'] = 'Usuarios potenciales';
$string['link:currentstatus:overview'] = 'Ver cambios de estatus actual';
$string['link:exclude:overview'] = 'Vista general de esclusiones';
$string['link:log:overview'] = 'Ver bitácoras de cambios de estatus';
$string['link:upload'] = 'Subir archivo de suspendidos';
$string['link:viewstatus'] = 'Ver lista-de-estatus';
$string['msg:exclusion:cohort:none-selected'] = 'No se seleccionaron cohortes para exclusión';
$string['msg:exclusion:record:cohort:inserted'] = 'Entrada de exclusión paracohorte \'{$a->name}\' exitosamente insertado';
$string['msg:exclusion:record:exists'] = 'Entrada de exclusión ya existe (no se añadió registro)';
$string['msg:exclusion:record:inserted'] = 'Entrada de exclusión insertada exitosamente';
$string['msg:exclusion:records:cohort:deleted'] = 'Entradas de exclusión para cohortes eliminadas exitosamente';
$string['msg:exclusion:records:deleted'] = 'Entradas de exclusión eliminadas exitosamente';
$string['msg:exclusion:records:user:deleted'] = 'Entradas de exclusión para usuarios eliminadas exitosamente';
$string['msg:exclusion:record:user:deleted'] = 'Entrada de exclusión para el usuario \'{$a->fullname}\' exitosamente removido';
$string['msg:exclusion:record:user:inserted'] = 'Entrada de exclusión para el usuario \'{$a->fullname}\' exitosamente insertado';
$string['msg:file-not-readable'] = 'El archivo subido \'{$a}\' no es legible';
$string['msg:file-not-writeable'] = 'El archivo subido \'{$a}\' no es escribible o no puede ser eliminado';
$string['msg:file:upload:fail'] = 'El archivo subido no pudo ser guardado exitosamente. Procesamiento abortado.';
$string['msg:user:not-found'] = 'no pudo encontrarse al usuario';
$string['msg:user:suspend:failed'] = 'Usuario \'{$a->username}\' no pudo ser suspendido';
$string['msg:user:suspend:success'] = 'Usuario \'{$a->username}\' suspendido exitosamente';
$string['msg:user:unsuspend:failed'] = 'Usuario \'{$a->username}\' no pudo ser des-suspendido';
$string['msg:user:unsuspend:success'] = 'Usuario \'{$a->username}\' des-suspendido exitosamente';
$string['notify:load-exclude-list'] = 'Cargando lista de exclusión de usuario';
$string['notify:load-file'] = 'Abriendo archivo \'{$a}\\';
$string['notify:load-file-fail'] = 'No se pudo abrir archivo \'{$a}\' para lectura';
$string['notify:suspend-excluded-user'] = 'usuario: {$a->username} (id={$a->id}) está en la lista de exclusión: no suspendido';
$string['notify:suspend-user'] = 'suspendiendo al usuario: {$a->username} (id={$a->id})';
$string['notify:unknown-suspend-type'] = 'Identificador de suspensión desconocido \'{$a}\\';
$string['page:view:statuslist.php:introduction:suspended'] = '<p>Esta vista general muestra las cuentas de usuario que han sido suspendidas.</p>';
$string['promo'] = 'plugin para suspensión-de-usuario para Moodle';
$string['setting:cleanlogsafter'] = 'Frecuencia para limpiar bitácoras';
$string['setting:cleanup_deleteafter'] = 'Intervalo de eliminación';
$string['setting:cleanup_interval'] = 'Intervalo para limpieaza';
$string['setting:desc:cleanup_deleteafter'] = 'Configurar intervalo en el cual los usuarios son eliminados después de la suspensión';
$string['setting:desc:cleanup_interval'] = 'Configura el intervalo en el que se realiza la limpieza';
$string['setting:desc:enablecleanlogs'] = 'Habilita o deshabilita limpieza automática de la bitácora de historia';
$string['setting:desc:enablecleanup'] = 'Habilita o deshabilita limpieza de usuarios';
$string['setting:desc:enabled'] = 'Habilita o deshabilita la utilidad para suspensión de usuario';
$string['setting:enablecleanup'] = 'Habilitar Limpieza';
$string['setting:enabled'] = 'Habilitar';
$string['setting:enablefromfolder'] = 'Suspensión automática usando archivo guardado CSV';
$string['setting:enablefromupload'] = 'Habilitar desde subida';
$string['setting:enablesmartdetect'] = 'Habilitar detección inteligente';
$string['setting:senddeleteemail'] = '¿Enviar Email de eliminación?';
$string['setting:sendsuspendemail'] = '¿Enviar Email de suspensión?';
$string['setting:smartdetect_interval'] = 'Intervalo para detección inteligente';
$string['setting:smartdetect_suspendafter'] = 'Intervalo para suspensión por inactividad';
$string['setting:uploadfilename'] = 'No';
$string['setting:uploadfolder'] = 'Subir carpeta';
$string['status:deleted'] = 'eliminado';
$string['status:suspended'] = 'suspendido';
$string['status:unsuspended'] = 'des-suspendido';
$string['suspensionsettings'] = 'Configuraciones de Suspensión de Usuario';
$string['suspensionsettingscleanup'] = 'Limpieza';
$string['suspensionsettingsfolder'] = 'Suspender desde carpeta';
$string['suspensionsettingssmartdetect'] = 'Detección inteligente';
$string['suspensionsettingsupload'] = 'Suspender desde subida';
$string['table:exclusions'] = 'Exclusiones';
$string['table:log:latest'] = 'Últimas bitácoras de suspensión';
$string['table:logs'] = 'Bitácoras';
$string['table:status:delete'] = 'Usuarios a eliminar';
$string['table:status:status'] = 'Usuarios monitorieados activamente';
$string['table:status:suspended'] = 'Usuarios suspendidos';
$string['table:status:tosuspend'] = 'Usuarios a suspender';
$string['task:logclean'] = 'Limpiar bitácoras para suspensión de usuario';
$string['thead:action'] = 'Acción(es)';
$string['thead:lastlogin'] = 'Último ingreso';
$string['thead:mailedto'] = 'Email enviado a';
$string['thead:mailsent'] = 'Email enviado';
$string['thead:name'] = 'Nombre';
$string['thead:status'] = 'Estatus';
$string['thead:timecreated'] = 'Hora de creación';
$string['thead:timemodified'] = 'Hora de modificación';
$string['thead:type'] = 'Tipo';
$string['thead:userid'] = 'ID del usuario';
$string['thead:username'] = 'Nombre_de_usuario';
