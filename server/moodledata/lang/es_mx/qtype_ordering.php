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
 * Strings for component 'qtype_ordering', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   qtype_ordering
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posición absoluta';
$string['addingordering'] = 'Añadir una pregunta de Ordenar';
$string['addmoreanswers'] = 'Añadir {$a} ítems más';
$string['allornothing'] = 'Todo o nada';
$string['answer'] = 'Texto del ítem';
$string['answerheader'] = 'Ítem arrastrable {no}';
$string['correctorder'] = 'El orden correcto para estos ítems es como sigue:';
$string['defaultanswerformat'] = 'Formato de respuesta por defecto';
$string['defaultquestionname'] = 'Arrastre los siguientes ítems en el orden correcto.';
$string['editingordering'] = 'Editando pregunta de ordenar';
$string['gradedetails'] = 'Detalles de calificación';
$string['gradingtype'] = 'tipo de calificación';
$string['gradingtype_help'] = 'Elija el tipo de cálculo de calificación.

**Posición absoluta**
: Un ítem es considerado correcto si está en la misma posición que en la respuesta correcta. La puntuación más alta posible para la pregunta es **la misma que** el número de ítems mostrados al estudiante.

**Relativa al ítem siguiente (excluyendo al último)**
: Un ítem es considerado correcto si es seguido por el mismo ítem que en la respuesta correcta. El ítem en la última posición no es revisado. Así, el máximo puntaje posible para la pregunta es **uno menos que** el número de ítems mostrados al estudiante.

**Relativa al ítem siguiente (incluyendo al último)**
: Un ítem es considerado correcto si es seguido por el mismo ítem que en la respuesta correcta. Esto incluye al último ítem que no debe de tener a ningun otro ítem después de él. Así, el máximo puntaje posible para la pregunta es **el mismo que** el número de ítems mostrados al estudiante.

**Relativa a ambos, el anterior y el siguiente ítem**
: Un ítem es considerado correcto si el anterior y el siguiente ítem son los mismos  que los que están en la respuesta correcta. El primer ítem no debe de tener ningún ítem previo, y el último ítem no debe tener un ítem posterior. Así, hay dos puntos posibles para cada ítem, y el puntaje máximo posible para la pregunta es **el doble del** número de ítems mostrados al estudiante.

**Relativa a TODOS los ítems anteriores y siguientes**
: Un ítem es considerado correcto si  está precedido por todos los mismos ítems que están en la respuesta correcta, y si es seguido por todos los mismos ítems que en la respuesta correcta. El orden de los ítems anteriores no importa, ni tampoco importa el orden de los ítems siguientes. Así, elsi  ***n*** ítems son mostrados al estudiante, el número de puntos disponibles para cada ítem es de ***(n - 1)***, y lapuntuación máxima disponible para la pregunta es de ***n x (n - 1)*** lo que es lo mismo que ***(n² - n)***.';
$string['horizontal'] = 'Horizontal';
$string['layouttype'] = 'Acomodo de ítems';
$string['layouttype_help'] = 'Elija si mostrar los ítems horizontalmente o verticalmente.';
$string['longestcontiguoussubset'] = 'Subconjunto contiguo más largo';
$string['longestorderedsubset'] = 'Subconjunto ordenado más largo';
$string['noresponsedetails'] = 'Lo siento, no hay detalles diponibles acerca de la respuesta a esta pregunta.';
$string['noscore'] = 'Sin puntaje';
$string['notenoughanswers'] = 'Las preguntas de ordenamiento deben tener más de {$a} respuestas.';
$string['pluginname'] = 'Orden';
$string['pluginnameadding'] = 'Añadir una pregunta de orden';
$string['pluginnameediting'] = 'Editar una pregunta de orden';
$string['pluginname_help'] = 'Varios ítems se muestran desordenadamente. Los ítems pueden arrastrarse a un orden correcto.';
$string['pluginnamesummary'] = 'Poner ítems desordenados en un orden correcto.';
$string['relativeallpreviousandnext'] = 'Relativo a TODOS los ítems anteriores y siguientes';
$string['relativenextexcludelast'] = 'Relativo al siguiente ítem (excluyendo al último)';
$string['relativenextincludelast'] = 'Relativo al siguiente ítem (incluyendo al último)';
$string['relativeonepreviousandnext'] = 'relativo a ambos, el ítem anterior y el siguiente';
$string['removeeditor'] = 'Quitar editor HTML';
$string['removeitem'] = 'Quitar ítem arrastrable';
$string['scoredetails'] = 'Aquí están los puntajes para cada ítem en su respuesta:';
$string['selectall'] = 'Selecionar todos los ítems';
$string['selectcontiguous'] = 'Seleccionar un subconjunto de ítems contiguos';
$string['selectcount'] = 'Tamaño del subconjunto';
$string['selectcount_help'] = 'El número de ítems que se mostrarán cuando aparezca la pregunta en un examen.';
$string['selectrandom'] = 'Seleccionar un subconjunto aleatorio de ítems';
$string['selecttype'] = 'tipo de selección de ítem';
$string['selecttype_help'] = 'Elegir si es que se muestran todoslos ítems o un subconjunto de ítems.';
$string['showgrading'] = 'Detalles de calificación';
$string['showgrading_help'] = 'Elija si mostrar u ocultar detalles de los cálculos de puntuación cuando un estudiante revisa una respuesta a esta pregunta de Ordenamiento.';
$string['vertical'] = 'Vertical';
