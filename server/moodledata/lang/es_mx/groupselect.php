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
 * Strings for component 'groupselect', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   groupselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['assignedteacher'] = 'Asignado profesor sin derechos de edición';
$string['assigngroup'] = 'Asignar profesores sin derechos de edición a grupos';
$string['assigngroup_confirm'] = 'Esto asignará profesores sin derechos de edición a grupos, anulando posibles asignaciones anteriores irreversiblemente. ¿Está Usted seguro?';
$string['assigngroup_help'] = 'Si se configura, habilita un botón que asigna a profesores sin derecho de edición a grupos (si el curso tiene profesores sin derecho de edición). Los profesores sin derechos de edición asignados no son miembros del grupo, pero aparecen en el archivo de exportación y en la vista principal (si se configura). Es útil si el curso emplea asistentes (ayudantes de profesor) para manejar los grupos.';
$string['cannotselectclosed'] = 'Usted ya no puede volverse miembro del grupo.';
$string['cannotselectmaxed'] = 'Usted no puede unirse al grupo {$a} - se alcanzó el número máximo de miembros.';
$string['cannotselectnocap'] = 'Usted no tiene permitido seleccionar grupo.';
$string['cannotselectnoenrol'] = 'Usted necesita estar inscrito al curso para poder volverse miembro del grupo.';
$string['cannotunselectclosed'] = 'Usted ya no puede dejar el grupo';
$string['creategroup'] = 'Crear un grupo nuevo';
$string['deleteemptygroups'] = 'Eliminar grupo cuando lo abandone el último estudiante';
$string['deleteemptygroups_help'] = 'Si se configura, elimina al grupo automáticamente cuando el último estudiante lo abandona.';
$string['description'] = 'Descripción del grupo';
$string['edittooltip'] = 'Haga click para editar';
$string['eventexportlinkcreated'] = 'Enlace de exportación creado';
$string['eventgroupteacheradded'] = 'Profesor sin derechos de edición añadido';
$string['export'] = 'Crear un enlace a descarga para archivo de datos del grupo (CSV)';
$string['export_download'] = 'Descargar archivo CSV';
$string['fromallgroups'] = 'Todos los grupos';
$string['globalpassword_help'] = 'Configurar una contraseña global para unirse a grupo. Anula contraseñas configuradas por el alumno.';
$string['groupid'] = 'ID del grupo';
$string['groupselect:addinstance'] = 'Añadir una nueva auto-selección de grupo';
$string['groupselect:assign'] = 'Permite asignar profesores a los grupos';
$string['groupselect:create'] = 'Permitir creación de grupo';
$string['groupselect:export'] = 'Permitir exportación de miembros del grupo';
$string['groupselect:select'] = 'Permitir volverse miembro del grupo';
$string['groupselect:unselect'] = 'Permitir abandonar el grupo';
$string['hidefullgroups'] = 'Ocultar grupos llenos de la vista principal';
$string['hidefullgroups_help'] = 'Si se configura, oculta todos los grupos que hayan alcanzado el número máxiomo de miembros, de la vista de lista principal (excluyendo al grupo propio del usuario). Puede ser útil si la actividad tiene muchos grupos.';
$string['incorrectpassword'] = 'Contraseña incorrecta';
$string['managegroups'] = 'Gestionar grupos';
$string['maxcharlenreached'] = 'Número máximo de caracteres alcanzado';
$string['maxlimitreached'] = 'Número máximo alcanzado';
$string['maxmembers'] = 'Miembros máx por grupo';
$string['maxmembers_help'] = 'Número máximo de miembros por gupo. 0 para ilimitado.';
$string['member'] = 'Miembro';
$string['membercount'] = 'Número';
$string['membershidden'] = 'Lista de miembros no disponible';
$string['memberslist'] = 'Miembros';
$string['minmembers'] = 'Mínimo de miembros por grupo';
$string['minmembers_help'] = 'Número mínimo de miembros por grupo. Añade notificaciones para miembros de grupos que ya están bajo este límite. El valor por defecto es 0 (deshabilitado).';
$string['minmembers_icon'] = 'El grupo tiene menos miembros de los requeridos';
$string['minmembers_notification'] = '¡Su grupo tiene menos miembros de los requeridos! El mínimo es {$a}.';
$string['modulename'] = 'Auto-selección de grupo';
$string['modulename_help'] = '<p>Le permite a los estudiantes el crear y seleccionar grupos. Características: </p><ul><li>Los estudiantes pueden crear grupos, darles una descripción y configurarles protección por contraseña, si se quiere</li><li>Los estudiantes pueden seleccionar y unirse a grupos</li><li>Los profesores sin derechos de edición pueden ser asignados a grupos</li><li>El profesor puede exportar la lista de grupos del curso como un archivo CSV</li><li>Compatibilidad completa con los grupos básicos de Moodle: los grupos pueden crearse por otros métdos si se necesita, soportan envíos de tarea de grupo, etc.</li></ul>';
$string['modulenameplural'] = 'Auto-selecciones de grupo';
$string['nogroups'] = 'Lo siento, no hay grupos disponibles para elegir.';
$string['notavailableanymore'] = 'Lo siento, ya no está disponible la selección de grupo (desde {$a}).';
$string['notavailableyet'] = 'La selección de grupo estará disponible en {$a}.';
$string['notifyexpiredselection'] = 'Mostrar mensaje, si se alcanza la fecha de \'abierto hasta\'';
$string['notifyexpiredselection_help'] = 'Si se configura, aparecerá un mensaje si la fecha de \'abierto hasta\' es alcanzada';
$string['ok'] = 'OK';
$string['password'] = 'Requerir contraseña';
$string['pluginadministration'] = 'Administración del módulo';
$string['pluginname'] = 'Auto-selección de grupo';
$string['saving'] = 'Guardando ...';
$string['select'] = 'Volverse miembro de {$a}';
$string['selectconfirm'] = '¿Realmente desea volverse miembro del grupo <em>{$a}</em>?';
$string['showassignedteacher'] = 'Mostrar profesores asignados';
$string['showassignedteacher_help'] = 'Si se configura, los profesores asignados se mostrarán en miembros del grupos. Es útil si los estudiantes necesitan saber quien es su profesor asignado';
$string['studentcancreate'] = 'Los estudiantes pueden crear grupos';
$string['studentcancreate_help'] = 'Si se configura, los estudiantes sin grupo (en agrupamientos selectos) pueden crear grupos';
$string['studentcansetdesc'] = 'Los estudiantes pueden configurar y editar la descripción del grupo';
$string['studentcansetdesc_help'] = 'Si se configura, el estudiante puede configurar una descripción del grupo al crear uno y los miembros del grupo podrán editarla.';
$string['studentcansetenrolmentkey'] = 'Los estudiantes pueden configurar contraseñas para unirse a grupos';
$string['studentcansetenrolmentkey_help'] = 'Si se configura, los estudiantes pueden configurar una clave para inscripción para unirse a grupos';
$string['studentcansetgroupname'] = 'Los estudiantes pueden configurar el nombre de nuevos grupos';
$string['studentcansetgroupname_help'] = 'Si se configura, los estudiantes pueden configurar los nombres de grupos';
$string['targetgrouping'] = 'Sleccionar grupos del agrupamiento';
$string['timeavailable'] = 'Abierto desde';
$string['timedue'] = 'Abierto hasta antes de';
$string['unselect'] = 'Dejar grupo {$a}';
$string['unselectconfirm'] = '¿Realmente desea dejar el grupo <em>{$a}</em>?';
