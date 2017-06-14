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
 * Strings for component 'tool_mobile', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['androidappid'] = 'Identificador único de Androide';
$string['androidappid_desc'] = 'Esta configuración puede dejarse como valor por defecto a menos que Usted tenga una App personalizada de Androide.';
$string['autologinkeygenerationlockout'] = 'La generación de clave de auto-ingreso está bloqueada porque hubo demasiadas solicitudes en una hora.';
$string['autologinnotallowedtoadmins'] = 'El auto-ingreso no está permitido para los administradores del sitio.';
$string['cachedef_plugininfo'] = 'Esto almacena la lista de plugins con adiciones Mobile (para móviles)';
$string['clickheretolaunchtheapp'] = 'Haga click aquí si la App no se abre atomáticamente.';
$string['configmobilecssurl'] = 'Un archivo CSS para personalizar su interfaz para dispositivo móvil';
$string['customlangstrings'] = 'Cadenas de caracteres del idioma personalizado';
$string['customlangstrings_desc'] = 'Las palabras y las frases mostradas en la App pueden ser personalizadas aquí. Ingrese cada cadena de caracteres personalizada en una línea nueva con el formato: identificador_de_la_cadena (string identifier), cadena de idioma personalizada y código del idioma, separados por caracteres de barra vertical |. Por ejemplo:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es_mx
</pre>
Para una lista completa de los identificadores_de_cadena, vea la documentación.';
$string['custommenuitems'] = 'Ítems de menú personalizado';
$string['custommenuitems_desc'] = 'Se pueden añadir ítems adcionales al menú principal de la App al especificarlos aquí. Ingrese cada ítem de menú personalizado en una línea nueva con el formato: texto del ítem, URL del enlace, método de apertura del enlace (inappbrowser, browser o embedded) (en navegador de App, navegador o incrustado) y código de idioma (opcional, para mostrarle el ítem solamente a usuarios del idioma especificado), separados por caracteres de barra vertical | . Por ejemplo:
<pre>
Ayuda de la App | https://someurl.xyz/help | inappbrowser | en
Visite nuestro SIS | https://someurl.xyz | browser | en
Mis calificaciones en inglés | https://someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
</pre>
Use inappbrowser (dentro_del_navegador_de_la_App) cuando Usted quiera abrir el enlace en un navegador sin abandonar la App, use browser (navegador) para abrir el enlace en el navegador por defecto del dispositivo y use embedded (incrustado) si desea mostrar el enlace incrustado en una página nueva en la App.';
$string['disabledfeatures'] = 'Características deshabilitadas';
$string['disabledfeatures_desc'] = 'Seleccione aquí las características que Usted quiere deshabilitar en la App Mobile para su sitio. Por favor, tome nota de que algunas características enlistadas aquí podrían ya estar deshabilitadas vía otras configuraciones del sitio. Usted tendrá que salirse del sitio e ingresar al sitio nuevamente en la App para ver los cambios.';
$string['enablesmartappbanners'] = 'Habilitar Banners de App';
$string['enablesmartappbanners_desc'] = 'Esto mostrará un banner promoviendo la App Moodle Mobile cuando se visita el sitio en un navegador Mobile (móvil).';
$string['forcedurlscheme'] = 'Si Usted quiere permitir que solamente se abra su App personalizada con su marca mediante una ventana del navegador, entonces especifique su esquema de URL aquí; de lo contrario, deje el campo vacío.';
$string['forcedurlscheme_key'] = 'Esquema URL';
$string['forcelogout'] = 'Forzar salida';
$string['forcelogout_desc'] = 'Si se habilita, la opción de la App \'Cambiar sitio\' es remplazada por \'Salir\'. Esto resulta en que el usuario es sacado por completo del sitio. Los usuarios deberán entonces re-ingresar sus contraseñas la siguiente vez que deseen acceder al sitio.';
$string['httpsrequired'] = 'Se requiere HTTPS';
$string['invalidprivatetoken'] = 'Ficha (token) privada inválida. La ficha (token) no debería de estar vacía ni pasada mediante parámetro GET.';
$string['iosappid'] = 'Identificador único de App iOS';
$string['iosappid_desc'] = 'Usted solamente necesita cambiar este valor si Usted tiene una App iOS personalizada';
$string['loginintheapp'] = 'Via la App';
$string['logininthebrowser'] = 'Via una ventana de navegador (para plugins SSO)';
$string['loginintheembeddedbrowser'] = 'Via un navegador incrustado (para plugins SSO)';
$string['mainmenu'] = 'Menú principal';
$string['mobileapp'] = 'App Mobile';
$string['mobileappearance'] = 'Apariencia de Mobile';
$string['mobileauthentication'] = 'Autenticación de Mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Características de Mobile';
$string['mobilesettings'] = 'Configuraciones de Mobile';
$string['pluginname'] = 'Herramientas de Moodle Mobile';
$string['pluginnotenabledorconfigured'] = 'Plugin no habilitado o configurado';
$string['remoteaddons'] = 'Complementos (add-ons) remotos';
$string['smartappbanners'] = 'Banners de App';
$string['typeoflogin'] = 'Tipo de ingreso';
$string['typeoflogin_desc'] = 'Si el sitio usa un método de autenticación SSO (Single Sign On = Ingreso Único), entonces seleccione via una ventana del navegador o via un navegador incrustado. Un navegador incrustado proporciona una  mejor experiencia del usuario, aunque no funciona con todos los plugins SSO. Si usa SSO, debe deshabilitarse autologinguests (auto_ingresar_invitados).';
