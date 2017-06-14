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
 * Strings for component 'qtype_ddmarker', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Espacios vacíos para {no} marcadores más';
$string['alttext'] = 'Texto alterno';
$string['answer'] = 'Respuesta';
$string['bgimage'] = 'Imagen de fondo';
$string['clearwrongparts'] = 'Mover marcadores colocados incorrectamente de regreso a su posición inicial por defecto debajo de imagen';
$string['coords'] = 'Coordenadas';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['draggableimage'] = 'Imagen arrastrable';
$string['draggableitem'] = 'Item arrastrable';
$string['draggableitemheader'] = 'Item arrastrable {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastrable';
$string['dropbackground'] = 'Imagen de fondo a donde arrastrar los marcadores';
$string['dropzone'] = 'Zona para soltar {$a}';
$string['dropzoneheader'] = 'Zonas para soltar';
$string['dropzones'] = 'Zonas para soltar';
$string['dropzones_help'] = 'Las zonas de soltar están definidas al escribir sus coordenadas. Al tiempo que Usted escribe, se actualiza inmediatamente la zona de previsualización arriba, para que Usted pueda posicionar las cosas por ensayo y error.

* Círculo: centro_x, centro_y; radio<br>por ejemplo: <code>80, 100; 50</code>
* Polígono: x1, y1; x2, y2; ...; xn, yn<br>por ejemplo: <code>20, 60; 100, 60; 20, 100</code>
* Rectángulo: izquierda, superior, ancho, altura<br>por ejemplo: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Los siguientes marcadores han sido colocados en el área equivocada : {$a}.';
$string['followingarewrongandhighlighted'] = 'Los siguientes marcadores fueron colocados equivocadamente: {$a}. Marcador(es) resaltado(s) se muestra(n) con la localización correcta.<br /> Elija el marcador para resaltar el área permitida..';
$string['formerror_nobgimage'] = 'Usted necesita seleccionar una imagen para usar como fondo para el área de arrastrar y colocar.';
$string['formerror_noitemselected'] = 'Usted ha especificado una zona para soltar, pero no eligió un marcador que debe arrastrarse a esa zona.';
$string['formerror_nosemicolons'] = 'No hay punto y coma en su cadena de coordenadas. Sus coordenadas para un(a)  {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Solamente se permiten etiquetas (tags)  "{$a}" en la etiqueta (label) para un marcador.';
$string['formerror_onlyusewholepositivenumbers'] = 'Por favor solamente use números enteros positivos para especificar coordenadas x,y al igual que para ancho y alto de formas. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Para una forma de polígono, Usted debe especificar al menos 3 puntos. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Usted ha escrito las mismas coordenadas dos veces.  Cada punto debe ser único. Sus coordenadas para un(a)  {$a->shape} deberían de expresarse como - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'La forma que Usted ha definido se sale de los límites de la imagen de fondo.';
$string['formerror_toomanysemicolons'] = 'Existen demasiadas partes separadas por punto y coma en las coordenadas que Usted ha especificado. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'No son reconocibles el alto y ancho que Usted ha especificado. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'No son reconocibles las coordenadas x,y que Usted ha especificado. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['infinite'] = 'Infinito';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadores';
$string['nolabel'] = 'No texto de etiqueta';
$string['noofdrags'] = 'Número';
$string['pleasedragatleastonemarker'] = 'Su respuesta no está completa; Usted debe colocar al menos un marcador sobre la imagen.';
$string['pluginname'] = 'Arrastrar y soltar marcadores';
$string['pluginnameadding'] = 'Agregando arrastrar y soltar marcadores';
$string['pluginnameediting'] = 'Editando arrastrar y soltar marcadores';
$string['pluginname_help'] = 'Arrastrar y soltar marcadores requiere que el usuario arrastre etiquetas de texto y las suelte dentro de zonas de descarga definidas sobre de una imagen de fondo.';
$string['pluginnamesummary'] = 'Los marcadores se arrastran y sueltan sobre una imagen de fondo.';
$string['previewareaheader'] = 'Vista previa';
$string['previewareamessage'] = 'Elija un archivo de imagen de fondo, escriba etiquetas de texto para los marcadores y defina las zonas para soltar sobre la imagen de fondo en donde deberán arrastrarse.';
$string['refresh'] = 'Refrescar vista previa';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Círculo';
$string['shape_circle_coords'] = 'x,y;r (donde x,y son las coordenadas del centro del círculo y r es el radio)';
$string['shape_circle_lowercase'] = 'círculo';
$string['shape_polygon'] = 'Polígono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(donde x1, y1 son las coordenadas del primer vértice, x2, y2 son las coordenadas del segundo, etc. No hay necesidad de repetir las coordenadas del primer vértice para cerrar el polígono).';
$string['shape_polygon_lowercase'] = 'polígono';
$string['shape_rectangle'] = 'Rectángulo';
$string['shape_rectangle_coords'] = 'x,y;w,h (donde x,y son las coordenadas de la esquina superior izquierda del rectángulo mientras que w y h son el ancho y alto del rectángulo)';
$string['shape_rectangle_lowercase'] = 'rectángulo';
$string['showmisplaced'] = 'Resaltar las zonas para soltar en donde no se han soltado los marcadores correctos';
$string['shuffleimages'] = 'Barajar items para arrastrar cada vez que se intente la pregunta';
$string['stateincorrectlyplaced'] = 'Mostrar cuales marcadores están colocados incorrectamente';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona para soltar {$a}';
$string['ytop'] = 'Superior';
