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
 * Strings for component 'qtype_gapselect', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   qtype_gapselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Espacios vacíos para {no} opciones más';
$string['answer'] = 'Respuesta';
$string['choices'] = 'Respuestas';
$string['choicex'] = 'Opción {no}';
$string['combinedcontrolnamegapselect'] = 'caja para depositar';
$string['combinedcontrolnamegapselectplural'] = 'cajas para depositar';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['errorblankchoice'] = 'Por favor revise las opciones: La opción {$a} está vacía.';
$string['errormissingchoice'] = 'Por favor revise el texto de la pregunta: ¡ {$a} no se encontró en las opciones! Solamente están permitidos para usarse como sustituíbles los números con las opciones de respuestas especificadas.';
$string['errornoslots'] = 'El texto de la pregunta debe contener sustituíbles como [[1]] para mostrar donde van las palabras faltantes.';
$string['errorquestiontextblank'] = 'Usted debe escribir el texto de lapregunta';
$string['group'] = 'Grupo';
$string['pleaseputananswerineachbox'] = 'Por favor ponga una respuesta en cada caja';
$string['pluginname'] = 'Seleccionar palabras faltantes';
$string['pluginnameadding'] = 'Añadiendo una pregunta de seleccionar palabra faltante';
$string['pluginnameediting'] = 'Editando una pregunta de seleccionar palabras faltantes';
$string['pluginname_help'] = 'Las preguntas de seleccionar palabras faltantes requieren que el usuario seleccione las respuestas correctas de entre menús desplegables. Se usan [[1]], [[2]], [[3]], ... como remplazables dentro del texto de la pregunta, con las respuestas correctas especificadas como opciones de respuestas 1, 2, 3, ... respectivamente. Pueden añadirse opciones de respuestas extra para hacer la pregunta más difícil. Las opciones de respuestas pueden agruparse para restringir las respuestas disponibles en cada menú desplegable. Escriba el texto de la pregunta como por ejemplo "El [[1]] brincó sobre el [[2]]", y después escriba las posibles palabras que podrían funcionar en los huecos de 1 y 2 debajo.';
$string['pluginnamesummary'] = 'Las palabras faltantes en el texto de la pregunta se llenan usando menús desplegables.';
$string['shuffle'] = 'Barajar';
$string['tagsnotallowed'] = '{$a->tag} no está permitido. (Sólamente {$a->allowed} están permitidos.)';
$string['tagsnotallowedatall'] = '{$a->tag} no está permitido. (No está permitido  HTML aquí.)';
