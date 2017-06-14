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
 * Strings for component 'block_stash', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   block_stash
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Añadir un ítem';
$string['addnewdrop'] = 'Añadir nueva localización';
$string['addtoinventory'] = 'Añadir un ítem al inventario.';
$string['aftercreatinglocationhelp'] = 'Una vez que Usted haya creado el ítem y la localización, Usted necesitará añadir un  fragmento de código (\'\'snippet\'\') para que se muestre el ítem. Después de personalizar por cuanto tiempo se mostrará el ítem a sus estudiantes, copie el código (\'\'snippet\'\') inferior y péguelo en su contenido;  por ejemplo, en la descripción de una tarea.';
$string['appearance'] = 'Apariencia';
$string['backtostart'] = 'Regresar a la pantalla principal';
$string['buttontext'] = 'texto del botón';
$string['copypaste'] = 'Copie y pegue ésto en un editor en diferentes actividades regadas en su curso.';
$string['deletedrop'] = 'Eliminar {$a}';
$string['deleteitem'] = 'Eliminar {$a}';
$string['dropa'] = 'Localización \'{$a}\\';
$string['dropname'] = 'Localización';
$string['dropname_help'] = 'el nombre de la localización solamente es útil para que Usted las organize. No será mostrado a los estudiantes.';
$string['drops'] = 'Localizaciones';
$string['drops_help'] = '<p>Las localizaciones son lugares en donde estan sus ítems en el  <em>mundo virtual</em>. Sin una <em>localización</em> un ítem no puede ser colectado por un estudiante.</p>
<p>Las localizaciones vienen con algunas opciones, incluyendo el número de veces que un solo estudiante puede colectarlas y que tan frecuentemente reaparecerán después de ser colectadas.</p>
<p>Por ejemplo, si sus estudiantes necesitan un <em>ítem clave (llave) </em> para acceder a una actividad, Usted muy probablemente lo configurará de forma tal que sus estudiantes solamente puedan colectar (la llave) una vez en esa localización.</p>
<p>Pero si sus estudiantes necesitan  <em>5 monedas</em> para acceder a otra actividad, Usted puede configurar esta moneda para que reaparezca cada día para así motivarlos a que visiten el curso todos los días.</p>
<p>Tome nota de que los ítems no aparecen mágicamente en su curso; Usted tendrá que añadir un código especial a su contenido para que el ítem sea mostrado.</p>';
$string['dropslist'] = 'Lista de localizaciones';
$string['dropsnippet'] = 'Snippet para \'{$a}\\';
$string['dropsummary'] = 'Resumen de localización';
$string['edit'] = 'Editar';
$string['editdrop'] = 'Editar localización \'{$a}\\';
$string['edititem'] = 'Editar ítem \'{$a}\\';
$string['eginthecastle'] = 'Por ejemplo, en el castillo';
$string['eventitemacquired'] = 'Un ítem fue adquirido.';
$string['filterstashnotactive'] = 'El plugin del filtro está instalado peo todavía no ha sido habilitado. Visite <a href="{$a->activeurl}" target="_blank">esta página</a> para habilitarlo para este curso.';
$string['filterstashnotenabled'] = 'El filtro está instalado pero todavía no ha sido <a href="{$a->enableurl}" target="_blank">habilitado</a>.';
$string['filterstashnotinstalled'] = 'Nosotros le recomendamos que instale y habilite el <a href="{$a->installurl}" target="_blank">plugin de filtro para Escondite</a>. Hace mucho más fácil y confiable el usar los \'\'snippets\'\'.';
$string['image'] = 'Imagen';
$string['imageandbutton'] = 'Imagen y botón';
$string['item'] = 'Ítem';
$string['itemdetail'] = 'Detalles';
$string['itemdetail_help'] = 'Detalles acerca del ítem.';
$string['itemimage'] = 'Imagen';
$string['itemimage_help'] = 'Esta imagen será usada para mostrar el ítem. el tamaño recomendado es de 100 por 100 pixeles.';
$string['itemname'] = 'Nombre del ítem';
$string['itemname_help'] = 'El nombre del ítem; esto será mostrado a los estudiantes.';
$string['items'] = 'Ítems';
$string['itemslist'] = 'Lista de ítems';
$string['locations'] = 'Localizaciones';
$string['maxnumber'] = 'Máximo coleccionable';
$string['maxpickup'] = 'Suministros';
$string['maxpickup_help'] = 'El número de veces que el ítem puede ser colectado por cada estudiante en esta localización. Si Usted configura esto a \'1\', entonces el ítem solamente esta disponible una vez para cada estudiante. Si Usted configura esto a \'5\', cada estudiante puede adquirir el ítem cinco veces en esta localización. Un valor diferente de \'1\' es usado mejor en combinación junto con el \'Intervalo de colección\'.';
$string['navdrops'] = 'Localizaciones';
$string['navinventory'] = 'Esconder ítems';
$string['navitems'] = 'Ítems';
$string['navreport'] = 'Reporte';
$string['none'] = 'Ninguno';
$string['number'] = 'Número';
$string['pickupa'] = 'Colectar \'{$a}\\';
$string['pickupinterval'] = 'Intervalo de colección';
$string['pickupinterval_help'] = 'Esto define el tiempo requerido para que el ítem reaparezca a los estudiantes que ya lo han colectado una vez. Por ejemplo, si Usted creó un ítem \'pastel\', Usted podría configurar su intervalo de colección a 24 horas para simular el tiempo que le toma al repostero hornear otro pastel. Es importante tomar nota de que los estudiantes no son afectados por las colectas de otros estudiantes. Esta configuración no tiene efecto cuando las \'Provisiones\' se configuran a \'1\'.';
$string['pluginname'] = 'Escondite';
$string['quantity'] = 'Cantidad';
$string['reallydeletedrop'] = '¿Está Usted seguro de querer eliminar esta localización?';
$string['reallydeleteitem'] = '¿Está Usted seguro de querer eliminar este ítem?';
$string['reallyresetstashof'] = '¿Está Usted seguro de querer reiniciar completamente el escondite de {$a}?';
$string['report'] = 'Reporte';
$string['resetstashof'] = 'Reiniciar el escondite de {$a}';
$string['saveandnext'] = 'Guardar y siguiente';
$string['savechanges'] = 'Guardar cambios';
$string['settings'] = 'Configuraciones';
$string['setup'] = 'Configurar';
$string['snippet'] = 'Fragmento de código';
$string['stash'] = 'Escondite';
$string['stash:acquireitems'] = 'El usuario si puede adquirir ítems';
$string['stash:addinstance'] = 'Añadir un bloque a una página';
$string['stashdisabled'] = 'El escondite no está habilitado. ¿Se añadió el bloque al curso?';
$string['stash:view'] = 'Ver el escondite y su contenido';
$string['text'] = 'texto';
$string['thedrophasbeendeleted'] = 'La localización \'{$a}\' ha sido eliminada';
$string['theitemhasbeendeleted'] = 'el ítem \'{$a}\' ha sido eliminada';
$string['thestashofhasbeenreset'] = 'El escondite de {$a} ha sido reiniciado';
$string['unlimited'] = 'Ilimitado';
$string['whataredrops'] = '¿Qué sonlas localizaciones?';
$string['whatisadrophelp'] = 'Una localización es un lugar en donde usted pretende mostrar su ítem.';
$string['whatisthisthing'] = '¿Qué es esta cosa? ¡Yo estoy seguro de que puedo encontra un uso para ella!';
$string['whatsnext'] = '¿Qué sigue?';
$string['whatsthis'] = '¿Qué es esto?';
$string['yourinventoryisempty'] = 'Su inventario está vacío.';
