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
 * Strings for component 'qtype_correctwriting', language 'es_mx', branch 'MOODLE_30_STABLE'
 *
 * @package   qtype_correctwriting
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absenthintpenaltyfactor'] = 'Factor de penalización para error de pistas de muestra ausentes';
$string['absenthintpenaltyfactor_help'] = 'Para las pistas, que revelan un texto de muestra, el error de muestra ausente es un caso especial. Otros errores significan que el estudiante al menos trató de escribir algo cercano a esta muestra en cualquier parte de su respuesta, pero una muestra ausente significa que no escribió absolutamente nada. Así que para este error en particular, las pistas revelarán más información. El factor le permite a Usted incrementar el castigo para tales pistas. Si el castigo resultante excediera de 1, se dehabuilitará lapista.';
$string['absentmistakemessage'] = '{$a} está faltando';
$string['absentmistakeweight'] = 'Castigo para muestra ausente';
$string['addedmistakemessage'] = 'existe(n) "{$a}" extra';
$string['addedmistakemessage_notexist'] = '{$a} no debería de estar en la respuesta';
$string['caseno'] = 'No, minúsculas/MAYÚSCULAS no son importantes';
$string['casesensitive'] = 'Sensibilidad a minúsculas/MAYÚSCULAS';
$string['caseyes'] = 'Si, minúsculas/MAYÚSCULAS si son importantes';
$string['correctwriting'] = 'Escritura correcta';
$string['foundlexicalerrors'] = 'Hay errores léxicos en su respuesta. Por favor considere corregir los siguientes errores:';
$string['foundmistake'] = 'Hay error en su respuesta';
$string['foundmistakes'] = 'Hay errores en su respuesta';
$string['hintgradeborder'] = 'Calificación mínima para que la respuesta muestre errores';
$string['hinting'] = 'Opciones de pistas/sugerencias';
$string['hinting_help'] = 'Las opciones de pistas/sugerencias le permiten a Usted configurar disponibilidad y castigo para varias pistas. Para deshabilitar cualquier tipo de pistas, simplemente configure su castigo arriba de 1.';
$string['howtofixpic'] = 'como corregirx {$a} (image)';
$string['howtofixpichintpenalty'] = 'Castigo para la pista de "como corregir" imagen';
$string['howtofixpichintpenalty_help'] = 'La pista de imagen "como corregir" le muestra al estudiante una imagen que visualiza la corrección de erores tipográficos dentro de las fichas (tokens) o separadores faltantes entre dos fichas (tokens). El configurar el castigo arriba de 1 deshabilitará la pista.';
$string['imageanswer'] = 'Respuesta correcta:';
$string['imageresponse'] = 'Su respuesta:';
$string['langid'] = 'Idioma/lenguaje de la respuesta';
$string['langid_help'] = 'Este idioma/lenguaje se usará para \'tokenizar\' las preguntas y las respuestas a las preguntas.';
$string['lexemedescriptions'] = 'Descripción para las fichas (tokens)';
$string['lexical_analyzer'] = 'Análisis de errores tipográficos';
$string['lexicalerrorthreshold'] = 'Umbral de error léxico';
$string['lexicalerrorweight'] = 'Castigo para error léxico';
$string['maxmistakepercentage'] = 'Porcentaje máximo de errores';
$string['mistakentokens'] = 'fichas (tokens) equivocadas';
$string['movedmistakemessage'] = '{$a} fuera-de-lugar';
$string['movedmistakemessagenodescription'] = 'el "{$a->value}" en {$a->line}:{$a->position} está puesto fera -de-lugar';
$string['movedmistakeweight'] = 'Castigo para ficha (token) puesta fuera-de-lugar';
$string['objectname'] = 'pregunta';
$string['pleaseenterananswer'] = 'Por favor, escriba una respuesta';
$string['pluginname'] = 'Escritura correcta';
$string['pluginnameadding'] = 'Añadiendo una pregunta de escritura correcta';
$string['pluginnameediting'] = 'Editando una pregunta de escritura correcta';
$string['pluginname_help'] = 'Escriba la pregunta y la(s) respuesta(s) correcta(s). Cuando trate de guardar la pregunta, la respuesta se partirá en las partes con-sentido más pequeñas de los idiomas elegidos - las fichas (<b>tokens</b>). Usted necesita escribir el rol gramatical de estas fichas (tokens) para mostrarlos en el mensaje de error. Si Usted deja vacía la cadena de descripción. se usará texto simbólico en su lugar para los mensajes de error.';
$string['pluginnamesummary'] = 'Tipo de pregunta que puede encontrar automáticamente errores en l cadena (\'string\') de respuesta y calificarla con castigos. Actualmente soporta errores de secuencia de fichas (tokens): finding misplaced (encontrar fuera_de_lugar), absent (ausente) and extra (extra) tokens (fichas).';
$string['questioneditingheading'] = 'Configuraciones para edición de pregunta';
$string['sequence_analyzer'] = 'Análisis de secuencia de ficha (token)';
$string['syntax_analyzer'] = 'Análisis de cobertura de árbol';
$string['whatishint'] = 'el {$a->tokendescr} es "{$a->tokenvalue}"';
$string['whatishintpenalty'] = 'Castigo para la pista de "que es"';
$string['whatishintpenalty_help'] = 'La pista de "que es" les permite a los estudiantes el ver el valor de la ficha (token) en lugar de la descripción en el mensaje del error en comportamiento adaptivo. El configurar castigo arriba de 1 deshabilita la pista.';
$string['wheretxthint'] = 'en donde {$a} debería de ser';
