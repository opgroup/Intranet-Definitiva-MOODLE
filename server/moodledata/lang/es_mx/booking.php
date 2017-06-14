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
 * Strings for component 'booking', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   booking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Actividad completada';
$string['activitycompletionsuccess'] = 'Todos los usuarios seleccionados han sido marcados para finalización de actividad';
$string['addcategory'] = 'Editar categorías';
$string['addeditbooking'] = 'Editar reservaciones';
$string['additionalfields'] = 'Campos adicionales';
$string['addmorebookings'] = 'Añadir más reservaciones';
$string['addnewbookingoption'] = 'Añadir una nueva opción de reservación';
$string['addnewcategory'] = 'Añadir nueva categoría';
$string['addnewinstitution'] = 'Añadir nueva institución';
$string['addnewoptiondates'] = 'Añadir/editar sesión';
$string['addnewtagtemplate'] = 'Añadir nueva plantilla de marcas (tags)';
$string['address'] = 'Dirección';
$string['addteachers'] = 'Añadir profesores';
$string['addtocalendar'] = 'Añadir al calendario';
$string['addtogroup'] = 'Inscribir automáticamente usuarios en grupo';
$string['addtogroup_help'] = 'Inscribir usuarios automáticamente al grupo - el grupo será creado automáticamente son el nombre de "Bookin name - Option name"';
$string['advancedoptions'] = 'Opciones avanzadas';
$string['agreetobookingpolicy'] = 'He leído y estoy de acuerdo con las siguientes políticas para reservaciones';
$string['allbookingoptions'] = 'Descargar usuarios para todas las opciones de reservaciones';
$string['allchangessave'] = 'Todos los cambios han sido guardados.';
$string['allmailssend'] = '¡ Se han enviado exitosamente todos los Emails a usuarios !';
$string['allowdelete'] = 'Permitirle a los usuarios cancelar sus reservaciones ellos mismos';
$string['allowupdate'] = 'Permitir que se actualicen reservaciones';
$string['answer'] = 'Respuesta';
$string['answered'] = 'Contestado';
$string['associatedcourse'] = 'Curso asociado';
$string['attachedfiles'] = 'Archivos anexos';
$string['attachical'] = 'Añadir eventos de iCal';
$string['attachicaldesc'] = 'Las notificaciones por Email incluirán un evento anexo iCal, si esto es habilitado';
$string['autoenrol'] = 'Inscribir usuarios automáticamente';
$string['autoenrol_help'] = 'Si se selecciona, los usuarios serán inscritos dentro del curso relevante tan pronto como hagan la reservación y serán des-inscritos del curso tan pronto como se cancele la reservación.';
$string['availability'] = 'Todavía disponible';
$string['available'] = 'Lugares disponibles';
$string['backtoresponses'] = '<< Regresar a respuestas';
$string['banusernames'] = 'Prohibir nombres_de_usuarios';
$string['banusernames_help'] = 'Para limitar cuales nombres_de_usuarios no pueden participar, simplemente escríbalos en este campo, separados por comas. Para prohibir los nombres_de_usuarios que terminan en gmail.com y yahoo.com, simplemente escriba: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Su nombre_de_usuario está prhibido, por lo que Usted no puede reservar.';
$string['booked'] = 'Reservado';
$string['bookedpast'] = 'Reservado (curso terminado)';
$string['bookedtext'] = 'Confirmación de reservación';
$string['bookedtext_help'] = 'Deje vacío esto para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesore ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR code con la ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
</ul>';
$string['bookedusers'] = 'Usuarios que reservaron';
$string['booking'] = 'Reservaciones';
$string['booking:addinstance'] = 'Añadir nueva reservación';
$string['bookingattachment'] = 'Anexo';
$string['bookingcategory'] = 'Categoría';
$string['booking:choose'] = 'Reservar';
$string['bookingclose'] = 'Hasta';
$string['booking:communicate'] = 'Puede comunicarse';
$string['bookingdeleted'] = 'Su reservación fue cancelada';
$string['booking:deleteresponses'] = 'Eliminar respuestas';
$string['booking:downloadresponses'] = 'Descargar respuestas';
$string['bookingduration'] = 'Duración';
$string['bookingfull'] = 'No hay lugares disponibles';
$string['bookingfulldidntregister'] = 'La opción está llena, ¡por eso no transferí a todos los usuarios!';
$string['bookingmanagererror'] = 'El nombre_de_usuario escrito no es válido. Puede ser que no exista o que haya más de un usuario con este nombre_de_usuario (por ejemplo, si Usted tiene habilitadas autenticaciones por Mnet y locales)';
$string['bookingmeanwhilefull'] = 'Mientras tanto, alguien tomó el último lugar disponible';
$string['bookingname'] = 'Nombre de reservación';
$string['bookingopen'] = 'Abierto';
$string['bookingoptionsmenu'] = 'Opciones de reservacion';
$string['bookingorganizatorname'] = 'Nombre del organizador';
$string['bookingpoints'] = 'Puntos del curso';
$string['bookingpolicy'] = 'Política de reservaciones';
$string['bookingpollurl'] = 'URL de encuesta';
$string['bookingpollurlteachers'] = 'URL de encuesta de profesor';
$string['booking:rate'] = 'Valorar opciones de reservación elegidas';
$string['booking:readallinstitutionusers'] = 'Mostrar todos los usuarios';
$string['booking:readresponses'] = 'Leer respuestas';
$string['bookingsaved'] = 'Su reservación fur guardada exitosamente. Usted puede ahora proceder a reservar otros cursos.';
$string['booking:sendpollurl'] = 'Enviar URL de encuesta';
$string['booking:sendpollurltoteachers'] = 'Mandar URL de encuesta a profesores';
$string['booking:subscribeusers'] = 'Hacer reservaciones para otros usuarios';
$string['bookingtags'] = 'Marcas (tags)';
$string['bookingtext'] = 'Texto de reservación';
$string['booking:updatebooking'] = 'Gestionar opciones de reservación';
$string['booking:viewallratings'] = 'Ver todas las valoraciones crudas dadas por individuos';
$string['booking:viewanyrating'] = 'Ver todas las valoraciones que cualquiera recibió';
$string['booking:viewrating'] = 'Ver todas las valoraciones que Usted recibió';
$string['booknow'] = 'Reservar ahora';
$string['bookotherusers'] = 'Reservar para otros usuarios';
$string['booktootherbooking'] = 'Reservar usuarios a otra reservación';
$string['btnbooknowname'] = 'Nombre del botón "Reservar ahorita"';
$string['btncacname'] = 'Nombre del botón "Confirmar finalización de actividad"';
$string['btncancelname'] = 'Nombre del botón "Cancelar reservación"';
$string['cancancelbook'] = '¿Permitirle al usuario cancelar o reservar su reservación cuando ya ha iniciado?';
$string['cancel'] = 'Cancelar';
$string['cancelbooking'] = 'Cancelar reservación';
$string['cannotremovesubscriber'] = 'Usted tiene que quitar la finalización de actividad antes de cancelar la reservación. ¡ La reservación NO fue cancelada !';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryname'] = 'Nombre de categoría';
$string['choosecourse'] = 'Elija un curso';
$string['closed'] = 'Reservaciones cerradas';
$string['completed'] = 'Completado';
$string['conectedbooking'] = 'Reservación conectada';
$string['conectedbooking_help'] = 'Opción de reservación elegible para transferir usuarios reservados. Usted puede definir desde cual opción y a cuantos usuarios aceptará.';
$string['confirmactivitycompletion'] = 'Confirmar finalización de actividad';
$string['confirmationmessage'] = 'Su reservación ha sido registrada. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados, elija la liga siguiente: {$a->link}';
$string['confirmationmessagesettings'] = 'Configuraciones de Email de confirmación';
$string['confirmationmessagewaitinglist'] = 'Hola {$a->participant},

Su solicitud de reservación ha sido registrada

Estatus de reservación: {$a->status}
Participante: {$a->participant}
Curso: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Para ver todos sus cursos reservados, elija el enlace siguiente: {$a->bookinglink}';
$string['confirmationsubject'] = 'Confirmación de reservación para {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Nueva reservación para {$a->title} por {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Estatus de reservación para {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Estatus de reservación para {$a->title}';
$string['confirmbookingoffollowing'] = 'Por favor confirme la reservación para el siguiente curso';
$string['confirmdeletebookingoption'] = '¿Realmente desea eliminar esta opción de reservación?';
$string['copyonlythisbookingurl'] = 'Copiar esta URL de reservación';
$string['copypollurl'] = 'Copiar URL de encuesta';
$string['copytoclipboard'] = 'Copiar al portapapeles: Ctrl+C, Enter';
$string['coursedate'] = 'Fecha';
$string['courseendtime'] = 'Hora de fin del curso';
$string['coursestarttime'] = 'Hora de principio del curso';
$string['createdby'] = 'Módulo de reservaciones hecho por edulabs.org';
$string['csvfile'] = 'Archivo CSV';
$string['csvfile_help'] = 'El archivo CSV debe contener solamente una columna llamada Institution (Institución).';
$string['customlabels'] = 'Etiquetas personalizadas';
$string['dateerror'] = 'Fecha equivocada en la línea {$a}:';
$string['datenotset'] = 'Fecha no configurada';
$string['dateparseformat'] = 'Formato para procesar fecha';
$string['dateparseformat_help'] = 'Por favor, use el formato de fecha especificado en el archivo CSV file. Ayuda con <a href="http://php.net/manual/en/function.date.php">este</a> reurso para opciones.';
$string['days'] = '{$a} días';
$string['daystonotify'] = '¿Cuantos días antes del evento deberá notificarse a los participantes?';
$string['daystonotify_help'] = '¡Solamente funcionará si la opción de fecha de inicio y término está configur Use 0 para deshabilitad esta funcionalidad.ada!';
$string['defaultbookingoption'] = 'Opciones por defecto para reservaciones';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['delete'] = 'Eliminar';
$string['deletebooking'] = '¿Realmente desea des-inscribirse del curso siguiente <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Eliminar esta opción de reservación';
$string['deletecategory'] = 'Eliminar';
$string['deletedbookingmessage'] = 'Reservación eliminada para el curso siguiente: {$a->title}

Usuario: {$a->participant}
Título: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Curso: {$a->courselink}
Enlace a reservación: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Reservación eliminada: {$a->title} por {$a->participant}';
$string['deletedbookingusermessage'] = 'Hola {$a->participant},
Su reservación para {$a->title} ({$a->startdate} {$a->starttime}) ha sido cancelada.';
$string['deletedbookingusersubject'] = 'Reservación para {$a->title} cancelada';
$string['deletedrule'] = 'Regla eliminada exitosamente.';
$string['deletedtext'] = 'Mensaje de reservación cancelada';
$string['deletedtext_help'] = 'Deje esto vacío para usar el texto del sitio por defecto. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} -  Insertar código QR code con la ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
</ul>';
$string['deleterule'] = 'Eliminar';
$string['deletesubcategory'] = '¡Por favor, primeramente elimine todas las sub-categorías de esta categoría!';
$string['deleteuserfrombooking'] = '¿Realmente desea eliminar los usuarios de la reservación?';
$string['delnotification'] = 'Usted ha elimninado exitosamente {$a->del} de {$a->all} usuarios. ¡Los usuarios que hayan completado actividad no pueden ser eliminados!';
$string['disablebookingusers'] = 'Deshabilitar reservaciones de usuarios - Ocultar botón para Reservar ahora.';
$string['donotselectcourse'] = 'No seleccionó curso';
$string['download'] = 'Descargar';
$string['downloadallresponses'] = 'Descargar todas las respuestas para todas las opciones de reservaciones';
$string['downloadusersforthisoptionods'] = 'Descargar usuarios como archivo .ODS';
$string['downloadusersforthisoptionxls'] = 'Descargar usuarios como archivo .XLS';
$string['duplicatebooking'] = 'Duplicar esta opción de reservación';
$string['editcategory'] = 'Editar';
$string['editinstitutions'] = 'Editar instituciones';
$string['editotherbooking'] = 'Otras reglas para reservar';
$string['editrule'] = 'Editar';
$string['edittag'] = 'Editar';
$string['editteachers'] = 'Editar';
$string['enablecompletion'] = 'Habilitar finalización manual de actividad en respuestas de opción de reservación';
$string['enablecompletiongroup'] = 'Finalización manual de actividad';
$string['endtimenotset'] = 'Fecha final no configurada';
$string['entervalidurl'] = '¡Por favor, escriba una URL válida !';
$string['error:failedtosendconfirmation'] = 'El usuario siguiente no recibió un correo de confirmación de Reservación. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Liga: {$a->link}';
$string['errorpagination'] = 'Por favor ngrese un número mayor de 0';
$string['eventbooking_cancelled'] = 'Reservacion cancelada';
$string['eventbookingoption_booked'] = 'Opción de reservación reservada';
$string['eventduration'] = 'Duración del evento';
$string['eventpoints'] = 'Puntos';
$string['eventreport_viewed'] = 'Reporte visto';
$string['eventtype'] = 'Tipo de evento';
$string['eventuserprofilefields_updated'] = 'Perfil-del usuario actualizado';
$string['excelfile'] = 'Archivo CSV con finalización de actividad';
$string['existingsubscribers'] = 'Suscriptores existentes';
$string['expired'] = 'Lo sentimos, esta actividad se cerró el {$a} y ya no está disponible';
$string['fillinatleastoneoption'] = 'Usted necesita proporcionar al menos dos posibles respuestas.';
$string['forcourse'] = 'para el curso';
$string['full'] = 'LLeno';
$string['fullname'] = 'Nombre completo';
$string['generaterecnum'] = 'Generar números';
$string['generaterecnumareyousure'] = '¡Esto generará números nuevos y eliminará permanentemente al antiguo!';
$string['generaterecnumnotification'] = 'Los números nuevos fueron generados exitosamente.';
$string['goenrol'] = 'Ir al registro';
$string['gotobooking'] = '<< Reservaciones';
$string['gotop'] = 'Ir a superior';
$string['groupexists'] = 'El grupo ya existe en el curso destino; por favor elija otro nombre para la opción de reservación';
$string['groupname'] = 'Nombre del grupo';
$string['havetologin'] = 'Usted tiene que entrar antes de poder enviar su reservación';
$string['hours'] = '{$a} horas';
$string['howmanyusers'] = '¿Cuantos usuarios puede reservar Usted?';
$string['howmanyusers_help'] = '';
$string['importcsvbookingoption'] = 'Importar CSV con opciones de reservación';
$string['importcsvtitle'] = 'Importar CSV';
$string['importexcelbutton'] = 'Importar finalización de actividad';
$string['importexceltitle'] = 'Importar finalización de actividad';
$string['importfinished'] = '¡Importación terminada!';
$string['infonobookingoption'] = 'Por favor use el bloque {$a} para añadir su primera opción de reservación';
$string['institution'] = 'Institución';
$string['institutionname'] = 'Nombre de la institución';
$string['institutions'] = 'Instituciones';
$string['lblacceptingfrom'] = 'Nombre de la etiqueta "Aceptando de"';
$string['lblbooking'] = 'Nombre de etiqueta "Reservación"';
$string['lblbooktootherbooking'] = 'Nombre del botón "Reservar usuarios a otra opción de reservación"';
$string['lblinstitution'] = 'Nombre de la etiqueta "Institución"';
$string['lbllocation'] = 'Nombre de la etiqueta "Lugar"';
$string['lblname'] = 'Nombre de la etiqueta "Nombre"';
$string['lblnumofusers'] = 'Nombre de la etiqueta "Núm. de usuarios"';
$string['lblsputtname'] = 'Nombre de etiqueta "Mandar URL de encuesta a profesores"';
$string['lblsurname'] = 'Nombre de la etiqueta "Apellido(s)"';
$string['lblteachname'] = 'Nombre de la etiqueta "Profesores"';
$string['leftandrightdate'] = '{$a->leftdate} a {$a->righttdate}';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar el número de participantes';
$string['limitanswers_help'] = '¡Si Usted cambia esta opción y tenía personas reservadas, Usted puede quitarlas sin notificación!';
$string['location'] = 'Sitio';
$string['mailconfirmationsent'] = 'Pronto recibirá un correo de confirmación';
$string['managebooking'] = 'Gestionar';
$string['maxoverbooking'] = 'Número máximo de lugares en lista de espera';
$string['maxparticipantsnumber'] = 'Número máximo de participantes';
$string['maxperuser'] = 'Reservaciones máximas por usuario';
$string['maxperuser_help'] = 'El número máximo de reservaciones que puede hacer un usuario individual el mismo tiempo. Después de que haya pasado el tiempo de terminación de un evento, ya no se contará este límite.';
$string['maxperuserwarning'] = 'Usted tiene actualmente {$a->count}/{$a->limit} reservaciones máximas';
$string['messagesend'] = 'Su mensaje fue enviado exitosamente.';
$string['messagesubject'] = 'Asunto';
$string['messagetext'] = 'Mensaje';
$string['minutes'] = '{$a} minutos';
$string['modulename'] = 'Reservación';
$string['modulenameplural'] = 'Reservaciones';
$string['mustchooseone'] = 'Usted debe elegir una opción antes de guardar. Nada se guardó.';
$string['mustfilloutuserinfobeforebooking'] = 'Antes de proceder al formato para reservación, por favor llene algunos datos personales';
$string['myoptions'] = 'Mis opciones ({$a})';
$string['no'] = 'No';
$string['nobookingselected'] = 'No se seleccionó opción de reservación';
$string['nocourse'] = 'Ningun curso seleccionado para esta opción de reservación';
$string['nodateset'] = 'Fecha del curso no configurada';
$string['noguestchoose'] = 'Lo sentimos, los invitados no pueden introducir datos';
$string['noresultsviewable'] = 'Los resultados no están visibles actualmente.';
$string['norighttobook'] = 'No es posible reservar para su rol de usuario. Por favor contacte al administrador del sitio para que le proporcione los permisos apropiados o entre al sitio.';
$string['nosubscribers'] = '¡No hay profesores asignados!';
$string['notbooked'] = 'Aún no reservado';
$string['notconectedbooking'] = 'No conectado';
$string['noteacherfound'] = 'No se encontró profesor en la línea {$a}:';
$string['notificationsubject'] = 'Curso próximo futuro...';
$string['notificationtext'] = 'Texto de notificación a mostrar en finalización de actividad.';
$string['notificationtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código  QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
</ul>';
$string['notificationtextmessage'] = 'El curso iniciarát:

Curso: {$a->title}
Fechas: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notificationtextsubject'] = '¡Información acerca del inicio del curso!';
$string['notifyemail'] = 'Notificación antes del inicio';
$string['notifyemaildefaultmessage'] = 'Su reservación ha sido registrada


Estatus de reservación: {$a->status}
Participante: {$a->participant}
Curso: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Para ver todos sus cursos reservados, haga click en el enlace siguiente: {$a->bookinglink}
El curso asociado puede encontrarse aquí: {$a->courselink}';
$string['notifyemail_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN}  - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código  QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
</ul>';
$string['notopenyet'] = 'Lo sentimos, esta actividad no estará disponible hasta después de {$a}';
$string['nouserfound'] = 'No se encontró usuario:';
$string['nousers'] = '¡Sin usuarios!';
$string['numgenerator'] = '¿Habilitar generación de número de registro?';
$string['numrec'] = 'Núm. registro';
$string['onlythisbookingurl'] = 'Enlazar hacia esta URL de reservación';
$string['onwaitinglist'] = 'Usted está en la lista de espera';
$string['optiondates'] = 'Sesión con Fechas Múltiples';
$string['optiondatessucesfullydelete'] = 'La hora de la sesión fue eliminada exitosamente.';
$string['optiondatessucesfullysaved'] = 'La hora de la sesión fue guardada exitosamente.';
$string['optiondatestime'] = 'Hora de sesión';
$string['optionid'] = 'ID de opción';
$string['optionmenu'] = 'Esta opción de reservación';
$string['organizatorname'] = 'Nombre del organizador';
$string['otherbookingaddrule'] = 'Añadir regla nueva';
$string['otherbookinglimit'] = 'Límite';
$string['otherbookinglimit_help'] = 'Cuantos usuarios aceptará Usted desde la opción. Si fuera 0 Usted podrá aceptar usuarios ilimitados.';
$string['otherbookingnumber'] = 'Número de usuarios';
$string['otherbookingoptions'] = 'Aceptando de';
$string['otherbookingsucesfullysaved'] = '¡Regla guardada exitosamente!';
$string['paginationnum'] = 'N. de registros - paginación';
$string['pdfdate'] = 'Fecha(s) de Reservación(es):';
$string['pdflocation'] = 'Sitio:';
$string['pdfroom'] = 'Salón';
$string['pdfsignature'] = 'Firma';
$string['pdfstudentname'] = 'Nombre del estudiante';
$string['pdftodaydate'] = 'Fecha:';
$string['placesavailable'] = 'Lugares disponibles';
$string['pluginadministration'] = 'Administración de reservaciones';
$string['pluginname'] = 'Reservación';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'URL de encuesta';
$string['pollurl_help'] = 'Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
</ul>';
$string['pollurlteachers'] = 'URL de encuesta a profesores';
$string['pollurlteachers_help'] = 'Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
</ul>';
$string['pollurlteacherstext'] = 'URL para enviar encuesta Profesores';
$string['pollurlteacherstext_help'] = 'Deje esto vací para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, comopor ejemplo {teacher1}</li>
<li>{qr_id} - Inserte código QR con id del usuario</li>
<li>{qr_username} - Inserte código QR con nombre_De-usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Por favor, conteste la encuesta

URL de la encuesta {pollurlteachers}';
$string['pollurlteacherstextsubject'] = 'Por favor, conteste la encuesta';
$string['pollurltext'] = 'Enviar URL de encuesta';
$string['pollurltext_help'] = 'Deje vacío esto para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
</ul>';
$string['pollurltextmessage'] = 'Por favor, conteste la encuesta

URL de la encuesta {pollurl}';
$string['pollurltextsubject'] = 'Por favor, conteste la encuesta';
$string['potentialsubscribers'] = 'Suscriptores potenciales';
$string['question'] = 'Pregunta';
$string['ratingsuccess'] = 'Las valoraciones fueron actualizadas exitosamente';
$string['removeafterminutes'] = 'Quitar finalización de actividad después de N minutos';
$string['removeresponses'] = 'Quitar todas las respuestas';
$string['reset'] = 'Reiniciar';
$string['responses'] = 'Respuestas';
$string['responsesto'] = 'Respuestas a {$a}';
$string['rootcategory'] = 'Raíz';
$string['savenewoptiondates'] = 'Guardar';
$string['savenewtagtemplate'] = 'Guardar';
$string['searchdate'] = 'Fecha';
$string['searchfinished'] = 'Curso completado';
$string['searchname'] = 'Nombre(s)';
$string['searchsurname'] = 'Apellido(s)';
$string['searchtag'] = 'Buscar marcas (tags)';
$string['searchwaitinglist'] = 'En lista de espera';
$string['select'] = 'Selección';
$string['selectatleastoneuser'] = '¡Por favor, seleccione al menos un usuario!';
$string['selectcategory'] = 'Seleccionar categoría';
$string['selectoptionid'] = '¡Por favor, seleccione opción!';
$string['selectoptioninotherbooking'] = 'Opción';
$string['sendconfirmmail'] = 'Mandar correo de confirmación';
$string['sendconfirmmailtobookingmanger'] = 'Mandar correo de confirmación al mánager de reservaciones';
$string['sendcustommessage'] = 'Mandar mensaje personalizado';
$string['sendmailtobooker'] = 'Página para Reservar para otros usuarios: Enviar Email al usuario que reserva en vez de mandárselos a los usuarios que son reservados.';
$string['sendmailtobooker_help'] = 'Active esta opción para mandar Emails de confirmación de reservación al usuario que reserva para otros usuarios en lugar de usuarios que han sido añadidos a una opción de reservación.
Esto solamente es relevante para reservaciones hechas en la página para "reservar para otros usuarios".';
$string['sendpollurltoteachers'] = 'Enviar URL de encuesta';
$string['sendreminderemail'] = 'Enviar Email recordatorio';
$string['sendreminderemailsuccess'] = '¡El Email de notificación fue enviado exitosamente!';
$string['showactive'] = 'Reservaciones activas';
$string['showallbookings'] = 'Mostrar vista general de reservaciones para todas las reservaciones';
$string['showhelpfullnavigationlinks'] = 'Mostrar enlaces de navegación';
$string['showhelpfullnavigationlinks_helt'] = 'Mostrar enlaces para "Ir a registro" y para "Ir a superior".';
$string['showinapi'] = '¿Mostrar en API?';
$string['showmybookings'] = 'Mostrar solamente mis reservaciones';
$string['showonlymyinstitutions'] = 'Mi institución';
$string['sign_in_sheet_download'] = 'Descargar Hoja para Apuntarse';
$string['spaceleft'] = 'espacio disponible';
$string['spacesleft'] = 'espacios disponibles';
$string['startendtimeknown'] = 'Hora de principio y fin del curso son conocidas';
$string['starttimenotset'] = 'No se configuró fecha de inicio';
$string['statuschangebookedmessage'] = 'Hola {$a->name}, Su status de reservación ha cambiado. Usted está ahora registrado en {$a->bookingname}. Status de reservación: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados elija la liga siguiente: {$a->link}';
$string['statuschangebookedsubject'] = 'Cambió el estatus de reservación para {$a->title}';
$string['statuschangetext'] = 'Mensaje de cambio de estatus';
$string['statuschangetext_help'] = 'Deje esto vacío para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número del profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usurio</li>
<li>{qr_username} - Insertar código QR con nombre_del_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
</ul>';
$string['submitandaddnew'] = 'Guardar y añadir nuevo';
$string['subscribersto'] = 'Profesores para \'{$a}\\';
$string['subscribetocourse'] = 'Inscribir usuarios al curso';
$string['subscribeuser'] = '¿Realmente quiere inscribir a los usuarios en el curso siguiente?';
$string['sucesfulldeleted'] = '¡La categoría fue eliminada exitosamente!';
$string['sucesfulldeletedinstitution'] = 'La institución fue eliminada exitosamente';
$string['tagsucesfullysaved'] = 'La marca (tag) fue guardada exitosamente';
$string['tagtag'] = 'Marca (Tag)';
$string['tagtemplates'] = 'Plantillas de marca (tag)';
$string['tagtext'] = 'Texto';
$string['taken'] = 'Tomado';
$string['teachers'] = 'Profesores';
$string['timecloseoption'] = 'Limitar la disponibilidad de esta opción de reservación hasta una cierta fecha';
$string['timecreated'] = 'Hora de creación';
$string['timerestrict'] = 'Restringir respuestas a este lapso de tiempo';
$string['to'] = 'a';
$string['toomuchusersbooked'] = 'El número máximo de usuarios que Usted puede reservar es : {$a}';
$string['topic'] = 'Tópico';
$string['unlimited'] = 'El número de lugares disponibles no está limitado';
$string['updatebooking'] = 'Editar esta opción de reservación';
$string['usedinbooking'] = '¡Usted no puede eliminar esta categoría, porque Usted está usándola al reservar!';
$string['userdownload'] = 'Descargar usuarios';
$string['userid'] = 'UserID (ID del usuario)';
$string['userleave'] = 'Usuario ha cancelado su propia reservación';
$string['userleavebookedmessage'] = 'Hola {$a->participant},

Usted se ha des-inscrito exitosamente de {$a->title}.';
$string['userleavebookedsubject'] = 'Usted se ha des-inscrito exitosamente de {$a->title}';
$string['userleave_help'] = 'Deje esto vací para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, comopor ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Inserte código QR con id del usuario</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Horas de sesión</li>
</ul>';
$string['usernameofbookingmanager'] = 'Nombre_de_usuario del mánager de reservaciones';
$string['usernameofbookingmanager_help'] = 'Nombre_de_usuario del usuario que se mostrará en el campo "De" de las notificaciones de confirmación. Si está habilitada la opción para "Enviar Email de confirmación al Mánager de reservaciones", éste será el usuario quien recibe  una copia de las notificaciones de confirmación.';
$string['userrssucesfullenroled'] = '¡Todos los usuarios han sido inscritos exitosamente!';
$string['users'] = '<< Gestionar respuestas';
$string['usersonlist'] = 'Usuario en lista';
$string['userssucesfullybooked'] = 'Todos los usuarios han sido reservados exitosamente en otra opción de reservación.';
$string['viewallresponses'] = 'Gestionar {$a} respuestas';
$string['waitinglist'] = 'En lista de espera';
$string['waitinglisttaken'] = 'En la lista de espera';
$string['waitinglistusers'] = 'Usuarios en lista de espera';
$string['waitingplacesavailable'] = 'Lugares disponibles en lista de espera';
$string['waitingtext'] = 'Confirmación de lista de espera';
$string['waitingtext_help'] = 'Deje esto vacío para usar el texto por defecto del sitio. Usted puede usar cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
</ul>';
$string['waitspaceavailable'] = 'Lugares en lista de espera disponibles';
$string['week'] = 'Semana';
$string['whichview'] = 'Valor por defecto para opciones de reservación';
$string['withselected'] = 'Con usuarios seleccionados:';
$string['wrongdataallfields'] = '¡Por favor, llene todos los campos!';
$string['wrongfile'] = '¡Archivo equivocado!';
$string['yes'] = 'Si';
$string['yourselection'] = 'Su selección';
