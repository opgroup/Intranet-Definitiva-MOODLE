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
 * Strings for component 'auth_saml2', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_saml2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterlogout'] = 'URL de salida alternativa';
$string['alterlogout_help'] = 'La URL para redireccionar a un usuario después de agotar todos los mecanismos internos para salida del sitio';
$string['anyauth'] = 'Permitido cualquier tipo de autenticación';
$string['anyauth_help'] = 'Si: ¿Permitir ingreso por SAML a todos los usuarios? NO: solamente los usuarios quienes tengan SAML2 como su tipo.';
$string['auth_saml2description'] = 'Autenticar con un SAML2 IdP';
$string['autocreate'] = 'Auto crear usuarios';
$string['autocreate_help'] = 'Si los usuarios están en el idP pero no en Moodle, crear una cuenta Moodle.';
$string['certificate'] = 'Regenerar certificado';
$string['certificatedetails'] = 'Detalles del certificado';
$string['certificatedetailshelp'] = '<h1>Contenidos del certificado público SAML2 auto generado</h1>
<p>The path for the cert is here:</p>';
$string['certificate_help'] = 'Regenerar la Clave Privada y Certificado usados por este  SP. | <a href=\'{$a}\'>Ver certificado SP</a>';
$string['certificatelock'] = 'Bloquear certificado';
$string['certificatelock_help'] = 'Bloquear el certificado impedirá que sean sobre-escritos una vez generados.';
$string['certificatelock_locked'] = 'El certificado está bloqueado';
$string['certificatelock_warning'] = 'Advertencia: Usted está a punto de bloquear certificados- ¿Está Usted seguro de querer hacer esto?';
$string['commonname'] = 'Nombre común';
$string['countryname'] = 'País';
$string['debug'] = 'depuración (debugging)';
$string['debug_help'] = 'Exto añade depuración (debugging) extra a la bitácora normal de Moodle | <a href=\'{$a}\'>Ver configuración SSP</a></p>';
$string['duallogin'] = 'Ingreso dual';
$string['duallogin_help'] = '<p>Si se activa, entonces los usuarios verán ambos: botón manual y SAML. Si se desactiva, ellos siempre serán llevados directamente a la página de ingreso IdP.</p>
<p>Si se desactiva, entonces los administradores todavía pueden ver la página de ingreso manual mediante /login/index.php?saml=off</p>
<p>Si se activa, entonces las páginas externas pueden enlazar profundo adentro de Moodle usando SAML, por ejemplo /course/view.php?id=45&saml=on</p>';
$string['expirydays'] = 'Caducidad en días';
$string['idpmetadata'] = 'XML o URL de metadatos IdP';
$string['idpmetadata_badurl'] = 'La URL no regresó ningunos datos';
$string['idpmetadata_help'] = 'por ejemplo XML conteniendo un elemento  DescriptordeEntidad (EntityDescriptor)';
$string['idpmetadata_invalid'] = 'El  IdP XML no es válido';
$string['idpmetadata_noentityid'] = 'El IdP XML no tiene entityID';
$string['idpname'] = 'Anulación de nombre IdP';
$string['idpnamedefault'] = 'Ingresar mediante SAML2';
$string['idpname_help'] = 'por ejemplo myUNI - esto es detectado por los metadatos y se mostrará en la página para ingreso dual (si estuviera habilitada)';
$string['localityname'] = 'Localidad';
$string['mapping'] = 'Mapeo de IdP a Moodle';
$string['mapping_help'] = '¿Cual atributo en el IdP debería de coincidir con cual campo en Moodle?';
$string['mcryptnotfound'] = 'ERROR: Se necesita la librería mcrypt php y no está instalada. Por favor refiérase a:<br><a href="https://github.com/catalyst/moodle-auth_saml2#installation">https://github.com/catalyst/moodle-auth_saml2#installation</a>';
$string['noattribute'] = 'Usted ha ingresado exitosamente, pero no pudimos encontrar su atributo \'{$a}\' para asociarlo a Usted con una cuenta en Moodle.';
$string['nouser'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero no tiene una cuenta en Moodle.';
$string['nullprivatecert'] = 'Falló la creación de Certificado Privado.';
$string['nullpubliccert'] = 'Falló la creación de Certificado Público..';
$string['organizationalunitname'] = 'Unidad Organizacional';
$string['organizationname'] = 'Organización';
$string['pluginname'] = 'SAML2';
$string['regenerate_submit'] = 'Regenerar';
$string['required'] = 'Este campo es necesario';
$string['requireint'] = 'Este campo es necesario y deb ser un número entero positivo';
$string['showidplink'] = 'Mostrar enlace IdP';
$string['showidplink_help'] = 'Esto mostrará el enlace IdP cuando el sitio está configurado.';
$string['spmetadata'] = 'Metadatos SP';
$string['spmetadata_help'] = '<a href=\'{$a}\'>Ver Metadatos del Provedor de Servicios (SP)</a> | <a href=\'{$a}?download=1\'>Descargar Metadatos del SP</a>
<p>Es posible que Usted necesite darle esto al administrador IdP para que lo ponga en la lista blanca.</p>';
$string['spmetadatasign'] = 'Firma de Metadatos SP';
$string['spmetadatasign_help'] = 'Firmar los Metadatos SP.';
$string['sspversion'] = 'Versión de SimpleSAMLphp';
$string['stateorprovincename'] = 'Estado o Provincia';
$string['test_auth'] = '<a href="{$a}">Probar isAuthenticated y el ingreso</a>';
$string['test_passive'] = '<a href="{$a}">Probar usando isPassive</a>';
$string['tolower'] = 'Minúscula';
$string['tolower_help'] = '¿Aplicar minúsculas a atributo IdP antes de coincidir?';
$string['wrongauth'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero no está autorizado a acceder a Moodle.';
