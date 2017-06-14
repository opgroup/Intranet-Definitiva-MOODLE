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
 * Strings for component 'enrol_auto', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   enrol_auto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'Configurar instancias de auto inscribir';
$string['auto:manage'] = 'Gestionar usuarios inscritos';
$string['auto:unenrol'] = 'Des-inscribir usuarios del curso';
$string['auto:unenrolself'] = 'Des-inscribirse a sí mismo del curso';
$string['courseview'] = 'Vista del curso';
$string['customwelcomemessage'] = 'Mensaje de bienvenida personalizado';
$string['customwelcomemessage_help'] = 'Puede añadirse un mensaje de bienvenida como texto plano o en auto-formato de Moodle, incluyendo marcas (tags) HTML y marcas (tags) multi-idioma.

Pueden incluirse los siguientes remplazables (\'\'placeholders\'\') en el mensaje:

* Nombre del curso {$a->coursename}
* Enlace hacia la página del perfil del usuario {$a->profileurl}';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccionar rol que deberá asignarse a los usuarios durante la auto inscripción.';
$string['editenrolment'] = 'Editar inscripción';
$string['enrolon'] = 'Inscribir en';
$string['enrolon_desc'] = 'Evento que disparará una auto inscripción.';
$string['enrolon_help'] = 'Elija cual evento disparará la auto inscripción.

**Ver curso** - Inscriba al usuario cuando vea el curso.<br>

**Ver actividad/recurso del Curso** - Inscriba al usuario en cuanto vea alguno se los recursos/actividades seleccionados.<br>
*NOTA:* esta opción requiere una instancia de inscripción por acceso de Invitado.';
$string['modview'] = 'Ver actividad/recurso del curso';
$string['modviewmods'] = 'Actividades/recursos';
$string['modviewmods_desc'] = 'El ver cualquiera de los recursos/actividades seleccionados disparará una auto inscripción.';
$string['pluginname'] = 'Auto inscripción';
$string['pluginname_desc'] = 'El plugin para auto inscripción automáticamente inscribe a los usuarios en cuanto vean un curso/actividad/recurso.';
$string['requirepassword'] = 'Requerir clave de inscripción';
$string['requirepassword_desc'] = 'Requerir clave de inscripción en curso snuevos y evitar que se quite el requisito de clave de inscripción en cursos existentes.';
$string['role'] = 'Rol asignado por defecto';
$string['sendcoursewelcomemessage'] = 'Mandar mensaje de bienvenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Si se habilita, los usuarios recibirán un mensaje de bienvenida por Email cuando se auto inscriban.';
$string['status'] = 'Permitir auto inscripciones';
$string['status_desc'] = 'Permitir auto inscripciones de usuarios dentro de cursos por defecto.';
$string['status_help'] = 'Esta configuración determina si es que este plugin para auto inscripción está habilitado para este curso.';
$string['unenrol'] = 'Des-inscribir usuario';
$string['unenrolselfconfirm'] = '¿Realmente desea des-inscribirse Usted mismo del curso "{$a}"?';
$string['unenroluser'] = '¿Realmente desea des-inscribir a "{$a->user}" del curso "{$a->course}"?';
$string['userlogin'] = 'Ingreso de usuario';
$string['welcometocourse'] = 'Bienvenido a {$a}';
$string['welcometocoursetext'] = '¡Bienvenido a {$a->coursename}!

Si no lo ha hecho anteriormente, Usted debería de editar su página de su perfil, para que podamos saber más sobre Usted:

{$a->profileurl}';
