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
 * Strings for component 'blog', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Añadir una nueva entrada';
$string['addnewexternalblog'] = 'Registrar un blog externo';
$string['assocdescription'] = 'Si está escribiendo sobre un curso y/o módulos de actividad, selecciónelos aquí.';
$string['associated'] = '{$a} asociado';
$string['associatewithcourse'] = 'Blog acerca del curso {$a->coursename}';
$string['associatewithmodule'] = 'Blog sobre {$a->modtype}: {$a->modname}';
$string['association'] = 'Asociación';
$string['associations'] = 'Asociaciones';
$string['associationunviewable'] = 'Esta entrada no puede ser vista por otros hasta que se asocie un curso con ella o se cambie el campo \'Publicar a';
$string['autotags'] = 'Añadir estas marcas (tags)';
$string['autotags_help'] = 'Ecriba una o más marcas (tags) locales (separadas por comas) que quiera añadir automáticamente a cada entrada de blog copiadas de un blog externo a su blog local.';
$string['backupblogshelp'] = 'Si se habilita esta opción, los blogs se incluirán en los respaldos del SITIO';
$string['blockexternalstitle'] = 'Blogs externos';
$string['blocktitle'] = 'Título de bloque de marcas (tags) del blog';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog acerca de este {$a->type}';
$string['blogaboutthiscourse'] = 'Añadir una entrada en el blog de curso';
$string['blogaboutthismodule'] = 'Añadir una entrada en este asunto {$a}';
$string['blogadministration'] = 'Administración del blog';
$string['blogdeleteconfirm'] = '¿Eliminar la entrada del Blog \'{$a}\'?';
$string['blogdisable'] = 'El blog está deshabilitado';
$string['blogentries'] = 'Entradas del blog';
$string['blogentriesabout'] = 'Entradas del blog sobre {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Entradas del blog sobre {$a->course} por {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Entradas del blog sobre {$a->mod} por {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Entradas del blog sobre {$a->course} por {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Entradas del blog sobre este {$a->mod} por {$a->user}';
$string['blogentrybyuser'] = 'Entrada del blog por {$a}';
$string['blogpreferences'] = 'Preferencias del Blog';
$string['blogs'] = 'Blogs';
$string['blogscourse'] = 'Blogs del curso';
$string['blogssite'] = 'Blogs del sitio';
$string['blogtags'] = 'Marcas (tags) del Blog';
$string['cannotviewcourseblog'] = 'No tiene permiso para ver los blogs de este curso';
$string['cannotviewcourseorgroupblog'] = 'No tiene permiso para ver los blogs de este curso/grupo';
$string['cannotviewsiteblog'] = 'No tiene permiso para ver todos los blogs de este sitio';
$string['cannotviewuserblog'] = 'No tiene permiso para leer los blogs de los usuarios';
$string['configexternalblogcrontime'] = 'Con qué frecuencia comprueba Moodle los blogs externos para entradas nuevas.';
$string['configmaxexternalblogsperuser'] = 'Número de blogs externos que se permite a cada usuario enlazar a su blog Moodle.';
$string['configuseblogassociations'] = 'Habilita la asociación de las entradas del blog con cursos y módulos de curso.';
$string['configuseexternalblogs'] = 'Habilita a los usuarios para agregar enlaces a blogs externos. Moodle comprueba regularmente estos blogs, y luego copia las entradas nuevas al blog local de ese usuario.';
$string['courseblog'] = 'Blog del curso: {$a}';
$string['courseblogdisable'] = 'Los blogs del curso están deshabilitados';
$string['courseblogs'] = 'Los usuarios sólo pueden ver los blogs de las personas que comparten un curso';
$string['deleteblogassociations'] = 'Eliminar asociaciones de blog';
$string['deleteblogassociations_help'] = 'Si se selecciona esta opción, las entradas de blog quedarán desvinculadas de este curso o de las actividades o recursos del curso. Las entradas de blog no serán eliminadas.';
$string['deleteentry'] = 'Eliminar entrada';
$string['deleteexternalblog'] = 'Des-registrar este blog externo';
$string['deleteotagswarn'] = '¿Está seguro de que quiere eliminar estas marcas (tags) de todos los mensajes de blog y quitarlo del sistema?';
$string['description'] = 'Descripción';
$string['description_help'] = 'Escriba una frase o dos resumiendo el contenido de su blog externo. (Si no se suministra ninguna descripción, se utilizará la descripción registrada en su blog externo).';
$string['donothaveblog'] = 'Lo sentimos, usted no tiene su propio blog.';
$string['editentry'] = 'Editar una entrada del blog';
$string['editexternalblog'] = 'Editar este blog externo';
$string['emptybody'] = 'El cuerpo de la entrada del blog no puede estar vacío';
$string['emptyrssfeed'] = 'La URL que ha introducido no apunta a un canal RSS válido';
$string['emptytitle'] = 'El título de la entrada del blog no puede estar vacío';
$string['emptyurl'] = 'Debe especificar una URL a un canal RSS válido';
$string['entrybody'] = 'Cuerpo de entrada del blog';
$string['entrybodyonlydesc'] = 'Escriba la descripción';
$string['entryerrornotyours'] = 'Esta entrada no es suya';
$string['entrysaved'] = 'Su entrada se ha guardado';
$string['entrytitle'] = 'Título de la entrada';
$string['eventblogassociationadded'] = 'Asociación de blog creada';
$string['eventblogassociationdeleted'] = 'Asociación con Blog eliminada';
$string['eventblogentriesviewed'] = 'Entradas de blog vistas';
$string['eventblogexternaladded'] = 'Blog externo registrado';
$string['eventblogexternalremoved'] = 'Blog externo des-registrado';
$string['eventblogexternalupdated'] = 'Blog externo actualizado';
$string['evententryadded'] = 'Entrada de blog añadida';
$string['evententrydeleted'] = 'Entrada de blog eliminada';
$string['evententryupdated'] = 'Entrada del blog actualizada';
$string['eventexternalblogsviewed'] = 'Blog externo registrado visto';
$string['externalblogcrontime'] = 'Programa de cron del blog externo';
$string['externalblogdeleteconfirm'] = '¿Des-registrar este blog externo?';
$string['externalblogdeleted'] = 'Blog externo des-registrado';
$string['externalblogs'] = 'Blogs externos';
$string['feedisinvalid'] = 'Este canal no es válido';
$string['feedisvalid'] = 'Este canal es válido';
$string['filterblogsby'] = 'Filtrar entradas por...';
$string['filtertags'] = 'Marcas (tags) de filtro';
$string['filtertags_help'] = 'Usted puede emplear esta característica para filtrar las entradas que desea usar. Si especifica marcas (tags) aquí (separadas por comas) entonces únicamente las entradas con estas marcas serán copiadas desde el blog externo.';
$string['groupblog'] = 'Blog del grupo: {$a}';
$string['groupblogdisable'] = 'No está habilitado el blog de grupo';
$string['groupblogentries'] = 'Entradas de blog asociadas con {$a->coursename} por el grupo {$a->groupname}';
$string['groupblogs'] = 'Los usuarios sólo pueden ver los blogs de las personas que comparten un grupo';
$string['incorrectblogfilter'] = 'Se ha especificado un tipo incorrecto de filtro de blog';
$string['intro'] = 'Este canal RSS ha sido generado automáticamente a partir de uno o más blogs.';
$string['invalidgroupid'] = 'ID de grupo no válida';
$string['invalidurl'] = 'No se puede acceder a la URL';
$string['linktooriginalentry'] = 'Enlace a la entrada de blog original';
$string['maxexternalblogsperuser'] = 'Número máximo de blogs externos por usuario';
$string['myprofileuserblogs'] = 'Ver todas las entradas del blog';
$string['name'] = 'Nombre';
$string['name_help'] = 'Escriba un nombre descriptivo de su blog externo. (Si no se suministra ningún nombre, se utilizará el título de su blog externo).';
$string['noentriesyet'] = 'Entradas no visibles aquí';
$string['noguestpost'] = 'Los invitados no pueden enviar blogs';
$string['nopermissionstodeleteentry'] = 'No tiene el permiso necesario para eliminar esta entrada de blog';
$string['norighttodeletetag'] = 'Usted no tiene permiso para eliminar esta entrada - {$a}';
$string['nosuchentry'] = 'No existe esa entrada de blog';
$string['notallowedtoedit'] = 'No está autorizado para editar esta entrada';
$string['numberofentries'] = 'Entradas: {$a}';
$string['numberoftags'] = 'Número de marcas (tags) a mostrar';
$string['page-blog-edit'] = 'Páginas de edición de blogs';
$string['page-blog-index'] = 'Páginas de listado de blog';
$string['page-blog-x'] = 'Todas las páginas de blog';
$string['pagesize'] = 'Número de entradas de blog por página';
$string['permalink'] = 'Enlace  permanente';
$string['personalblogs'] = 'Los usuarios sólo pueden ver su propio blog';
$string['preferences'] = 'Preferencias del blog';
$string['publishto'] = 'Publicar a';
$string['publishtocourse'] = 'Usuarios que comparten curso con usted';
$string['publishtocourseassoc'] = 'Miembros del curso asociado';
$string['publishtocourseassocparam'] = 'Miembros de {$a}';
$string['publishtogroup'] = 'Usuarios que comparten grupo con usted';
$string['publishtogroupassoc'] = 'Sus miembros de grupo en el curso asociado';
$string['publishtogroupassocparam'] = 'Miembros de su grupo en {$a}';
$string['publishto_help'] = '<p>Hay tres posibilidades</p> <p><b>

Usted (borrador)</b> - Solo usted y los administradores pueden ver esta entrada.</p> <p><b>

Todos en este sitio</b> - Cualquiera registrado en el sitio puede leer esta entrada.</p> <p><b>

Todo el mundo</b> - Cualquiera (incluídos los invitados) puede leer esta entrada.</p>';
$string['publishtonoone'] = 'Usted (borrador)';
$string['publishtosite'] = 'Todos en este sitio';
$string['publishtoworld'] = 'Todo el mundo';
$string['readfirst'] = 'Lea esto primero';
$string['relatedblogentries'] = 'Entradas de blog relacionadas';
$string['retrievedfrom'] = 'Recuperado de';
$string['rssfeed'] = 'Fuente RSS del Blog';
$string['searchterm'] = 'Buscar: {$a}';
$string['settingsupdatederror'] = 'Se ha producido un error: el ajuste de preferencias del blog no ha podido actualizarse';
$string['siteblogdisable'] = 'No está habilitado el blog del sitio';
$string['siteblogheading'] = 'Blog del sitio';
$string['siteblogs'] = 'Todos los usuarios pueden ver todas las entradas del blog';
$string['tagdatelastused'] = 'Fecha última en que se usó la marca';
$string['tagparam'] = 'Marca: {$a}';
$string['tags'] = 'Marcas (tags)';
$string['tagsort'] = 'Ordenar vista de marcas por';
$string['tagtext'] = 'Texto de marca';
$string['timefetched'] = 'Hora de la última sincronización';
$string['timewithin'] = 'Mostrar marcas (tags) usadas dentro de estos días';
$string['updateentrywithid'] = 'Actualizando entrada';
$string['url'] = 'URL de canal RSS';
$string['url_help'] = 'Escriba la URL del canal RSS de su blog externo';
$string['useblogassociations'] = 'Habilitar asociaciones de blog';
$string['useexternalblogs'] = 'Habilitar blogs externos';
$string['userblog'] = 'Blog del usuario: {$a}';
$string['userblogentries'] = 'Entradas de blog por {$a}';
$string['valid'] = 'Válido';
$string['viewallblogentries'] = 'Todas las entradas sobre este {$a}';
$string['viewallmodentries'] = 'Ver todas las entradas sobre este asunto {$a->type}';
$string['viewallmyentries'] = 'Ver todas mis entradas';
$string['viewblogentries'] = 'Entradas sobre este asunto {$a->type}';
$string['viewblogsfor'] = 'Ver todas las entradas para...';
$string['viewcourseblogs'] = 'Ver todas las entradas de este curso';
$string['viewentriesbyuseraboutcourse'] = 'Ver las entradas sobre este curso por {$a}';
$string['viewgroupblogs'] = 'Ver las entradas del grupo...';
$string['viewgroupentries'] = 'Entradas del grupo';
$string['viewmodblogs'] = 'Ver las entradas del módulo...';
$string['viewmodentries'] = 'Entradas del módulo';
$string['viewmyentries'] = 'Mis entradas';
$string['viewmyentriesaboutcourse'] = 'Ver mis entradas en el blog sobre este curso';
$string['viewmyentriesaboutmodule'] = 'Ver mis entradas sobre este asunto {$a}';
$string['viewsiteentries'] = 'Ver todas las entradas';
$string['viewuserentries'] = 'Ver todas las entradas por {$a}';
$string['worldblogs'] = 'Cualquiera puede ver las entradas definidas como accesibles a todos';
$string['wrongexternalid'] = 'ID de blog externo incorrecto';
$string['wrongpostid'] = 'ID de mensaje de blog erróneo';
