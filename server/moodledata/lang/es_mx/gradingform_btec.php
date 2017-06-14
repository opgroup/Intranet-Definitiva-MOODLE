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
 * Strings for component 'gradingform_btec', language 'es_mx', branch 'MOODLE_30_STABLE'
 *
 * @package   gradingform_btec
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Añadir comentario usado frecuentemente';
$string['addcriterion'] = 'Añadir criterio';
$string['alwaysshowdefinition'] = 'Mostrar definición de BTEC a estudiantes';
$string['and'] = 'y';
$string['backtoediting'] = 'Regresar a editar';
$string['btecgrading'] = 'Cómo funciona la calificación BTEC';
$string['btecgrading_help'] = 'La calificación BTEC es binaria y acumulativa. Los estudiantes pueden obtener, o no obtener, un nivel; no hay números ni porcentajes. Los estudiantes solamente pueden obtener un nivel si tienen todos los ítems en ese nivel y el nivel inferior.<br />Asíe es que, Usted solamente obtiene un Pase general si obtiene todos los criterios de PAse. Usted solamente obtiene un Mérito si tiene todos los criterios de Pase y de Mérito; Usted solamente obtiene una Distinción si obtiene todos los Pase, todos los Mérito y todos los Distinciones. Si un estudiante no obtiene todos los criterios de Pase entonces obtiene un Remitir.';
$string['btecmappingexplained'] = 'ADVERTENCIA: Su calificación para BTEC tiene una calificación máxima de <b>{$a->maxscore} puntos</b> pero la calificación máxima configurada en su actividad es {$a->modulegrade}. El puntaje máximo configurado en su calificación BTEC será escalado a la calificación máxima en el módulo.<br />
Los puntajes intermedios serán convertidos respectivamente, y redondeados a la calificación disponible más cercana.';
$string['btecnotcompleted'] = 'POr favor, proporcione una calificación válida para cada criterio';
$string['btecoptions'] = 'Opciones de calificación BTEC';
$string['btecscale'] = 'Remitir,Pase,Mérito,Distinción';
$string['btecscale_description'] = 'Sin números ni porcentajes, un nivel solamente es ganado si se ganan todos los ítems en ese nivel y en los inferiores';
$string['btecstatus'] = 'Estatus actual de calificación BTEC';
$string['clicktocopy'] = 'Elija para copiar este texto a la retroalimentación del criterio';
$string['clicktoedit'] = 'Elija para editar';
$string['clicktoeditname'] = 'Elija para editar nivel (por ejemplo, P1, D2 etc)';
$string['comments'] = 'Comentarios frecuentemente usados';
$string['commentsdelete'] = 'Eliminar comentario';
$string['commentsempty'] = 'Elija para editar comentario';
$string['commentsmovedown'] = 'Mover abajo';
$string['commentsmoveup'] = 'Mover arriba';
$string['confirmdeletecriterion'] = '¿Está Usted seguro de querer eliminar este ítem?';
$string['confirmdeletelevel'] = '¿Está Usted seguro de querer eliminar este nivel?';
$string['countofpasscriteria'] = 'Número de criterios de PASE';
$string['criteriarequirements'] = 'Requisitos para completar criterio';
$string['criterion'] = 'Criterio';
$string['criteriondelete'] = 'Eliminar criterio';
$string['criterionempty'] = 'Hacer click para editar criterio';
$string['criterionmovedown'] = 'Mover abajo';
$string['criterionmoveup'] = 'Mover arriba';
$string['d'] = 'd';
$string['definebtecmarking'] = 'Calificación BTEC';
$string['definemarkingbtec'] = 'Definir calificación BTEC';
$string['description'] = 'Descripción';
$string['descriptionmarkers'] = 'Descripción para los que califican';
$string['descriptionstudents'] = 'Descripción para estudiantes';
$string['duplicateelements'] = 'Duplicar elemento de criterio, vea';
$string['endwithadigit'] = 'debe terminar con un dígito;';
$string['err_maxscorenotnumeric'] = 'El puntaje máximo del criterio debe de ser numérico';
$string['err_nocomment'] = 'Los comentarios no pueden estar vacíos';
$string['err_nodescription'] = 'La descripción para el estudiante no puede estar vacía';
$string['err_nodescriptionmarkers'] = 'La descripción para la persona que califica no puede estar vacía';
$string['err_nomaxscore'] = 'El puntaje máximo del criterio no puede estar vacío';
$string['err_noshortname'] = 'El nombre del criterio no puede estar vacío';
$string['err_scoreinvalid'] = 'El puntaje dado para {$a->criterianame} no es válido, el puntaje máximo e: {$a->maxscore}';
$string['gradeheading'] = 'Edición de calificación BTEC';
$string['gradelevels'] = 'Niveles de Calificación';
$string['gradelevels_help'] = 'Los nombres de los criterios deben de comenzar con P, M or D (Pase, Mérito or Distinción) y deben de seguir con un número; por ejemplo: P1 o M2 o D3 etc';
$string['gradingof'] = 'calificación {$a}';
$string['hidemarkerdesc'] = 'Ocultar descripción de criterio para calificar';
$string['hidestudentdesc'] = 'Ocultar descripción de criterio a estudiantes';
$string['level'] = 'Nivel';
$string['m'] = 'm';
$string['maxscore'] = 'Puntuación máxima';
$string['name'] = 'Nombre';
$string['needregrademessage'] = 'La definición para calificar BTEC fue cambiada después de que este estudiante fuera calificado. El estudiante no puede ver  esta calificación BTEC hasta que Usted revise la calificación BTEC y actualice la calificación.';
$string['no'] = 'no';
$string['p'] = 'p';
$string['pluginname'] = 'Calificación BTEC';
$string['previewbtecmarking'] = 'Previsualizar calificación BTEC';
$string['regrademessage1'] = 'Usted está a punto de guardar cambios a una calificación BTEC que ya había sido usada para calificar. Por favor, indique si las calificaciones existentes necesitan revisarse. Si Usted configura esto, entonces la calificación BTEC se ocultará a los estudiantes hasta que su ítem sea re-calificado.';
$string['regrademessage5'] = 'Usted está a punto de hacer cambios significativos a una calificación BTEC que ya ha sido usada para calificar. El valor del Libro de calificaciones permanecerá sin cambios, pero la  calificación BTEC se ocultará a los estudiantes hasta que su ítem sea re-calificado.';
$string['regradeoption0'] = 'No señalar  para ser re-calificado';
$string['regradeoption1'] = 'Señalar para re-calificar';
$string['restoredfromdraft'] = 'NOTA: El último intento para calificar a esta persona no fue guardado adecuadamente, por lo que se han restaurado los borradores de calificación. Si Usted quiere cancelar estos cambios use el botón para \'Cancelar\' inferior.';
$string['save'] = 'Guardar';
$string['savebtec'] = 'Guardar calificación BTEC y hacerla disponible';
$string['savebtecdraft'] = 'Guardar como borrador';
$string['score'] = 'puntaje';
$string['showdescriptionstudent'] = 'Mostrar descripciones a quienes son calificados';
$string['showmarkerdesc'] = 'Mostrar descripciones de criterio para quienes califican';
$string['showmarkspercriterionstudents'] = 'Mostrar puntos por criterio a estudiantes';
$string['showstudentdesc'] = 'Mostrar descripción del criterio a estudiantes';
$string['startwithpmd'] = '{$a->level} debe empezar con letras {$a->p},{$a->m} o {$a->d};';
$string['yes'] = 'si';
