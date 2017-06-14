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
 * Strings for component 'qtype_gapfill', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   qtype_gapfill
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerdisplay'] = 'Mostrar Respuestas';
$string['answerdisplay_help'] = 'Dragdrop (Arrastrar y soltar) muestra una lista de palabras que pueden ser arrastradas hacia los huecos, gapfill (llenar_huecos) muestra los huecos sin opciones de palabras, dropdown (desplegable) muestra  la misma lista de respuestas correctas (y posiblemente incorrectas) para cada campo';
$string['blank'] = 'vacío';
$string['cannotimport'] = 'nopuedeimportar';
$string['casesensitive'] = 'MAYÚS/minúsculas';
$string['casesensitive_help'] = 'Cuando se elige esta opción, si la respuesta correcta fuera GATO, entonces gato se señalaría como una respuesta equivocada.';
$string['casesensitive_text'] = 'Una respuesta de CAT será tratada como diferente a cat.';
$string['correctanswer'] = 'Rspuesta correcta';
$string['course'] = 'Ayuda para importar';
$string['coursenotfound'] = 'Curso no encontrado; revise el nombre corto del curso';
$string['courseshortname'] = 'Nombre corto del curso';
$string['courseshortname_help'] = 'Ingrese el nombre corto del curso al que se le importarán preguntas. Esto hace una importación estándar de preguntas XML desde el archivo example_questions.xml en la carpeta del tipo de pregunta gapfill';
$string['delimitchars'] = 'Caracteres delimitadores';
$string['delimitchars_help'] = 'Cambia los caracteres que delimitan un campo y que por defecto son [ ] ,lo que resulta útil para preguntas sobre lenguajes de programación';
$string['delimitset'] = 'Caracteres delimitadores';
$string['delimitset_text'] = 'Configura los delimitadores para los huecos, de forma tal que Usted podría añadir % % para Tres tristes %tigres% tragan  %trigo% en el trigal.';
$string['disableregex'] = 'Deshabilitar Regex';
$string['disableregex_help'] = 'Deshabilitar el procesamiento de expresiones regulares y realizar una comparación estándar de cadenas. Esto puede ser útil para preguntas HTML en donde los paréntesis cuadrados  (&lt; and &gt;)  deberían de tratarse literalmente, y en matemáticas, en donde los símbolos como * deberían de verse literalmente en lugar de verlos como expresiones';
$string['disableregexset_text'] = 'Deshabilitar el procesamiento de expresiones regulares de las respuestas';
$string['displaydragdrop'] = 'arrastrar_y_soltar';
$string['displaydropdown'] = 'desplegable';
$string['displaygapfill'] = 'llenarhueco';
$string['duplicatepartialcredit'] = 'El crédito es parcial porque Usted tiene respuestas duplicadas';
$string['fixedgapsize'] = 'Tamaño fijo de los huecos';
$string['fixedgapsize_help'] = 'Al intentar contestar las preguntas, todos los huecos se configurarán al mismo tamaño que el hueco mayor. Esto remueve el tamaño del hueco como una posible pista para adivinar la respuesta correcta. Por ejemplo, si los huecos fueran [rojo] y [amarillo], sería muy evidente que la palabra \'amarillo\' iría en el hueco más grande.';
$string['fixedgapsizeset_text'] = 'Configura el tamaño de todos los huecos al tamaño del hueco mayor';
$string['gapfill'] = 'LLenarhueco .';
$string['import'] = 'Importar';
$string['importexamples'] = 'Ejemplos de Importación';
$string['moreoptions'] = 'Más opciones.';
$string['noduplicates'] = 'Sin duplicados';
$string['noduplicates_help'] = 'Cuando se elige, cada respuesta debe ser única, lo que es útil donde cada campo tiene un operador  | (or) ; por ejemplo, ¿cuales son los colores de las medallas olímpicas? y cada campo tiene [oro|plata|bronce] ; si el estudiante escribe oro en cada campo, solamente el primero tendrá puntuación (aunque los otros si tendrán su palomita de correcto). Realmente es más que nada descartar las respuestas duplicadas para fines de puntuación.';
$string['or'] = 'o';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta';
$string['pluginname'] = 'LLenar_hueco';
$string['pluginnameadding'] = 'Añadiendo una pregunta de LLenar Hueco.';
$string['pluginnameediting'] = 'Editando LLenar Hueco.';
$string['pluginname_help'] = 'Ponga las palabras para completar dentro de paréntesis cuadrados. Por ejemplo: Tres tristes [tigres] comen trigo en el [trigal]. Los modos de arrastrar_y_soltar y desplegables permiten que una lista aleatorizada de respuestas se muestre y que pueda incluir respuestas opcionales erróneas o distractores.';
$string['pluginnamesummary'] = 'Una pregunta del tipo de llenar hueco. Menos características que una pregunta tipo Cloze (multipregunta), pero con sintaxis más sencilla';
$string['questioncatnotfound'] = 'Categoría de pregunta no encontrada; haga click <a href={$a}>aquí</a> para inicializar y después en el botón para regresar del navegador';
$string['questionsmissing'] = 'Usted no ha incluido ningún campo en su texto de pregunta';
$string['visitquestions'] = 'Haga click <a href={$a}>aquí</a> para vistar las preguntas';
$string['wronganswers'] = 'Distractores.';
$string['wronganswers_help'] = 'Lista de palabras incorrectas diseñadas para distraer de las respuestas correctas. Cada palabra está separada por comas, solamente aplica en modo de arrastrarysoltar/desplegable.';
$string['yougotnrightcount'] = 'Su número de huecos llenados correctamente es {$a->num}.';
