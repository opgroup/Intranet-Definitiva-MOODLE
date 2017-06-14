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
 * Strings for component 'atto_styles', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   atto_styles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config'] = 'Configuración de Estilos';
$string['config_desc'] = 'Configuración para el programilla (widget) de estilos para Atto en formato JSON.
<hr />
Por ejemplo:<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Blue box",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "box blue"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Red text",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "red"<br />
}<br />
<hr />
El atributo  <em>title</em> define el nombre para el estilo dentro del programilla de estilos de Atto.<br />
<br />
Un title también puede soportar el filtro multi-idiomas de Moodle (si estuviera habilitado), pero se necesitarán comillas dobles adicionales escapadas con una diagonal invertida.<br />
Por favor, vea el archivo README de plugins para un ejemplo.<br />
<hr />
El atributo <em>type</em> puede contener uno de dos valores posiblesa: "block" o "inline".<br />
<br />
"block" creará un \'div tag\' con la(s) clase(s) dada(s) y actuará como un elemento de nivel de bloque estándar. Ésto tomará el elemento del nivel del broque actual y puede aplicarse para más que simplemente el texto actualmente seleccionado.<br />
<br />
"inline" creará un  span tag con la(s) clase(s) dada(s) y actuará como un elemento inline estándar. Esto solamente aplica al texto acualemente seleccionado.
<hr />
El atributo <em>classes</em> toma el nombre de clase CSS que será aplicado al bloque / texto en-línea (inline).<br />
<br />
Pueden definirse clases múltiples para cada ítem, separadas por un espacio. Estas serán aplicadas al bloque / texto en-línea.<br />
<br />
The CSS class definitions can\'t be made within this plugin. You will have to add your CSS class definitions to your theme or Moodle additional HTML settings.
<hr />
On Moodle installations with bootstrap-based themes (especially <em>Boost</em>, <em>More</em> and <em>Clean</em>, you can also create styles with bootstrap CSS classes instead of defining your own classes.
<br /><br />
Por ejemplo:<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Success alert",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-success"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Info badge",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "badge badge-info"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Warning badge",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "badge badge-warning"<br />
}<br /><br />
For more information about bootstrap classes, please visit the following links in the Bootstrap 2.3 documenation (for <em>Clean</em> and <em>More</em>):
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Bootstrap labels and badges</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Bootstrap alerts</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Bootstrap helper classes</a></li>
</ul>
or in the Bootstrap 4 documenation (for <em>Boost</em>):
<ul>
<li><a href="http://v4-alpha.getbootstrap.com/components/badge/">Bootstrap badges</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/components/alerts/">Bootstrap alerts</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/utilities/">Bootstrap utilities</a></li>
</ul>';
$string['nostyle'] = 'Sin Estilo';
$string['pluginname'] = 'Estilos';
$string['settings'] = 'Configuraciones de Estilos';
