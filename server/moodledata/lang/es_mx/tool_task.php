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
 * Strings for component 'tool_task', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'Tan Pronto Como Se Pueda';
$string['backtoscheduledtasks'] = 'Regresar a quehaceres agendados';
$string['blocking'] = 'Bloqueando';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Núcleo';
$string['default'] = 'Por defecto';
$string['disabled'] = 'Deshabilitado';
$string['disabled_help'] = 'Los quehaceres agendados deshabilitados no son ejecutados desde cron; sin embargo, todavía podrían ejecutarse manualmente mediante la herramienta CLI de Interfaz por Línea de Comando.';
$string['edittaskschedule'] = 'Editar agenda de quehacer: {$a}';
$string['enablerunnow'] = 'Permitir &lsquo;Correr ahora&rsquo; para quehaceres agendados';
$string['enablerunnow_desc'] = 'Permitirle a administradores el correr un solo quehacer agendado inmediatamente, en lugar de esperar para que corra como está agendado. El quehacer corre en el servidor web, por lo que algunos sitios podrían desear deshabilitar esta característica para evitar problemas potenciales de desempeño.';
$string['faildelay'] = 'Retraso por falla';
$string['lastruntime'] = 'Última corrida';
$string['nextruntime'] = 'Siguiente corrida';
$string['plugindisabled'] = 'Plugin deshabilitado';
$string['pluginname'] = 'Configuración de quehacer agendado';
$string['resettasktodefaults'] = 'Reiniciar agenda de quehacer a valores por defecto';
$string['resettasktodefaults_help'] = 'Esto descartará cualquier cambio local y revertirá la agenda para este quehacer a sus configuraciones originales';
$string['runnow'] = 'Correr ahorita';
$string['runnow_confirm'] = '¿Está Usted seguro de querer correr este quehacer agendado ‘{$a}’ ahora? El quehacer agendado correrá en el servidor web y puede tomar bastante tiempo para completarse.';
$string['scheduledtaskchangesdisabled'] = 'Se han impedido modificaciones a la lista de quehaceres  (\'\'tasks\'\') agendados en la configuración de Moodle';
$string['scheduledtasks'] = 'Quehaceres agendados';
$string['taskdisabled'] = 'Quehacer deshabilitado';
$string['taskscheduleday'] = 'Día';
$string['taskscheduleday_help'] = 'Campo de día del mes para agenda de quehacer. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:<br/><ul><li><strong>*</strong> Cada día</li><li><strong>*/2</strong> Un día sí y otro no</li><li><strong>1</strong> El primer día del mes</li><li><strong>1,15</strong> El primer día y el día 15 de cada mes</li></ul>';
$string['taskscheduledayofweek'] = 'Día de la semana';
$string['taskscheduledayofweek_help'] = 'Campo de día de la semana para agenda de tarea. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:<br/><ul><li><strong>*</strong> Cada día</li><li><strong>0</strong> Cada Domingo</li><li><strong>6</strong> Cada Sábado</li><li><strong>1,5</strong> Cada Lunes y Viernes</li></ul>';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Campo de hora para agenda de quehacer. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:<br/><ul><li><strong>*</strong> Cada hora</li><li><strong>*/2</strong> Cada 2 horas</li><li><strong>2-10</strong> Cada hora desde las 2am hasta las 10am (inclusive)</li><li><strong>2,6,9</strong> 2am, 6am y 9am</li></ul>';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Campo de minuto para agenda de quehacer. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:<br/><ul><li><strong>*</strong> Cada minuto</li><li><strong>*/5</strong> Cada 5 minutos</li><li><strong>2-10</strong> Cada minuto entre 2 y 10 después de la hora (inclusive)</li><li><strong>2,6,9</strong> 2 6 y 9 minutos después de la hora</li></ul>';
$string['taskschedulemonth'] = 'Mes';
$string['taskschedulemonth_help'] = 'Campo de mes para agenda de quehacer. El campo usa el mismo formato que el cron para Unix. Algunos ejemplos son:<br/><ul><li><strong>*</strong> Cada mes</li><li><strong>*/2</strong> Un mes si y otro no</li><li><strong>1</strong> CVada Enero</li><li><strong>1,5</strong> Cada Enero y Mayo</li></ul>';
