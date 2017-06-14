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
 * Strings for component 'zoom', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   zoom
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['allmeetings'] = 'Todas las reuniones';
$string['apikey'] = 'Clave API Zoom';
$string['apikey_desc'] = '';
$string['apisecret'] = 'Secreto API Zoom';
$string['apisecret_desc'] = '';
$string['apiurl'] = 'URL API Zoom';
$string['apiurl_desc'] = '';
$string['audio_both'] = 'Ambos';
$string['audio_telephony'] = 'Solamente telefonía';
$string['audio_voip'] = 'Solamente VOIP';
$string['cachedef_sessions'] = 'Información de la solicitud para obtener reporte de usuario de zoom';
$string['cachedef_zoomid'] = 'la iD de zoom del usuario';
$string['connectionok'] = 'Conexión funcionando';
$string['connectionstatus'] = 'Esatus de conexión';
$string['duration'] = 'Duración';
$string['endtime'] = 'Hora de término';
$string['err_duration_nonpositive'] = 'La duración debe ser positiva.';
$string['err_duration_too_long'] = 'La duración no puede exceder 150 horas.';
$string['err_long_timeframe'] = 'Marco de hora (time frame) demasiado largo, mostrando resultados del último mes dentro del rango.';
$string['errorwebservice'] = 'Error del servidor web zoom: {$a}.';
$string['err_password'] = 'La contraseña solamente puede contener los caracteres siguientes: [a-z A-Z 0-9 @ - _ *]. Máximo 10 caracteres.';
$string['err_start_time_past'] = 'La fecha de inicio no puede estar en el pasdado.';
$string['firstjoin'] = 'El primero que pueda unirse';
$string['firstjoin_desc'] = 'Lo más temprano que un usuario pueda unirse a una reunión agendada (minutos antes del inicio).';
$string['invalid_status'] = 'Estatus inválido; revisar la Basededatos.';
$string['join'] = 'Unirse';
$string['joinbeforehost'] = 'unirse a la reunión antes del anfitrión';
$string['join_meeting'] = 'Unirse a la reunión';
$string['jointime'] = 'Hora de unión';
$string['leavetime'] = 'Hora de partida';
$string['login_api'] = 'API';
$string['login_facebook'] = 'Facebook';
$string['login_google'] = 'Google';
$string['login_sso'] = 'Ingreso único';
$string['logintypes'] = 'Tipos de ingresos';
$string['logintypesexplain'] = 'Seleccione todos los tipos de ingreso para la búsqueda de Email de usuario. Presione la tecla CTRL para seleccionar varios campos. (Las opciones están enlistadas en el orden en que se intentará la búsqueda)';
$string['login_zoom'] = 'Zoom';
$string['meeting_expired'] = 'Caduca / Eliminada';
$string['meeting_finished'] = 'Terminada';
$string['meeting_not_started'] = 'No iniciada';
$string['meetingoptions'] = 'Opción de reunión';
$string['meetingoptions_help'] = '*unirse antes del anfitrión* ale permite a los asistentes unirse a la reunión antes de que el anfitrión se una o cuando el anfitrión no puede asistir a la reunión.';
$string['meeting_started'] = 'En progreso';
$string['meeting_time'] = 'Hora de inicio';
$string['modulename'] = 'Reunión Zoom';
$string['modulename_help'] = 'Zoom es una plataforma de web y videoconferencia que le proporciona a los usuarios autorizados la habilidad para alojar reuniones en-línea.';
$string['modulenameplural'] = 'reuniones Zoom';
$string['newmeetings'] = 'Nuevas Reuniones';
$string['noparticipants'] = 'No se encontraron participantes para esta sesión en este instante.';
$string['nosessions'] = 'No se encontraron sesiones para el rango especificado.';
$string['nozooms'] = 'Sin reuniones';
$string['off'] = 'Desconectado';
$string['oldmeetings'] = 'Reuniones Concluídas';
$string['on'] = 'Activo';
$string['option_audio'] = 'Opciones de Audio';
$string['option_host_video'] = 'Alojar video';
$string['option_jbh'] = 'Habilitar reunirse antes del anfitrión';
$string['option_participants_video'] = 'Video de participantes';
$string['participants'] = 'Participantes';
$string['password'] = 'Contraseña';
$string['passwordprotected'] = 'Protegido por contraseña';
$string['pluginadministration'] = 'Gestionar Reuniones Zoom';
$string['pluginname'] = 'reunión Zoom';
$string['recurringmeeting'] = 'Recurrente';
$string['recurringmeeting_help'] = 'No tiene fecha de terminación';
$string['recurringmeetinglong'] = 'Reunión recurrente (reunión sin fecha ni hora de término)';
$string['report'] = 'Reportes';
$string['requirepassword'] = 'Requerir contraseña de reunión';
$string['sessions'] = 'Sesiones';
$string['start'] = 'Inicio';
$string['starthostjoins'] = 'Iniciar video en cuanto se una el anfitrión';
$string['start_meeting'] = 'Iniciar Reunión';
$string['startpartjoins'] = 'Iniciar video en cuanto los parcipantes se reunan';
$string['starttime'] = 'Hora de inicio';
$string['start_time'] = 'Cuando';
$string['status'] = 'Estatus';
$string['title'] = 'Título';
$string['topic'] = 'Tópico/Tema';
$string['unavailable'] = 'No puede unirse ahora';
$string['updatemeetings'] = 'Actualizar configuraciones de reunión de Zoom';
$string['usepersonalmeeting'] = 'Usar ID {$a} personalizada de reunión';
$string['webinar'] = 'Webinar';
$string['webinar_help'] = 'Esta opción solamente está disponible para cuentas Zoom pre-autorizadas.';
$string['zoom:addinstance'] = 'Añadir una nueva reunión Zoom';
$string['zoomerr'] = 'Ocurrió un error con Zoom';
$string['zoomerr_apisettings_invalid'] = 'La clave API Zoom y/o el secreto es inválida. Por favor asegúrese de que sean correctos ambos.';
$string['zoomerr_apisettings_missing'] = 'Por favor configure su clave API y secreto Zoom.';
$string['zoomerr_apiurl_404'] = 'La URL del API de Zoon no pudo encontrarse; por favor, revise la configuración.';
$string['zoomerr_apiurl_unresolved'] = 'La URL del API de Zoon no pudo resolverse; por favor, revise la configuración.';
$string['zoomerr_meetingnotfound'] = 'La reunión no existe o ha caducado.';
$string['zoomerr_usernotfound'] = 'Si Usted está usando Zoom por primera vez, Usted debe de habilitar su cuenta al ingresar a <a href="{$a}" target="_blank">{$a}</a> con sus credenciales para ingreso. Una vez que haya activado su cuenta Zoom, re-cargue esta página y continúe configurando su reunión.';
$string['zoomurl'] = 'URL de página inicial de Zoom';
$string['zoomurl_desc'] = '';
$string['zoom:view'] = 'Ver reuniones Zoom';
