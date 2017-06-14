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
 * Strings for component 'local_contact', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   local_contact
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configurar este plugin';
$string['confirmationemail'] = '<p>Estimado/a [fromname],</p>
<p>Gracias por contactarnos. Si lo necesita, nosotros lo contactaremos muy pronto.</p>
<p>Saludos,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Gracias por contactarnos. Si lo necesita, nosotros lo contactaremos muy pronto.';
$string['confirmationsent'] = 'Se ha enviado un Email a su dirección en {$a}.';
$string['defaultsubject'] = 'Mnesaje nuevo';
$string['errorsending'] = 'Ocurrió un error al enviar el mensaje. Por favor inténtelo nuevamente después.';
$string['errorsendingtitle'] = 'No se pudo enviar Email';
$string['extrainfo'] = '<hr>
<p><strong>Información Adicional del Ususario</strong></p>
<ul>
<li><strong>Usuario del sitio:</strong> [userstatus]</li>
<li><strong>Idioma preferido:</strong> [lang]</li>
<li><strong>Desde lla dirección IP:</strong> [userip]</li>
<li><strong>Navegador Web :</strong> [http_user_agent]</li>
<li><strong>Formato Web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'Email';
$string['field-message'] = 'mensaje';
$string['field-name'] = 'nombre';
$string['field-subject'] = 'asunto';
$string['forbidden'] = 'Prohibido';
$string['globalhelp'] = 'Formato de Contacto es un plugin para Moodle que permite que su sitio procese información enviada mediante formatos web HTML a la dirección Email de soporte del sitio.';
$string['lockedout'] = 'EXPULSADO';
$string['notconfirmed'] = 'NO CONFIRMADO';
$string['pluginname'] = 'Formato de contacto';
