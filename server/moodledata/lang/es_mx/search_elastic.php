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
 * Strings for component 'search_elastic', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   search_elastic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfail'] = 'No se pudo añadir documento al índice';
$string['fileindexing'] = 'Habilitar indización de archivo';
$string['fileindexing_help'] = 'Si su instalación de Elasticsearch lo soporta, esta característica le permite a Moodle enviar archivos para ser indizados.';
$string['fileindexsettings'] = 'Configuraciones de indización de archivo';
$string['fileindexsettings_desc'] = 'Configurar indización de archivo para el motor de búsqueda Elasticsearch';
$string['hostname'] = 'Nombre del host';
$string['hostname_desc'] = 'El FQDN (Nombre del Dominio Completamente Calificado) del puntofinal (endpoint) del motor';
$string['index'] = 'Índice';
$string['index_desc'] = 'Índice del espacio_de_nombre (namespace) para almacenar datos de búsqueda en el backend';
$string['indexfail'] = 'No se pudo crear índice';
$string['noconfig'] = 'Falta configuración de Elasticsearch';
$string['noserver'] = 'Puntofinal (endpoint) de Elasticsearch inalcanzable';
$string['pluginname'] = 'Elastic';
$string['pluginname_desc'] = 'Backend de búsqueda para el motor de búsqueda Elasticsearch';
$string['port'] = 'Puerto';
$string['port_desc'] = 'El puerto del puntofinal (endpoint) del motor Elasticsearch';
$string['region'] = 'Región';
$string['region_desc'] = 'La región AWS en donde está la instancia Elasticsearch, por ejemplo ap-southeast-2';
$string['searchinfo'] = 'Consultas de búsqueda';
$string['searchinfo_help'] = 'El campo a ser buscado puede ser especificado al prefijar la consulta de búsqueda con \'title:\', \'content:\', \'name:\', o \'intro:\'. Por ejemplo, buscar \'title:news\' regresaría resultados con la palabra \'news\' en el título.

Pueden usarse los operadores Booleanos (\'AND\', \'OR\') para combinar o excluir palabras clave.

Los caracteres comodin (\'*\' or \'?\' ) pueden ser usados para representar caracteres en la consulta de búsqueda.';
$string['sendsize'] = 'Solicitar tamaño';
$string['sendsize_desc'] = 'Algunos provedores Elasticsearch tales como AWS tienen un límite en que tan grande puede ser la carga útil (payload) HTTP. Por lo tanto, nosotros la limitamos a un tamaño en bytes.';
$string['signing'] = 'Habilitar señalización de solicitud';
$string['signing_desc'] = 'Cuando se habilita Moodle firmará cada solicitud a Elasticsearch con las credenciales debajo';
$string['signingkeyid'] = 'ID de clave';
$string['signingkeyid_desc'] = 'La ID de la clave a usar para solicitudes de ingreso';
$string['signingsecretkey'] = 'Clave Secreta';
$string['signingsecretkey_desc'] = 'La clave secreta a usar para solicitudes de ingreso';
$string['signingsettings'] = 'Configuraciones de solicitud de ingreso';
$string['signingsettings_desc'] = 'Si su configuración Elasticsearch usa Solicitud de Firma, habiíite lay configúrela debajo.

Esto generalmente solo aplica si Usted está usando Amaxon Web Service (AWS) para proporcionar su Puntofinal (endpoint) Elasticsearch';
$string['tikahostname'] = 'Nombre del host de Tika';
$string['tikahostname_desc'] = 'El FQDN (Nombre del Dominio Completamente Calificado) del puntofinal (endpoint) de Apache Tika';
$string['tikaport'] = 'Puerto de Tika';
$string['tikaport_desc'] = 'El Puerto del puntofinal (endpoint) de Apache Tika';
