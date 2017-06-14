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
 * Strings for component 'reengagement', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   reengagement
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Esta actividad ha sido marcada como completada';
$string['afterdelay'] = 'Después del retraso';
$string['completeattimex'] = 'Esta acividad se finalizará en {$a}';
$string['completion'] = 'Finalización';
$string['completiontime'] = 'Tiempo de finalización';
$string['completionwillturnon'] = 'Tome nota de que al añadir esta actividad al curso se habilitará la finalización de actividad.';
$string['crontask'] = 'Quehacer del cron de re-compromiso';
$string['days'] = 'Días';
$string['duration'] = 'Duración';
$string['duration_help'] = '<p>La duración del re-compromiso es el período de tiempo entre que un usuario comienza un re-compromiso y que sea maracdo como terminado.
La duración del re-compromiso está especificada como un período de tiempo (por ejemplo semanas) y un número de períodos (por ejemplo 7).</p>

<p>Este ejemplo significaría que un usuario que comienza un período de re-compromiso ahora sería marcado como competente en el lapso de 7 semanas.</p>';
$string['emailcontent'] = 'Contenido del Email (Usuario)';
$string['emailcontentdefaultvalue'] = 'Este es un Email recordatorio del curso %coursename%.';
$string['emailcontent_help'] = 'Cuando el módulo le envía un Email a un usuario, toma el contenido del Email a partir de este campo.';
$string['emailcontentmanager'] = 'Contenido del Email (Mánager)';
$string['emailcontentmanagerdefaultvalue'] = 'Este es un Email recordatorio desde el curso  %coursename%, con respecto al usuario %userfirstname% %userlastname%.';
$string['emailcontentmanager_help'] = 'Cuando el módulo envía al mánager de un usuario un Email, toma el contenido del Email de este campo.';
$string['emailcontentthirdparty'] = 'Contenido del email (Tercera persona)';
$string['emailcontentthirdpartydefaultvalue'] = 'Este es eun Email recordatorio desde el curso %coursename%, con respecto al usuario %userfirstname% %userlastname%';
$string['emailcontentthirdparty_help'] = 'Cuando el módulo envía un Email a un tercero, toma el contenido desde este campo.';
$string['emaildelay'] = 'Retraso del email';
$string['emaildelay_help'] = 'Cuando el módulo está configurado a mandar email a usuarios "después de retraso", esta configuración controla de cuanto tiempo es el retraso.';
$string['emailrecipient'] = 'Destinatario(s) del Email';
$string['emailrecipient_help'] = 'Cuando necesita enviarse un Email para motivar a un usuario a re-comprometerse con el curso, esta configuración controla si se envía un Email al usuario, a su mánager o a ambos.';
$string['emailsubject'] = 'Asunto del Email (Usuario)';
$string['emailsubject_help'] = 'Cuando el módulo envía un Email a un usuario, toma el asunto del Email de este campo.';
$string['emailsubjectmanager'] = 'Asunto del Email (Mánager)';
$string['emailsubjectmanager_help'] = 'Cuando el módulo envía un Email al mánager de un usuario, toma el asunto del Email de este campo.';
$string['emailsubjectthirdparty'] = 'Asunto del email (Tercero)';
$string['emailsubjectthirdparty_help'] = 'Cuando el módulo envía un Email a un tercero, toma el asunto del Email de este campo.';
$string['emailtime'] = 'Hora del Email';
$string['emailuser'] = 'Usuario del Email';
$string['emailuser_help'] = 'Cuando debería la actividad de enviarles emails a usuarios: <ul>
<li>Nunca: No mandar Emails a usuarios.</li>
<li>Al finalizar re-compromiso: Mandar Email al usuario ciuando  esté completadad la activisdad re-compromiso.</li>
<li>Deespués del retraso: Mandar Email al usuario un tiempo definido después de que hayan iniciado el módulo.</li>
</ul>';
$string['frequencytoohigh'] = 'El número máximo de recordatorios con el período de retraso que Usted ha configurado es {$a}.';
$string['hours'] = 'Horas';
$string['introdefaultvalue'] = 'Esta es una actividad de re-compromiso; su propósito es el regular un lapso de tiempo entre las actividades que la preceden, y las actividades que siguen.';
$string['minutes'] = 'Minutos';
$string['modulename'] = 'Re-compromiso';
$string['modulenameplural'] = 'Re-compromisos';
$string['never'] = 'Nunca';
$string['noemailattimex'] = 'El mensaje agendado para {$a} no se enviará porque Usted ha completado la actividad meta';
$string['nosuppresstarget'] = 'No se seleccionó actividad meta';
$string['oncompletion'] = 'En la finalización del re-compromiso';
$string['periodtoolow'] = 'El restraso es demasiado bajo - debe ser al menos de 5 minutos.';
$string['pluginadministration'] = '';
$string['pluginname'] = 'Re-compromiso';
$string['receiveemailattimex'] = 'El mensaje se enviará en {$a}.';
$string['receiveemailattimexunless'] = 'Se enviará mensaje en {$a} a menos que Usted complete la actividad meta.';
$string['reengagement'] = 're-compromiso';
$string['reengagement:addinstance'] = 'reengagement:añadirinstancia';
$string['reengagementduration'] = 'Duración del re-compromiso';
$string['reengagement:editreengagementduration'] = 'Editar duración del re-compromiso';
$string['reengagementfieldset'] = 'Detalles del re-compromiso';
$string['reengagement:getnotifications'] = 'Recibir notificación de finalizaciones de re-compromiso';
$string['reengagementintro'] = 'Introducción al re-compromiso';
$string['reengagementname'] = 'Nombre del re-compromiso';
$string['reengagementsinprogress'] = 'Re-compromisos en progreso';
$string['reengagement:startreengagement'] = 'Iniciar re-compromiso';
$string['remindercount'] = 'Número de recordatorios';
$string['remindercount_help'] = 'Este es el númeo de veces que es enviado un Emali después de cada período de retraso. Hay algunos límites a los valoresque Usted puede usar<ul>
<li>menos de 24 hrs - límite de 2 recordatorios.</li>
<li>menos de 5 días - límite de 10 recordatorios.</li>
<li>menos de 15 días - límite de 26 recordatorios.</li>
<li>más de 15 días - límite máximo de 40 recordatorios.</li></ul>';
$string['search:activity'] = 'Recompromiso - información de actividad';
$string['suppressemail'] = 'Suprimir Email si se completa la actividad meta';
$string['suppressemail_help'] = 'Esta opción le dice a la actividad que suprima los Emails a usuarios cuando está completa una actividad nombrada.';
$string['suppresstarget'] = 'Actividad meta.';
$string['suppresstarget_help'] = 'Use el menú desplegable para elegir cual actividad debería ser revisada para finalización antes de enviar el Email recordatorio.';
$string['thirdpartyemails'] = 'Destinatarios terceros';
$string['thirdpartyemails_help'] = 'Una lista separada por comas de direcciones email para terceros  que deberían de recibir un email cuando lo hace el usuario.';
$string['userandmanager'] = 'Uuario y Mánager';
$string['weeks'] = 'Semanas';
