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
 * Strings for component 'filter_poodll', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   filter_poodll
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = '¿Activar PoodLL?';
$string['alwayshtml5'] = 'Siempre usar HTML5';
$string['audiotranscode'] = 'Auto Conv. a MP3';
$string['audiotranscodedetails'] = 'Automaticamente convierte archivo grabado de audio a formato MP3 antes de copiarlo de vuelta a Moodle. Usarlo solamente cuando emplea el servidor tokyo.poodll.com.';
$string['autotryports'] = 'Intentar puertos diferentes si no pudiera conectarse';
$string['awssdkversion'] = 'AWS Sofware Development Kit';
$string['awssdkversion_desc'] = 'La grabación en la nube PoodLL usa Amazon Web Services (AWS). La versión 3.x está soportada pero no viene incluida en  PoodLL. La versión 2.x del AWS SDK (Software Development Kit) funcionará en PHP 5.3 o superior. Usted no debería de necesitar cambiar esto, pero contacte con el soporte de PoodLL si surgiera la necesidad.';
$string['bandwidth'] = 'Conexión estudiante, bytes/segundo. Afecta calidad webcam.';
$string['bgtranscode_audio'] = 'Realizar conversiones a MP3 en segundo plano';
$string['bgtranscodedetails_audio'] = 'Esto es más confiable que realizarlas con los usuarios esperando. Pero el usuario no obtendrá su audio hasta que el Cron se haya ejecutado después de guardar. Solamente funciona si Usted está usando  FFMPEG y Moodle 2.7 o superior. Para grabaciones en MP3 con la grabadora MP3, la conversión ocurre en el navegador, no en el servidor. Así es que la conversión del lado del servidor (FFMPEG) no se usará.';
$string['bgtranscodedetails_video'] = 'Esto es más confiable que realizarlas con los usuarios esperando. Pero el usuario no obtendrá su audio hasta que el Cron se haya ejecutado después de guardar. Solamente funciona si Usted está usando  FFMPEG y Moodle 2.7 o superior.';
$string['bgtranscode_video'] = 'Realizar Conversiones hacia MP4 en segundo plano';
$string['bundle'] = 'Paquete';
$string['burntrose_recorder'] = 'Rosa quemada';
$string['cameraback'] = 'reverso';
$string['camerafront'] = 'frente';
$string['cancel'] = 'Cancelar';
$string['capturefps'] = 'Cuadros/segundo Captura Video Grabadora';
$string['captureheight'] = 'Altura Captura Video Grabadora';
$string['capturewidth'] = 'Ancho Captura Video Grabadora';
$string['dataset'] = 'Dataset (conjunto-de-datos)';
$string['dataset_desc'] = 'PoodLL le permite a Usted jalar un conjunto-de-datos (dataset) de la BasedeDatos para usar en su plantilla. Esta es una característica avanzada. Escriba aquí la porción SQL de una llamada $DB->get_records_sql.';
$string['datasetvars'] = 'Variables del conjunto-de-datos';
$string['datasetvars_desc'] = 'Ponga una lista de variables separadas por coma que hace  las vars para el SQL. Usted puede y probablemente querrá usar variables aquí.';
$string['debug_enable'] = 'Habilitar depuración (debugging)';
$string['debug_enable_details'] = 'Si se habilita, la información acerca de grabaciones se almacenará en las bitácoras de Moodle. Estas están para ayudarle a resolver problemas y darle soporte desde la mesa de ayuda de Poodll. desactívela cuando no la necesite o Usted tendrá basura inútil en su bitácora de Moodle.';
$string['debug_heading'] = 'Depuración (debugging) de Poodll';
$string['default_camera'] = 'Cámara por defecto';
$string['defaultwhiteboard'] = 'Pizarrón por defecto';
$string['event_adhoc_completed'] = 'Quehacer ad-hoc de Poodll completado';
$string['event_adhoc_convert_completed'] = 'Quehacer convertidor ad-hoc de Poodll completado';
$string['event_adhoc_convert_registered'] = 'Quehacer convertidor ad-hoc de Poodll registrado';
$string['event_adhoc_move_completed'] = 'Quehacer mover ad-hoc de Poodll completado';
$string['event_adhoc_move_registered'] = 'Quehacer mover ad-hoc de Poodll registrado';
$string['event_adhoc_registered'] = 'Quehacer ad-hoc de Poodll registrado';
$string['event_debug_log'] = 'Nota de depuración de Poodll';
$string['expired'] = 'PoodLL no se mostró porque el registro ha caducado. Pídale a su profesor/administrador que renueve el registro en PoodLL.com.';
$string['exportdiagnostics'] = 'Exportar';
$string['extensions'] = 'Extensiones de archivo';
$string['extensions_desc'] = 'Una CSV (lista separada por comas) lista de extensiones de archivo que este filtro puede procesar.';
$string['extensionsettings'] = 'Configuraciones de Extensión de Archivo';
$string['ffmpeg'] = 'Covertir multimedios subidos con FFMPEG';
$string['ffmpeg_details'] = 'FFMPEG debe estar instalado en su servidor Moodle y en la ruta del sistema. Necesitará soportar conversión a MP3, por lo que debe probarlo primeramente en la línea de comandos; por ejemplo: ffmpeg -i unarchivo.flv unarchivo.mp3 .';
$string['filtername'] = 'Filtro PoodLL';
$string['filter_poodll_audioplayer_heading'] = 'Configuraciones Reproductor de Audio';
$string['filter_poodll_camera_heading'] = 'Configuraciones de Cámara Web';
$string['filter_poodll_flashcards_heading'] = 'Configuraciones de Flashcards';
$string['filter_poodll_html5recorder_heading'] = 'Configuraciones de Grabdora HTML5';
$string['filter_poodll_mic_heading'] = 'Configuraciones de Micrófono';
$string['filter_poodll_mp3recorder_heading'] = 'Configuraciones de Grabadora MP3';
$string['filter_poodll_network_heading'] = 'Configuraciones de Red PoodLL';
$string['filter_poodll_registration_explanation'] = 'PoodLL 3 requiere una clave de registro. Si Usted no tiene una, visite Poodll.com para obtener una.';
$string['filter_poodll_registration_heading'] = 'Registre su PoodLL';
$string['filter_poodll_videogallery_heading'] = 'Configuraciones de Galería de Video';
$string['filter_poodll_videoplayer_heading'] = 'Configuraciones de Reproductor de Video';
$string['filter_poodll_whiteboard_heading'] = 'Configuraciones del Pizarrón';
$string['flashcardstype'] = 'Tipo de Flashcards';
$string['generalsettings'] = 'Configuraciones generales';
$string['handle'] = 'Mano {$a}';
$string['have_recent_event'] = 'Se encontró un evento de movida-completada recientemente disparada para: {$a}';
$string['have_task'] = 'Se encontró un quehacer pendiente para mover/convertir para: {$a}';
$string['highquality'] = 'alta';
$string['html5recorder_skin'] = 'Piel de Grabadora HTML5';
$string['insert'] = 'Insertar';
$string['jumpcat_explanation'] = 'El conjunto completo de configuraciones del filtro Poodll puede encontrarse <a href="{$a}">aquí</a>.';
$string['jumpcat_heading'] = 'Configuraciones del filtro Poodll';
$string['license_details'] = '<br> -------------- <br> Tipo de licencia: {$a->license_type} <br> Caduca en (JST): {$a->expire_date} <br> URL registrada: {$a->registered_url}';
$string['lowquality'] = 'baja';
$string['mediumquality'] = 'media';
$string['miccanpause'] = 'Permitir pausa (solamente grabadora mp3)';
$string['micecho'] = 'Mic. Eco';
$string['micgain'] = 'Mic. Ganancia';
$string['micloopback'] = 'Mic. Lazo Retorno (loopback)';
$string['micrate'] = 'Mic. Velocidad';
$string['micsilencelevel'] = 'Mic.  Nivel Silencio';
$string['mobileandwebkit'] = 'Mobile + Webkit browsers (Safari,Chrome etc)';
$string['mobile_audio_quality'] = 'Calidad del audio';
$string['mobileonly'] = 'Solamente dispositivos Móviles';
$string['mobile_os_version_warning'] = '<p>Su versión de Sistema Operativo es muy antigua</p>
<p>Androide requiere versión 4 o superior.</p>
<p>iOS requiere versión 6 o superior.</p>';
$string['mobilesettings'] = 'Configuraciones App iOS';
$string['mobile_show'] = 'Mostrar Mobile';
$string['mobile_show_desc'] = 'Cuando el usuario está en un dispositivo iOS, en lugar de una grabadora, se les muestra un botón para "subir/grabar" y un botón para "usar App PoodLL". Desactive esto para ocultar el botón de la App PoodLL.';
$string['mobile_video_quality'] = 'Calidad del video';
$string['mp3_nocloud'] = 'Sin Nube';
$string['mp3_nocloud_details'] = 'No enviar grabaciones Flash mp3 a la nube para transcodificación y copiado.';
$string['mp3opts'] = 'Opciones para conversión FFMPEG MP3';
$string['mp3opts_details'] = 'Déjelo vacío si desea permitir a FFMPEG tomar las decisiones. Cualquier cosa que ponga aquí aparecerá entre  [ffmpeg - myfile.xx ] y [ myfile.mp3 ]';
$string['mp3skin'] = 'Piel MP3';
$string['mp3skin_details'] = 'Si Usted quiere usar una piel de grabadora, a la tema, escriba aquí su nombre. En caso contrario escriba: none';
$string['mp4opts'] = 'Opciones para conversión FFMPEG MP4';
$string['mp4opts_details'] = 'Déjelo vacío si desea permitir a FFMPEG tomar las decisiones. Cualquier cosa que ponga aquí aparecerá entre  [ffmpeg - myfile.xx ] y [ myfile.mp4 ]';
$string['neverhtml5'] = 'Nunca usar HTML5';
$string['no_event_or_task'] = 'No se encontró ni un quehacer para mover en espera, ni un evento de movida completada para: {$a}';
$string['normal'] = 'Normal';
$string['picqual'] = 'Calidad Webcam deseada 1-10';
$string['plain_recorder'] = 'Simple';
$string['player'] = 'Jugador {$a}';
$string['playertype'] = 'reproductor';
$string['pluginname'] = 'Filtro PoodLL';
$string['poodll:candownloadmedia'] = 'Puede descargar medios';
$string['poodllsupportinfo'] = 'Información de Soporte de PoodLL';
$string['presets'] = 'Autollenar plantilla con una Preconfiguración';
$string['presets_desc'] = 'PoodLL viene con algunas preconfiguraciones por defecto que Usted puede usar de inmediato, o para ayudarse a comenzar sus propias plantillas. Elija una de esas aquí, o simplemente cree desde cero su propia plantilla. Usted puede exportar una plantilla al hacer click sobre la caja verde superior. Usted puede importar un paquete al arrastrarlo hacia la caja verde.';
$string['recorderorder'] = 'Orden Preferido de Grabadora';
$string['recorderorder_audio'] = 'Orden de Grabadora de Audio';
$string['recorderorder_desc'] = 'PoodLL eligirá la mejor grabadora que pueda si el navegador y la plataforma del usuario la soportan. Usted configura el orden aquí.';
$string['recorderorder_snapshot'] = 'Orden de Grabadora de Instantáneas';
$string['recorderorder_video'] = 'Orden de Grabadora de Video';
$string['recorderorder_whiteboard'] = 'Orden de Grabadora de Pizarrón';
$string['recorderorder_whiteboard_desc'] = '(Esta configuración actualmente no es usada y será eliminada de Poodlle pronto)';
$string['recui_audiogain'] = 'Ganancia de Audio';
$string['recui_audiorate'] = 'Tasa de Audio';
$string['recui_awaitingconfirmation'] = 'Esperando confirmación';
$string['recui_btnupload'] = 'Grabar o Elegir un Archivo';
$string['recui_cancelsnapshot'] = 'Cancelar';
$string['recui_close'] = 'Cerrar';
$string['recui_continue'] = 'Continuar';
$string['recui_converting'] = 'convirtiendo';
$string['recui_echo'] = 'Supresión de Eco';
$string['recui_inaudibleerror'] = 'No podemos oirlo. Por favor, revise permisos del navegador y Flash.';
$string['recui_loopback'] = 'Bucle de retorno';
$string['recui_nothingtosaveerror'] = 'Nada se capturó. Lo siento ... nada para subir.';
$string['recui_off'] = 'Apagado';
$string['recui_ok'] = 'OK';
$string['recui_on'] = 'Encendido';
$string['recui_openrecorderapp'] = 'App PoodLL';
$string['recui_pause'] = 'Pausa';
$string['recui_play'] = 'Reproducir';
$string['recui_record'] = 'Grabar';
$string['recui_recordorchoose'] = 'Grabar o Elegir';
$string['recui_save'] = 'Subir';
$string['recui_silencelevel'] = 'Nivel de Silencio';
$string['recui_stop'] = 'Detener';
$string['recui_takesnapshot'] = 'Tomar Foto';
$string['recui_time'] = 'Tiempo:';
$string['recui_timeouterror'] = 'Se agotó la solicitud. Lástima.';
$string['recui_uploadafile'] = 'Subir Archivo';
$string['recui_uploaderror'] = 'Ocurrió un error y su archivo NO ha sido subido.';
$string['recui_uploading'] = 'subiendo';
$string['recui_uploadsuccess'] = 'Subida exitosamente';
$string['registrationkey'] = 'Clave de registro';
$string['registrationkey_explanation'] = 'Escriba aquí su clave de registro de PoodLL. . Usted puede obtener una clave desde <a href=\'https://poodll.com/poodll-3-2\'>https://poodll.com/poodll-3-2</a>';
$string['serverhttpport'] = 'Puerto Servidor PoodLL (HTTP)';
$string['serverid'] = 'ID Servidor PoodLL';
$string['servername'] = 'Dirección Host PoodLL';
$string['serverport'] = 'Puerto Servidor PoodLL (RTMP)';
$string['settings'] = 'Configuraciones Filtro PoodLL';
$string['showdownloadicon'] = 'Mostrar ícono de descarga debajo de reproductores';
$string['showdownloadicon_desc'] = '(Esto actualmente no está implementado en reproductores de audio/video Poodll3 pero estará en una versión próxima futura)';
$string['sitedefault'] = 'Valores por defecto del sitio';
$string['size'] = 'Tamaño';
$string['studentcam'] = 'Nombre preferido de dispositivo para cámara';
$string['studentmic'] = 'Nombre preferido de dispositivo para micrófono';
$string['supportinfo'] = 'Información de Soporte';
$string['template'] = 'El cuerpo de la plantilla {$a}';
$string['templatealternate'] = 'Plantilla de contenido alterno {$a})';
$string['templatealternate_desc'] = 'Contenido que puede usarse cuando no están disponibles CSS personalizado ni contenido JavaScript. Actualmente esto es usado cuando la plantilla es procesada por un servicio web, probablemente para contenido en la App mobile';
$string['templatealternate_end'] = 'Fin de contenido alterno (plantilla {$a})';
$string['templatealternate_end_desc'] = 'Marcas (tags) de cierre de contenido alterno para plantillas que enuelven contenido del usuario con marcas (tags) PoodLL de inicio y cierre';
$string['templatecount'] = 'Número de Plantillas';
$string['templatecount_desc'] = 'El número de plantillas que Usted tiene. el valor por defecto es de 20.';
$string['templatedefaults'] = 'variable por defecto (plantilla{$a})';
$string['templatedefaults_desc'] = 'Defina los valores por defecto en conjuntos delimitados por comas de parejas de nombre=valor. Por ejemplo width=800,height=900,feeling=joy';
$string['template_desc'] = 'Ponga la plantilla aquí; defina variables al roderlas con marcas @@ en ambos extremos; por ejemplo @@variable@@';
$string['templateend'] = 'Marcar (tags) finales (plantilla {$a})';
$string['templateend_desc'] = 'Si su plantilla incluye contenido del usuario, como por ejemplo una caja de información, ponga las marcas (tags) finales aquí. el usuario escribirá algo así como {POODLL:mytag_end} para finalizar el filtro.';
$string['templateheading'] = 'Configuraciones para Plantilla PoodLL {$a}';
$string['templateheadingcss'] = 'Configuraciones CSS/Estilo.';
$string['templateheadingjs'] = 'Configuraciones JavaScript.';
$string['templateinstructions'] = 'Instrucciones (plantilla {$a})';
$string['templateinstructions_desc'] = 'Las instrucciones ingresadas aquí serán mostradas en el formato PoodLL Atto si esta plantilla está disponible para mostrarse aquí. Hágalo cortito o se verá feo.';
$string['templatekey'] = 'La clave que identifica plantilla {$a}';
$string['templatekey_desc'] = 'La clave debería de ser una palabra y solamente contener números y letras, guión _bajo, guiones y puntos.';
$string['templatename'] = 'El nombre a mostrar para la plantilla {$a}';
$string['templatename_desc'] = 'El nombre puede contener números y letras, guión_bajo, guiónes y puntos.';
$string['templatepageheading'] = '(T): {$a}';
$string['templatepageplayerheading'] = '(P): {$a}';
$string['templatepagewidgetheading'] = '(W): {$a}';
$string['templaterequire_amd'] = 'Cargar mediante AMD';
$string['templaterequire_amd_desc'] = 'AMD es un mecanismo para cargar JavaScript. Si Usted sube o enlaza a librerías JavaScript en su plantilla, Usted podría tener que desactivar esto. Solamente aplica si es Moodle 2.9 o superior.';
$string['templaterequire_css'] = 'Requiere CSS (plantilla {$a})';
$string['templaterequire_css_desc'] = 'Un enlace (1 solamente) hacia un archivo CSS externo que esta plantilla necesita. Opcional.';
$string['templaterequire_jquery'] = 'Requiere JQuery (plantilla{$a})';
$string['templaterequire_jquery_desc'] = 'Lo mejor es NO activar esto. Muchas plantillas que no son AMD requieren JQuery. El activar aquí cargará JQuery, pero no muy bien. Su tema es posible que ya haya cargado JQuery de cualquier forma. Si no fuera así, añada esta cadena de caracteres a Administración del sitio -> Apariencia -> HTML adicional (dentro de HEAD):<br/> <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>';
$string['templaterequire_js'] = 'Requiere JS (plantilla{$a})';
$string['templaterequire_js_desc'] = 'Un enlace (1 solamente) hacia un archivo JS externo que esta plantilla necesita. Opcional.';
$string['templaterequire_js_shim'] = 'Cuña para Exportar (plantilla {$a})';
$string['templaterequire_js_shim_desc'] = 'Escriba el valor de la cuña de exportación si y SOLAMENTE SI Usted necesita acuñar.';
$string['templates'] = 'Plantillas';
$string['templatescript'] = 'JS personalizado (plantilla {$a})';
$string['templatescript_desc'] = 'Si su plantilla necesita correr JavaScript personalizado, ingréselo aquí. Será ejecutado una vez que todos los elementos se hayan cargado en la página.';
$string['template_showatto'] = 'Mostrar en Atto (plantilla {$a})';
$string['template_showatto_desc'] = 'Mostrar un botón y formato para este widget en el diálogo de Widgets PoodLL para Atto.';
$string['template_showplayers'] = 'Mostrar en lista de reproductores (plantilla {$a})';
$string['template_showplayers_desc'] = 'Mostrar en la lista desplegable de reproductores disponibles a ser asociados con una extensión de archivo.';
$string['templatestyle'] = 'CSS personalizado  (plantilla {$a})';
$string['templatestyle_desc'] = 'Escriba aquí cualquier CSS personalizado que use su plantilla. Las variables de plantilla no funcionarán aquí. Solamente CSS simple y plano.';
$string['templateversion'] = 'La versión de esta plantilla {$a}';
$string['templateversion_desc'] = 'Al compartir plantillas, es mejor mantener una versión clara por cada versión liberada. El formato de la versión es elección de Usted.';
$string['tiny'] = 'Chiquito';
$string['transcode_heading'] = 'Configuraciones para Conversión de Archivo de Audio/Video';
$string['transcode_heading_desc'] = 'Las configuraciones en esta sección son para FFMPEG y RED5, y no aplican cuando se usa grabación en la nube.';
$string['type'] = 'Tipo';
$string['unregistered'] = 'PoodLL no se mostró debido a que no ha sido registrado. Pídale a su profesor/administrador que registre PoodLL en PoodLL.com..';
$string['uploadkey'] = 'Clave de subir';
$string['uploadkey_desc'] = 'La grabación PoodLL en la nube requiere una clave para subir para grabar. Usted debería de recibir ésta cuando se apunte/inscriba/registre  a PoodLL. Ingrese la clave para subir aquí.';
$string['uploadsecret'] = 'Secreto de subir';
$string['uploadsecret_desc'] = 'La grabación PoodLL en la nube requiere un secreto para subir para grabar. Usted debería de recibir éste cuando se apunte/inscriba/registre  a PoodLL. Ingrese el secreto para subir aquí.';
$string['usecloudnotifications'] = 'Notificaciones de la nube';
$string['usecloudnotifications_desc'] = 'Notificaciones de la nube PoodLL. Esto permite notificación instantánea de que la transcodificación en la nube está completa.';
$string['usecloudrecording'] = 'Grabación en la nube';
$string['usecloudrecording_desc'] = 'Grabación PoodLL en la nube. Esto habilita transcodificación y otros servicios en la nube. La App iOS PoodLL requiere esto, y también las grabadoras de audio y video HTML5. Los archivos grabados no están alojados en la nube.';
$string['useplayer'] = 'Reproductor {$a}';
$string['useplayerdesc'] = 'El reproductor seleccionado usará la información de la plantilla apropiada.';
$string['value'] = 'valorar';
$string['videotranscode'] = 'Auto Conv. a MP4';
$string['videotranscodedetails'] = 'Automáticamente convierte archivo de video grabado a formato MP4 antes de copiar de regreso a Moodle. Usar solamente cuando  use servidor tokyo.poodll.com.';
$string['wboardautosave'] = 'Autoguardar (milisegundos)';
$string['wboardautosave_details'] = 'Guarda el dibujo cuando el usuario ha pausado al dibujar después de X milisegundos. 0 = sin autoguardar';
$string['wboardheight'] = 'Altura Pizarrón';
$string['wboardwidth'] = 'Ancho Pizarrón';
$string['whiteboardsave'] = 'Guardar imagen';
$string['widgetsettings'] = 'Configuraciones de Widget';
$string['widgettype'] = 'chunche (widget)';
