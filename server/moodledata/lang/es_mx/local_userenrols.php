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
 * Strings for component 'local_userenrols', language 'es_mx', branch 'MOODLE_30_STABLE'
 *
 * @package   local_userenrols
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ASSIGN_MENU_LONG'] = 'Grupo por Meta';
$string['ASSIGN_MENU_SHORT'] = 'Meta del Grupo';
$string['ERR_CREATE_GROUP'] = 'Línea %u: No se pudo crear el grupo \'%s\'n';
$string['ERR_ENROLL_FAILED'] = 'Línea %u: No se pudo crear asignación de rol para el usuario con userid \'%s\'n';
$string['ERR_ENROLL_META'] = 'Línea %u: No hay inscripción existente en metacurso para el usuario con userid \'%s\'n';
$string['ERR_GROUP_MEMBER'] = 'Línea %u: No se pudo añadir al usuario \'%s\' al grupo \'%s\'n';
$string['ERR_INVALID_GROUP_ID'] = 'La id %u del grupo es inválida para este curso.';
$string['ERR_NO_MANUAL_ENROL'] = 'El curso debe de tener  habilitado  Meta enlace a curso.';
$string['ERR_NO_META_ENROL'] = 'El curso debe de tener  habilitado el plugin de \'Meta enlace a curso\'.';
$string['ERR_PATTERN_MATCH'] = 'Línea %u: No se pudieron procesar los contenidos de la línea \'%s\'n';
$string['ERR_USERID_INVALID'] = 'Línea %u: Valor inválido de identidad del usuario \'%s\'n';
$string['ERR_USER_MULTIPLE_RECS'] = 'Línea %u: El valor de identidad del usuario \'%s\' no es único. Se encontraron registros múltiples';
$string['HELP_PAGE_ASSIGN'] = 'Asignaciones de Grupo a Metacurso';
$string['HELP_PAGE_ASSIGN_help'] = '<p>
Use esta herramienta de asignación de grupo a metacurso para asignar usuarios desde cursos hijos individuales hacia grupos separados. Opcionalmente Usted puede remover cualquier otras asignaciones de grupo actuales que pudieran tener los usuarios.
</p>';
$string['HELP_PAGE_IMPORT'] = 'Importar Inscripciones y Asignaciones de Grupos';
$string['IMPORT_MENU_LONG'] = 'Importar inscripciones';
$string['IMPORT_MENU_SHORT'] = 'Importar';
$string['INF_ASSIGN_SUCCESS'] = 'Asignación de grupo exitosa';
$string['INF_IMPORT_SUCCESS'] = 'Importación de inscripción a grupo exitosa';
$string['INF_METACOURSE_WARN'] = '<b>ADVERTENCIA</b>: Usted no puede importar inscripciones directamente al interior de un metacurso. En su lugar, haga inscripciones a uno de sus cursos hijos.<br /><br />';
$string['LBL_ASSIGN'] = 'Asignar';
$string['LBL_ASSIGN_COURSE'] = 'Curso: {$a}';
$string['LBL_ASSIGN_TITLE'] = 'Asignación de Grupo por Metacurso';
$string['LBL_ASSIGN_TO'] = 'Asignar a grupo:';
$string['LBL_ASSIGN_TO_help'] = 'Seleccione un grupo al cual asignar los usuarios inscritos en este metacurso.';
$string['LBL_ENROLL_OPTIONS'] = 'Opciones de inscripción';
$string['LBL_FILE_help'] = 'Subir o elegir de un repositorio, un archivo con datos delimitados con la información de usuarios y la información opcional de grupo. El archivo debe tener una extensión .txt o .csv.';
$string['LBL_FILE_OPTIONS'] = 'Importar archivo';
$string['LBL_GROUP'] = 'Asignar a grupos:';
$string['LBL_GROUP_CREATE'] = 'Crear grupos:';
$string['LBL_GROUP_CREATE_help'] = 'Si no existen grupos en el archvo para importación, crear los nuevos conforme se necesiten; de otra manera solamente asignar usuarios a grupos si ya existieran los nombres de los grupos especificados.';
$string['LBL_GROUP_help'] = 'Hacer asignaciones de grupo, ya sea basándose en entrada por archivo, o un grupo seleccionado.';
$string['LBL_GROUP_ID'] = 'Usar grupo:';
$string['LBL_GROUP_ID_help'] = 'Elija para usar el nombre del grupo en el archivo de entrada, si se pone, o seleccione un grupo existente e ignore los datos de entrada.';
$string['LBL_GROUP_OPTIONS'] = 'Opciones de Grupo';
$string['LBL_IDENTITY_OPTIONS'] = 'Identidad del usuario';
$string['LBL_IMPORT'] = 'Importar';
$string['LBL_IMPORT_TITLE'] = 'Archivo de Inscripción por Importación CSV';
$string['LBL_NO_GROUP_ID'] = 'Usar datos del archivo';
$string['LBL_NO_ROLE_ID'] = 'Sin inscripciones';
$string['LBL_REMOVE_CURRENT'] = 'Remover existentes:';
$string['LBL_REMOVE_CURRENT_help'] = 'Remover las otras asignaciones de grupo que tuvieran los usuarios.';
$string['LBL_ROLE_ID'] = 'Rol:';
$string['LBL_ROLE_ID_help'] = 'Cual rol quiere Usted que tengan en el curso los usuarios importados. Si fuera \'Sin Inscripción\' entonces solamente se harán las asignaciones de grupo.';
$string['LBL_USER_ID_FIELD'] = 'Campo de usuario:';
$string['LBL_USER_ID_FIELD_help'] = 'Especifique cual campo del registro del usuario está representado en la primera columna del archivo de importación.';
$string['pluginname'] = 'Importar Inscripciones de Usuarios y Asignaciones de Grupo';
$string['VAL_INVALID_FORM_DATA'] = 'Envío de datos del formato inválido';
$string['VAL_INVALID_SELECTION'] = 'Selección inválida';
$string['VAL_NO_FILES'] = 'No se selecccionó un archivo para importar';
