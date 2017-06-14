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
 * Strings for component 'plagiarism_urkund', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   plagiarism_urkund
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Permitirr todos los tipos de archivos soportados';
$string['allowallsupportedfiles_help'] = 'Esto le permite al profesor el restringir cuales tipos de archivos serán enviados a URKUND para procesarse. No impide que los estudiantes suban tipos de archivos diferentes a la tarea.';
$string['attempts'] = 'Intentos hechos';
$string['cannotupgradeunprocesseddata'] = '<h1>No puede actualizarse a esta versión del plugin debido a datos no-procesados existentes; por favor, revierta a una versión anterior de este plugin y borre los eventos antiguos.</h1><p>Esta versión del plugin requiere API de eventos nuevos en Moodle, pero su instalación contiene eventos no-procesados relacionados con la API antigua.</p>
Usted debería de revertir a una versión anterior del plugin de URKUND, poner al sitio en modo de mantenimiento, correr el proceso de Cron de Moodle y asegurarse de que todos los eventos sean eliminados. Después intente nuevamente actualizar a esta versión del plugin de URKUND.</p>
<p>Para más infrmación vea: <a href="https://docs.moodle.org/en/Plagiarism_Prevention_URKUND_Settings#Installation_failed_due_to_unprocessed_data">URKUND Installation failed due to unprocessed data</a></p>';
$string['confirmresetall'] = 'Esto reiniciará todos los archivos en el estado: {$a}';
$string['cronwarning'] = 'El \'\'script\'\' de mantenimiento de  <a href="../../admin/cron.php">cron.php</a> no ha sido corrido por al menos 30 minutos - Cron debe de configurarse para permitirle a URKUND que funcione correctamente.';
$string['debugfilter'] = 'Filtrar archivos por';
$string['defaultsdesc'] = 'Las configuraciones siguientes son por defecto al habilitar URKUND dentro de un Módulo de Actividad';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['deletedwarning'] = 'Este archivo no pudo encontrarse - podría haber sido eliminado por el usurio';
$string['explainerrors'] = 'Esta página enlista cualquier archivo que actualmente estuviera en un estado de error.<br/>Cuando los archivos sean eliminados de esta página ya no podrán ser re-enviados y los errores ya no se mostrarán a profesores ni a estudiantes';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la cola';
$string['filereset'] = 'Un archivo ha sido reseteado para su re-envíoa URKUND';
$string['fileresubmitted'] = 'Archivo puesto en la cola para re-envío';
$string['filesresubmitted'] = '{$a} archivos re-enviados';
$string['filter30'] = 'Excluir a los más antiguos de 30 días';
$string['filter7'] = 'Excluir a los más antiguos de 7 días';
$string['filter90'] = 'Excluir a los más antiguos de 90 días';
$string['getallscores'] = 'Obtener todos los puntajes';
$string['getscore'] = 'Obtener puntaje';
$string['getscores'] = 'Obtener puntajes';
$string['heldevents'] = 'Eventos realizados';
$string['heldeventsdescription'] = 'Estos son eventos que no completaron en el primer intento y fueron puestos en cola para re-enviarlos - estos impiden que eventos subsecuentes se completen y pueden requerir más investigación. Algunos de estos eventos pueden ser no-relevantes para URKUND.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['module'] = 'Módulo';
$string['name'] = 'Nombre';
$string['nofilter'] = 'Sin filtro';
$string['noreceiver'] = 'No se especificó dirección para el destinatario';
$string['optout'] = 'Optar-por-no';
$string['pending'] = 'El archivo está pendiente para enviar a URKUND';
$string['pluginname'] = 'Plugin de detección de plagio URKUND';
$string['previouslysubmitted'] = 'Previamente enviado como';
$string['processing'] = 'Su archivo ha sido enviado a URKUND, ahora espera a que esté disponible el análisis';
$string['receivernotvalid'] = 'Esta no es una dirección de destinatario válida';
$string['report'] = 'reporte';
$string['restrictcontent'] = 'Enviar archivos anexos y texto-en-línea';
$string['restrictcontentfiles'] = 'Enviar solamente archivos anexos';
$string['restrictcontent_help'] = 'URKUND puede procesar archivos subidos, pero también puede procesar texto-en-línea de publicaciones en foros y texto del tipo de envío de tarea con texto-en-línea. Usted puede decidir cuales componentes mandar a URKUND.';
$string['restrictcontentno'] = 'Enviar todo';
$string['restrictcontenttext'] = 'Enviar solamente text-en-línea';
$string['restrictfiles'] = 'Tipos de archivos a enviar';
$string['resubmit'] = 'Re-enviar';
$string['resubmitall'] = 'Re-enviar todos con estatus: {$a}';
$string['savedconfigfailed'] = 'Se ha escrito una combinación incorrecta de nombre_de_usuario /contraseña, URKUND ha sido deshabilitado, por favor inténtelo de nuevo.';
$string['savedconfigsuccess'] = 'Configuraciones de plagio guardadas';
$string['scoreavailable'] = 'Este archivo ha sido procesado por URKUND y un reporte ahora está disponible.';
$string['scorenotavailableyet'] = 'Este archivo todavía no ha sido procesado por URKUND';
$string['sendfiles'] = 'Enviar archivos en cola';
$string['showall'] = 'Mostrar todos los errores';
$string['showwhenclosed'] = 'Cuando la Actividad se cierre';
$string['similarity'] = 'URKUND';
$string['status'] = 'Estatus';
$string['studentdisclosure'] = 'Declaración para Estudiantes';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán enviados al servicio de detección de plagio de URKUND. Si Usted desea impedir que su documento sea utilizado como fuente para análisis afuera de este sitio por otras organizaciones, Usted puede usar la liga para arrepentirse que aparece después de que el reporte sea generado.';
$string['studentdisclosure_help'] = 'Este texto se mostrará atodos los estudiantes en la página de subida de archivo.';
$string['studentemailcontent'] = 'El archivo que Usted sometió a  {$a->modulename} en {$a->coursename} ha sido procesado por la herramienta de plagio URKUND. {$a->modulelink} Si Usted desea impedir que su documento sea utilizado como fuente para análisis afuera de este sitio por otras organizaciones, Usted puede usar este enlace para arrepentirse:. {$a->optoutlink}';
$string['studentemailcontentnoopt'] = 'El archivo que Usted envió a {$a->modulename} en {$a->coursename} ya ha sido procesado por la herramienta URKUND contra plagio.
{$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por URKUND';
$string['submitondraft'] = 'Enviar archivo la primera vez que se suba';
$string['submitonfinal'] = 'Enviar archivo cuando el estudiante lo envíe para ser calificado';
$string['timesubmitted'] = 'Hora enviada';
$string['toolarge'] = 'Este archivo es demasiado grande para que URKUND lo procese';
$string['unknownwarning'] = 'Ocurrió un error al tratar de enviar este archivo a URKUND';
$string['unsupportedfiletype'] = 'Este tipo de archivo no es soportado por URKUND';
$string['updateallowedfiletypes'] = 'Actualizar tipos de archivos permitidos y eliminar registros de Urkund asociados con actividades eliminadas.';
$string['urkund'] = 'Plugin de detección de plagio URKUND';
$string['urkund_api'] = 'Dirección de integración URKUND';
$string['urkund_api_help'] = 'Esta es la dirección del API de URKUND';
$string['urkunddebug'] = 'Depurando (debugging)';
$string['urkunddefaults'] = 'Configuraciones por defecto de URKUND';
$string['urkund_draft_submit'] = 'Cuando debería de enviarse el archivo';
$string['urkund:enable'] = 'Permitirle al profesor habilitar/deshabilitar URKUND dentro de una actividad';
$string['urkund_enableoptout'] = 'Mostrar enlace para opt-out (abandonar)';
$string['urkund_enableoptoutdesc'] = 'El deshabilitar esto quitará la opción para que los estudiantes des-oculten o que oculten (dependiendo de la configuración por defecto) el contenido de sus textos en caso de encontrarse una coincidencia con los trabajos de otros estudiantes ("opt-in" y "opt-out"). AL desactivar esta característica, Usted certifica que Usted se hará responsable de gestionar el derecho de autor (copyright) de los envíos de sus estudiantes y de que esto no contraviene leyes aplicables en su país.';
$string['urkund_enableplugin'] = 'Habilitar URKUND para {$a}';
$string['urkundexplain'] = 'Para más información sobre este plugin vea: <a href="http://www.urkund.com/int/en/" target="_blank">http://www.urkund.com/int/en/</a>';
$string['urkundfiles'] = 'Archivos Urkund';
$string['urkund_lang'] = 'Idioma';
$string['urkund_lang_help'] = 'Código de idioma proporcionado por URKUND';
$string['urkund_password'] = 'Contraseña';
$string['urkund_password_help'] = 'Contraseña proporcionada por URKUND para accesar al API';
$string['urkund_receiver'] = 'Dirección del receptor';
$string['urkund_receiver_help'] = 'Esta es la dirección única proporcionada por URKUND al maestro';
$string['urkund:resetfile'] = 'Permitirle al profesor re-enviar el archivo a URKUND después de un error';
$string['urkund_show_student_report'] = 'Mostrar reporte de similitud al estudiante';
$string['urkund_show_student_report_help'] = 'El reporte de similitud da un desglose de que partes del envío furon plagios y el lugar donde URKUND vió primero este contenido';
$string['urkund_show_student_score'] = 'Mostrar puntaje de similitud al estudiante';
$string['urkund_show_student_score_help'] = 'El puntaje de similitud es el porcentaje del envío que ha cincidido con otro contenido.';
$string['urkund_studentemail'] = 'Mandar Email a estudiante';
$string['urkund_studentemail_help'] = 'Esto mandará un correo electrónico al estudiante cuando se haya procesado un archivo para hacerle saber que está disponible un reporte. El correo también incluye el enlace para optar-por-no.';
$string['urkund_username'] = 'Nombre_de_usuario';
$string['urkund_username_help'] = 'Nombre_de_usuario proporcionado por URKUND para accesar el API';
$string['urkund:viewreport'] = 'Permitirle al profesor ver el reporte completo de URKUND';
$string['useurkund'] = 'Habilitar URKUND';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando a cron y {$a->countheld} eventos están siendo retenidos para re-envío';
$string['wordcount'] = 'Máximo número de palabras';
$string['wordcount_help'] = 'Esto configura un límite mínimo en elnúmero de palabras que son necesarias para un texto-en-línea (publicaciones en foros y tipo de tarea en-línea) antes de que el contenido sea enviado a URKUND.';
