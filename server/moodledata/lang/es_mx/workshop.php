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
 * Strings for component 'workshop', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Recalcular las calificaciones';
$string['aggregation'] = 'Agregación de calificaciones';
$string['allocate'] = 'Asignar envíos';
$string['allocatedetails'] = 'esperado: {$a->expected}<br />presentado: {$a->submitted}<br />to asignado: {$a->allocate}';
$string['allocation'] = 'Asignación de envíos';
$string['allocationconfigured'] = 'Asignación configurada';
$string['allocationdone'] = 'Asignación hecha';
$string['allocationerror'] = 'Error de asignación';
$string['allowedfiletypesforoverallfeedback'] = 'Tipos de archivos permitidos como anexos a retroalimentación';
$string['allowedfiletypesforoverallfeedback_help'] = 'Los tipos de archivos permitidos para anexo de envío pueden restringirse al escribir una lista separada por comas de las extensiones de archivos, por ejemplo \'mp4, mp3, png, jpg\'. Si el campo se deja vacío, entonces se permiten todos los tipos de archivos.';
$string['allowedfiletypesforsubmission'] = 'Tipos de archivos permitidos como anexos a envíos';
$string['allowedfiletypesforsubmission_help'] = 'Los tipos de archivos permitidos para anexo de envío pueden restringirse al escribir una lista separada por comas de las extensiones de archivos, por ejemplo \'mp4, mp3, png, jpg\'. Si el campo se deja vacío, entonces se permiten todos los tipos de archivos.';
$string['allsubmissions'] = 'Todos los envíos ({$a})';
$string['alreadygraded'] = 'Ya calificada';
$string['areaconclusion'] = 'Texto de conclusión';
$string['areainstructauthors'] = 'Instrucciones para el envío';
$string['areainstructreviewers'] = 'Instrucciones para la valoración';
$string['areaoverallfeedbackattachment'] = 'Anexos de retroalimentación global';
$string['areaoverallfeedbackcontent'] = 'Textos de retroalimentación global';
$string['areasubmissionattachment'] = 'Adjuntos al envío';
$string['areasubmissioncontent'] = 'Textos del envío';
$string['assess'] = 'Evaluar';
$string['assessedexample'] = 'Envío de ejemplo evaluado';
$string['assessedsubmission'] = 'Envío evaluado';
$string['assessingexample'] = 'Evaluando envío de ejemplo';
$string['assessingsubmission'] = 'Evaluando envío';
$string['assessment'] = 'Valoración';
$string['assessmentby'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Valoración por {$a}';
$string['assessmentbyyourself'] = 'Su valoración';
$string['assessmentdeleted'] = 'Valoración desasignada';
$string['assessmentend'] = 'Fecha límite para la valoración';
$string['assessmentendbeforestart'] = 'La fecha límite para terminar la valoración no puede estar programada para antes de la fecha en que empezarán las valoraciones';
$string['assessmentenddatetime'] = 'Plazo para valoración: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (fecha límite para valoraciones)';
$string['assessmentform'] = 'Formato de valoración';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Valoración</a> de <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Valoración de referencia';
$string['assessmentreferenceconflict'] = 'No es posible valorar un ejemplo de trabajo enviado para el que Usted proporcionó una valoración de referencia.';
$string['assessmentreferenceneeded'] = 'Usted tiene que valorar este envío de ejemplo, para proporcionar una valoración de referencia. Haga clic en el botón "Continuar" para valorar el envío.';
$string['assessmentsettings'] = 'Configuración de la valoración';
$string['assessmentstart'] = 'Disponible para valoración a partir de';
$string['assessmentstartdatetime'] = 'Abierto para valoración a partir de  {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} (se abre para valoración)';
$string['assessmentweight'] = 'Ponderación de la valoración';
$string['assignedassessments'] = 'Envíos asignados para evaluar';
$string['assignedassessmentsnone'] = 'No tiene envíos asignados para evaluar';
$string['backtoeditform'] = 'Volver al formato de edición';
$string['byfullname'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'por {$a}';
$string['calculategradinggrades'] = 'Calcular calificaciones de valoración';
$string['calculategradinggradesdetails'] = 'esperadas: {$a->expected}<br />calculadas: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calcular calificaciones de envíos';
$string['calculatesubmissiongradesdetails'] = 'esperadas: {$a->expected}<br />calculadas: {$a->calculated}';
$string['chooseuser'] = 'Seleccionar usuario...';
$string['clearaggregatedgrades'] = 'Borrar todas las calificaciones agrupadas';
$string['clearaggregatedgradesconfirm'] = '¿Está seguro de que desea borrar las calificaciones calculadas para los envíos y las calificaciones por valoración?';
$string['clearaggregatedgrades_help'] = 'Las calificaciones agregadas por el envío y las calificaciones por valoración se restablecerán. Puede volver a calcular estas calificaciones desde el principio en la Fase de Calificación de valoración otra vez.';
$string['clearassessments'] = 'Borrar valoraciones';
$string['clearassessmentsconfirm'] = '¿Está seguro que desea borrar todas las calificaciones de valoración?. No podrá obtener de nuevo la información por si mismo, los evaluadores tendrán que volver a evaluar las entregas asignadas.';
$string['clearassessments_help'] = 'Las calificaciones calculadas para los envíos y las calificaciones de valoración se restablecerán. La información sobre cómo llenar los formatos de valoración se conserva, pero todos los evaluadores deberán abrir el formato de valoración de nuevo y volver a guardarlo, para que se vuelvan a calcular las calificaciones de nuevo.';
$string['conclusion'] = 'Conclusión';
$string['conclusion_help'] = 'El texto de conclusión se muestra a los participantes al final de la actividad.';
$string['configexamplesmode'] = 'Modo por defecto en los ejemplos de valoración en los talleres';
$string['configgrade'] = 'Por defecto, calificación máxima  para el envío en los talleres';
$string['configgradedecimals'] = 'Por defecto, número de dígitos que deben figurar después del punto decimal cuando se muestran las calificaciones';
$string['configgradinggrade'] = 'Por defecto, calificación máxima por valoración en los talleres';
$string['configmaxbytes'] = 'Por defecto, tamaño máximo del archivo enviado en todos los talleres del sitio (sujeto a las limitaciones del curso y a otros parámetros locales)';
$string['configstrategy'] = 'Estrategia de calificación predeterminada para los talleres';
$string['createsubmission'] = 'Empiece a preparar su envío';
$string['daysago'] = 'hace {$a} días';
$string['daysleft'] = 'quedan {$a} días';
$string['daystoday'] = 'hoy';
$string['daystomorrow'] = 'mañana';
$string['daysyesterday'] = 'ayer';
$string['deadlinesignored'] = 'Las restricciones de tiempo no aplican para Usted';
$string['deletesubmission'] = 'Eliminar envío';
$string['editassessmentform'] = 'Editar formato de valoración';
$string['editassessmentformstrategy'] = 'Editar formato de valoración (${a})';
$string['editingassessmentform'] = 'Editando formato de valoración';
$string['editingsubmission'] = 'Editando lo enviado';
$string['editsubmission'] = 'Editar lo enviado';
$string['err_multiplesubmissions'] = 'Mientras se estaba editando este formato, otra versión de la entrega se ha guardado. No se permiten envíos múltiples por usuario.';
$string['err_removegrademappings'] = 'No se pueden eliminar los mapeos de calificaciones';
$string['err_unknownfileextension'] = 'Extensión de archivo desconocida: {$a}';
$string['err_wrongfileextension'] = 'Algunos archivos ({$a->wrongfiles}) no pueden subirse. Solamente se permiten archivos de los tipos {$a->whitelist}.';
$string['evaluategradeswait'] = 'Por favor, espere hasta que se hayan realizado las evaluaciones y calculado las calificaciones';
$string['evaluation'] = 'Evaluación de calificaciones';
$string['evaluationmethod'] = 'Método de evaluación de calificaciones';
$string['evaluationmethod_help'] = 'El método de evaluación de calificaciones determina cómo se calculan las calificaciones en las evaluaciones. Usted puede permitirle re-calcular calificaciones repetidamente con diferentes configuraciones, a menos que ya estuviera contento/a con el resultado.';
$string['evaluationsettings'] = 'Ajustes de la evaluación de las calificaciones';
$string['eventassessableuploaded'] = 'Un envío ha sido subido';
$string['eventassessmentevaluated'] = 'Valoración evaluada';
$string['eventassessmentevaluationsreset'] = 'Evaluación de valoración reiniciada';
$string['eventassessmentreevaluated'] = 'Valoración re-evaluada';
$string['eventphaseswitched'] = 'Fase cambiada';
$string['eventsubmissionassessed'] = 'Envío evaluado';
$string['eventsubmissionassessmentsreset'] = 'Valoraciones de envío purgadas';
$string['eventsubmissioncreated'] = 'Envío creado';
$string['eventsubmissiondeleted'] = 'Envío eliminado';
$string['eventsubmissionreassessed'] = 'Envío re-evaluado';
$string['eventsubmissionupdated'] = 'Envío actualizado';
$string['eventsubmissionviewed'] = 'Envío visto';
$string['example'] = 'Envío de ejemplo';
$string['exampleadd'] = 'Agregar envío de ejemplo';
$string['exampleassess'] = 'Evaluar envío de ejemplo';
$string['exampleassessments'] = 'Envíos de ejemplo para evaluar';
$string['exampleassesstask'] = 'Evaluar ejemplos';
$string['exampleassesstaskdetails'] = 'esperados: {$a->expected}<br />assessed: {$a->assessed}';
$string['examplecomparing'] = 'Comparación de las valoraciones del envío de ejemplo';
$string['exampledelete'] = 'Eliminar ejemplo';
$string['exampledeleteconfirm'] = '¿Está seguro de que desea eliminar el siguiente envío de ejemplo? Haga clic en \'Continuar\' para eliminar el envío.';
$string['exampleedit'] = 'Editar ejemplo';
$string['exampleediting'] = 'Editando ejemplo';
$string['exampleneedassessed'] = 'Usted tiene que evaluar todos los envíos de ejemplo antes que nada';
$string['exampleneedsubmission'] = 'Usted tiene que enviar su propio trabajo y evaluar todos los envíos de ejemplo antes que nada';
$string['examplesbeforeassessment'] = 'Los ejemplos estarán disponibles después de mandar su propio envío, y deben ser valorados antes de la evaluación por pares';
$string['examplesbeforesubmission'] = 'Los ejemplos deben ser evaluados antes del envío propio';
$string['examplesmode'] = 'Modo de valoración de ejemplos';
$string['examplesubmissions'] = 'Envíos de ejemplo';
$string['examplesvoluntary'] = 'La valoración de envíos de ejemplo es voluntaria';
$string['exportsubmission'] = 'Exportar esta página';
$string['feedbackauthor'] = 'Retroalimentación para el autor';
$string['feedbackauthorattachment'] = 'Adjunto';
$string['feedbackby'] = 'Retroalimentación por {$a}';
$string['feedbackreviewer'] = 'Retroalimentación para el revisor';
$string['feedbacksettings'] = 'Retroalimentación';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Calificaciones otorgadas';
$string['gradecalculated'] = 'Calificación calculada para el envío';
$string['gradedecimals'] = 'Posiciones Decimales en las calificaciones';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Calificación: {$a->received} of {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (valoración)';
$string['gradeitemsubmission'] = '{$a->workshopname} (envío)';
$string['gradeover'] = 'Pasar por alto calificación del envío';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Reporte de calificaciones del Taller';
$string['gradetopassgrading'] = 'Calificación aprobatoria de Valoración';
$string['gradetopasssubmission'] = 'Calificación aprobatoria de Envío';
$string['gradinggrade'] = 'Calificación por valoración';
$string['gradinggradecalculated'] = 'Calificación calculada por valoración';
$string['gradinggrade_help'] = 'Esta configuración especifica la calificación máxima que puede obtenerse en la valoración de un trabajo enviado.';
$string['gradinggradeof'] = 'Calificación por valoración (de {$a})';
$string['gradinggradeover'] = 'Anular calificación por valoración';
$string['gradingsettings'] = 'Ajustes de calificación';
$string['groupnoallowed'] = 'No se le permite acceder a ningún grupo en este taller';
$string['iamsure'] = 'Sí, estoy seguro';
$string['info'] = 'Info';
$string['instructauthors'] = 'Instrucciones para el envío';
$string['instructreviewers'] = 'Instrucciones para la valoración';
$string['introduction'] = 'Descripción';
$string['latesubmissions'] = 'Envíos extemporáneos';
$string['latesubmissionsallowed'] = 'Se permiten envíos extemporáneos';
$string['latesubmissions_desc'] = 'Permitir envíos fuera de plazo';
$string['latesubmissions_help'] = 'Si está activada esta opción, un autor puede enviar su trabajo fuera de plazo o durante la fase de valoración. Sin embargo, los envíos extemporáneos no se pueden editar.';
$string['maxbytes'] = 'Tamaño máximo del anexo del envío';
$string['modulename'] = 'Taller';
$string['modulename_help'] = 'El módulo de actividad Taller permite la colecta, revisión y evaluación por pares del trabajo de los estudiantes.

Los estudiantes pueden enviar cualquier contenido digital (archivos), tales como documentos de procesador de texto o de hojas de cálculo y también pueden escribir el texto directamente en un campo empleando un editor de texto (dentro de Moodle).

Los envíos son valorados empleando un formato de valoración de criterios múltiples definido por el profesor. El proceso de revisión por pares  y el formato para comprender cómo funciona la valoración se pueden practicar por anticipado con envíos de muestra proporcionados por el maestro, junto con una valoración de referencia. A los estudiantes se les dará la oportunidad de valorar uno o más de los envíos de sus pares estudiantes. Los que envían y los que valoran pueden permanecer anónimos si se requiere así.

Los estudiantes tendrán dos calificaciones para la actividad de taller: una calificación por  enviarlo y otra por la valoración de sus pares. Ambas calificaciones se guardan en el libro de calificaciones.';
$string['modulenameplural'] = 'Talleres';
$string['mysubmission'] = 'Mi envío';
$string['nattachments'] = 'Número máximo de archivos adjuntos por envío';
$string['noexamples'] = 'Aún no hay ejemplos en este Taller';
$string['noexamplesformready'] = 'Debe definir el formato de valoración antes de proporcionar envíos de ejemplo';
$string['nogradeyet'] = 'Aún no hay calificación';
$string['nosubmissionfound'] = 'No se han encontrado envíos de este usuario';
$string['nosubmissions'] = 'Aún no hay envíos en este taller';
$string['notassessed'] = 'Aún no evaluado';
$string['nothingfound'] = 'Nada que mostrar';
$string['nothingtoreview'] = 'Nada que revisar';
$string['notoverridden'] = 'No anulado';
$string['noworkshops'] = 'No hay talleres en este curso';
$string['noyoursubmission'] = 'Usted aún no ha enviado su trabajo';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Retroalimentación global';
$string['overallfeedbackfiles'] = 'Número máximo de anexos de retrolimentación global';
$string['overallfeedbackmaxbytes'] = 'Tamaño máximo del anexo a la retroalimentación global';
$string['overallfeedbackmode'] = 'Modo de retroalimentación global';
$string['overallfeedbackmode_0'] = 'Deshabilitado';
$string['overallfeedbackmode_1'] = 'Habilitado y opcional';
$string['overallfeedbackmode_2'] = 'Habilitado y requerido';
$string['overallfeedbackmode_help'] = 'Si se habilita, se muestra un campo de texto al final del formato de valoración. Los revisores pueden poner la valoración total del envío allí, o proporcionar explicaciones adicionales acerca de su valoración.';
$string['page-mod-workshop-x'] = 'Cualquier página del módulo Taller';
$string['participant'] = 'Participante';
$string['participantrevierof'] = 'El participante es revisor de';
$string['participantreviewedby'] = 'El participante es revisado por';
$string['phaseassessment'] = 'Fase de valoración';
$string['phaseclosed'] = 'Cerrado';
$string['phaseevaluation'] = 'Fase de calificación de evaluaciones';
$string['phasesetup'] = 'Fase de configuración';
$string['phasesoverlap'] = 'La fase de envío y la fase de valoración no pueden traslaparse';
$string['phasesubmission'] = 'Fase de envío';
$string['pluginadministration'] = 'Administración del Taller';
$string['pluginname'] = 'Taller';
$string['prepareexamples'] = 'Preparar envíos de ejemplo';
$string['previewassessmentform'] = 'Vista previa';
$string['publishedsubmissions'] = 'Envíos publicados';
$string['publishsubmission'] = 'Publicar envío';
$string['publishsubmission_help'] = 'Los envíos publicados estarán disponibles para los demás cuando el taller esté cerrado.';
$string['reassess'] = 'Re-evaluar';
$string['receivedgrades'] = 'Calificaciones recibidas';
$string['recentassessments'] = 'Valoraciones del taller:';
$string['recentsubmissions'] = 'Envíos del Taller:';
$string['resetassessments'] = 'Eliminar todas las valoraciones';
$string['resetassessments_help'] = 'Usted puede elegir eliminar solamente las valoraciones asignadas sin afectar los envíos. Si van a eliminarse los envíos, sus valoraciones serán eliminadas implícitamente y esta opción es ignorada. Tome nota de que esto también incluye a las valoraciones de envíos de ejemplo.';
$string['resetphase'] = 'Cambiar a la fase de configuración';
$string['resetphase_help'] = 'Si se habilita, todos los talleres se pondrán en la fase de configuración inicial.';
$string['resetsubmissions'] = 'Eliminar todos los envíos';
$string['resetsubmissions_help'] = 'Todos los envíos y sus valoraciones serán eliminados. Esto no afecta a los envíos de ejemplo.';
$string['saveandclose'] = 'Guardar y cerrar';
$string['saveandcontinue'] = 'Guardar y continuar editando';
$string['saveandpreview'] = 'Guardar y previsualizar';
$string['saveandshownext'] = 'Guardar y mostrar siguiente';
$string['search:activity'] = 'Taller - información de actividad';
$string['selfassessmentdisabled'] = 'Auto-valoración deshabilitada';
$string['showingperpage'] = 'Mostrando {$a} items por página';
$string['showingperpagechange'] = 'Cambiar ...';
$string['someuserswosubmission'] = 'Al menos un autor aún no ha enviado su trabajo';
$string['sortasc'] = 'Clasificacion ascendente';
$string['sortdesc'] = 'Clasificación descendente';
$string['strategy'] = 'Estrategia de calificación';
$string['strategyhaschanged'] = 'La estrategia de calificación del taller ha cambiado desde que el formato fue abierto para editarlo.';
$string['strategy_help'] = 'La estrategia de clasificación determina la forma de valoración utilizada y el método de calificación de los envíos. Hay 4 opciones:

 * Calificación acumulativa - Se realizan comentarios y calificaciones sobre los aspectos especificados.

 * Comentarios - Se hacen comentarios sobre aspectos específicos, pero no se otorga calificación.

 * Número de errores - Se realizan comentarios y una calificación tipo sí/no sobre las afirmaciones realizadas.

 * Rúbrica - Se realiza una valoración del nivel respecto a los criterios especificados';
$string['submission'] = 'Envío';
$string['submissionattachment'] = 'Adjunto';
$string['submissionby'] = 'Envío por {$a}';
$string['submissioncontent'] = 'Contenido del envío';
$string['submissiondeleteconfirm'] = '¿Está Usted seguro de querer eliminar el envío siguiente?';
$string['submissiondeleteconfirmassess'] = '¿Está Usted seguro de querer eliminar el envío siguiente? Tome nota de que esto también eliminará {$a->count} valoraciones asociadas con éste envío, lo que puede afectar las calificaciones de los revisores.';
$string['submissionend'] = 'Fecha límite de los envíos';
$string['submissionendbeforestart'] = 'La fecha límite para envíos no puede especificarse anterior a la fecha en que se abren (empiezan) los envíos';
$string['submissionenddatetime'] = 'Plazo de presentación: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} (fecha límite para envíos)';
$string['submissionendswitch'] = 'Cambiar a la siguiente fase después de la fecha límite para envíos';
$string['submissionendswitch_help'] = 'Si se especifica la fecha límite para envíos y esta casilla está activada, el taller automáticamente cambiará a la fase de valoración después de la fecha límite de envíos.

Si habilita esta característica, se recomienda que defina el método de asignación agendada también. Si no se agendan los envíos, no se pueden realizar valoraciones aún si el taller estuviera en la fase de valoración';
$string['submissiongrade'] = 'Calificación por el envío';
$string['submissiongrade_help'] = 'Esta configuración especifica la calificación máxima que se puede obtener en los trabajos enviados.';
$string['submissiongradeof'] = 'Calificación por el envío (de {$a})';
$string['submissionlastmodified'] = 'Última modificación';
$string['submissionsettings'] = 'Parámetros de los envíos';
$string['submissionsreport'] = 'Reporte de envíos de taller';
$string['submissionstart'] = 'Abierto para envíos desde';
$string['submissionstartdatetime'] = 'Abierto para envíos desde {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} (se abre para envíos)';
$string['submissiontitle'] = 'Título';
$string['submittednotsubmitted'] = 'Enviados ({$a->submitted}) / no enviados ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Método para asignación de envíos';
$string['subplugintype_workshopallocation_plural'] = 'Métodos para asignación de envíos';
$string['subplugintype_workshopeval'] = 'Método de calificación de la evaluación';
$string['subplugintype_workshopeval_plural'] = 'Métodos de calificación de la evaluación';
$string['subplugintype_workshopform'] = 'Estrategia de calificación';
$string['subplugintype_workshopform_plural'] = 'Estrategias de calificación';
$string['switchingphase'] = 'Cambiando de fase';
$string['switchphase'] = 'Cambiar fase';
$string['switchphase10'] = 'Cambiar a la fase de configuración';
$string['switchphase10info'] = 'Está a punto de cambiar el taller a la <strong>Fase de configuración </strong>. En esta fase, los usuarios no pueden modificar su envío o sus valoraciones. Los profesores pueden usar esta fase para cambiar las configuraciones del taller, modificar la estrategia de calificación o alterar los formatos de valoración.';
$string['switchphase20'] = 'Cambiar a la fase de envío';
$string['switchphase20info'] = 'Está a punto de cambiar a la <strong>Fase de envíos </strong> del taller. En esta fase, los usuarios si pueden mandar sus trabajos (dentro de los plazos de control de acceso existentes). Los profesores pueden asignar los envíos para ser revisados por pares.';
$string['switchphase30'] = 'Cambiar a la fase de valoración';
$string['switchphase30auto'] = 'El taller cambiará automáticamente a la fase de valoración después de {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Está a punto de cambiar a la <strong>Fase de Valoración</strong> del taller. En esta fase, los revisores pueden valorar los trabajos que les fueron asignados (dentro de los plazos de control de acceso existentes).';
$string['switchphase40'] = 'Cambiar a la fase de evaluación';
$string['switchphase40info'] = 'Está a punto de cambiar a la <strong>Fase de Calificación de Evaluaciones </strong> del taller. En esta fase, los usuarios no pueden modificar sus trabajos ni sus valoraciones recibidas. Los profesores pueden emplear las herramientas de calificación de evaluaciones para calcular las calificaciones finales y darles retroalimentación a los revisores.';
$string['switchphase50'] = 'Cerrar taller';
$string['switchphase50info'] = 'Está a punto de cerrar el taller. Esto dará como resultado que las calificaciones calculadas aparecerán en el libro de calificaciones. Los estudiantes pueden ver sus envíos y las valoraciones de estos.';
$string['switchphaseauto'] = 'El cambio ha sido agendado';
$string['switchphasenext'] = 'Cambiar a la fase siguiente';
$string['taskassesspeers'] = 'Evaluar a compañeros';
$string['taskassesspeersdetails'] = 'Total: {$a-> total} <br /> pendiente: {$a->todo}';
$string['taskassessself'] = 'Autoevaluarse';
$string['taskconclusion'] = 'Proporcionar una conclusión de la actividad';
$string['taskdone'] = 'Deber realizado';
$string['taskfail'] = 'Deber fracasado';
$string['taskinfo'] = 'Información del deber';
$string['taskinstructauthors'] = 'Proporcione instrucciones para el envío';
$string['taskinstructreviewers'] = 'Proporcione instrucciones para la valoración';
$string['taskintro'] = 'Configurar la descripción del taller';
$string['tasksubmit'] = 'Enviar su trabajo';
$string['tasktodo'] = 'Deber a realizar';
$string['toolbox'] = 'Caja de herramientas del Taller';
$string['undersetup'] = 'El taller está siendo configurado. Por favor, espere hasta que cambie a la siguiente fase';
$string['useexamples'] = 'Usar ejemplos';
$string['useexamples_desc'] = 'Se proporcionan ejemplos de envios para practicar la evaluación';
$string['useexamples_help'] = 'Si está activada, los usuarios pueden practicar la valoración sobre una o más presentaciones de ejemplo y comparar su valoración con una valoración de referencia. Esta calificación no se cuenta para la calificación final.';
$string['usepeerassessment'] = 'Emplear valoración por pares';
$string['usepeerassessment_desc'] = 'Los estudiantes pueden evaluar el trabajo de otros';
$string['usepeerassessment_help'] = 'Si está activado, un usuario puede recibir  presentaciones de otros usuarios para valorarlas. Recibirá una calificación por valoración que realizó, además de una calificación para su propio envío..';
$string['userdatecreated'] = 'enviado en <span>{$a}</span>';
$string['userdatemodified'] = 'modificado en <span>{$a}</span>';
$string['userplan'] = 'Planificador de taller';
$string['userplanaccessibilityskip'] = 'Saltar hacia los deberes actuales';
$string['userplanaccessibilitytitle'] = 'Linea-de-tiempo del Taller con {$a} fases';
$string['userplancurrentphase'] = 'Fase actual';
$string['userplan_help'] = 'El planificador de taller muestra todas las fases de la actividad y enlista los quehaceres para cada fase. La fase actual está resaltada y los quehaceres finalizados se indican con una palomita.';
$string['useselfassessment'] = 'Usar auto-valoración';
$string['useselfassessment_desc'] = 'Los estudiantes pueden evaluar su propio trabajo';
$string['useselfassessment_help'] = 'Si está activado, un usuario puede ser asignado a su propia presentación para valoración. Recibirá una calificación por la valoración, además de una calificación por su propia presentación.';
$string['viewworkshopsummary'] = 'Ver resumen del taller';
$string['weightinfo'] = 'Ponderación: {$a}';
$string['withoutsubmission'] = 'Revisor sin envíos asignados';
$string['workshop:addinstance'] = 'Añadir un nuevo taller';
$string['workshop:allocate'] = 'Asignar envíos para revisar';
$string['workshop:deletesubmissions'] = 'Eliminar envíos';
$string['workshop:editdimensions'] = 'Editar formato de valoración';
$string['workshop:exportsubmissions'] = 'Exportar envíos';
$string['workshop:ignoredeadlines'] = 'Ignorar restricciones de tiempo';
$string['workshop:manageexamples'] = 'Administrar los envíos de ejemplo';
$string['workshopname'] = 'Nombre del taller';
$string['workshop:overridegrades'] = 'Sobreescribir calificaciones calculadas';
$string['workshop:peerassess'] = 'Evaluar por pares';
$string['workshop:publishsubmissions'] = 'Publicar envíos';
$string['workshop:submit'] = 'Enviar';
$string['workshop:switchphase'] = 'Cambiar de fase';
$string['workshop:view'] = 'Ver taller';
$string['workshop:viewallassessments'] = 'Mostrar todas las valoraciones';
$string['workshop:viewallsubmissions'] = 'Ver todos los envíos';
$string['workshop:viewauthornames'] = 'Ver el nombre de los autores';
$string['workshop:viewauthorpublished'] = 'Ver los autores de los envíos publicados';
$string['workshop:viewpublishedsubmissions'] = 'Ver los envíos publicados';
$string['workshop:viewreviewernames'] = 'Ver los nombres de los revisores';
$string['yourassessment'] = 'Su valoración';
$string['yourassessmentfor'] = 'Su valoración para {$a}';
$string['yourgrades'] = 'Sus calificaciones';
$string['yoursubmission'] = 'Su envío';
