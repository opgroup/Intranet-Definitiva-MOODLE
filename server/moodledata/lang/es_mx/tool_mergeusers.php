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
 * Strings for component 'tool_mergeusers', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_mergeusers
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Elegir usuarios a juntar';
$string['clear_selection'] = 'Limpiar selección actual de usuario';
$string['cligathering:description'] = 'Introducir parejas de IDs de usuarios para unir al primero dentro del segundo. la ID del primer usuario (desde_ID) \'perderá\' todos sus datos, que serán migrados al segundo usuario (a_ID). El usuario \'a_ID\' incluirá datos de ambos usuarios.';
$string['cligathering:fromid'] = 'ID del usuario fuente (desde_ID)';
$string['cligathering:stopping'] = 'Para detener la unión, Ctrl+C o escriba -1 , ya sea en el campo desde_ID o en el campo a_ID';
$string['cligathering:toid'] = 'ID del usuario destino (a_id)';
$string['dbok'] = 'Unión exitosa';
$string['deleted'] = 'El usuario con ID {$a} fue eliminado';
$string['errordatabase'] = 'Tipo de BasedeDatos no soportada: {$a}';
$string['error_return'] = 'Regresar al formato de búsqueda';
$string['errorsameuser'] = 'Tratando de unir al mismo usuario';
$string['excluded_exceptions'] = 'Excluir excepciones';
$string['form_header'] = 'Encontrar usuarios a juntar';
$string['header'] = 'Unir dos usuarios dentro de una sola cuenta';
$string['into'] = 'dentro de';
$string['invalid_option'] = 'Opción de formato inválida';
$string['invaliduser'] = 'Usuario inválido';
$string['logid'] = 'Para mayores referencias, estos resultados están guardados en la bitácora id {$a}.';
$string['logko'] = 'Ocurrió algun error:';
$string['loglist'] = 'Todos estos registros son de acciones de unión realizadas, mostrando si salieron OK:';
$string['logok'] = 'Aquí están las consultas que han sido enviadas a la BasedeDatos:';
$string['mergeusers'] = 'Unir cuentas de usuarios';
$string['mergeusersadvanced'] = '<strong>Dirigir entrada del usuario</strong>';
$string['mergeusers_confirm'] = 'Después de la confirmación, iniciará el proceso de juntar
    <br /><strong>¡Esto no será reversible!</strong>
   ¿Está Usted seguro de querer continuar?';
$string['mergeusers:view'] = 'Unir Cuentas de Usuarios';
$string['merging'] = 'Unida';
$string['newuser'] = 'Usuario a conservar';
$string['newuserid'] = 'ID de usuario a conservar';
$string['newuseridonlog'] = 'Usuario conservado';
$string['nologs'] = 'Todavía no hay bitácoras de uniones aun. ¡ Bien por tí !';
$string['no_saveselection'] = 'Usted no seleccionó ni al usuario viejo ni al nuevo.';
$string['olduser'] = 'Usuario a quitar';
$string['olduserid'] = 'ID de usuario a ser removida';
$string['olduseridonlog'] = 'Usuario removido';
$string['pluginname'] = 'Unir cuentas de usuarios';
$string['qa_action_delete_fromid'] = 'Conservar intentos del nuevo usuario';
$string['qa_action_delete_toid'] = 'Conservar intentos del antiguo usuario';
$string['qa_action_remain'] = 'No hacer nada: no juntar ni eliminar';
$string['qa_action_remain_log'] = 'Los datos del usuario de la tabla <strong>{$a}</strong> no están actualizados';
$string['qa_action_renumber'] = 'Juntar intentos de ambos usuarios y renumerarlos';
$string['qa_chosen_action'] = 'Opción activa para intentos de exámenes: {$a}.';
$string['qa_grades'] = 'Calificaciones recalculadas para los exámenes: {$a}.';
$string['quizattemptsaction'] = 'Cómo resolver los intentos de exámenes';
$string['results'] = 'Resultados y bitácora de la unión';
$string['review_users'] = 'Confirmar usuarios a juntar';
$string['saveselection_submit'] = 'Guardar selección';
$string['searchuser'] = 'Buscar a Usuario';
$string['searchuser_help'] = 'Escriba un nombre_de_usuario, nombre/apellido(s), dirección Email, o la ID del usuario para buscar a usuarios potenciales. Usted también puede especificar si solamente desea buscar en un campo particular.';
$string['suspenduser_setting'] = 'Suspender usuario antiguo';
$string['tableko'] = 'Tabla {$a} : ¡ actualización NO OK !';
$string['tableok'] = 'Tabla {$a} : actualización OK';
$string['tableskipped'] = 'Por razones del ingreso o por seguridad, nos estamos saltando a <strong>{$a}</strong>.
<br />Para remover estas entradas, elimine al usuario antiguo una vez que este \'script\' haya corrido exitosamente.';
$string['transactions_not_supported'] = 'Para su información, su BasedeDatos
    <strong>no soporta transacciones</strong>.';
$string['transactions_setting'] = 'Transacciones permitidas solamente';
$string['transactions_supported'] = 'Para su información, su BasedeDatos
    <strong>soporta transacciones</strong>';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (user ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Revisar usuarios a juntar</b>';
$string['userselecttable_legend'] = '<b>Seleccionar usuarios a juntar</b>';
$string['viewlog'] = 'Ver bitácoras de unión';
$string['wronglogid'] = 'La bitácora que Usted pide ya no existe';
