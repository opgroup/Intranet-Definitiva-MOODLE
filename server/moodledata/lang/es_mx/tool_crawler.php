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
 * Strings for component 'tool_crawler', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_crawler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Auto crear';
$string['bigfilesize'] = 'Tamaño de Archivos Grandes';
$string['bigfilesizedesc'] = 'Que tan grande necesita ser un archivo para ser marcado como de tamaño-excesivo. En MB';
$string['botcantgettestpage'] = 'El robot no pudo solicitar página de prueba';
$string['botpassword'] = 'Contraseña del robot';
$string['botpassworddesc'] = 'La contraseña para que gatee el usuario Moodle. Este usuario debería de tener permiso de ver todo el sitio completo, pero permisos de edición muy limitados, y estar configurado para usar autenticación básica.';
$string['bottestpagenotreturned'] = 'No se regresó la página de prueba del robot';
$string['bottestpageredirected'] = 'La página de prueba del robot se redirigió hacia {$a->resredirect}';
$string['botuser'] = 'Usuario robot';
$string['botusermissing'] = 'Falta usuario robot';
$string['botusername'] = 'Nombre_de_usuario del robot';
$string['botusernamedesc'] = 'El nombre_de_usuario del usuario Moodle para gatearcomo';
$string['broken'] = 'Enlaces rotos / URLs';
$string['broken_header'] = '<p>Las URLs duplicadas solamente se buscarán una vez.</p>';
$string['configmissing'] = 'Falta configuración';
$string['course'] = 'Curso';
$string['crawlend'] = 'Termina gateado';
$string['crawlstart'] = 'Inicia gateado';
$string['cronticks'] = 'Ticks del cron';
$string['curcrawlstart'] = 'El gateado actual comenzó en';
$string['duration'] = 'Duración';
$string['event:crawlstart'] = 'Gateo de revisión de enlaces iniciado';
$string['event:crawlstartdesc'] = 'Gateo de revisión de enlaces iniciado {$a}';
$string['eventrobotcleanupcompleted'] = 'Limpieza de robot revisador-de-enlace completado';
$string['eventrobotcleanupcompleteddesc'] = 'El robot revisador-de-enlaces terminó de limpiar URLs antiguas de la historia de gateo. Número de registros removidos: {$a->numrecsdeleted}';
$string['eventrobotcleanupstarted'] = 'Limpieza de robot revisador-de-enlace iniciado';
$string['excludecourses'] = 'Excluir cursos';
$string['excludecoursesdesc'] = 'Un regex código-corto de curso por línea';
$string['excludeexturl'] = 'Excluir URLs externas';
$string['excludeexturldesc'] = 'Una regex URL por línea, cada una es contrastada contra la URL completa';
$string['excludemdldom'] = 'Excluir DOMs Moodle';
$string['excludemdldomdesc'] = 'Una expresión css / xpath por línea; estas partes del DOM serán quitadas antes de que los enlaces sean extraidos';
$string['excludemdlparam'] = 'Parámetros excluir URL Moodle';
$string['excludemdlparamdesc'] = 'Una clave de parámetro por línea. Las URLs que usan esto todavía serán gateados, pero con estos parámetros quitados para evitar duplicados.';
$string['excludemdlurl'] = 'Excluir URLs de Moodle';
$string['excludemdlurldesc'] = 'Un regex URL por línea, cada uno es contrastado excluyendo el wwwroot';
$string['found'] = 'Encontrado';
$string['frompage'] = 'De la página';
$string['good'] = 'Bien';
$string['hellorobot'] = 'Hola robot: \'{$a->botusername}\\';
$string['idattr'] = 'Contexto HTML';
$string['incomingurls'] = 'URLs entrantes';
$string['incourse'] = 'En curso';
$string['lastcrawledtime'] = 'Último tiempo de gateado';
$string['lastcrawlend'] = 'El último gateo terminó en';
$string['lastcrawlproc'] = 'Último proceso de gateo';
$string['lastqueuesize'] = 'Último tamaño de cola';
$string['linktext'] = 'Texto del enlace';
$string['maxcrontime'] = 'Límite corrida Cron';
$string['maxcrontimedesc'] = 'El gateador seguirá gateando hasta que se alcance su límite en cada click del Cron. En segundos';
$string['maxtime'] = 'Tiempo máximo de ejecución';
$string['maxtimedesc'] = 'El tiempo de descarte para cada solicitud de gateo';
$string['mimetype'] = 'Tipo MIME';
$string['missing'] = 'Faltante';
$string['neverfinished'] = 'Nunca terminado';
$string['neverrun'] = 'Nunca corrido';
$string['notyetknown'] = 'Aun desconocido';
$string['numberurlsfound'] = 'Se encontraron {$a->reports_number} {$a->repoprt_type} URLs';
$string['numlinks'] = 'Enlaces totales';
$string['numurls'] = 'URLs totales';
$string['outgoingurls'] = 'URLs salientes';
$string['oversize'] = 'Enlaces grandes / lentos';
$string['oversize_header'] = '<p>Los archivos grandes con múltiples enlaces entrantes hacia ellos serán duplicados.</p>';
$string['pluginname'] = 'Robot gateador de enlaces';
$string['progress'] = 'Progreso';
$string['progresseta'] = '{$a->percent} ETA en {$a->eta}';
$string['queued'] = 'URLs en cola';
$string['queued_header'] = '<p>El título y curso solamente son conocidos si la URL se ha visto en un gateo anterior.</p>';
$string['recent'] = 'URLs recientemente gateadas';
$string['recent_header'] = '';
$string['response'] = 'Respuesta';
$string['retentionperiod'] = 'Período de retención para URLs malas';
$string['retentionperioddesc'] = 'Cuantos días conservar las URLs malas en la BasedeDatos';
$string['retry'] = 'Reintentar';
$string['robotcleanup'] = 'Limpieza robot';
$string['robotstatus'] = 'Estatus del robot';
$string['seedurl'] = 'URL semilla';
$string['seedurldesc'] = 'En donde iniciará el gateador';
$string['settings'] = 'Configuraciones';
$string['size'] = 'Tamaño';
$string['slowurl'] = 'URL lenta';
$string['status'] = 'Estatus del robot';
$string['unknown'] = 'Desconocido';
$string['url'] = 'URL';
$string['urldetails'] = 'Detalles de URL';
$string['urldetails_help'] = 'Esto muestra todos los enlaces entrantes y salientes para esta URL. Los enlaces que han sido puestos en la lista-negra o los que están en elementos DOM excluídos no se mostrarán.';
$string['useraccount'] = 'Cuenta del usuario';
$string['useragent'] = 'Cadena de texto de agente usuario robot';
$string['useragentdesc'] = 'La cadena de texto del agente usuario que se usa en los encabezados (headers) HTTP + la versión de este plugin';
$string['whenqueued'] = 'Cuando esté en cola';
