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
 * Strings for component 'group', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Añadido por {$a}';
$string['addgroup'] = 'Agregar usuarios al grupo';
$string['addgroupstogrouping'] = 'Agregar grupos al agrupamiento';
$string['addgroupstogroupings'] = 'Agregar/quitar grupos';
$string['adduserstogroup'] = 'Agregar/quitar usuarios';
$string['allocateby'] = 'Asignar miembros';
$string['anygrouping'] = '[Cualquier agrupamiento]';
$string['autocreategroups'] = 'Crear grupos automáticamente';
$string['backtogroupings'] = 'Regresar a agrupamientos';
$string['backtogroups'] = 'Regresar a los grupos';
$string['badnamingscheme'] = 'Debe contener exactamente un carácter \'@\' o \'#';
$string['byfirstname'] = 'Alfabéticamente por nombre y apellido';
$string['byidnumber'] = 'Alfabéticamente por número de ID';
$string['bylastname'] = 'Alfabéticamente por apellido y nombre';
$string['createautomaticgrouping'] = 'Crear agrupamiento automático';
$string['creategroup'] = 'Crear grupo';
$string['creategrouping'] = 'Crear agrupamiento';
$string['creategroupinselectedgrouping'] = 'Crear grupo en agrupamiento';
$string['createingrouping'] = 'Agrupamiento de grupos auto-creados';
$string['createorphangroup'] = 'Crear un grupo huérfano';
$string['databaseupgradegroups'] = 'La versión de grupos es ahora {$a}';
$string['defaultgrouping'] = 'Agrupamiento por defecto';
$string['defaultgroupingname'] = 'Agrupamiento';
$string['defaultgroupname'] = 'Grupo';
$string['deleteallgroupings'] = 'Eliminar todos los agrupamientos';
$string['deleteallgroups'] = 'Eliminar todos los grupos';
$string['deletegroupconfirm'] = '¿Está seguro de que desea eliminar el grupo \'{$a}\'?';
$string['deletegrouping'] = 'Eliminar agrupamiento';
$string['deletegroupingconfirm'] = '¿Está seguro de que desea eliminar el agrupamiento \'{$a}\'? (Los grupos dentro del agrupamiento no se eliminarán).';
$string['deletegroupsconfirm'] = '¿Está seguro de que quiere eliminar a los grupos siguientes?';
$string['deleteselectedgroup'] = 'Eliminar grupo seleccionado';
$string['editgroupingsettings'] = 'Editar ajustes de agrupamiento';
$string['editgroupsettings'] = 'Editar ajustes de grupo';
$string['enrolmentkey'] = 'Clave de inscripción';
$string['enrolmentkeyalreadyinuse'] = 'Esta clave de inscripción ya fue usada para otro grupo';
$string['enrolmentkey_help'] = 'Una clave de inscripción permite que el acceso al curso esté limitado sólo a aquellos que conocen la clave. Si se especifica una clave de inscripción grupal, entonces dicha clave no sólo permitirá a los usuarios entrar al curso, sino que los hará miembros del grupo indicado. Esto es muy útil en escuelas grandes donde hay varios grupos/profesores para la misma materia y se emplea el número de grupo (1501, 1502, 1503, 1504,...) de la tira de materias del alumno como clave de inscripción.
Tome nota de que deben habilitarse las claves de inscripción a grupos edentro de las configuraciones de la auto-inscripción; y de que también debe especificarse una clave de inscripción al curso';
$string['erroraddremoveuser'] = 'Error al agregar/quitar al usuario {$a} al grupo';
$string['erroreditgroup'] = 'Error al crear o actualizar el grupo {$a}';
$string['erroreditgrouping'] = 'Error al crear o actualizar el agrupamiento {$a}';
$string['errorinvalidgroup'] = 'Error, grupo {$a} no válido';
$string['errorremovenotpermitted'] = 'Usted no tiene permiso para remover al miembro del grupo {$a} que fue añadido automáticamente';
$string['errorselectone'] = 'Por favor, seleccione un solo grupo antes de elegir esta opción';
$string['errorselectsome'] = 'Por favor, seleccione uno o más grupos antes de elegir esta opción';
$string['evenallocation'] = 'Nota: Para conservar pareja la asignación de usuarios, el número real de miembros por grupo difiere del número que usted ha especificado.';
$string['eventgroupcreated'] = 'Grupo creado';
$string['eventgroupdeleted'] = 'Grupo eliminado';
$string['eventgroupingcreated'] = 'Agrupamiento creado';
$string['eventgroupingdeleted'] = 'Agrupamiento eliminado';
$string['eventgroupinggroupassigned'] = 'Grupo asignado a agrupamiento';
$string['eventgroupinggroupunassigned'] = 'Grupo des-asignado del agrupamiento';
$string['eventgroupingupdated'] = 'Agrupamiento actualizado';
$string['eventgroupmemberadded'] = 'Miembro de grupo añadido';
$string['eventgroupmemberremoved'] = 'Miembro de grupo removido';
$string['eventgroupupdated'] = 'Grupo actualizado';
$string['existingmembers'] = 'Miembros existentes: {$a}';
$string['filtergroups'] = 'Filtrar grupos por:';
$string['group'] = 'Grupo';
$string['groupaddedsuccesfully'] = 'Grupo {$a} agregado con éxito';
$string['groupaddedtogroupingsuccesfully'] = 'El grupo "{$a->groupname}" se añadió exitosamente al agrupamiento {$a->groupingname}';
$string['groupby'] = 'Autocrear basado en';
$string['groupdescription'] = 'Descripción del grupo';
$string['groupinfo'] = 'Información sobre el grupo seleccionado';
$string['groupinfomembers'] = 'Información sobre los miembros seleccionados';
$string['groupinfopeople'] = 'Información sobre las personas seleccionadas';
$string['grouping'] = 'Agrupamiento';
$string['groupingaddedsuccesfully'] = 'El agrupamiento {$a} se añadió exitosamente';
$string['groupingdescription'] = 'Descripción del agrupamiento';
$string['grouping_help'] = '<p>Un agrupamiento es un conjunto de grupos dentro de un curso.</p>

<p>Si se selecciona un agrupamiento, los usuarios asignados a los grupos dentro del agrupamiento podrán trabajar juntos.</p>

<p>El modo de grupo debe estar ajustado a grupos visibles o separados.</p>';
$string['groupingname'] = 'Nombre del agrupamiento';
$string['groupingnameexists'] = 'El nombre de agrupamiento {$a} ya existe en este curso. Por favor, elija otro.';
$string['groupings'] = 'Agrupamientos';
$string['groupingsection'] = 'Acceso agrupamientos';
$string['groupingsection_help'] = 'Un agrupamiento es una colección de grupos dentro de un curso. Si aquí se selecciona un agrupamiento, solamente los estudiantes asignados a grupos incluídos en este agrupamiento tendrán acceso a la sección.';
$string['groupingsonly'] = 'Sólo agrupamientos';
$string['groupmember'] = 'Miembro del Grupo';
$string['groupmemberdesc'] = 'Rol estándar de un miembro de grupo.';
$string['groupmembers'] = 'Miembros del grupo';
$string['groupmemberssee'] = 'Ver los integrantes del grupo';
$string['groupmembersselected'] = 'Miembros del grupo seleccionado';
$string['groupmode'] = 'Modo de grupo';
$string['groupmodeforce'] = 'Forzar el modo de grupo';
$string['groupmodeforce_help'] = 'Si se fuerza el modo grupo, entonces el modo de grupo en el curso se aplica a todas las actividades del curso. En ese caso se pasan por alto los ajustes del modo de grupo.';
$string['groupmode_help'] = 'Esta configuración tiene 3 opciones:

* Sin grupos
* Grupos separados - Cada miembro del grupo solamente puede ver a su propio grupo, los demás son invisibles
* Grupos visible - Cada miembro del grupo trabaja en su propio grupo, pero también puede ver a los otros grupos

El modo de grupo definido a nivel del curso es el modo por defecto para todas las actividades dentro del curso. Cada actividad que soporta grupos también puede definir su propio modo de grupo, aunque si se forza el modo de grupo a nivel del curso, la configuración del modo de grupo para cada actividad es ignorada.';
$string['groupmy'] = 'Mi grupo';
$string['groupname'] = 'Nombre del grupo';
$string['groupnameexists'] = 'El nombre de grupo \'{$a}\' ya existe en este curso; por favor, elija otro.';
$string['groupnotamember'] = 'Lo sentimos, usted no es miembro de ese grupo';
$string['groups'] = 'Grupos';
$string['groupscount'] = 'Grupos ({$a})';
$string['groupsettingsheader'] = 'Grupos';
$string['groupsgroupings'] = 'Grupos &amp; agrupamientos';
$string['groupsinselectedgrouping'] = 'Grupos en:';
$string['groupsnone'] = 'No hay grupos';
$string['groupsonly'] = 'Sólo grupos';
$string['groupspreview'] = 'Visualización previa de grupos';
$string['groupsseparate'] = 'Grupos separados';
$string['groupsvisible'] = 'Grupos visibles';
$string['grouptemplate'] = 'Grupo @';
$string['hidepicture'] = 'Ocultar imagen';
$string['importgroups'] = 'Importar grupos';
$string['importgroups_help'] = 'Los grupos pueden ser importados mediante un archivo de texto. El formato del archivo debe como sigue:

* Cada línea del archivo contiene un registro
* Cada registro es una serie de datos separados por comas
* El primer registro contiene una lista de nombres de campos que definen el formato del resto del archivo
* Es obligatorio el campo de (así escrito en inglés) groupname
* Son opcionales los campos (así escritos en inglés) description, enrolmentkey, picture, hidepicture (que significan descripción, clave de inscripción, fotografía, fotografiá oculta)';
$string['includeonlyactiveenrol'] = 'Incluir solamente inscripciones activas';
$string['includeonlyactiveenrol_help'] = 'Si se habilita, los usuarios supendidos no serán incluidos en los grupos.';
$string['javascriptrequired'] = 'Esta página requiere que Javascript esté activado.';
$string['members'] = 'Miembros por grupo';
$string['membersofselectedgroup'] = 'Miembros de:';
$string['mygroups'] = 'Mis grupos';
$string['namingscheme'] = 'Esquema de denominación';
$string['namingscheme_help'] = 'El símbolo arroba (@) puede usarse para crear grupos con nombres que contienen letras. Por ejemplo, Grupo @ puede generar grupos denominados Grupo A, Grupo B, Grupo C, etc.

El símbolo de número o gato (#) puede usarse para crear grupos con nombres que contienen letras. Por ejemplo, Grupo # puede generar grupos denominados Grupo 1, Grupo 2, Grupo 3, etc.';
$string['newgrouping'] = 'Nuevo agrupamiento';
$string['newpicture'] = 'Nueva imagen';
$string['newpicture_help'] = 'Seleccione una magen de formato JPG o PNG. La imagen será recortada a un cuadrado de tamaño de 100 por 100 pixeles.';
$string['noallocation'] = 'No asignación';
$string['nogroup'] = 'Sin grupo';
$string['nogrouping'] = 'Sin agrupamientos';
$string['nogroups'] = 'Aún no se han formado grupos en este curso';
$string['nogroupsassigned'] = 'No hay grupos asignados';
$string['nopermissionforcreation'] = 'No se puede crear el grupo "{$a}": usted no dispone de los permisos requeridos';
$string['nosmallgroups'] = 'Evitar el último grupo pequeño';
$string['notingroup'] = 'Ignorar usuarios en grupos';
$string['notingrouping'] = '[No está en un agrupamiento]';
$string['notingrouplist'] = '(NO está en grupo)';
$string['nousersinrole'] = 'No existen usuarios disponibles en el rol seleccionado';
$string['number'] = 'Número de grupos o miembros por grupo';
$string['numgroups'] = 'Número de grupos';
$string['nummembers'] = 'Miembros por grupo';
$string['othergroups'] = 'Otros grupos';
$string['overview'] = 'Visión general';
$string['potentialmembers'] = 'Miembros potenciales: {$a}';
$string['potentialmembs'] = 'Miembros potenciales';
$string['printerfriendly'] = 'Mostrar en formato para imprimir';
$string['random'] = 'al azar';
$string['removefromgroup'] = 'Eliminar al usuario del grupo {$a}';
$string['removefromgroupconfirm'] = '¿Realmente desea eliminar al usuario "{$a->user}" del grupo "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Quitar al grupo del agrupamiento';
$string['removegroupingsmembers'] = 'Quitar todos los grupos de los agrupamientos';
$string['removegroupsmembers'] = 'Quitar todos los miembros de los grupos';
$string['removeselectedusers'] = 'Eliminar usuarios seleccionados';
$string['selectfromgroup'] = 'Seleccionar miembros del grupo';
$string['selectfromgrouping'] = 'Seleccionar miembros del agrupamiento';
$string['selectfromrole'] = 'Seleccionar los miembros con rol';
$string['showgroupsingrouping'] = 'Mostrar grupos dentro del agrupamiento';
$string['showmembersforgroup'] = 'Mostrar miembros del grupo';
$string['toomanygroups'] = 'Usuarios insuficientes para formar este número de grupos (sólo hay {$a} usuarios en el rol seleccionado).';
$string['usercount'] = 'Número de usuarios';
$string['usercounttotal'] = 'Número de usuarios ({$a})';
$string['usergroupmembership'] = 'Afiliación del usuario seleccionado:';
