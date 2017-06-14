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
 * Strings for component 'auth_oauth2', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   auth_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Ya existe un usuario en este sitio con este nombre_de_usuario. Si esta es su cuenta, ingrese al escribir su nombre_de_usuario y contraseña y añádalo como un ingreso enlazado mediante su página de preferencias.';
$string['alreadylinked'] = 'Esta cuenta externa ya está enlazada a una cuenta en este sitio.';
$string['auth_oauth2description'] = 'Autenticación basada en estándares OAuth 2.';
$string['auth_oauth2settings'] = 'Configuraciones de autenticación OAuth 2.';
$string['confirmaccountemail'] = 'Hola {$a->fullname},

Se ha soliciitado una nueva cuenta en \'{$a->sitename}\'
usando su dirección Email.

Para confirmar su nueva cuenta, por favor vaya a esta dirección web:

{$a->link}

En la mayoría de los programas de correo, esto debería de aparecer como un enlace de color azul, al cual Usted puede simplemente hacerle click. Si eso no funciona, entonces copie y pegue la dirección en la línea para dirección en la parte superior de su ventana del navegador web.

Si Usted necesita ayuda, por favor contacte al administrador del sitio,
{$a->admin}';
$string['confirmaccountemailsubject'] = '{$a}: confirmación de cuenta';
$string['confirmationinvalid'] = 'El enlace para confirmación es, o inválido, o caduco. Por favor inicie el proceso para ingresar nuevamente para generar  un nuevo email de confirmación.';
$string['confirmationpending'] = 'Esta cuenta está pendiente de confirmación de Email.';
$string['confirmlinkedloginemail'] = 'Hola {$a->fullname},

Se ha hecho una solicitud para enlazar el ingreso para {$a->issuername} de
{$a->linkedemail} a su cuenta en \'{$a->sitename}\' usando su dirección Email.

Para confirmar esta solicitud y enlazar estos ingresos, por favor vaya a esta dirección web:

{$a->link}

En la mayoría de los programas de correo, esto debería de aparecer como un enlace de color azul, al cual Usted puede simplemente hacerle click. Si eso no funciona, entonces copie y pegue la dirección en la línea para dirección en la parte superior de su ventana del navegador web.

Si Usted necesita ayuda, por favor contacte al administrador del sitio,
{$a->admin}';
$string['confirmlinkedloginemailsubject'] = '{$a}: confirmación de ingreso enlazado';
$string['createaccountswarning'] = 'Este plugin de autenticación le permite a los  usuarios el crear cuentas en su sitio. Usted podría querer habilitar la configuración "authpreventaccountcreation" si Usted usa este plugin.';
$string['createnewlinkedlogin'] = 'Enlazar a una nueva cuenta ({$a})';
$string['emailconfirmlink'] = 'Enlazar sus cuentas';
$string['emailconfirmlinksent'] = '<p>Se encontó una cuenta existente con esta dirección Email pero todavía no está enlazada.</p>
<p>Las cuentas deben de ser enlazadas antes de que Usted pueda ingresar.</p>
<p>Debería de haberse enviado un Email a su dirección en <b>{$a}</b></p>
<p>Contiene instrucciones f´sencillas para enlazar sus cuentas.</p>
<p>Si Usted continúa teniendo dificultades, contacte al administrador del sitio.</p>';
$string['info'] = 'Cuenta externa';
$string['issuer'] = 'Servicio OAuth 2';
$string['issuernologin'] = 'El emisor no puede se rusado para ingresar';
$string['linkedlogins'] = 'Ingresos enlazados';
$string['linkedloginshelp'] = 'Ayuda con ingresos enlazados.';
$string['loginerror_authenticationfailed'] = 'Falló el proceso de autenticación.';
$string['loginerror_cannotcreateaccounts'] = 'No pudo encontrase una cuenta con su dirección Email.';
$string['loginerror_invaliddomain'] = 'La dirección Email no está permitida en este sitio.';
$string['loginerror_nouserinfo'] = 'No se regresó información del usuario. El servicio OAuth 2 puede estar configurado incorrectamente.';
$string['loginerror_userincomplete'] = 'La información del usuario regresada no contenía un nombre_de_usuario y dirección Email. El servicio OAuth 2 puede estar configurado incorrectamente.';
$string['noissuersavailable'] = 'Ninguno de los servicios OAuth 2 configurados le permite a Usted enlazar cuentas para ingresar';
$string['notenabled'] = 'Lo sentimos, el plugin de autenticación OAuth 2 no está habilidato';
$string['notloggedindebug'] = 'Falló el intento de ingreso. Razón: {$a}';
$string['notwhileloggedinas'] = 'Los ingresos enlazados no pueden ser gestionados mientras esté ingresado como otro usuario.';
$string['oauth2:managelinkedlogins'] = 'Gestionar cuentas de ingreso propio enlazado';
$string['plugindescription'] = 'Este plugin de autenticación muestra una lista de los provedores de identidad configurados en la página para ingresar a Moodle. El seleccionar un provedor de identidad le permite a los usuarios el ingresar con sus credenciales desde un provedor de OAuth 2.';
$string['pluginname'] = 'OAuth 2';
