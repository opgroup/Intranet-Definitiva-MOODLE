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
 * Strings for component 'plagiarism_plagscan', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   plagiarism_plagscan
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allfileschecked'] = 'Revisar estatus de todos los documentos en el servidor Plagscan';
$string['allowgroups'] = 'Permitir categorías';
$string['allowgroups_help'] = 'Escriba el nombre de la categoría que le permite a Usted usar PlagScan ( Ex: category1, category2, ... ). Deje el campo vacío para permitir todas las categorías';
$string['always'] = 'siempre';
$string['api_language'] = 'Reportar idioma';
$string['api_language_help'] = 'Todos los Reportes PlagScan se descargarán en este idioma.';
$string['assignments'] = 'Tareas';
$string['autodel'] = 'Auto guardar documento';
$string['autodescription'] = 'Los documentos se subirán automáticamente a PlagScan cuando se aproxime la fecha límite';
$string['autodescriptionsubmitted'] = 'Los archivos fueron subidos automáticamente a Plagscan en {$a} - cambia al modo  \'manual\' para re-enviar documentos individuales';
$string['autostart'] = 'Auto-iniciar revisiones de Plagio';
$string['badcredentials'] = 'PlagScan no reconoció los detalles de la cuenta - por favor confirme que URL del servidor, nombre_de_usuario ({$a->user}), clave API y número de versión ({$a->version}) sean correctos';
$string['checkallstatus'] = 'Actualizar estatus de todos los archivos enviados';
$string['checkstatus'] = 'Revisar estatus';
$string['compareinternet'] = 'Política de Datos';
$string['connectionfailed'] = 'No pudo conectarse al servidor PlagScan';
$string['cron_help'] = 'Si Usted reinicia cron, se podrían enviar archivos duplicados a PlagScan';
$string['cron_normal'] = 'La configuración del trabajo de cron es aceptada';
$string['cron_reset'] = 'El trabajo de cron ha sido reiniciado';
$string['cron_running1'] = 'El trabajo de cron está corriendo desde';
$string['cron_running2'] = 'Hacer click para reiniciar';
$string['data_policy'] = 'Política de Datos';
$string['datapolicyhelp'] = 'Compartir mis documentos para análisis con (comparar a)';
$string['datapolicyhelp_help'] = 'Compartir mis documentos para análisis con (comparar a)';
$string['docxemail'] = 'Generar y mandar Email con reporte .docx';
$string['docxgenerate'] = 'Solamente generar reporte .docx';
$string['docxnone'] = 'No generar reporte .docx';
$string['donotgenerate'] = 'No generar';
$string['downloadreport'] = 'Descargar reporte .docx';
$string['email_policy'] = 'Política de Email';
$string['email_policy_always'] = 'Enviar Email de todos los reportes';
$string['email_policy_ifred'] = 'Enviar Email solamente si está indicado de nivel rojo';
$string['email_policy_never'] = 'No enviar reportes Email';
$string['email_policy_notification_account'] = 'Notificación para nuevas credenciales';
$string['email_policy_notification_account_help'] = 'Al <b>activar la casilla</b> todas las <b>credenciales de cuenta</b> nuevas generadas serán enviadas inmediatamente a Usted.';
$string['english'] = 'Inglés';
$string['filechecked'] = 'Estatus del documento revisado en el servidor PlagScan';
$string['filesassociated'] = 'Documento será subido a cuenta \'{$a}';
$string['filesubmitted'] = 'Documento \'{$a}\' es enviado a Plagscan';
$string['filetypeunsupported'] = 'El tipo de documento \'{$a}\' no es un tipo de archivo soportado por el servidor PlagScan';
$string['french'] = 'Francés';
$string['generaldatabase'] = 'Comparar con base de datos general';
$string['generateemail'] = 'Generar y mandar Email';
$string['generateonly'] = 'Solamente generar';
$string['german'] = 'Alemán';
$string['handledocx'] = 'Opción docx';
$string['if_plagiarism_level'] = 'Solamente Nivel_de_Plagio rojo';
$string['individualaccounts'] = 'Cuentas individuales de profesor';
$string['invalidupload'] = 'El servidor Plagscan no aceptó el archivo {$a->filename}. La respuesta fue: {$a->content}';
$string['maxfilesize'] = 'Tamaño máximo de archivo';
$string['max_file_size'] = 'Tamaño máximo de archivo';
$string['maxfilesize_help'] = 'El tamño del archivo es demasiado grande y no puede subirse. El valor recomendado es 1000000.';
$string['months'] = 'Después de seis meses';
$string['myinstitution'] = 'Comparar con basededatos de la institución';
$string['never'] = 'Nunca';
$string['neverdelete'] = 'Nunca eliminar';
$string['newexplain'] = 'Para más información sobre este plugin vea:';
$string['newrp_redirect'] = 'Usted será redirigido automáticamente';
$string['newrp_wait'] = 'Por favor espere, estamos generando el enlace';
$string['nodeadlinewarning'] = 'Advertencia: Se seleccionó envío automático a PlagScansin configurar fecha esperada (límite) para esta tarea';
$string['nomultipleaccounts'] = 'El uso de cuentas individuales de profesor para PlagScan no es posible en este servidor';
$string['nondisclosure_notice_desc'] = 'Todos los documentos de no-revelar serán enviados en "{$a}".<br /><br />';
$string['noone'] = 'Comparar solamente con fuentes web';
$string['noonedocs'] = 'Comparar con web y con mis documentos';
$string['notprocessed'] = 'Plagscan todavía no ha analizado este archivo';
$string['notsubmitted'] = 'No enviado a Plagscan';
$string['onlyassignmentwarning'] = 'Advertencia: un envío automático a PlagScan solamente funciona cuando se usan actividades de Tarea';
$string['optin'] = 'Incluirse en detección de plagio';
$string['optin_explanation'] = 'Usted ha elegido incluirse en la detección de plagio. De ahora en adelante, ninguna tarea que Usted haya enviado, o que envíe a futuro, será subida al servidor PlagScan para revisión';
$string['optout'] = 'Excluirse de detección de plagio';
$string['optout_explanation'] = 'Usted ha elegido excluirse de la detección de plagio. De ahora en adelante, ninguna tarea que Usted envíe será subida al servidor PlagScan para revisión';
$string['plagscan'] = 'Plagscan';
$string['plagscan_API_key'] = 'Clave API';
$string['plagscan_API_key_help'] = 'Usted puede ver su clave API en <a href="https://www.plagscan.com/apisetup" target="_blank">https://www.plagscan.com/apisetup</a>';
$string['plagscan_API_method'] = 'método';
$string['plagscan_API_username'] = 'Nombre_de_usuario API';
$string['plagscan_API_version'] = 'Versión API';
$string['plagscan_API_version_help'] = 'Su Versión  API más reciente es <b>2.1</b>';
$string['plagscan_call_back_script'] = 'URL del script para \'call-back\'';
$string['plagscan:control'] = 'Habilitar/deshabilitar Envios PlagScan';
$string['plagscan:enable'] = 'Habilitar/deshabilitar PlagScan dentro de una actividad';
$string['plagscanerror'] = 'Error del servidor PlagScan: {$a}';
$string['plagscanexplain'] = 'PlagScan es un revisor de plagio. <br />Usa documentos de su institución además de textos del Internet para comparación. <br/>Para sacar provecho de este plugin, Usted necesita crear una <a href="https://www.plagscan.com" target="_blank">organisation account (cuenta institucional)</a>. <br /><br />Usted puede encontrar una guía en <a href="https://www.plagscan.com/system-integration-moodle" target="_blank">www.plagscan.com/system-integration-moodle</a>. <br />Solicítenos una prueba gratuita <a href="mailto:pro@plagscan.com">pro@plagscan.com</a> y lea nuestras noticias recientes en <a href="https://twitter.com/plagscan" target="_blank">Twitter</a>. <br /><br />Puede encontrarse información general en <a href="https://www.plagscan.com" target="_blank">www.PlagScan.com</a><hr />';
$string['plagscanmethod'] = 'Enviar';
$string['plagscan_multipleaccounts'] = 'Asociar archivos subidos con';
$string['plagscan_nondisclosure_notice_email'] = 'Documentos confidenciales';
$string['plagscan_nondisclosure_notice_email_desc'] = 'nombre@ejemplo.com';
$string['plagscan_nondisclosure_notice_email_help'] = 'Todos los documentos con aviso de bloqueo serán enviados en una cuenta separada de PlagScan. Todos los documentos localizados en esta cuenta de usuario <b>no compartida</b> a usuarios de otra organización. El <b>Email escrito no debe de ser parte de otra Cuenta de PlagScan</b>.';
$string['plagscanserver'] = 'Servidor PlagScan';
$string['plagscanserver_help'] = 'La configuración inicial es "<b>ssl://api.plagscan.com/</b>" o "<b>https://api.plagscan.com/</b>" si es que Moodle usa un servidor proxy.';
$string['plagscan_studentpermission'] = 'Los estudiantes pueden negar permiso para subir a PlagScan';
$string['plagscanversion'] = '2.3';
$string['plagscan:viewfullreport'] = 'Ver/Descargar Reportes PlagScan';
$string['pluginname'] = 'PlagScan';
$string['psreport'] = 'Reporte PS';
$string['red'] = 'Nivel_de_Plagio rojo comienza en';
$string['report'] = 'Reporte';
$string['report_type'] = 'Tipo de reporte:';
$string['resubmit'] = 'Re-enviar a PlagScan';
$string['runalways'] = 'Empezar inmediatamente';
$string['runautomatic'] = 'Empezar inmediatamente después de la primera fecha esperada';
$string['runduedate'] = 'Empezar inmediatamente después de todas las fechas esperadas';
$string['runmanual'] = 'Empezar manualmente';
$string['save'] = 'Guardar';
$string['savedapiconfigerror'] = 'Hubo un error al actualizar sus configuraciones PlagScan';
$string['savedconfigsuccess'] = 'Configuraciones PlagScan guardadas exitosamente';
$string['serverconnectionproblem'] = 'Problema al conectarse al servidor PlagScan';
$string['serverrejected'] = 'El servidor PlagScan rechazó este archivo - el archivo está roto o protegido.';
$string['settings_cancelled'] = 'Se han cancelado las configuraciones Anti-plagio';
$string['settingsfor'] = 'Actualizar configuraciones  PlagScan para cuenta \'{$a}';
$string['settings_saved'] = 'Las configuraciones anti-plagio han sido guardadas exitosamente';
$string['show_to_students'] = 'Compartir resultados con estudiantes';
$string['show_to_students_actclosed'] = 'después de la fecha esperada';
$string['show_to_students_always'] = 'siempre';
$string['show_to_students_help'] = 'Todos los participantes pueden ver los resultados del análisis PlagScan.';
$string['show_to_students_links'] = 'PlagLevel (Nivel_de_Plagio) y Reportes';
$string['show_to_students_never'] = 'Nunca';
$string['show_to_students_opt2'] = 'Compartir estos resultados';
$string['show_to_students_opt2_help'] = 'Esto le permite al estudiante el ver solamente l PlagLever (Nivel_de_Plagio) o los reportes completos';
$string['show_to_students_plvl'] = 'PlagLevel (Nivel_de_Plagio)';
$string['singleaccount'] = 'La cuenta principal PlagScan';
$string['spanish'] = 'Español';
$string['ssty'] = 'Sensibilidad';
$string['sstyhigh'] = 'Alta';
$string['sstylow'] = 'Baja';
$string['sstymedium'] = 'Media';
$string['studentdisclosure'] = 'Revelación del Estudiante';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán enviados a un servicio de detección de plagio';
$string['studentdisclosure_help'] = 'Este texto será mostrado a todos los estudiantes en la página de subida de archivo.';
$string['studentdisclosureoptedout'] = 'Usted ha optado por excluirse de la detección de plagio';
$string['studentdisclosureoptin'] = 'Haga click aquí para incluirse en la detección de plagio';
$string['studentdisclosureoptout'] = 'Haga click aquí para excluirse de la detección de plagio';
$string['submit'] = 'Enviar a Plagscan';
$string['submituseroptedout'] = 'Archivo \'{$a}\' no enviado - el usuario ha optado por excluirse de la detección de plagio';
$string['testconnection'] = 'Conexión de prueba';
$string['testconnection_fail'] = '¡Falló la conexión!';
$string['testconnection_success'] = '¡La conexión fue exitosa!';
$string['unsupportedfiletype'] = 'Este tipo de archivo no está soportado por PlagScan';
$string['updateyoursettings'] = 'A sus configuraciones de PlagScan';
$string['useplagscan'] = 'Habilitar Plagscan';
$string['useplagscan_help'] = '';
$string['useroptedout'] = 'Optó por excluirse de la detección de plagio';
$string['viewmatches'] = 'Ver coincidencias';
$string['viewreport'] = 'Ver reporte';
$string['wasoptedout'] = 'El usuario optó por excluirse de la detección de plagio';
$string['webonly'] = 'Buscar la WEB';
$string['week'] = 'Después de una semana';
$string['weeks'] = 'Después de tres meses';
$string['windowsize'] = 'Tamaño de ventana';
$string['windowsize_help'] = 'El tamaño de ventana representa que tan granular será la búsqueda técnica. El valor recomendado es 60.';
$string['yellow'] = 'El nivel_de_Plagio amarillo comienza en';
