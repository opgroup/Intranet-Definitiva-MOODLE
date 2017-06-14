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
 * Strings for component 'tool_oauth2', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Esta acción le otorgará acceso API permanente a Moodle para la cuenta autenticada. Esto está dirigido para usarse como una cuenta del sistema para gestionar archivos propiedad de Moodle.';
$string['authconnected'] = 'La cuenta del sistema ahora está conectada para acceso fuera-de-línea';
$string['authnotconnected'] = 'La cuenta del sistema no fue conectada para acceso fuera-de-línea';
$string['configured'] = 'Configurado';
$string['configuredstatus'] = 'Configurado';
$string['connectsystemaccount'] = 'Conectar a una cuenta del sistema';
$string['createfromtemplate'] = 'Crear un servicio OAuth 2 a partir de una plantilla';
$string['createfromtemplatedesc'] = 'Elija una de las plantillas inferiores de servicio OAuth para crear un servicio OAuth con una configuración válida para uno de los tipos de servicio conocidos. Esto creará el servicio OAuth 2 con todos los parámetros y puntos_finales requeridos para la autenticación, pero Usted todavía necesitará ingresar el secreto y el ID del cliente para el nuevo servicio antes de que pueda ser usado.';
$string['createnewendpoint'] = 'Crear nuevo punto_final para emisor "{$a}"';
$string['createnewfacebookissuer'] = 'Crear nuevo servicio Facebook';
$string['createnewgoogleissuer'] = 'Crear nuevo servicio Google';
$string['createnewissuer'] = 'Crear nuevo servicio personalizado';
$string['createnewmicrosoftissuer'] = 'Crear nuevo servicio Microsoft';
$string['createnewuserfieldmapping'] = 'Crear mapeo de campo de usuario nuevo para emisor "{$a}"';
$string['deleteconfirm'] = '¿Está Usted seguro de querer eliminar al provedor de identidad "{$a}"? Cualquier plugin que dependa de este emisor dejará de funcionar.';
$string['deleteendpointconfirm'] = '¿Está Usted seguro de querer eliminar el punto_final "{$a->endpoint}" para emiso "{$a->issuer}"? Cualquier plugin que dependa de este punto_final dejará de funcionar.';
$string['deleteuserfieldmappingconfirm'] = '¿Está Usted seguro de querer eliminar el mapeo de campo del usuario para el emisor  "{$a}"?';
$string['discovered'] = 'Descubrimiento de servicio exitoso';
$string['discovered_help'] = 'Descubrimiento significa que los puntos_finales OAuth 2 podrían ser determinados automáticamente a partir de la URL base para el servicio OAuth. No a todos los servicios les es requerido el que sean "descubiertos", pero si no lo son, entonces la información de mapeo de usuarios y puntos_finales necesitará ingresarse manualmente.';
$string['discoverystatus'] = 'Descubrimiento';
$string['editendpoint'] = 'Editar punto_final: {$a->endpoint} para emisor {$a->issuer}';
$string['editendpoints'] = 'Configurar puntos_finales';
$string['editissuer'] = 'Editar emisor de identidad: {$a}';
$string['edituserfieldmapping'] = 'Editar mapeo de campo de usuario para emisor {$a}';
$string['edituserfieldmappings'] = 'Configurar mapeos de campo de usuario';
$string['endpointdeleted'] = 'Punto_final eliminado';
$string['endpointname'] = 'Nombre';
$string['endpointname_help'] = 'Clave usada para buscar este punto_final. Debe de terminar con "_endpoint".';
$string['endpointsforissuer'] = 'Puntos_finales para emisor: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL para este punto_final. Debe usar protocolo https://';
$string['issueralloweddomains'] = 'Dominios de ingreso';
$string['issueralloweddomains_help'] = 'Si se pone, esta configuración es una lista separada por comas de dominios a donde estarán restringidos los ingresos  al usar este provedor.';
$string['issuerbaseurl'] = 'URL de base del servicio';
$string['issuerbaseurl_help'] = 'URL base a usar para acceder al servicio.';
$string['issuerclientid'] = 'ID del cliente';
$string['issuerclientid_help'] = 'La ID del cliente OAuth para este emisor.';
$string['issuerclientsecret'] = 'Secreto del Cliente';
$string['issuerclientsecret_help'] = 'El secreto del cliente OAuth para este emisor.';
$string['issuerdeleted'] = 'Emisor de identidad eliminado';
$string['issuerdisabled'] = 'Emisor de identidad deshabilitado';
$string['issuerenabled'] = 'Emisor de identidad habilitado';
$string['issuerimage'] = 'URL del logo';
$string['issuerimage_help'] = 'Una URL de la imagen  usada para mostrar un logo para este emisor. Puede ser mostrada en la página para ingreso.';
$string['issuerloginparams'] = 'Parámetros adicionales incluidos en una solicitud de ingreso.';
$string['issuerloginparams_help'] = 'Algunos sistemas requieren parámetros adicionales para que una solicitud de ingreso lea el perfil básico de los usuarios.';
$string['issuerloginparamsoffline'] = 'Parámetros adicionales incluidos en una solicitud de ingreso para acceso fuera-de-línea.';
$string['issuerloginparamsoffline_help'] = 'Cada sistema OAuth define una manera diferente para solicitar acceso fuera-de-línea. Por ejemplo, Google requiere los parámetros adicionales: "access_type=offline&prompt=consent" . Estos parámetros deberían de estar en el formato de parámetro de consulta URL.';
$string['issuerloginscopes'] = 'Alcances incluidos en una solicitud de ingreso.';
$string['issuerloginscopes_help'] = 'Algunos sistemas requieren alcences adicionales para que una solicitud de ingreso lea el perfil básico del usuario. Los alcances estándares para un sistema que cumple con OpenID Connect son  "openid profile email".';
$string['issuerloginscopesoffline'] = 'Alcances incluidos en una solicitud de ingreso para acceso fuera-de-línea.';
$string['issuerloginscopesoffline_help'] = 'Cada sistema OAuth define una manera diferente para solicitar acceso fuera-de-línea, Por ejemplo, Microsoft reuiere un alcance adicional "offline_access"';
$string['issuername'] = 'Nombre';
$string['issuername_help'] = 'Nombre del emisor de identidad. Puede mostrarse en la página para ingresar.';
$string['issuers'] = 'Emisores';
$string['issuersetup'] = 'Instrucciones detaladas acerca de la configuración de servicios OAuth 2 comunes';
$string['issuersetuptype'] = 'Instrucciones detalladas acerca de la configuración del provedor  {$a} provedor OAuth 2';
$string['issuershowonloginpage'] = 'Mostrar en página para ingresar.';
$string['issuershowonloginpage_help'] = 'Si se ha habilitado el plugin de Autenticación OpenID Connect, este emisor para ingreso será enlistado en la página para ingreso para permitirles a los usuarios el que ingresen con cuentas de este emisor.';
$string['loginissuer'] = 'Permitir ingreso';
$string['notconfigured'] = 'No configurado';
$string['notdiscovered'] = 'El descubrimiento del servicio no fue exitoso';
$string['notloginissuer'] = 'No permitir ingreso';
$string['pluginname'] = 'Servicios OAuth 2';
$string['savechanges'] = 'Guardar cambios';
$string['serviceshelp'] = 'Instrucciones de configuración del provedor del servicio.';
$string['systemaccountconnected'] = 'Cuenta del sistema conectada';
$string['systemaccountconnected_help'] = 'Son usadas cuentas del sistema para proporcionarle funcionalidad avanzada a este plugin. No son necesarias para solamente la funcionalidad de ingreso, pero otros plugins que usan el servicio OAuth podrían ofrecer un conjunto de características reducido si la cuenta del sistema no ha sido conectada. Por ejemplo, los repositorios no pueden soportar "enlaces controlados" sin una cuenta del sistema para realizar operaciones con archivos.';
$string['systemaccountnotconnected'] = 'Cuenta del sistema no conectada';
$string['systemauthstatus'] = 'Cuenta del sistema conectada';
$string['userfieldexternalfield'] = 'Nombre de campo externo';
$string['userfieldexternalfield_help'] = 'Nombre del campo proporcionado por el sistema OAuth externo.';
$string['userfieldinternalfield'] = 'Nombre de campo interno';
$string['userfieldinternalfield_help'] = 'Nombre del campo de usuario de Moodle que será mapeado desde el campo externo.';
$string['userfieldmappingdeleted'] = 'Mapeo del campo del usuario eliminado';
$string['userfieldmappingsforissuer'] = 'Mapeos de campo del usuario para provedor: {$a}';
