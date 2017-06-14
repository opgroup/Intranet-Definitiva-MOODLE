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
 * Strings for component 'grades', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Actividades';
$string['addcategory'] = 'Añadir categoría';
$string['addcategoryerror'] = 'No se pudo añadir categoría.';
$string['addexceptionerror'] = 'Ocurrió un error al añadir una excepción a userid:gradeitem';
$string['addfeedback'] = 'Agregar retroalimentación';
$string['addgradeletter'] = 'Agregar letra de calificación';
$string['addidnumbers'] = 'Agregar números ID';
$string['additem'] = 'Agregar ítem de calificación';
$string['addoutcome'] = 'Añadir un resultado';
$string['addoutcomeitem'] = 'Añadir ítem de resultado';
$string['addscale'] = 'Agregar una escala';
$string['adjustedweight'] = 'Ponderación ajustada';
$string['aggregateextracreditmean'] = 'Media de calificaciones (con créditos extra)';
$string['aggregatemax'] = 'Calificación más alta';
$string['aggregatemean'] = 'Media de calificaciones';
$string['aggregatemedian'] = 'Mediana de calificaciones';
$string['aggregatemin'] = 'Calificación más baja';
$string['aggregatemode'] = 'Moda de calificaciones';
$string['aggregatenotonlygraded'] = 'Incluir calificaciones vacías';
$string['aggregateonlygraded'] = 'Excluir calificaciones vacías';
$string['aggregateonlygraded_help'] = 'Una calificación vacía o faltante es la que no está presente en el libro de calificación. Puede ser de una tarea que todavía no se entregado, o de un examen que no se ha hecho o que no se hizo en su fecha. Esta configuración determina si las calificaciones vacías (faltantes) NO serán incluidas en la agregación o si serán contadas como calificaciones mínimas, por ejemplo 0 para una tarea con puntaje entre 0 y 100.

Nota del traductor: Dependiento de este ajuste, los cálculos de media, mediana y moda podrían no toman en cuenta las calificaciones faltantes, por lo que si existieran alumnos que faltan a algunos/varios/muchos exámenes sin justificación válida, la suma de calificaciones puede ser una mejor forma (pero más estricta) de evaluar su desempeño real (y la calificación que merecen) que media, mediana o moda donde examenes no hechos no afectaron la calificación. Por favor corra pruebas con datos reales en su servidor antes de extender alguna estrategia de calificación a su institución...';
$string['aggregateoutcomes'] = 'Incluir resultados en cálculo total (agregación)';
$string['aggregateoutcomes_help'] = 'Si se habilita, los resultados se incluyen en la agregación total. Esto puede causar un total de categoría inesperado (error).';
$string['aggregatesonly'] = 'Cambiar a solamente agegados';
$string['aggregatesubcatsupgradedgrades'] = 'Nota: La configuración de agregación "Agregar incluyendo subcategorías" ha sido removida como parte de una actualización del sitio. Como  "Agregar incluyendo subcategorías"  estaba siendo usada anteriormente en este curso, se le recomienda que revise este cambio en el Libro de calificaciones.';
$string['aggregatesum'] = 'Natural';
$string['aggregateweightedmean'] = 'Media ponderada de calificaciones';
$string['aggregateweightedmean2'] = 'Media ponderada simple de calificaciones';
$string['aggregation'] = 'Cálculo total (agregación)';
$string['aggregationcoef'] = 'Coeficiente de agregación';
$string['aggregationcoefextra'] = 'Puntos extra';
$string['aggregationcoefextra_help'] = 'Si la agregación es \'Natural\' o \'Media Ponderada Simple\', y el crédito extra está selecionado, la calificación máxima del ítem no es añadida a la calificación máxima de la categoría, lo que resulta en la posibilidad de alcanzar la calificación máxima (o calificaciones arriba del máximo si fueron permitidas por el administrador del sitio) en la categoría, sin que se tenga la calificación máxima en todos los ítems de calificación.

Si la agregación es \'Media de calificaciones\' (con créditos extra) y el crédito extra es configurado a un valor mayor de cero, el crédito extra es el factor por el cual se multiplicará la calificación antes de añadirla al total, después del cálculo de la media.';
$string['aggregationcoefextrasum'] = 'Actuar como puntos extra';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextrasum_help'] = '<p>Cuando se usa la estrategia de agregación "Suma de calificaciones", un elemento de calificación puede actuar como puntos extra en la categoría. Esto significa que la calificación máxima del elemento no se añadirá a la calificación máxima del total de la categoría, sino a la calificación del elemento. Por ejemplo:</p> <ul> <li>El elemento 1 se califica de 0 a 100</li> <li>El elemento 2 se califica de 0 a 75</li> <li>El elemento 1 tiene marcada la casilla "Actuar como crédito extra", pero el elemento 2 no la tiene marcada.</li> <li>Ambos elementos pertenecen a la Categoría 1, que tiene como estrategia de agregación "Suma de calificaciones"</li> <li>El total de la Categoría 1 será calificado de 0 a 75</li> <li>Un estudiante es calificado con 20 en el elemento 1 y con 70 en el elemento 2</li> <li>El total del estudiante en la Categoría 1 será de 75/75 (20+70 = 90 pero el elemento 1 actúa sólo como crédito extra, de modo que lleva al total a su máximo valor)</li> </ul>';
$string['aggregationcoefextraweight'] = 'Ponderación del crédito extra';
$string['aggregationcoefextraweight_help'] = '<p>Un valor mayor que 0 trata las calificaciones de este elemento de calificación como crédito extra durante la agregación. El número es un factor por el cual se multiplicará el valor de la calificación antes de agregarse a la suma de todas las calificaciones, pero el elemento en sí mismo no será contado en la división. Por ejemplo:</p>

<ul>
    <li>El elemento 1 es calificado de 0 a 100 y el valor de su "crédito extra" se fija en 2</li>
    <li>El elemento 2 es calificado de 0 a 100 y el valor de su "crédito extra" se deja en 0.0000</li>
    <li>El elemento 2 es calificado de 0 a 100 y el valor de su "crédito extra" se deja en 0.0000</li>
    <li>Los 3 elementos pertenecen a la Categoría 1, que tiene como estrategia de agregación "Media de las calificaciones (con créditos extra)"</li>
    <li>Un estudiante consigue una calificación de 20 en el elemento 1, 40 en el 2 y 70 en el 3</li>
    <li>El total del estudiante en la Categoría 1 será de 95/100 puesto que 20*2 + (40 + 70)/2 = 95</li>
</ul>';
$string['aggregationcoefweight'] = 'Peso del ítem';
$string['aggregationcoefweight_help'] = '<p>Ponderación aplicada a todas las calificaciones en este elemento de calificación durante la agregación con otros elementos de calificación.</p>';
$string['aggregation_help'] = 'La agregación determina cómo se combinan las calificaciones en una categoría, tales como:

* Media de calificaciones - La suma de todas las calificaciones dividida por el número total de calificaciones
* Mediana de las calificaciones - El valor del elemento medio cuando las calificaciones se ordenan de menor a mayor
* Calificación más baja
* Calificación más alta
* Moda de calificaciones  - La calificación que se encuentra con más frecuencia
* Natural - la suma de todos los valores de calificaciones escalada por ponderación';
$string['aggregationhintdropped'] = '(Omitida)';
$string['aggregationhintexcluded'] = '(Excluída)';
$string['aggregationhintextra'] = '(Crédito extra)';
$string['aggregationhintnovalue'] = '(Vacía)';
$string['aggregationofa'] = 'Agregación de {$a}';
$string['aggregationposition'] = 'Posición del resultado del cálculo';
$string['aggregationposition_help'] = '<p>Define la posición de la columna total de agregación en el informe relacionado con las calificaciones que están siendo agregadas en los reportes del libro de calificaciones.</p>';
$string['aggregationsvisible'] = 'Tipos de estrategias de cálculo de agregación';
$string['aggregationsvisiblehelp'] = 'Seleccione todos los tipos de cálculo de agregación que deberían estar disponibles. Mantenga pulsada la tecla Control para seleccionar múltiples ítems.

Nota del traductor: Debido a que los cálculos de media, mediana y moda podrían no tomar en cuenta los valores faltantes, si existieran alumnos que faltan a algunos/varios/muchos exámenes sin justificación válida, la suma de calificaciones puede ser una mejor forma (pero más estricta) de evaluar su desempeño real (y la calificación que merecen) que media, mediana o moda. Por favor corra pruebas con datos reales en su servidor antes de extender alguna estrategia de calificación a su institución...';
$string['allgrades'] = 'Todas las calificaciones por categoría';
$string['allstudents'] = 'Todos los estudiantes';
$string['allusers'] = 'Todos los usuarios';
$string['autosort'] = 'Ordenación automática';
$string['availableidnumbers'] = 'Números ID disponibles';
$string['average'] = 'Promedio';
$string['averagesdecimalpoints'] = 'Nº de decimales en el promedio de las columnas';
$string['averagesdecimalpoints_help'] = '<p>Especifica el número de decimales a mostrar en la media de cada columna. Si se selecciona Heredar, se usará el tipo de vista para cada columna.</p>';
$string['averagesdisplaytype'] = 'Modo de visualización en el promedio de las columnas';
$string['averagesdisplaytype_help'] = '<o>Especifica como se presenta la media para cada columna. Si se selecciona Heredar, se usará el tipo de vista para cada columna.</p>';
$string['backupwithoutgradebook'] = 'El respaldo no contiene la configuración del Libro de Calificaciones';
$string['badgrade'] = 'La calificación suministrada no es válida';
$string['badlyformattedscale'] = 'Por favor, escriba una lista de valores separados por comas (se requieren al menos dos valores).';
$string['baduser'] = 'El usuario suministrado no es válido';
$string['bonuspoints'] = 'Puntos extra';
$string['bulkcheckboxes'] = 'Casillas de selección masivas';
$string['calculatedgrade'] = 'Calificación calculada';
$string['calculation'] = 'Cálculo';
$string['calculationadd'] = 'Agregar cálculo';
$string['calculationedit'] = 'Editar cálculo';
$string['calculation_help'] = 'Un cálculo de calificaciones es una fórmula usada para determinar las calificaciones. La fórmula debería comenzar con el signo igual (=) y puede usar operadores matemáticos comunes tales como valor máximo, valor mínimo o suma. Si se desea, pueden incluirse otros ítems de calificación en el cálculo tecleando los números ID encerrados entre corchetes (paréntesis cuadrados) dobles.';
$string['calculationsaved'] = 'Cálculo guardado';
$string['calculationview'] = 'Ver cálculo';
$string['cannotaccessgroup'] = 'Lo sentimos, no se puede acceder a las calificaciones del grupo seleccionado.';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryedit'] = 'Editar categoría';
$string['categoryname'] = 'Nombre de la categoría';
$string['categorytotal'] = 'Total categoría';
$string['categorytotalfull'] = 'Total {$a->category}';
$string['categorytotalname'] = 'Nombre de la categoría total';
$string['changedefaults'] = 'Cambiar valores por defecto';
$string['changereportdefaults'] = 'Cambiar valores por defecto del reporte';
$string['chooseaction'] = 'Seleccione una acción...';
$string['choosecategory'] = 'Seleccionar categoría';
$string['combo'] = 'Tabuladores y menú desplegable';
$string['compact'] = 'Compactar';
$string['componentcontrolsvisibility'] = 'El hecho que este item de calificación está oculto es controlado por la configuración de la actividad.';
$string['contract'] = 'Contraer categoría';
$string['contributiontocoursetotal'] = 'Contribución al total del curso';
$string['controls'] = 'Controles';
$string['courseavg'] = 'Promedio del curso';
$string['coursegradecategory'] = 'Categoría de calificación de curso';
$string['coursegradedisplaytype'] = 'Forma de mostrar calificación del curso';
$string['coursegradedisplayupdated'] = 'La forma de mostrar la calificación del curso ha sido actualizada.';
$string['coursegradesettings'] = 'Ajustes de la calificación del curso';
$string['coursename'] = 'Nombre del curso';
$string['coursescales'] = 'Escalas del curso';
$string['coursesettings'] = 'Ajustes del curso';
$string['coursesettingsexplanation'] = 'Las configuraciones del curso determinan cómo se ve el libro de calificación para todos los participantes del curso.';
$string['coursesiamtaking'] = 'Cursos que yo estoy tomando';
$string['coursesiamteaching'] = 'Cursos que yo estoy enseñando';
$string['coursetotal'] = 'Total del curso';
$string['createcategory'] = 'Crear categoría';
$string['createcategoryerror'] = 'No se ha podido crear una categoría nueva';
$string['creatinggradebooksettings'] = 'Creando configuraciones de libro de calificaciones';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Agregación padre actual.';
$string['curveto'] = 'Curvar a';
$string['decimalpoints'] = 'Puntos decimales globales';
$string['decimalpoints_help'] = '<p>Especifica el número de decimales a mostrar para cada calificación. Este ajuste no tiene efecto en los cálculos de las calificaciones, que se hacen con una precisión de 5 decimales. </p>';
$string['default'] = 'Por defecto';
$string['defaultprev'] = 'Valor por defecto ({$a})';
$string['deletecategory'] = 'Eliminar categoría';
$string['disablegradehistory'] = 'Deshabilitar historial de calificaciones';
$string['disablegradehistory_help'] = 'Deshabilitar el historial de seguimiento de cambios en la tablas de calificaciones relacionadas. Esto puede agilizar algo el funcionamiento del servidor y conservar espacio en la base de datos.';
$string['displaylettergrade'] = 'Mostrar calificaciones con letra';
$string['displaypercent'] = 'Mostrar porcentajes';
$string['displaypoints'] = 'Mostrar puntos';
$string['displayweighted'] = 'Mostrar calificaciones ponderadas';
$string['dropdown'] = 'Menú desplegable';
$string['droplow'] = 'Descartar las X más bajas';
$string['droplowestvalue'] = 'Configurar descartar el menor valor de calificación';
$string['droplowestvalues'] = 'Omitir los {$a} valore más bajos';
$string['droplow_help'] = '<p>Si se activa, esta opción descartará las X calificaciones más bajas, donde X es el valor seleccionado por esta opción. </p>';
$string['dropped'] = 'Descartadas';
$string['dropxlowest'] = 'Descartar X más bajas';
$string['dropxlowestwarning'] = 'Nota: Si usa \'descartar x más bajas\', la calificación asume que todos los ítems de la categoría tienen el mismo valor en puntos. Si dichos valores difieren, los resultados serán impredecibles';
$string['duplicatescale'] = 'Duplicar escala';
$string['edit'] = 'Editar';
$string['editcalculation'] = 'Editar cálculo';
$string['editcalculationverbose'] = 'Editar cáculo para {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Editar retroalimentación';
$string['editgrade'] = 'Editar calificación';
$string['editgradeletters'] = 'Editar letras de calificación';
$string['editoutcome'] = 'Editar resultado';
$string['editoutcomes'] = 'Editar resultados';
$string['editscale'] = 'Editar escala';
$string['edittree'] = 'Configuración';
$string['editverbose'] = 'Editar {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Habilitar AJAX';
$string['enableajax_help'] = 'Agrega una capa de funcionalidad AJAX al reporte del calificador, simplificando y agilizando las operaciones comunes. Depende de que Javascript esté activado en el navegador del usuario.';
$string['enableoutcomes'] = 'Habilitar resultados';
$string['enableoutcomes_help'] = 'Si se habilita, los ítems de calificación pueden ser calificados usando una o más escalas ligadas a declaraciones de resultados (outcome statements).';
$string['encoding'] = 'Codificación';
$string['encoding_help'] = 'Seleccione la codificación de caracteres usada para los datos. (La codificación estándar es UTF-8.) Si por error se selecciona una codificación equivocada, se notará al pre-visualizar los datos a importar.';
$string['errorcalculationbroken'] = 'Probablemente referencia circular o fórmula de cálculo rota';
$string['errorcalculationnoequal'] = 'La fórmula debe comenzar por el signo \'igual\' (=1+2)';
$string['errorcalculationunknown'] = 'Fórmula no válida';
$string['errorgradevaluenonnumeric'] = 'Recibido valor no numérico para calificación baja o alta para';
$string['errornocalculationallowed'] = 'No se permiten cálculos para este ítem';
$string['errornocategorisedid'] = 'No se ha podido conseguir una ID no categorizada.';
$string['errornocourse'] = 'No se pudo obtener información del curso';
$string['errorreprintheadersnonnumeric'] = 'Recibido valor no numérico para cabeceras de reimpresión';
$string['errorsavegrade'] = 'Lo sentimos, no se pudo guardar la calificación.';
$string['errorsettinggrade'] = 'Error al guardar la calificación de "{$a->itemname}" para el usuario con userid {$a->userid}';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Error al actualizar el ajuste "Agregar sólo ítems calificados" de la categoría de calificación ID {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Error al actualizar la configuración de "Incluir resultados en agregación (Include outcomes in aggregation)" de la categoría de calificaciones con ID {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Error al actualizar el tipo de agregación de la categoría de calificación ID {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Error al actualizar el coeficiente de agregación (ponderación o crédito extra) de la categoría de calificación ID {$a->id}';
$string['eventgradedeleted'] = 'Calificación eliminada';
$string['eventgradeviewed'] = 'Las calificaciones fueron vistas en el libro de calificaciones';
$string['eventusergraded'] = 'Usuario calificado';
$string['excluded'] = 'Excluídos';
$string['excluded_help'] = '<p>Si la opción de exclusión está habilitada, esta calificación será excluída de cualquier agregación ejecutada por cualquier elemento o categoría de orden superior.</p>';
$string['expand'] = 'Expandir categoría';
$string['export'] = 'Exportar';
$string['exportalloutcomes'] = 'Exportar todos los resultados';
$string['exportfeedback'] = 'Incluir retroalimentación en la exportación';
$string['exportformatoptions'] = 'Opciones de formato de exportación';
$string['exportonlyactive'] = 'Excluir a usuarios suspendidos';
$string['exportonlyactive_help'] = 'Incluir en exportación únicamente estudiantes cuya inscripción esté activa y que no haya sido suspendida';
$string['exportplugins'] = 'Conectores de exportación';
$string['exportsettings'] = 'Exportar ajustes';
$string['exportto'] = 'Exportar a';
$string['externalurl'] = 'URL externa';
$string['externalurl_desc'] = 'Si se usa un Libro de calificaciones externo, la URL debe especificarse aquí.';
$string['extracreditvalue'] = 'Valor de crédito extra para {$a}';
$string['extracreditwarning'] = 'Nota: Si se adscribe un crédito extra a todos los ítems de una categoría, se eliminarán del cálculo de la calificación, por lo que no existirá una puntuación total';
$string['feedback'] = 'Retroalimentación';
$string['feedbackadd'] = 'Agregar retroalimentación';
$string['feedbackedit'] = 'Editar retroalimentación';
$string['feedbackforgradeitems'] = 'Retroalimentación para {$a}';
$string['feedback_help'] = '<p>Comentarios añadidos por el profesor a la calificación. Pueden ser extensos, personalizados o un simple código que se refiere a un sistema de retroalimentación interno.</p>';
$string['feedbacks'] = 'Retroalimentaciones';
$string['feedbacksaved'] = 'Retroalimentación guardada';
$string['feedbackview'] = 'Ver retroalimentación';
$string['finalgrade'] = 'Calificación final';
$string['finalgrade_help'] = '<p>La calificación final después de que todos los cálculos han sido realizados.<p>';
$string['fixedstudents'] = 'Columna de estudiantes fijada';
$string['fixedstudents_help'] = 'Fija la columna de estudiantes en el reporte del calificador, permitiendo que las calificaciones se desplacen horizontalmente.';
$string['forceimport'] = 'Forzar importación';
$string['forceimport_help'] = 'Forzar importación de calificaciones aun y cuando las calificaciones hubiesen sido actualizadas después de que el archivo de importación fue exportado.';
$string['forceoff'] = 'Forzar: Desconectar';
$string['forceon'] = 'Forzar: Conectar';
$string['forelementtypes'] = 'para el {$a} seleccionado';
$string['forstudents'] = 'Para los estudiantes';
$string['full'] = 'Completo';
$string['fullmode'] = 'Cambiar a vista completa';
$string['generalsettings'] = 'Ajustes generales';
$string['grade'] = 'Calificación';
$string['gradeadministration'] = 'Administración de calificaciones';
$string['gradealreadyupdated'] = '{$a} calificaciones no han sido importadas, porque las calificaciones del archivo de importación son más antiguas que las del reporte del calificador. Para proceder a toda costa con la importación de calificaciones, use la opción para forzar la importación.';
$string['gradeanalysis'] = 'Análsisis de calificaciones';
$string['gradebook'] = 'Libro de calificaciones';
$string['gradebookcalculationsfixbutton'] = 'Aceptar cambios de calificaciones y corregir errores de cálculos';
$string['gradebookcalculationsuptodate'] = 'Los cálculos en el Libro de calificaciones están actualizados. Usted podría necesitar volver a cargar esta página para ver los cambios.';
$string['gradebookcalculationswarning'] = 'Nota: Se han detectado algunos errores al calcular las calificaciones mostradas en el Libro de calificaciones. Si su curso no ha iniciado  o está en progreso, se recomienda que se corrijan los errores al hacer click en el botón inferior, aunque esto resultará en que algunas calificaciones cambiarán.  Si su curso ya ha terminado y han sido enviadas las calificaciones, probablemente  Uste no quiera corregir este asunto.

La versión más nueva es {$a->currentversion}; Usted está empleando la versión del Libro de calificaciones {$a->gradebookversion}. Usted puede ver una lista de cambios en <a href="{$a->url}">Gradebook calculation changes</a>.';
$string['gradebookhiddenerror'] = 'El libro de calificaciones actualmente está configurado para esconder todo a los estudiantes';
$string['gradebookhistories'] = 'Historias de calificación';
$string['gradebooksetup'] = 'Configuración del Libro de Calificaciones';
$string['gradeboundary'] = 'Límite de la calificación con letra';
$string['gradeboundary_help'] = '<p>Un límite porcentual con el que a las calificaciones se les asignará una calificación con letra (si el tipo de visualización de calificación con Letra es utilizado). </p>';
$string['gradecategories'] = 'Categorías de calificación';
$string['gradecategory'] = 'Categoría de calificación';
$string['gradecategoryonmodform'] = 'Categoría de calificación';
$string['gradecategoryonmodform_help'] = 'Esta configuración controla la categoría en donde se colocan las calificaciones de la actividad dentro del libro de calificaciones.';
$string['gradecategorysettings'] = 'Ajustes de categoría de calificación';
$string['gradedisplay'] = 'Mostrar calificación';
$string['gradedisplaytype'] = 'Modo de mostrar calificación';
$string['gradedisplaytype_help'] = 'Especifica cómo se verán las calificaciones en el calificador y reportes de usuario. Estas calificaciones pueden mostrarse como:

* Calificaciones reales
* Como porcentajes (en referencia a las calificaciones mínima y máxima)
* Como letras';
$string['gradedon'] = 'Calificados {$a}';
$string['gradeexport'] = 'Exportar calificaciones';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'Campos personalizados de perfil en exportación de calificaciones';
$string['gradeexportcustomprofilefields_desc'] = 'Incluir estos campos personalizados de perfil en la exportación de calificaciones, separados por comas.';
$string['gradeexportdecimalpoints'] = 'Puntos decimales en la exportación de calificaciones';
$string['gradeexportdecimalpoints_desc'] = 'Número de decimales a mostrar en el archivo exportado. Puede pasarse por alto durante la exportación.';
$string['gradeexportdisplaytype'] = 'Forma de mostrar exportación de calificaciones';
$string['gradeexportdisplaytype_desc'] = 'Las calificaciones pueden mostrarse como calificaciones reales, como porcentajes (en relación a las calificaciones mínima y máxima) o como letras (A, B, C, etc...) durante la exportación. Puede pasarse por alto durante la exportación';
$string['gradeexportdisplaytypes'] = 'Tipos de visualización de exportación de calificaciones';
$string['gradeexportuserprofilefields'] = 'Campos de perfil de usuario en exportación de calificaciones';
$string['gradeexportuserprofilefields_desc'] = 'Incluir estos campos de perfil de usuario en la exportación de calificaciones, separados por comas.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'Calificaciones mín y máx iniciales';
$string['gradehelp'] = 'Ayuda sobre las calificaciones';
$string['gradehistorylifetime'] = 'Duración del historial de calificaciones';
$string['gradehistorylifetime_help'] = 'Esta opción especifica durante cuánto tiempo desea mantener el historial de cambios en las tablas de calificaciones relacionadas. Se recomienda mantenerlo todo el tiempo posible. Si experimenta problemas de funcionamiento o tiene un espacio limitado en la base de datos, pruebe con un valor más bajo.';
$string['gradeimport'] = 'Importar calificaciones';
$string['gradeimportfailed'] = 'Falló la importación de calificación durente la implantación. Detalles:';
$string['gradeitem'] = 'Ítem de calificación';
$string['gradeitemaddusers'] = 'Excluir de calificación';
$string['gradeitemadvanced'] = 'Opciones avanzadas de ítems de calificación';
$string['gradeitemadvanced_help'] = 'Seleccionar todos los ítems que se mostrarán al editar los ítems de calificación.';
$string['gradeitemislocked'] = 'Esta actividad está bloqueada en el libro de calificaciones. Los cambios que se realicen a las calificaciones NO serán copiados al libro de calificaciones hasta que sea des-bloqueada.';
$string['gradeitemlocked'] = 'Calificación bloqueada';
$string['gradeitemmembersselected'] = 'Excluídos de calificación';
$string['gradeitemminmax'] = 'Calificaciones mín y máx iniciales como se especificaron en las configuraciones del ítem de calificación';
$string['gradeitemnonmembers'] = 'Incluídos en calificación';
$string['gradeitemremovemembers'] = 'Incluir en calificación';
$string['gradeitems'] = 'Ítems de calificación';
$string['gradeitemsettings'] = 'Ajustes de ítems de calificación';
$string['gradeitemsinc'] = 'Ítems de calificación a incluir';
$string['gradeletter'] = 'Letra de calificación';
$string['gradeletter_help'] = 'Las letras de calificación son letras (A,B,C,...) o palabras (Bien, Suficiente, Excelente,...) empleadas para representar un rango de calificaciones';
$string['gradeletternote'] = 'Para eliminar una letra de calificación, simplemente vacíe cualquiera de las<br />tres áreas de texto de dicha letra y haga clic en guardar cambios.';
$string['gradeletteroverridden'] = 'Las calificaciones con letras actualmente están anuladas.';
$string['gradeletters'] = 'Letras de calificación';
$string['gradelocked'] = 'La calificación está bloqueada';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Calif. máxima';
$string['grademax_help'] = 'Este parámetro determina la calificación máxima cuando se usa \'Valor\' como \'Tipo de calificación\'. El valor máximo para cada actividad calificable se establece en la página de configuración de la actividad.';
$string['grademin'] = 'Calif. mínima';
$string['grademin_help'] = 'Este parámetro determina la calificación mínima cuando se usa \'Valor\' como \'Tipo de calificación\'.';
$string['gradeoutcomeitem'] = 'Ítem de resultado de calificación';
$string['gradeoutcomes'] = 'Resultados';
$string['gradeoutcomescourses'] = 'Resultados de cursos';
$string['gradepass'] = 'Calificación aprobatoria';
$string['gradepassgreaterthangrade'] = 'La calificación para aprobar no puede ser mayor que la máxima calificación posible {$a}';
$string['gradepass_help'] = 'Esta configuración determina la calificación mínima requerida para pasar. El valor se usa en finalización de actividad y de curso y en el libro de calificaciones, donde las calificaciones aprobatorias están resaltadas en verde y las reprobatorias en rojo.';
$string['gradepointdefault'] = 'Puntaje de calificación por defecto';
$string['gradepointdefault_help'] = 'Esta configuración determina el valor por defecto para el valor del puntaje de calificación disponible en un ítem de calificación.';
$string['gradepointdefault_validateerror'] = 'Esta configuración debe de ser un número entero entre 1 y el máximo puntaje de calificación.';
$string['gradepointmax'] = 'Máximo puntaje de calificación';
$string['gradepointmax_help'] = 'Esta configuración determina el máximo puntaje de calificación disponible en una actividad';
$string['gradepointmax_validateerror'] = 'Esta configuración debe ser un número entero entre 1 y 10000.';
$string['gradepreferences'] = 'Preferencias de Calificación';
$string['gradepreferenceshelp'] = 'Ayuda sobre preferencias de calificación';
$string['gradepublishing'] = 'Habilitar publicación';
$string['gradepublishing_help'] = 'Habilitar la publicación en exportaciones e importaciones: Puede accederse a las calificaciones exportadas accediendo a una URL, sin tener que almacenarlas en un sitio Moodle. Las calificaciones pueden importarse accediendo a dicha URL (lo que significa que un sitio Moodle puede importar calificaciones publicadas por otro sitio). Por defecto, solamente los administradores pueden usar esta característica; por favor, eduque a los usuarios antes de añadir capacidades requeridas a otros roles (hay peligro de que compartan marcadores -bookmarks- y aceleradores de descargas, restricción por IP, etc.).';
$string['gradepublishinglink'] = 'Descargar: {$a}';
$string['gradereport'] = 'Reporte de calificaciones';
$string['graderreport'] = 'Reporte del calificador';
$string['grades'] = 'Calificaciones';
$string['gradesforuser'] = 'Calificaciones de {$a->user}';
$string['gradesmoduledeletionpendingwarning'] = 'Advertencia: ¡Eliminación de actividad en progreso! Algunas calificaciones están a punto de ser eliminadas.';
$string['gradesmoduledeletionprefix'] = '[Eliminación en progreso]';
$string['gradesonly'] = 'Cambiar a solamente calificaciones';
$string['gradessettings'] = 'Ajustes';
$string['gradetype'] = 'Tipo de calificación';
$string['gradetype_help'] = 'Existen 4 tipos de calificación:

* Ninguna - No hay calificación posible
* Valor - Un valor numérico con máximo y mínimo
* Escala - Un item de una lista
* Texto - Solo retroalimentación.

Solamente pueden agregarse los tipos de calificación de valor y de escala. El tipo de calificación para un item de calificación basado en una actividad se configura en la página de configuración de la actividad.';
$string['gradevaluetoobig'] = 'Uno de los valores de calificación es mayor que la calificación máxima permitida de {$a}';
$string['gradeview'] = 'Ver calificación';
$string['gradewasmodifiedduringediting'] = 'La calificación puesta para {$a->itemname} para {$a->username} fue ignorada, porque fue actualizada más recientemente por alguien más.';
$string['gradeweighthelp'] = 'Ayuda sobre ponderación de calificaciones';
$string['groupavg'] = 'Promedio del grupo';
$string['hidden'] = 'Oculto';
$string['hiddenasdate'] = 'Mostrar fecha de envío para calificaciones ocultas';
$string['hiddenasdate_help'] = 'Si el usuario no puede ver las calificaciones ocultas, muestre la fecha de envío en lugar de \'-\'.';
$string['hidden_help'] = 'Si se marca esta opción, las calificaciones se ocultarán a los estudiantes. Se pueden ocultar si se desea hasta el día en que se hagan públicas las calificaciones una vez completado el proceso.';
$string['hiddenuntil'] = 'Permanecer oculto hasta';
$string['hiddenuntildate'] = 'Permanecer oculto hasta: {$a}';
$string['hideadvanced'] = 'Ocultar características avanzadas';
$string['hideaverages'] = 'Ocultar promedios';
$string['hidecalculations'] = 'Ocultar cálculos';
$string['hidecategory'] = 'Ocultos';
$string['hideeyecons'] = 'Ocultar iconos \'mostrar/ocultar';
$string['hidefeedback'] = 'Ocultar retroalimentación';
$string['hideforcedsettings'] = 'Ocultar ajustes forzados';
$string['hideforcedsettings_help'] = 'No mostrar configuraciones forzadas en la Interfaz de Usuario para calificar.';
$string['hidegroups'] = 'Ocultar grupos';
$string['hidelocks'] = 'Ocultar bloqueos';
$string['hidenooutcomes'] = 'Mostrar resultados';
$string['hidequickfeedback'] = 'Ocultar Retroalimentación Rápida';
$string['hideranges'] = 'Ocultar rangos';
$string['hidetotalifhiddenitems'] = '¿Ocultar totales si contienen ítems ocultos?';
$string['hidetotalifhiddenitems_help'] = 'Este ajuste especifica si los totales que contienen ítems de calificación oculta se muestran a los estudiantes, o bien si se reemplazan con un guión (-). Si se muestran, el total puede calcularse excluyendo o incluyendo dichos ítems.

Si se excluyen los ítems ocultos, el total será diferente al que el profesor ve en el reporte del calificador, puesto que el profesor siempre ve los totales calculados con todos los ítems, ocultos o visibles. Si se incluyen los ítems ocultos, los estudiantes podrán calcular estos ítems.';
$string['hidetotalshowexhiddenitems'] = 'Mostrar totales excluyendo ítems ocultos';
$string['hidetotalshowinchiddenitems'] = 'Mostrar totales incluyendo ítems ocultos';
$string['hideverbose'] = 'Ocultar {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'Ordenar por calificación ascendente';
$string['highgradedescending'] = 'Ordenar por calificación descendente';
$string['highgradeletter'] = 'Altas';
$string['identifier'] = 'Identificar al usuario por';
$string['idnumbers'] = 'Números ID';
$string['ignore'] = 'Ignorar';
$string['import'] = 'Importar';
$string['importcsv'] = 'Importar CSV';
$string['importcsv_help'] = 'Las calificaciones pueden importarse mediante un archivo CSV con el formato siguiente:

* Cada línea del archivo contiene un registro
* Cada registro es una serie de datos separados por comas o por un separador alterno
* El primer registro contiene una lista de nombres_de_campos que definen el formato del resto del archivo
* Se requiere un nombre_de_campo que contiene datos de identidad del usuario (así escritos en inglés) username, ID number o Emai

Puede obtenerse un archivo del formato correcto al exportar primeramente algunas calificaciones. Este archivo puede entonces editarse y guardarse como un archivo CSV.';
$string['importcustom'] = 'Importar como resultados  personalizadas (solamente este curso)';
$string['importerror'] = 'Ha ocurrido un error: este script no se ha invocado con los parámetros correctos.';
$string['importfailed'] = 'Importación fallida. No se importaron datos.';
$string['importfeedback'] = 'Importar retroalimentación';
$string['importfile'] = 'Importar archivo';
$string['importfilemissing'] = 'No se ha recibido ningún archivo. Regrese al formato y asegúrese de que sube un archivo válido.';
$string['importfrom'] = 'Importar de';
$string['importoutcomenofile'] = 'El archivo subido está vacío o corrupto. Por favor, verifique que es un archivo válido. El problema se detectó en la línea {$a}; esto sucede cuando las líneas de datos no tienen tantas columnas como la primera línea (cabecera) o cuando el archivo importado carece de las cabeceras esperadas. Examine el archivo exportado para ver un ejemplo de archivo con cabecera válida.';
$string['importoutcomes'] = 'Importar resultados';
$string['importoutcomes_help'] = 'Los resultados pueden importarse mediante archivo CSV con formato tal como el archivo CSV para exportar resultados';
$string['importoutcomesuccess'] = 'Resultado importado "{$a->name}" con ID #{$a->id}';
$string['importplugins'] = 'Conectores de importación';
$string['importpreview'] = 'Vista previa de la importación';
$string['importsettings'] = 'Importar ajustes';
$string['importskippednomanagescale'] = 'Usted no tiene permiso para añadir una escala nueva, por lo que se omitió el resultadoa "{$a}" que era necesaria para crear una nueva escala';
$string['importskippedoutcome'] = 'Ya existe un resultado de nombre "{$a}" en este contexto, el del archivo importado fue omitida.';
$string['importstandard'] = 'Importar como resultado estándar';
$string['importsuccess'] = 'Importación de calificaciones exitosa';
$string['importxml'] = 'Importar XML';
$string['includescalesinaggregation'] = 'Incluir escalas en la agregación';
$string['includescalesinaggregation_help'] = 'Puede incluir las escalas como números en todas las calificaciones agregadas de todos los libros de calificaciones en cada curso. PRECAUCIÓN: si modifica este ajuste todas las calificaciones serán recalculadas.';
$string['incorrectcourseid'] = 'La ID del curso es incorrecta';
$string['incorrectcustomscale'] = '(Escala personalizada incorrecta: cámbiela, por favor)';
$string['incorrectminmax'] = 'El mínimo debe ser menor que el máximo';
$string['inherit'] = 'Heredar';
$string['intersectioninfo'] = 'Info Estudiante/Calificación';
$string['invalidgradeexporteddate'] = 'Los datos de exportación son inválidos porque, o tienen más de un año de edad, o están en el futuro, o porque el formato es inválido,';
$string['item'] = 'Ítem';
$string['iteminfo'] = 'Info ítem';
$string['iteminfo_help'] = '<p>Espacio para introducir información sobre el ítem. El texto introducido no aparece en ningún otro lugar.</p>';
$string['itemname'] = 'Nombre del ítem';
$string['itemnamehelp'] = 'Nombre de este ítem, suministrado por el módulo.';
$string['items'] = 'Ítems';
$string['itemsedit'] = 'Editar ítem de calificación';
$string['keephigh'] = 'Mantener las X más altas';
$string['keephighestvalues'] = 'Conservar los {$a} valores más altos';
$string['keephigh_help'] = 'Si se activa la opción, solo se  conservarán las X calificaciones más altas, siendo X el valor seleccionado en esta opción.';
$string['keymanager'] = 'Mánager de claves';
$string['lessthanmin'] = 'La calificación otorgada en {$a->itemname} a {$a->username} es menor que el mínimo permitido';
$string['letter'] = 'Letra';
$string['lettergrade'] = 'Calificación por letra';
$string['lettergradenonnumber'] = 'Calificaciones bajas y/o altas no numéricas para';
$string['letterpercentage'] = 'Letra (porcentaje)';
$string['letterreal'] = 'Letra (real)';
$string['letters'] = 'Letras';
$string['linkedactivity'] = 'Actividad vinculada';
$string['linkedactivity_help'] = 'Esta configuración especifica una actividad a la cual está enlazada este item de resultado. Esto puede emplearse para medir el desempeño del estudiante en criterios no evaluados por la calificación de la actividad';
$string['linktoactivity'] = 'Enlazar a {$a->name} actividad {$a->title}';
$string['lock'] = 'Bloquear';
$string['locked'] = 'Bloquear';
$string['locked_help'] = 'Si se señala esta opción, las calificaciones ya no podrán ser actualizadas automáticamente por la actividad relacionada.';
$string['locktime'] = 'Bloquear desde';
$string['locktimedate'] = 'Bloqueada desde: {$a}';
$string['lockverbose'] = 'Bloquear {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Más baja';
$string['lowgradeletter'] = 'Baja';
$string['manualitem'] = 'Ítem manual';
$string['mapfrom'] = 'Mapa desde';
$string['mapfrom_help'] = 'Seleccione la columna en la hoja de cálculo que contiene los datos para identificar al usuario, tales como nombre_de_usuario, ID_del_usuario o dirección_Email.';
$string['mappings'] = 'Mapeos de ítems de calificación';
$string['mappings_help'] = 'Para cada columna de calificaciones en la hoja de cálculo, seleccione el ítem de calificación correspondiente al cual importar las calificaciones.';
$string['mapto'] = 'Mapa a';
$string['mapto_help'] = 'Seleccione los mismos datos identificadores que los seleccionados para \'Mapear de\'.';
$string['max'] = 'Más alta';
$string['maxgrade'] = 'Calif. máx.';
$string['meanall'] = 'Todas las calificaciones';
$string['meangraded'] = 'Calificaciones no vacías';
$string['meanselection'] = 'Calificaciones seleccionadas para promedios de columna';
$string['meanselection_help'] = 'Seleccione qué tipo de calificaciones se incluirán en los promedios de columna. Las celdas sin calificación se pasarán por alto, o serán calificadas con 0 (ajuste por defecto).';
$string['median'] = 'Mediana';
$string['min'] = 'Más baja';
$string['minimum_show'] = 'Mostrar calificación mínima';
$string['minimum_show_help'] = 'La calificación mínima es usada para calcular calificaciones y ponderaciones. Si no se muestra, la calificación mínima será de cero por defecto y no puede ser editada.';
$string['minmaxtouse'] = 'Calificaciones mín y máx usadas en el cálculo';
$string['minmaxtouse_desc'] = 'Esta configuración determina si es que se usan las calificaciones mínimas y máximas iniciales de cuando se dió la calificación, o las calificaciones mínimas y máximas como se especificaron en las configuraciones para el ítem de calificación, al calcular la calificación mostrada en el Libro de Calificaciones. Se recomienda que esta configuración sea modificada fuera de las horas pico, porque todas las calificaciones serán re-calculadas, lo que podría resultar en una alta carga del servidor.';
$string['minmaxtouse_help'] = 'Esta configuración determina si es que se usan las calificaciones mínimas y máximas iniciales de cuando se dió la calificación, o las calificaciones mínimas y máximas como se especificaron en las configuraciones para el ítem de calificación, al calcular la calificación mostrada en el Libro de Calificaciones.';
$string['minmaxupgradedgrades'] = 'Nota: Algunas calificaciones han sido cambiadas para poder resolver una inconsistencia en el Libro de Calificaciones causada por un cambio en las calificaciones mínima y máxima usadas al calcular la calificación mostrada. Se recomienda revisar y aceptar los cambios.';
$string['minmaxupgradefixbutton'] = 'Resolver inconsistencias';
$string['minmaxupgradewarning'] = 'Nota: Se ha detectado una inconsistencia con algunas calificaciones debido a un cambio en las calificaciones mínima y máxima usadas al calcular la calificación mostrada en el Libro de Calificaciones. Se recomienda que se resuelva la inconsistencia al hacer click en el botón inferior, aunque esto causdará que se cambien algunas calificaciones.';
$string['missingitemtypeoreid'] = 'Falta la clave del arreglo (itemtype or eid) del 2do parámetro de grade_edit_tree_column_select::get_item_cell($item, $params)';
$string['missingscale'] = 'La escala debe estar seleccionada';
$string['mode'] = 'Moda';
$string['modgrade'] = 'Calificación';
$string['modgradecantchangegradetype'] = 'Usted no puede cambiar el tipo, porque ya existen calificaciones para éste ítem.';
$string['modgradecantchangegradetypemsg'] = 'Algunas calificaciones ya han sido otorgadas, por lo que no puede cambiarse el tipo de calificación. Si Usted desea cambiar la calificación máxima, Usted debe primeramente elegir si re-escalará o no las calificaciones existentes.';
$string['modgradecantchangegradetyporscalemsg'] = 'Algunas calificaciones ya han sido otorgadas, por lo que no pueden cambiarse ni el tipo ni la escala de calificación.';
$string['modgradecantchangeratingmaxgrade'] = 'Usted no puede cambiar la calificación máxima cuando ya existen calificaciones para una actividad con valoraciones.';
$string['modgradecantchangescale'] = 'Usted no puede cambiar la escala, pues ya existen calificaciones para éste ítem.';
$string['modgradecategorycantchangegradetypemsg'] = 'Esta categoría tiene ítems de calificación asociados que han sido anulados. Por lo tanto, algunas calificaciones ya han sido otorgadas, por lo que no puede cambiarse el tipo de calificación. Si Usted desea cambiar la calificación máxima, Usted primeramente debe de elegir si re-escalará o no las calificaciones existentes.';
$string['modgradecategorycantchangegradetyporscalemsg'] = 'Esta categoría tiene ítems de calificación asociados que han sido anulados. Por lo tanto, algunas calificaciones ya han sido otorgadas, por lo que no pueden cambiarse la escala ni el tipo de calificación.';
$string['modgradecategoryrescalegrades'] = 'Re-escalar calificaciones anuladas.';
$string['modgradecategoryrescalegrades_help'] = 'Al cambiar las calificaciones máximas en un ítem del Libro de calificaciones, Usted necesita especificar si es que ésto causará que cambien también las calificaciones con porcentajes.

Si Usted configura ésto a  \'Si\', las calificaciones anuladas existentes se re-escalarán de forma tal que la calificación por porcentaje permanezca igual.

Por ejemplo, si ésta opción se  configura a \'Si\', el cambiar la calificacion máxima en un ítem de 10 a 20 causaría que una calificacion de 6/10 (60%) sea re-escalada a 12/20 (60%). Con ésta opción configurada a \'No\', la calificación permanecera sin cambios y necesitaría ajuste manual de los ítems de califcación para asegurar puntuaciones correctas.';
$string['modgradedonotmodify'] = 'No modificar calificaciones existentes';
$string['modgradeerrorbadpoint'] = 'Valor de Calificación Inválido. Ésto debe ser un número entero entre 1 y {$a}';
$string['modgradeerrorbadscale'] = 'Escala seleccionada inválida. Por favor, asegúrese de selecionar una escala de entre las seleciones siguientes.';
$string['modgrade_help'] = 'Seleccione el tipo de calificación usado para esta actividad Si se elige "escala", entonces Usted puede escoger la escala dentro  del menú desplegable de  "escala". Si se usa calificación por "puntaje" entonces Usted puede escribir la máxima calificación disponible para esta actividad.';
$string['modgrademaxgrade'] = 'Calificación máxima';
$string['modgraderescalegrades'] = 'Re-escalar calificaciones existentes';
$string['modgraderescalegrades_help'] = 'Al cambiar las calificaciones máximas dentro de un ítem del Libro de calificaciones, Usted necesita especificar si es que esta causará que también cambien las calificaciones en porcentajes existentes o no.

Si ésto se configura a \'Si\', cualquier calificación existente será re-escalada de foma tal que la calificación en porcentaje permanezca igual.

Por ejemplo, si ésta opción se configura a \'Si\', el cambiar la calificación máxima para un ítem de 10 a 20 causará que una calificación de 6/10 (60%) se re-escale a 12/20 (60%).  Con ésta opción configurada en \'No\', la calificación cambiaría de 6/10 (60%) a 6/20 (30%), lo que requeriría ajuste manual de los ítems de calificación para asegurarnos de corregir los puntajes.';
$string['modgradetype'] = 'Tipo';
$string['modgradetypenone'] = 'Ninguno';
$string['modgradetypepoint'] = 'Puntaje';
$string['modgradetypescale'] = 'Escala';
$string['morethanmax'] = 'La calificación otorgada en {$a->itemname} a {$a->username} es mayor que el máximo permitido';
$string['moveselectedto'] = 'Mover los ítems seleccionados a';
$string['movingelement'] = 'Moviendo {$a}';
$string['multfactor'] = 'Multiplicador';
$string['multfactor_help'] = '<p>Es el factor por el que se multiplicarán todas las calificaciones de este elemento de calificación, con un valor máximo para la calificación del establecido como máximo. Por ejemplo, si el multiplicador es 2 y la calificación máxima es de 100,  todos los grados menores de 50 se multiplican por dos, y todos los grados 50 y superiores se establecerán en 100.</p>';
$string['multfactorvalue'] = 'Valor multiplicador para {$a}';
$string['mustchooserescaleyesorno'] = 'Usted debe de elegir entre re-escalar calificaciones existentes o no hacerlo.';
$string['mygrades'] = 'Enlace a calificacaciones del menú del usuario';
$string['mygrades_desc'] = 'Esta configuración permite la opción para enlazar hacia un Libro de calificaciones externo desde el menú del usuario.';
$string['mypreferences'] = 'Mis preferencias';
$string['myreportpreferences'] = 'Mis preferencias de reporte';
$string['navmethod'] = 'Método de navegación';
$string['neverdeletehistory'] = 'Nunca eliminar historial';
$string['newcategory'] = 'Categoría nueva';
$string['newitem'] = 'Nuevo ítem de calificación';
$string['newoutcomeitem'] = 'Nuevo ítem de resultado';
$string['no'] = 'No';
$string['nocategories'] = 'No se han añadido o no se han encontrado las categorías de calificación para este curso';
$string['nocategoryname'] = 'No se ha dado nombre de categoría';
$string['nocategoryview'] = 'No categoría para ver por';
$string['nocourses'] = 'Aún no hay cursos';
$string['noforce'] = 'No forzar';
$string['nogradeletters'] = 'No se han ajustado las letras de calificación';
$string['nogradesreturned'] = 'No se han devuelto calificaciones';
$string['noidnumber'] = 'No número ID';
$string['nolettergrade'] = 'No calificación por letra para';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Recibido valor no numérico para';
$string['nonunlockableverbose'] = 'Esta calificación no puede desbloquearse hasta que {$a->itemname} sea desbloqueado.';
$string['nonweightedpct'] = '% no ponderado';
$string['nooutcome'] = 'Sin resultado';
$string['nooutcomes'] = 'Los ítems de resultado deben enlazarse a un resultado de curso, pero no existen resultados para este curso. ¿Quisiera crear alguno?';
$string['nopermissiontoresetweights'] = 'Sin permiso para reiniciar ponderaciones';
$string['nopublish'] = 'No publicar';
$string['noreports'] = 'Usted no está inscrito, ni estudiando en ningun curso en este sitio.';
$string['norolesdefined'] = 'No hay roles definidos en Administración > Calificaciones > Ajustes generales > Roles calificados';
$string['noscales'] = 'Los resultados deben enlazarse a una escala global o escala de curso, pero no existe ninguna. ¿Quisiera crear alguna?';
$string['noselectedcategories'] = 'no se han seleccionado categorías';
$string['noselecteditems'] = 'no se han seleccionado ítems.';
$string['notenrolled'] = 'Usted actualmente no está inscrito en ningun curso.';
$string['notteachererror'] = 'Sólo los profesores pueden usar esta opción.';
$string['nousersloaded'] = 'No se han subido usuarios';
$string['numberofgrades'] = 'Número de calificaciones';
$string['onascaleof'] = 'en una escala de {$a->grademin} a {$a->grademax}';
$string['operations'] = 'Operaciones';
$string['options'] = 'Opciones';
$string['others'] = 'Otros';
$string['outcome'] = 'Resultado';
$string['outcomeassigntocourse'] = 'Asignar otro resultado a este curso';
$string['outcomecategory'] = 'Crear resultados en categoría';
$string['outcomecategorynew'] = 'Nueva categoría';
$string['outcomeconfirmdelete'] = '¿Está seguro de querer borrar el resultado  "{$a}"?';
$string['outcomecreate'] = 'Añadir un nuevo resultado';
$string['outcomedelete'] = 'Eliminar resultado';
$string['outcomefullname'] = 'Nombre completo';
$string['outcome_help'] = 'Esta configuración determina el resultado que este ítem de calificación representará dentro del libro de calificaciones';
$string['outcomeitem'] = 'Ítem de resultado';
$string['outcomeitemsedit'] = 'Editar ítem de resultado';
$string['outcomereport'] = 'Reporte de resultado';
$string['outcomes'] = 'Resultados';
$string['outcomescourse'] = 'Resultados empleados en el curso';
$string['outcomescoursecustom'] = 'Uso personal (no quitar)';
$string['outcomescoursenotused'] = 'Estándar no usado';
$string['outcomescourseused'] = 'Usado estándar (no quitar)';
$string['outcomescustom'] = 'resultados personalizados';
$string['outcomeshortname'] = 'Nombre corto';
$string['outcomesstandard'] = 'Resultados estándar';
$string['outcomesstandardavailable'] = 'Resultados estándar disponibles';
$string['outcomestandard'] = 'Resultado estándar';
$string['outcomestandard_help'] = 'Un resultado estándar está disponible para todo el sitio, para todos los cursos.';
$string['overallaverage'] = 'Promedio global';
$string['overridden'] = 'Anuladas';
$string['overridden_help'] = 'Si se activa, la calificación no podrá ser cambiada dentro de la actividada relacionada.

Cuando se edita una calificación dentro del reporte del calificador, la casilla de anulación se activa automáticamente. Sin embargo, se puede des-activar para permitir que la calificación se pueda cambiar por medio de la actividad relacionada.';
$string['overriddennotice'] = 'La calificación final de esta actividad ha sido ajustada manualmente.';
$string['overridecat'] = 'Permitir que las calificaciones de categoría sean anuladas manualmente';
$string['overridecat_help'] = 'El deshabilitar esta configuración hace imposible que los usuarios puedan anular las calificaciones de categoría.';
$string['overridesitedefaultgradedisplaytype'] = 'Pasar por alto los valores por defecto del sitio';
$string['overridesitedefaultgradedisplaytype_help'] = '<p>Marque esta casilla de selección para habilitar la anulación de los valores por defecto del sitio al visualizar las calificaciones en el libro de calificaciones.
   Esto activa elementos en la forma que le permiten a usted definir las calificaciones en letra y los límites de su elección.</p>';
$string['overrideweightofa'] = 'Anular ponderación de {$a}';
$string['parentcategory'] = 'Categoría padre';
$string['pctoftotalgrade'] = '% de la calificación total';
$string['percent'] = 'Porcentaje';
$string['percentage'] = 'Porcentaje';
$string['percentageletter'] = 'Porcentaje (letra)';
$string['percentagereal'] = 'Porcentaje (real)';
$string['percentascending'] = 'Clasificar por porcentaje ascendente';
$string['percentdescending'] = 'Ordenar por porcentaje descendente';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Compensar';
$string['plusfactor_help'] = '<p>Es el valor que se sumará a cada calificación de este elemento de calificación, después de haber aaplicado el multiplicador.</p>';
$string['plusfactorvalue'] = 'Valor de compensación para {$a}';
$string['points'] = 'puntos';
$string['pointsascending'] = 'Clasificar por puntos ascendente';
$string['pointsdescending'] = 'Clasificar por puntos descendente';
$string['positionfirst'] = 'Primero';
$string['positionlast'] = 'Último';
$string['preferences'] = 'Preferencias';
$string['prefgeneral'] = 'General';
$string['prefletters'] = 'Letras de calificación y límites';
$string['prefrows'] = 'Filas especiales';
$string['prefshow'] = 'Mostrar/ocultar conmutadores';
$string['previewrows'] = 'Previsualizar filas';
$string['profilereport'] = 'Reporte de perfil de usuario';
$string['profilereport_help'] = 'Reporte de calificaciones usado en la página del perfil del usuario.';
$string['publishing'] = 'Publicando';
$string['publishingoptions'] = 'Opciones de publicación de calificación';
$string['quickfeedback'] = 'Retroalimentación rápida';
$string['quickgrading'] = 'Calificación rápida';
$string['quickgrading_help'] = 'Si se habilita, cuando se activa la edición, parece una caja para ingresar texto para cada calificación, lo que permite editar varias calificaciones al mismo tiempo. Los cambios son guardados y resaltados cuando se hace click en el botón para actualizar.

Observe que cuando edita una calificación dentro del reporte del calificador, se activa un indicador de anulación, que indica que esta calificación ya no podrá ser cambiada desde la actividad misma.';
$string['range'] = 'Rango';
$string['rangedecimals'] = 'Rango de puntos decimales';
$string['rangedecimals_help'] = 'El número de puntos decimales a mostrar para rango';
$string['rangesdecimalpoints'] = 'Decimales en los rangos';
$string['rangesdecimalpoints_help'] = '<p>Especifica el número de puntos decimales que se visualizarán para cada rango. Esta opción puede ser anulada por cada ítem de calificación de manera individual.</p>';
$string['rangesdisplaytype'] = 'Tipo de visualización del rango';
$string['rangesdisplaytype_help'] = '<p>Especifica como visualizar los rangos. Sí Heredar es seleccionada,
   el tipo de visualización para cada columna es usado.</p>';
$string['rank'] = 'Rango';
$string['rawpct'] = '% bruto';
$string['real'] = 'Real';
$string['realletter'] = 'Real (letra)';
$string['realpercentage'] = 'Real (porcentaje)';
$string['recalculatinggrades'] = 'recalculando calificaciones';
$string['recovergradesdefault'] = 'Recuperar calificaciones por defecto';
$string['recovergradesdefault_help'] = 'Por defecto, recuperar calificaciones antiguas cuando un usuario se vuelva a inscribir en el mismo curso (alumno repetidor).';
$string['refreshpreview'] = 'Refrescar vista previa';
$string['regradeanyway'] = 'Recalificar de todos modos';
$string['removeallcoursegrades'] = 'Eliminar todas las calificaciones';
$string['removeallcoursegrades_help'] = 'Si se selecciona, todos los ítems de calificación que fueron añadidos manualmente al Libro de calificaciones serán eliminados, junto con las calificaciones y datos sobre calificaciones anuladas, excluidas, ocultas y bloqueadas. Solamente permanecerán los ítems de calificación asociados con actividades.';
$string['removeallcourseitems'] = 'Eliminar todos los ítems y categorías';
$string['removeallcourseitems_help'] = 'Si se selecciona, todas las categorías e ítems de calificación que fueron añadidos manualmente al Libro de calificaciones serán eliminados, junto con las calificaciones y datos sobre calificaciones anuladas, excluidas, ocultas y bloqueadas. Solamente permanecerán los ítems de calificación asociados con actividades.';
$string['report'] = 'Reporte';
$string['reportdefault'] = 'Valor por defecto del reporte ({$a})';
$string['reportplugins'] = 'Conectores de reporte';
$string['reportsettings'] = 'Ajustes de reporte';
$string['reprintheaders'] = 'Reimprimir cabeceras';
$string['resetweights'] = 'Reiniciar ponderaciones de {$a->itemname}';
$string['resetweightsshort'] = 'Reiniciar ponderaciones';
$string['respectingcurrentdata'] = 'la configuración actual queda sin modificar';
$string['rowpreviewnum'] = 'Previsualizar filas';
$string['rowpreviewnum_help'] = 'Los datos a importar pueden pre-visualizarse antes de confirmar la importación. Esta configuración determina cuantas filas se muestran en la vista previa.';
$string['savechanges'] = 'Guardar cambios';
$string['savepreferences'] = 'Guardar preferencias';
$string['scaleconfirmdelete'] = '¿Está seguro de que desea eliminar la escala "{$a}"?';
$string['scaledpct'] = 'Escalado %';
$string['seeallcoursegrades'] = 'Ver todas las calificaciones del curso';
$string['select'] = 'Seleccionar {$a}';
$string['selectalloroneuser'] = 'Seleccionar todos o un usuario';
$string['selectauser'] = 'Seleccionar un usuario';
$string['selectdestination'] = 'Seleccionar destino de {$a}';
$string['separator'] = 'Separador';
$string['separator_help'] = 'Seleccione el separador usado en el archivo CSV. (Normalmente esto es una coma).';
$string['sepcolon'] = 'Dos puntos';
$string['sepcomma'] = 'Coma';
$string['sepsemicolon'] = 'Punto y coma';
$string['septab'] = 'Tabulador';
$string['setcategories'] = 'Ajusstar categorías';
$string['setcategorieserror'] = 'Debe ajustar las categorías del curso antes de poder asignarles ponderaciones.';
$string['setgradeletters'] = 'Ajustar letras de calificación';
$string['setpreferences'] = 'Ajustar preferencias';
$string['setting'] = 'Ajuste';
$string['settings'] = 'Ajustes';
$string['setweights'] = 'Ajustar pesos';
$string['showactivityicons'] = 'Mostrar iconos de actividad';
$string['showactivityicons_help'] = '<p>Permite mostrar iconos de actividad junto a los nombres de la actividad.</p>';
$string['showallhidden'] = 'Mostrar ocultos';
$string['showallstudents'] = 'Mostrar a todos los estudiantes';
$string['showanalysisicon'] = 'Mostrar icono de análisis de calificaciones';
$string['showanalysisicon_desc'] = 'Decide si se muestra el ícono de análisis de calificación por defecto. Si el módulo de la actividad lo soporta, el ícono de análisis de calificación enlaza hacia una página con una explicación más detallada de la calificación y cómo se obtuvo.';
$string['showanalysisicon_help'] = 'Si el módulo de la actividad lo soporta, el ícono de análisis de calificación enlaza hacia una página con una explicación más detallada de la calificación y cómo se obtuvo.';
$string['showaverage'] = 'Mostrar promedio';
$string['showaverage_help'] = 'Si es que se muestra o no una columna de promedio.Tome nota de que los participantes podrían estimar las calificaciones de otros estudiantes si el promedio es calculado a partir de un pequeño número de calificaciones. Por motivos de rendimiento el promedio es aproximado si depende de cualquier ítem oculto.';
$string['showaverages'] = 'Mostrar promedios de columna';
$string['showaverages_help'] = 'Muestra las medias de las columnas en el reporte del calificador.';
$string['showcalculations'] = 'Mostrar cálculos';
$string['showcalculations_help'] = 'Si se habilita, al editar, se muestra un ícono de calculadora para cada ítem de calificación y categoría con un indicador visual de que un ítem de calificación es calculado.';
$string['showcontributiontocoursetotal'] = 'Mostrar contribuciones para el total del curso';
$string['showcontributiontocoursetotal_help'] = 'Si es que se mostrará una columna que indica cuanto contribuye cada ítem de calificación hacia el porcentaje  total del curso del usuario (después de aplicar la ponderación).';
$string['showeyecons'] = 'Mostrar iconos \'mostrar/ocultar';
$string['showeyecons_help'] = 'Mostrar o no un icono de \'mostrar/ocultar\' junto a cada calificación (controlando que el usuario pueda verlo).';
$string['showfeedback'] = 'Mostrar retroalimentación';
$string['showfeedback_help'] = 'Si es que se muestra o no una columna para retroalimentación.';
$string['showgrade'] = 'Mostrar calificaciones';
$string['showgrade_help'] = 'Si es que se muestra o no una columna para calificaciones.';
$string['showgroups'] = 'Mostrar grupos';
$string['showhiddenitems'] = 'Mostrar ítems ocultos';
$string['showhiddenitems_help'] = 'Si estan totalmente ocultos los elementos de calificación o si los nombres de los elementos de calificación ocultos son visibles para los estudiantes.

* Mostrar ocultos - Los nombres de los elementos de calificación ocultos se muestran, pero las calificaciones de los estudiante están ocultas

 *Solo permanecen ocultos hasta - Los elementos de calificación con "permanecer oculto hasta" la fecha prevista se ocultan por completo hasta la fecha fijada, después de la cual todos los elementos se muestran

* No mostrar - Los elementos de calificación ocultos están completamente ocultos';
$string['showhiddenuntilonly'] = 'Permanecer oculto sólo hasta';
$string['showingaggregatesonly'] = 'Mostrando solamente agregados';
$string['showingfullmode'] = 'Mostrando vista completa';
$string['showinggradesonly'] = 'Mostrando solamente calificaciones';
$string['showlettergrade'] = 'Mostrar calificaciones con letras';
$string['showlettergrade_help'] = 'Si es que se muestra o no una columna para calificaciones con letras.';
$string['showlocks'] = 'Mostrar bloqueos';
$string['showlocks_help'] = 'Mostrar o no un icono de \'bloquear/desbloquear\' junto a cada calificación.';
$string['shownohidden'] = 'No mostrar';
$string['shownooutcomes'] = 'Ocultar resultados';
$string['shownumberofgrades'] = 'Mostrar número de calificaciones en los promedios';
$string['shownumberofgrades_help'] = 'Muestra el número de calificaciones que se están agregando junto a cada promedio, entre paréntesis. Ejemplo: 45 (34).';
$string['showonlyactiveenrol'] = 'Mostrar solamente inscripciones activas';
$string['showonlyactiveenrol_help'] = 'Esta configuración determina si solamente serán visibles en el reporte de calificaciones los estudiantes inscritos activos. Si se activa, los usuarios suspendidos no se mostrarán en el libro de calificaciones.';
$string['showpercentage'] = 'Mostrar porcentaje';
$string['showpercentage_help'] = 'Si es que se muestra o no el valor de porcentaje de cada ítem de calificación.';
$string['showquickfeedback'] = 'Mostrar Retroalimentación Rápida';
$string['showquickfeedback_help'] = 'Si se habilita, cuando se activa la edición, parece una caja para ingresar texto para cada calificación, lo que permite editar varias calificaciones al mismo tiempo. Los cambios son guardados y resaltados cuando se hace click en el botón para actualizar.

Observe que cuando edita una calificación dentro del reporte del calificador, se activa un indicador de anulación que indica que esta calificación ya no podrá ser cambiada desde la actividad misma.';
$string['showrange'] = 'Mostrar rangos';
$string['showrange_help'] = 'Si es que se muestra o no una columna para el rango.';
$string['showranges'] = 'Mostrar rangos';
$string['showranges_help'] = 'Muestra una fila que contiene el rango de calificaciones posibles para cada ítem en el reporte del calificador.';
$string['showrank'] = 'Mostrar ranking';
$string['showrank_help'] = 'Si es que se muestra o no la posición del estudiante en relación con el resto de la clase para cada elemento de calificación.';
$string['showuserimage'] = 'Mostrar imágenes de perfil del usuario';
$string['showuserimage_help'] = 'Mostrar o no la imagen del perfil del usuario junto a su nombre en el reporte del calificador.';
$string['showverbose'] = 'Mostrar {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'Mostrar ponderaciones';
$string['showweight_help'] = 'Si es que se muestra o no una columna para la ponderación de calificación.';
$string['simpleview'] = 'Vista individual';
$string['singleview'] = 'Vista individual para {$a}';
$string['sitewide'] = 'Todo el sitio';
$string['sort'] = 'ordenar';
$string['sortasc'] = 'Ordenar (ascendente)';
$string['sortbyfirstname'] = 'Ordenar por nombre';
$string['sortbylastname'] = 'Ordenar por apellido';
$string['sortdesc'] = 'Ordenar (descendente)';
$string['standarddeviation'] = 'Desviación estándar';
$string['stats'] = 'Estadísticas';
$string['statslink'] = 'Estadísticas';
$string['student'] = 'Estudiante';
$string['studentsperpage'] = 'Estudiantes por página';
$string['studentsperpage_help'] = 'Número de estudiantes a mostrar por página en el reporte del calificador.';
$string['studentsperpagereduced'] = 'Se redujo el número máximo de estudiantes por página de  {$a->originalstudentsperpage} a {$a->studentsperpage}. Considere aumentar la variable PHP max_input_vars de {$a->maxinputvars}.';
$string['subcategory'] = 'Categoría normal';
$string['submissions'] = 'Envíos';
$string['submittedon'] = 'Enviado: {$a}';
$string['sumofgradesupgradedgrades'] = 'Nota: El método de agregación "Suma de calificaciones" ha sido cambiado a "Natural" como parte de una actualización del sitio. Dado que en este curso antiguamente se usaba "Suma de calificaciones", se le recomienda que revise este cambio en el libro de calificaciones.';
$string['switchtofullview'] = 'Cambiar a vista completa';
$string['switchtosimpleview'] = 'Cambiar a vista simple';
$string['tabs'] = 'Tabuladores';
$string['topcategory'] = 'Categoría super';
$string['total'] = 'Total';
$string['totalweight100'] = 'El peso total es igual a 100';
$string['totalweightnot100'] = 'El peso total no es igual a 100';
$string['turnfeedbackoff'] = 'Desactivar retroalimentación';
$string['turnfeedbackon'] = 'Activar retroalimentación';
$string['typenone'] = 'Ninguna';
$string['typescale'] = 'Escala';
$string['typescale_help'] = 'Este parámetro determina la escala utilizada cuando se usa \'Escala\' como \'Tipo de calificación\'. La escala para cada actividad calificable se establece en la página de configuración de la actividad.';
$string['typetext'] = 'Texto';
$string['typevalue'] = 'Valor';
$string['uncategorised'] = 'Sin categorizar';
$string['unchangedgrade'] = 'Calificación sin cambios';
$string['unenrolledusersinimport'] = 'Esta importación incluye las siguientes calificaciones de los usuarios no inscritos actualmente en este curso: {$a}';
$string['unlimitedgrades'] = 'Calificaciones no limitadas';
$string['unlimitedgrades_help'] = 'Por defecto, las calificaciones están limitadas por los valores máximo y mínimo del ítem de calificación. Si se activa esta opción se eliminará ese límite, y se permitirá introducir directamente en el \'libro de calificaciones\' puntuaciones por encima del 100%.';
$string['unlock'] = 'Desbloquear';
$string['unlockverbose'] = 'Desbloquear {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'Sin uso';
$string['updatedgradesonly'] = 'Exportar sólo calificaciones nuevas o actualizadas';
$string['upgradedgradeshidemessage'] = 'Des-atender advertencia';
$string['upgradedminmaxrevertmessage'] = 'Revertir los cambios';
$string['uploadgrades'] = 'Subir calificaciones';
$string['useadvanced'] = 'Usar características avanzadas';
$string['usedcourses'] = 'Cursos usados';
$string['usedgradeitem'] = 'Ítem de calificación usado';
$string['usenooutcome'] = 'Sin usar resultados';
$string['usenoscale'] = 'No usar escala';
$string['usepercent'] = 'Usar porcentaje';
$string['user'] = 'Usuario';
$string['userenrolmentsuspended'] = 'Inscripción de usuarios suspendida';
$string['userfields_show'] = 'Mostrar campos del usuario';
$string['userfields_show_help'] = 'Mostrar campos adicionales del usuario, como direcciones Email, en el Reporte del calificador. Los campos específicos mostrados son controlados por la configuración del sitio showuseridentity';
$string['usergrade'] = 'Usuario {$a->fullname} ({$a->useridnumber}) en el ítem {$a->gradeidnumber}';
$string['userid'] = 'ID del usuario';
$string['useridnumberwarning'] = 'Usuarios sin un número ID son excluidos de la exportación, debido a que no pueden ser importados.';
$string['usermappingerror'] = 'Error de mapeo de usuario: No pudo encontrarse usuario con {$a->field} de "{$a->value}".';
$string['usermappingerrorcurrentgroup'] = 'El usuario no es miembro del grupo actual.';
$string['usermappingerrorusernotfound'] = 'Error de mapeo del usuario. No se pudo encontrar al usuario.';
$string['userpreferences'] = 'Preferencias del usuario';
$string['useweighted'] = 'Usar ponderación';
$string['verbosescales'] = 'Escalas de texto';
$string['verbosescales_help'] = 'Una escala verbosa usa palabras en lugar de números. Configure a \'Si\' cuando se vayan a importar tanto escalas numéricas como verbosas. Configure a \'No\' si solamente se importarán escalas numéricas.';
$string['viewbygroup'] = 'Grupo';
$string['viewgrades'] = 'Ver calificaciones';
$string['weight'] = 'Ponderación';
$string['weightcourse'] = 'Usar calificaciones no ponderadas para el curso';
$string['weightedascending'] = 'Clasificar por porcentaje ponderado ascendente';
$string['weighteddescending'] = 'Clasificar por porcentaje ponderado descendente';
$string['weightedpct'] = '% ponderada';
$string['weightedpctcontribution'] = 'contribución % ponderada';
$string['weight_help'] = 'Un valor usado para determinar el valor relativo de múltiples ítems de calificación dentro de una categoríua o curso.';
$string['weightofa'] = 'Ponderación de {$a}';
$string['weightorextracredit'] = 'Ponderación o crédito extra';
$string['weightoverride'] = 'Ajuste de ponderación';
$string['weightoverride_help'] = 'Desactive esto para reiniciar una calificación a su valor calculado automáticamente. El activar esto impedirá que la ponderación sea ajustada automáticamente.';
$string['weights'] = 'Ponderaciones';
$string['weightsadjusted'] = 'Su ponderación ha sido ajustada para totalizar 100';
$string['weightsedit'] = 'Editar ponderaciones y créditos extra';
$string['weightuc'] = 'Ponderación calculada';
$string['writinggradebookinfo'] = 'Escribiendo ajustes del libro de calificaciones';
$string['xml'] = 'XML';
$string['yes'] = 'Sí';
$string['yourgrade'] = 'Su calificación';
