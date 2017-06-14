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
 * Strings for component 'logstore_database', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamaño del buffer';
$string['buffersize_help'] = 'El número de entradas de bitácora insertados en un lote de operación de BasedeDatos, que mejora el desempeño';
$string['conectexception'] = 'No se puede conectar a la BasedeDatos';
$string['create'] = 'Crear';
$string['databasecollation'] = 'Cotejo de BasedeDatos';
$string['databasepersist'] = 'Conexiones persistentes de BasedeDatos';
$string['databaseschema'] = 'Esquema de la BasedeDatos';
$string['databasesettings'] = 'Configuraciones de la BasedeDatos';
$string['databasesettings_help'] = 'Detalles de conexión para la BasedeDatos de bitácora externa: {$a}';
$string['databasetable'] = 'Tabla de BasedeDatos';
$string['databasetable_help'] = 'Nombre de la tabla en donde se almacenarán las bitácoras. Esta tabla debería de tener una estructura idéntica a la usada por  logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtrar bitácoras';
$string['filters_help'] = 'Habilitar filtros que excluyen que se anoten en bitácora algunas acciones.';
$string['includeactions'] = 'Incluir acciones de estos tipos';
$string['includelevels'] = 'Incluir acciones con estos niveles educativos';
$string['logguests'] = 'Apuntar en bitácora acciones de invitado';
$string['other'] = 'Otros';
$string['participating'] = 'Participando';
$string['pluginname'] = 'Bitácora de BasedeDatos externa';
$string['pluginname_desc'] = 'Un plugin de bitácora que almacena entradas de bitácora en una tabla de BasedeDatos externa.';
$string['read'] = 'Leer';
$string['tablenotfound'] = 'No se encontró la tabla especificada';
$string['teaching'] = 'Enseñanza';
$string['testingsettings'] = 'Probando configuraciones de BasedeDatos...';
$string['testsettings'] = 'Conexión de prueba';
$string['update'] = 'Actualizar';
