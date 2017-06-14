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
 * Strings for component 'block_coupon', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   block_coupon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:coupon:delete'] = 'Eliminar cupón';
$string['action:coupon:delete:confirm'] = '¿Está Usted seguro de querer eliminar este cupón? ¡Esto no puede deshacerse!';
$string['action:error:delete'] = 'Eliminar error';
$string['and'] = 'y';
$string['blockname'] = 'Cupón';
$string['button:next'] = 'Siguiente';
$string['button:save'] = 'Generar Cupones';
$string['button:submit_coupon_code'] = 'Enviar Cupón';
$string['cohort'] = 'cohorte';
$string['confirm_coupons_sent_body'] = 'Hola,<br /><br />

Queremos informarle que todos los cupones creados por Usted en {$a->timecreated} han sido enviados.<br /><br />

Atentamente,<br /><br />

Administrador de Moodle';
$string['confirm_coupons_sent_subject'] = 'Todos los Cupones han sido enviados';
$string['coupon:addinstance'] = 'Añadir un nuevo bloque de Cupón';
$string['coupon:administration'] = 'Administrar el bloque de Cupón';
$string['coupon:claim:wronguser'] = 'Este cupón personalizado <i>not</i> no es suyo para redimirlo';
$string['coupon:cleanup:heading'] = 'Limpiar Cupones';
$string['coupon:cleanup:info'] = 'Use este formato para configurar cupones para eliminar del sistema.<br/>
<b>Advertencia:</b> Este proceso <i>eliminará</i> cupones del sistema; no hay manera de regresarlos cuando se haya completado el proceso de limpieza';
$string['coupon:deleted'] = 'El cupón ha sido eliminado';
$string['coupon:extendenrol'] = 'Cupones para Extensión de la Inscripción';
$string['coupon:extendenrolments'] = 'Generar cupones para extender inscripciones a curso';
$string['coupon:extenrol:summary'] = 'Tipo de cupón: {$a->coupontype}<br/>
Cantidad de cupones a generar: {$a->amount}<br/>
Fondo usado para generar cupón(es): {$a->logo}<br/>
Cupones generados por: {$a->owner}<br/>
Cursos(s) selccionado(s): {$a->courses}<br/>
Período de extensión: {$a->duration}<br/>
Enviar cupón(es) en: {$a->senddate}<br/>
Enviar cupón(es) a: {$a->recipient}<br/><br/>
Cuerpo del Email: {$a->emailbody}<br/>';
$string['coupon:generatecoupons'] = 'Generar un nuevo cupón';
$string['coupon:inputcoupons'] = 'Usar un cupón para suscribirse';
$string['coupon_mail_content'] = 'Estimado/a {$a->to_name},<br /><br />

Usted está recibbiendo este mensaje porque han habido nuevos cupones generados. Los cupones han sido añadidos en el anexo de este mensaje.<br /><br />

Atentamente,<br /><br />

{$a->from_name}';
$string['coupon_mail_csv_content'] = 'Estimado/a ##to_gender## ##to_name##,<br /><br />

Usted ha sido recientemente inscrito para nuestro curso de ##course_fullnames##.
Por la ducración del curso, Usted tiene acceso a nuestro Entorno de Aprendizaje En-líneaD: ##site_name##.<br /><br />

En este entorno, además de los materiales del curso, Usted tendrá la posibilidad de trabajar en red con sus sompañeros estuadiantes.
El curso iniciará con varias tareas para preparación y amablemente le solcitamos que las vea a más tardar 3 días hábiles antes del inicio del curso. Tanto Usted como el profesor pueden entonces prepararse apropiadamente para el curso.<br /><br />

Todos los materiales del curso serán accesibles para Usted, como máximo hasta 4 días antes del inicio del curso.
Siempre es posible que el profesor solicite que se añada material adicional en una fecha posterior, por ejemplo, después de una sesión presencial. Si esto sucediera, Usted podrá ver esto en el entorno de aprendizaje. Durante las reuniones Usted no recibirá ningun materialimpreso; le sugerimos que traiga una laptop o tableta.<br /><br />

Usted encontrará anexo a este mensaje el cupón para entrar al al curso. Este cupón es único y personal, y le da acceso a los cursos apropiados para su educación.
Por favor, lea cuidadosamente las instrucciones dentro del cupón.<br /><br />

Si tuviera alguna pregunta con respecto a la creación de la cuenta o si encontrara algun problema, Usted puede contactar a la mesa de ayuda. La información puede encontrase en nuestro entorno de aprendizaje.
Si no encontarar a alguien para responder a sus preguntas, por favor deje su nombre, dirección Email y número de teléfono y nosotros nos comunicaremos tan pronto nos sea posible.<br /><br />

Le deseamos buena suerte en su curso.<br /><br />

Atentamente,<br /><br />

##site_name##';
$string['coupon_mail_csv_content_cohorts'] = 'Estimado/a ##to_gender## ##to_name##,<br /><br />

Usted ha sido recientemente inscrito para nuestro curso de ##course_fullnames##.
Por la ducración del curso, Usted tiene acceso a nuestro Entorno de Aprendizaje En-líneaD: ##site_name##.<br /><br />

En este entorno, además de los materiales del curso, Usted tendrá la posibilidad de trabajar en red con sus sompañeros estuadiantes.
El curso iniciará con varias tareas para preparación y amablemente le solcitamos que las vea a más tardar 3 días hábiles antes del inicio del curso. Tanto Usted como el profesor pueden entonces prepararse apropiadamente para el curso.<br /><br />

Todos los materiales del curso serán accesibles para Usted, como máximo hasta 4 días antes del inicio del curso.
Siempre es posible que el profesor solicite que se añada material adicional en una fecha posterior, por ejemplo, después de una sesión presencial. Si esto sucediera, Usted podrá ver esto en el entorno de aprendizaje. Durante las reuniones Usted no recibirá ningun materialimpreso; le sugerimos que traiga una laptop o tableta.<br /><br />

Usted encontrará anexo a este mensaje el cupón para entrar al al curso. Este cupón es único y personal, y le da acceso a los cursos apropiados para su educación.
Por favor, lea cuidadosamente las instrucciones dentro del cupón.<br /><br />

Si tuviera alguna pregunta con respecto a la creación de la cuenta o si encontrara algun problema, Usted puede contactar a la mesa de ayuda. La información puede encontrase en nuestro entorno de aprendizaje.
Si no encontarar a alguien para responder a sus preguntas, por favor deje su nombre, dirección Email y número de teléfono y nosotros nos comunicaremos tan pronto nos sea posible.<br /><br />

Le deseamos buena suerte en su curso.<br /><br />

Atentamente,<br /><br />

##site_name##';
$string['coupon_mail_extend_content'] = 'Estimado/a ##to_gender## ##to_name##,<br /><br />

Usted ha sido inscrito para nuestro entrenamiento en el curso ##course_fullnames## y se le ha otorgado una extensión.
Usted ya tiene acceso a nuestro Entorno para Aprendizaje en Línea: ##site_name##.<br /><br />
Su extensión es por  ##extensionperiod##.<br /><br />

Usted encontrará anexo el cupón para exxtender el acceso al curso. Este cupón es único y personal, y extiende el acceso a los cursos apropiados para su actualización.
Por favor, lea cuidadosamente las instrucciones en el cupón.<br /><br />

Si tuviera alguna pregunta con respecto a algun problema, usted puede contactar a la mesa de ayuda.
La información puede encontrase en nuestro Entorno de Aprendizaje.
Cuando nadie estuviera disponible para contestar sus preguntas, por favor deje su nombre, dirección email y número telefónico y nosotros lo contactaremos en cuanto nos sea posible.<br /><br />

Atentamente,<br /><br />

##site_name##';
$string['coupon_mail_subject'] = 'Cupón Moodle generado';
$string['coupon:myaddinstance'] = 'Añadir un nuevo bloque de Cupón a la página de Mi Moodle';
$string['coupon_recipients_desc'] = 'Es necesario que las siguientes columnas estén presentes en el archivo CSV subido, sin importar el orden: E-mail, Gender, Name. (E-mail, Género, Nombre)<br/>
Para cada persona en el CSV, se generará un cupón y se mandará por Email al usuario.<br/>
Por favor, tome nota de que estos cupones serán creados de forma a-sincrónica por una tarea ejecutándose en segundo plano; <i>no</i> instantáneamente.
Esto es debido a que el proceso de generar los cupones puede ser bastante tardado, especialmente para una gran cantidad de usuarios.';
$string['coupon:senddate:instant'] = 'Instantáneo';
$string['coupon:send:fail'] = '¡Falló el envío de Email! Razón: {$a}';
$string['coupons_ready_to_send'] = 'Su(s) cupón(es) ha(n) sido generado(s) y será(n) enviado(s) en la fecha escrita.<br />
Usted recibirá un mensaje Email de confirmación cuando todos los cupones hayan sido enviados.';
$string['coupons_sent'] = 'Sus cupones han sido generados. Dentro de algunos minutos Usted recibirá un Email con los Cupones anexados.';
$string['coupon:timeframe'] = 'Tipo';
$string['coupon:type'] = 'Tipo';
$string['coupon:type:all'] = 'Todos';
$string['coupon:type:cohort'] = 'Inscripción de cohorte';
$string['coupon:type:course'] = 'Inscripción a curso';
$string['coupon:type:enrolext'] = 'Extensión de inscripción';
$string['coupon:used'] = 'Remoción';
$string['coupon:used:all'] = 'Todos los cupones';
$string['coupon:used:no'] = 'Solamente cupones no usados';
$string['coupon:used:yes'] = 'Solamente cupones usados';
$string['coupon:viewallreports'] = 'Ver reportes de Cupón (para todos los cupones)';
$string['coupon:viewreports'] = 'Ver reportes de Cupón (para mis cupones)';
$string['course'] = 'curso';
$string['days_access'] = '{$a} días de';
$string['default-coupon-page-template-botleft'] = '<ol>
<li>Apúntese en {site_url}</li>
<li>Usted recibirá un Email con la URL de confirmación. Haga click en la URLpara activar su cuenta.</li>
<li>Escriba el código de su cupón en el bloque del Cupón Moodle</li>
<li>¡Feliz Aprendizaje!</li>
</ol>';
$string['default-coupon-page-template-botright'] = '<ol>
<li>Ingrese a {site_url}</li>
<li>Escriba el código de su cupón en el bloque del Cupón Moodle</li>
<li>¡Feliz Aprendizaje!</li>
</ol>';
$string['default-coupon-page-template-main'] = 'Con este cupón Usted puede activar el acceso al módulo de e-aprendizaje. Usted tiene  {accesstime}  de acceso a este módulo.

Por favor use el siguiente código de cupón para activar el acceso.

{coupon_code}';
$string['download-sample-csv'] = 'Descargar archivo CSV de ejemplo';
$string['enrolperiod:extension'] = 'por la duración de {$a}';
$string['enrolperiod:indefinite'] = '<i>Indefinido</i>';
$string['error:alternative_email_invalid'] = 'Si Usted ha seleccionado \'usar Email alterno\' este campo debería contener una dirección Email válida.';
$string['error:alternative_email_required'] = 'Si Usted ha seleccionado \'usar Email alterno\' este campo es necesario.';
$string['error:cohort_sync'] = 'Ocurrió un error al tratar de sincronizar los cohortes. Por favor contacte a soporte.';
$string['error:coupon_already_used'] = 'El cupón con este código ya ha sido usado previamente.';
$string['error:coupon_amount-recipients-both-set'] = 'Por favor, especifique un número de cupones a generar O una lista CSV de destinatarios.';
$string['error:coupon_amount-recipients-both-unset'] = 'Se debe configurar este campo O el campo de Destinatarios.';
$string['error:coupon_amount_too_high'] = 'Por favor, escriba una cantidad entre {$a->min} y {$a->max}.';
$string['error:coupon_reserved'] = 'El cupón con este código ha sido reservado para otro usuario';
$string['error:course-coupons-not-copied'] = 'Ocurrió un error al tratar de copiar coupon-courses a la nueva tabla de coupon_courses. Por favor contacte a soporte.';
$string['error:course-not-found'] = 'No pudo encontrarse el curso';
$string['error:invalid_coupon_code'] = 'Usted ha escrito un código inválido de cupón';
$string['error:invalid_email'] = 'Por favor escriba una dirección Email válida.';
$string['error:missing_cohort'] = 'El/los cohorte(s) enlazado(s) a este cupón no existe(n) más. Por favor contacte a soporte.';
$string['error:missing_course'] = 'El curso enlazado a este cupón no existe más. Por favor contacte a soporte.';
$string['error:missing_group'] = 'El/los grupo(s) enlazado(s) a este cupón no existe(n) más. Por favor contacte a soporte.';
$string['error:moodledata_not_writable'] = 'Su carpeta moodledata/coupon_logos no es escribible. Por favor corrija sus permisos.';
$string['error:no_coupons_submitted'] = 'Todavía no se ha usado ninguno de sus cupones.';
$string['error:nopermission'] = 'Usted no tiene permiso para hacer esto';
$string['error:numeric_only'] = 'Este campo debe de ser numérico.';
$string['error:plugin_disabled'] = 'El plugin cohort_sync ha sido deshabilitado. Por favor contacte a soporte.';
$string['error:recipients-columns-missing'] = 'El archivo no pudo ser validado. ¿Está Usted seguro de que escribió las columnas y los separadores correctos?';
$string['error:recipients-email-invalid'] = 'La dirección de Email {$a->email} es inválida. Por favor corríjala en el archivo CSV.';
$string['error:recipients-empty'] = 'Por fabvor ponga al menos un usuario.';
$string['error:recipients-extension'] = 'Usted solamente puede subir archivos .CSV';
$string['error:recipients-invalid'] = 'El archivo no pudo ser validado. ¿Está Usted seguro de que escribió las columnas y los separadores correctos?';
$string['error:recipients-max-exceeded'] = 'Su archivo CSV ha excedido el máximo de 10000 usuarios de cupón. Por favor limítelo.';
$string['error:required'] = 'Este campo es obligatorio.';
$string['error:sessions-expired'] = 'Su sesión ha caducado. Por favor inténtelo de nuevo.';
$string['error:unable_to_enrol'] = 'Ocurrió un eror al tratar de inscribirlo a Usted en elcurso nuevo. Por favor contacte a soporte.';
$string['error:validate-courses'] = 'Errores de validación del cursos:
{$a}';
$string['error:wrong_code_length'] = 'Por favor escriba un número entre 6 y 32.';
$string['error:wrong_doc_page'] = 'Usted está tratando de acceder a una página que no existe.';
$string['error:wrong_image_size'] = 'El fondo subido no tiene el tamaño requerido. Por favor, suba una imagen con una proporción de 210 mm por 297 mm.';
$string['extendaccess'] = '{$a} extra';
$string['extendenrol:abort-no-users'] = 'Error: no se encontraron usuarios a los que se les pudiera extender la inscripción<br/>
Es posible que los usuarios estén inscritos por tiempo indefinido o que no se encontraron usuarios para este/estos curso(s).';
$string['heading:administration'] = 'Gestionar';
$string['heading:amountForm'] = 'Configuracuiones de Cantidad';
$string['heading:coupon_type'] = 'Tipo de cupón';
$string['heading:csvForm'] = 'Configuraciones CSV';
$string['heading:general_settings'] = 'Últimas configuraciones';
$string['heading:generatecoupons'] = 'Generar cupones';
$string['heading:imageupload'] = 'Subir imagen';
$string['heading:info'] = 'Información';
$string['heading:input_cohorts'] = 'Seleccionar cohortes';
$string['heading:input_coupon'] = 'Ingresar cupón';
$string['heading:inputcoupons'] = 'Ingresar cupón';
$string['heading:input_course'] = 'sleccionar curso';
$string['heading:input_groups'] = 'Seleccionar grupos';
$string['heading:label_instructions'] = 'Instrucciones';
$string['heading:manualForm'] = 'Configuraciones manuales';
$string['label:alternative_email'] = 'Email alterno';
$string['label:alternative_email_help'] = 'Mandar por defecto los cupones a esta dirección Email.';
$string['label:api_enabled'] = 'Habilitar API';
$string['label:api_enabled_desc'] = 'La API del cupón otorga la posibilidad de generar cupones desde un sistema externo.';
$string['label:api_password'] = 'Contraseña API';
$string['label:api_password_desc'] = 'La contraseña que puede ser usada para generar un cupón usando la API.';
$string['label:api_user'] = 'Usuario API';
$string['label:api_user_desc'] = 'El nombre_De_usuario que puede ser usado para generar un cupón usando la API.';
$string['label:cleanupage'] = '¿Antiguedad máxima?';
$string['label:cleanupage_help'] = 'Escriba la antiguedad máxima de un cupón no-usado antes de que sea removido';
$string['label:cohort'] = 'Cohorte';
$string['label:connected_courses'] = 'Curso(s) conectado(s)';
$string['label:coupon_amount'] = 'Cantidad de cupones';
$string['label:coupon_amount_help'] = 'Esta es la cantidad de cupones que serán generados. Por favor use este campo O el campo de destinatarios, pero no use ambos.';
$string['label:coupon_code'] = 'Código del Cupón';
$string['label:coupon_code_help'] = 'El código del cupón es el código único que está ligado a cada cupón individual. Usted puede encontrar este código en su cupón.';
$string['label:coupon_code_length'] = 'Longitud del código';
$string['label:coupon_code_length_desc'] = 'Cantidad de caracteres del código del cupón.';
$string['label:coupon_cohorts'] = 'Cohorte(s)';
$string['label:coupon_cohorts_help'] = 'Selccione una o más cohortes a las que se inscribirán sus usuarios.';
$string['label:coupon_connect_course'] = 'Añadir curso(s)';
$string['label:coupon_connect_course_help'] = 'Seleccione todos los cursos que desea añadir a la cohorte.
<br /><b><i>Nota: </i></b>¡Todos los usuarios que ya estuvieran inscritos en esta cohorte también serán inscritos a los cursos seleccionados!';
$string['label:coupon_courses'] = 'Curso(s)';
$string['label:coupon_courses_help'] = 'Seleccione los cursos a donde serán inscritos sus usuarios.';
$string['label:coupon_email'] = 'Dirección Email';
$string['label:coupon_email_help'] = 'Esta es la dirección a donde se enviarán los cupones generados.';
$string['label:coupon_groups'] = 'Añadir grupo(s)';
$string['label:coupon_groups_help'] = 'Selecione los grupos en los que Usted quiere que sean inscritos sus usuarios al inscribirlos a los cursos.';
$string['label:coupon_recipients'] = 'Destinatarios';
$string['label:coupon_recipients_help'] = 'Con este campo Usted puede subir un archivo CSV son usuarios.';
$string['label:coupon_recipients_txt'] = 'Destinatarios';
$string['label:coupon_recipients_txt_help'] = 'En este campo Usted puede hacer sus cambios finales al archivo CSV subido.';
$string['label:coupon_type'] = 'Generar basándose en';
$string['label:coupon_type_help'] = 'Los cupones serán generados basándose, ya sea en el curso o en uno o más cohortes.';
$string['label:current_image'] = 'Fondo actual del cupón';
$string['label:date_send_coupons'] = 'Fecha de envío';
$string['label:date_send_coupons_help'] = 'Fecha en la que los cupones serán enviados a los destinatarios.';
$string['label:defaultrole'] = 'Rol por defecto';
$string['label:defaultrole_help'] = 'Este será el rol por defecto al cual serán asignados los usuarios cuando canjeen su cupón';
$string['label:email_body'] = 'Mensaje Email';
$string['label:email_body_help'] = 'El mensaje Email que será enviado a los destinatarios de los cupones.';
$string['label:enablecleanup'] = '¿Habilitar limpieza de cupones no-usados?';
$string['label:enablecleanup_help'] = 'Activar esta opción para limpiar (remover) cupones no-usados';
$string['label:enrolment_period'] = 'Período de inscripción';
$string['label:enrolment_period_help'] = 'Período en días que el usuario estará inscrito en los cursos. Si se configura a 0 no habrá fecha de término.';
$string['label:enter_coupon_code'] = 'Por favor escriba aquí su código del cupón';
$string['label:extendperiod'] = 'Período de extensión de inscripción';
$string['label:extendperiod:desc'] = 'Configurar debajo el período opcional de extensión. Si <i>no</i> estuviera habilitado o estuviera configurado a 0, la inscripción se volverá inscripción indefinida';
$string['label:extendusers:desc'] = 'Seleccionar debajo uno o más usuarios.<br/>
Usted solamente verá usuarios que tengan inscripción <i>manual</i>y que tengan la fecha de término configurada en sus inscripciones.';
$string['label:generate_pdfs'] = 'Generar PDFs separados';
$string['label:generate_pdfs_help'] = 'Usted puede seleccionar aquí si quiere recibir sus cupones como un solo archivo  o si prefiere cada cupón dentro de un archivo PDF separado.';
$string['label:image'] = 'Fondo del cupón';
$string['label:image_desc'] = 'Fondo a colocarse en los cupones generados';
$string['label:info_coupon_cohort_courses'] = 'Información en la página: Cursos de cohortes';
$string['label:info_coupon_cohorts'] = 'Información en la página: Seleccionar cohortes';
$string['label:info_coupon_confirm'] = 'Información en la página: Confirmar cupón';
$string['label:info_coupon_course'] = 'Información en la página:  Seleccionar curso';
$string['label:info_coupon_course_groups'] = 'Información en la página: Seleccionar grupos del curso';
$string['label:info_coupon_type'] = 'Información en la página: Seleccionar tipo de cupón';
$string['label:info_desc'] = 'La información mostrada arriba del formato.';
$string['label:info_imageupload'] = 'Información en la página: Subir imagen';
$string['label:mailusers'] = 'Enviar cupones por Email a participantes seleccionados del curso.';
$string['label:max_coupons'] = 'Máximo de cupones';
$string['label:max_coupons_desc'] = 'Cantidad de cupones que pueden crearse en una ocasión.';
$string['label:no_courses_connected'] = 'No hay cursos conectados a esta cohorte';
$string['label:no_groups_selected'] = 'Todavía no hay grupos conectados a estos cursos.';
$string['label:redirect_url'] = 'URL redirección';
$string['label:redirect_url_help'] = 'El destino a donde serán enviados los usuarios después de que escriban sus códigos de cupones.';
$string['label:selected_cohort'] = 'Cohorte(s) seleccionada(s)';
$string['label:selected_courses'] = 'Cursos seleccionados';
$string['label:selected_groups'] = 'Grupo(s) seleccionado(s)';
$string['label:showform'] = 'Opciones del generador';
$string['label:type_cohorts'] = 'Cohorte(s)';
$string['label:type_course'] = 'Curso';
$string['label:use_alternative_email'] = 'Usar Email alterno';
$string['label:use_alternative_email_help'] = 'Cuando se activa, usará por defecto la dirección Email proporcionada en el campo de Email alterno.';
$string['label:users'] = 'Usuario(s)';
$string['logo:default'] = 'Logo por defecto';
$string['logomanager:desc'] = 'Use el gestor de logos inferior para gestionar los logos que pueden usarse en los PDFs de los cupones.<br/>
¡Tenga cuidado con los tipos de imágenes que Usted suba!<br/>
Usted solamente <i>debe</i> de usar imágenes de 300 DPI en el formato europeo A4 (2480 x 3508 pixeles).<br/>
<i>Cualquier</i> otro tamaño de imagen probablemente conducirá a efectos secundarios indeseados.';
$string['logo:none'] = 'No usar un logo';
$string['missing_config_info'] = 'Ponga aquí su información adicional - a ser configurada en la configuración global del bloque.';
$string['page:generate_coupon.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_five.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_four.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_three.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_two.php:title'] = 'Generar cupones';
$string['page:unused_coupons.php:title'] = 'Cupones no-usados';
$string['pdf_generated'] = 'Los cupones han sido anexados a este Email como archivos PDF.<br /><br />';
$string['pdf-meta:keywords'] = 'Cupón Moodle';
$string['pdf-meta:subject'] = 'Cupón Moodle';
$string['pdf-meta:title'] = 'Cupón Moodle';
$string['pdf:titlename'] = 'Cupón Moodle';
$string['pluginname'] = 'Cupón';
$string['promo'] = 'Plugin de Cupón para Moodle';
$string['promodesc'] = 'Este plugin fue escrito por Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['recipient:none'] = 'Nada/ninguno';
$string['recipient:selected:users'] = 'Usuarios seleccionados';
$string['report:cohorts'] = 'Cohorte';
$string['report:coupon_code'] = 'Código de suscripción';
$string['report:dateformat'] = '%d-%m-%Y %H:%M:%S';
$string['report:dateformatymd'] = '%d-%m-%Y';
$string['report:download-excel'] = 'Descargar cupones no-usados';
$string['report:enrolperiod'] = 'Propietario';
$string['report:for_user_email'] = 'Planeado para';
$string['report:for_user_name'] = 'Nombre del beneficiario';
$string['report:heading:action'] = 'Acción(es)';
$string['report:heading:cohortname'] = 'Cohorte(s)';
$string['report:heading:coupon'] = 'Cupón';
$string['report:heading:coursename'] = 'Nombre del curso';
$string['report:heading:coursetype'] = 'Tipo del curso';
$string['report:heading:datecomplete'] = 'Fecha de terminación';
$string['report:heading:datestart'] = 'Fecha de inicio';
$string['report:heading:errormessage'] = 'Error';
$string['report:heading:errortype'] = 'Tipo';
$string['report:heading:grade'] = 'Calificación';
$string['report:heading:status'] = 'Estatus';
$string['report:heading:timecreated'] = 'Fecha';
$string['report:heading:type'] = 'Tipo';
$string['report:heading:user'] = 'Usuario';
$string['report:immediately'] = 'Inmediatamente';
$string['report:issend'] = 'Está enviado';
$string['report:owner'] = 'Propietario';
$string['report:senddate'] = 'fecha de envío';
$string['report:status_completed'] = 'Curso completado';
$string['report:status_not_started'] = 'Cuarso todavía no iniciado';
$string['report:status_started'] = 'Curso iniciado';
$string['report:timeexpired'] = 'Caducidad';
$string['select:logo'] = 'Seleccionar logo de plantilla';
$string['select:logo:desc'] = 'Seleccionar un logo de plantilla.<br/>Esto solamente será usado cuando un PDF será generado por cupones.';
$string['showform-amount'] = 'Quiero crear un número arbitrario de cupones';
$string['showform-csv'] = 'Quiero crear cupones usando un CSV con destinatarios';
$string['showform-manual'] = 'Quiero configurar manualmente los destinatarios';
$string['signup:login'] = 'Yo ya tengo una cuenta y quiero ingresar';
$string['signup:success'] = 'Usted ha sido apuntado y ahora será redirigido a la página para ingresar.<br/>
Por favor, valide que a Usted efectivamente se le ha concedido acceso al curso después de ingresar.';
$string['str:mandatory'] = 'Obligatorio';
$string['str:optional'] = 'Optativo';
$string['success:coupon_used'] = 'Cupón usado - Ahora puede Usted acceder al/a los curso(s)';
$string['success:uploadimage'] = 'Su nueva imagen del cupón ha sido subida.';
$string['tab:apidocs'] = 'Docs API';
$string['tab:cleaner'] = 'Limpieza';
$string['tab:errors'] = 'Reportes de error';
$string['tab:report'] = 'Reporte del progreso';
$string['tab:unused'] = 'Cupones no-usados';
$string['tab:used'] = 'Cupones usados';
$string['tab:wzcouponimage'] = 'Imagen de plantilla';
$string['tab:wzcoupons'] = 'Generar cupón(es)';
$string['task:cleanup'] = 'Limpieza de cupones antiguos no-usados';
$string['task:sendcoupons'] = 'Enviar cupones agendados';
$string['tasksettings'] = 'Configuraciones de tarea';
$string['tasksettings_desc'] = '';
$string['textsettings'] = 'Configuraciones del texto';
$string['textsettings_desc'] = 'Aquí puede Usted configurar textos personalizados a mostrarse por varias pantallas asistentes para el generador de cupones';
$string['th:action'] = 'Acción(es)';
$string['th:cohorts'] = 'Cohorte';
$string['th:course'] = 'Curso';
$string['th:enrolperiod'] = 'Periodo_de_inscripción';
$string['th:for_user_email'] = 'Planeado por';
$string['th:groups'] = 'grupo(s)';
$string['th:immediately'] = 'Inmediatamente';
$string['th:issend'] = '¿Enviados?';
$string['th:owner'] = 'Propietario';
$string['th:senddate'] = 'Fecha de envío';
$string['th:submission_code'] = 'Código de suscripción';
$string['timeafter'] = 'Creado después de';
$string['timebefore'] = 'Crado antes de';
$string['unlimited_access'] = 'ilimitado';
$string['url:api_docs'] = 'Documentación de API';
$string['url:couponsignup'] = 'Apuntarse con un código de cupón';
$string['url:generate_coupons'] = 'Generar Cupón';
$string['url:input_coupon'] = 'Ingresar Cupón';
$string['url:managelogos'] = 'Gestionar imágenes de cupón';
$string['url:uploadimage'] = 'Cambiar imagen del cupón';
$string['url:view_reports'] = 'Ver reportes';
$string['url:view_unused_coupons'] = 'Ver cupones no-usados';
$string['view:api_docs:heading'] = 'Documentación del API del Cupón';
$string['view:api_docs:title'] = 'Documentación del API del Cupón';
$string['view:api:heading'] = 'API del Cupón';
$string['view:api:title'] = 'API del Cupón';
$string['view:cleanup:heading'] = 'Limpiar cupones';
$string['view:cleanup:title'] = 'Limpiar cupones';
$string['view:errorreport:heading'] = 'Reporte - Errores de cupón';
$string['view:errorreport:title'] = 'Reporte - Errores de cupón';
$string['view:extendenrolment:heading'] = 'Cupón: extensiones de inscripción';
$string['view:extendenrolment_step1:heading'] = 'Extender inscripciones: seleccionar cursos(s)';
$string['view:extendenrolment_step1:title'] = 'Extender inscripciones: seleccionar cursos(s)';
$string['view:extendenrolment_step2:heading'] = 'Extender inscripciones: seleccionar usuario(s)';
$string['view:extendenrolment_step2:title'] = 'Extender inscripciones: seleccionar usuario(s)';
$string['view:extendenrolment_step3:heading'] = 'Extender inscripciones: confirmar';
$string['view:extendenrolment_step3:title'] = 'Extender inscripciones: confirmar';
$string['view:extendenrolment:title'] = 'Cupón: extensiones de inscripción';
$string['view:generate_coupon:heading'] = 'Generar Cupón';
$string['view:generate_coupon:title'] = 'Generar Cupón';
$string['view:input_coupon:heading'] = 'Ingresar Cupón';
$string['view:input_coupon:title'] = 'Ingresar Cupón';
$string['view:reports:heading'] = 'Reporte - Progreso basado en Cupones';
$string['view:reports:title'] = 'Reporte - Progreso basado en Cupones';
$string['view:reports-unused:heading'] = 'Reporte - Cupones no-usados';
$string['view:reports-unused:title'] = 'Reporte - Cupones no-usados';
$string['view:reports-used:heading'] = 'Reporte - Cupones usados';
$string['view:reports-used:title'] = 'Reporte - Cupones usados';
$string['view:uploadimage:heading'] = 'Subir un nuevo fondo del cupón';
$string['view:uploadimage:title'] = 'Subir fondo del cupón';
