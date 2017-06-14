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
 * Strings for component 'ratingallocate', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   ratingallocate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithm_already_running'] = 'Ya está corriendo otra instancia del algoritmo de asignación. Por favor espere unos pocos minutos y refresque la página.';
$string['algorithm_scheduled_for_cron'] = 'La corrida del algoritmo de asignación está agendada para ejecución inmediata por el trabajo del cron. Por favor espere unos pocos minutos y refresque la página.';
$string['algorithmtimeout'] = 'Caducó el tiempo del algoritmo';
$string['allocation_manual_explain_all'] = 'Elija una opción para asignarla a un usuario.';
$string['allocation_manual_explain_only_raters'] = 'Seleccione una opción a ser asignada a un usuario. Solamente son enlistados los usuarios que valoraron al menos una opción.';
$string['allocation_notification_message'] = 'Con respecto a "{$a->ratingallocate}", Usted ha sido asignado a la opción de "{$a->choice} ({$a->explanation})".';
$string['allocation_notification_message_subject'] = 'Notificación de asignación terminada para {$a}';
$string['allocation_statistics'] = 'Estadísticas de Asignación';
$string['allocation_statistics_description'] = 'Esta tabla da una impresión de la satizfacción general de la asignación.
Cuenta las asignaciones de acuerdo con las valoraciones que el usuario le ha dado a la opción respectiva.
En este caso, {$a->users} de un total de {$a->total} usuarios tuvieron una opción que ellos valoraron con "{$a->rating}".
Para {$a->unassigned} usuarios todavía no se han asignado opciones.';
$string['allocation_statistics_description_no_alloc'] = 'Esta estadística da una impresión de la satisfacción general de la asignación.
Lo hace contando las asignaciones de acuerdo a la valoración que el usuario le ha dado a la elección respectiva.
Todavía no hay asignaciones. Actualmente {$a->unassigned} usuarios han dado sus valoraciones.';
$string['at_least_one_rateable_choices_needed'] = 'Usted necesita al menos una opción valorable.';
$string['choice_active'] = 'La selección está activa';
$string['choice_active_help'] = 'Solamente las (s)elecciones activas son mostrada al usuario. Las (s)elecciones inactivas no son mostradas.';
$string['choice_added_notification'] = 'Opción guardada';
$string['choice_deleted_notification'] = 'La opción "{$a}" fue eliminada';
$string['choice_deleted_notification_error'] = 'La opción que se pidió eliminar no pudo encontrarse.';
$string['choice_explanation'] = 'Descripción (opcional)';
$string['choice_maxsize'] = 'Máximo número de participantes';
$string['choice_maxsize_display'] = 'Número máximo de estudiantes';
$string['choicestatusheading'] = 'Estatus';
$string['choice_table_active'] = 'Activo';
$string['choice_table_explanation'] = 'Descripción';
$string['choice_table_maxsize'] = 'Tamaño Máx.';
$string['choice_table_title'] = 'Título';
$string['choice_table_tools'] = 'Editar';
$string['choice_title'] = 'Título';
$string['choice_title_help'] = 'Título de la elección. * Atención * Todas las elecciones activas se mostrarán mientras estén ordenadas por título.';
$string['configalgorithmtimeout'] = 'El tiempo en segundos depués del cual se asume que el algoritmo se pasmó.
La corrida actual es terminada y se marca como fallida.';
$string['confirm_start_distribution'] = 'El correr el algoritmo eliminará todas las asignaciones  existentes, si hubiera. ¡Está Usted seguro de continuar?';
$string['create_moodle_groups'] = 'Crear Grupos a partir de Asignación';
$string['crontask'] = 'Asignación automatizada para Asignación Justa';
$string['deletechoice'] = 'Eliminar Elección';
$string['delete_choice'] = 'Eliminar opción';
$string['deleteconfirm'] = '¿Realmente desea usted eliminar la opción "{$a}"?';
$string['delete_rating'] = 'Eliminando valoración';
$string['distribution_algorithm'] = 'Algoritmo de la Distribución';
$string['distribution_published'] = 'La asignación/distribución ha sido publicada.';
$string['distribution_saved'] = 'Distribución guardada (en {$a}s).';
$string['distribution_table'] = 'Tabla de Distribución';
$string['download_problem_mps_format'] = 'Descargar Ecuación (en formato mps/txt)';
$string['edit_choice'] = 'Editar Elección "{$a}"';
$string['edit_rating'] = 'Editar Valoración';
$string['err_maximum'] = 'El valor máximo para este campo es {$a}.';
$string['err_minimum'] = 'El valor mínimo para este campo es {$a}.';
$string['err_positivnumber'] = 'Usted debe ingresar aquí un número positivo.';
$string['err_required'] = 'Usted necesita proporcionar un valor para este campo.';
$string['export_choice_alloc_suffix'] = '- Asignación';
$string['export_choice_text_suffix'] = '- Texto';
$string['export_options'] = 'Exportar Opciones';
$string['filter_hide_users_without_rating'] = 'Ocultar usuarios sin valoraciones';
$string['filter_show_alloc_necessary'] = 'Ocultar usuarios con asignación';
$string['groupingname'] = 'Crado desde asignación Justa "{$a}"';
$string['invalid_dates'] = 'Las fechas son inválidas. La fecha de inicio debe ser anterior a la fecha de término.';
$string['invalid_publishdate'] = 'La Fecha de publicación no es valida. La fecha de publicación debe de ser después del cierre de la valoración/votación.';
$string['is_published'] = 'Publicado';
$string['last_algorithm_run_date'] = 'Último algoritmo corrido en';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Estatus de la última corrida';
$string['last_algorithm_run_status_0'] = 'No iniciado';
$string['last_algorithm_run_status_1'] = 'Corriendo';
$string['last_algorithm_run_status_-1'] = 'Fallido';
$string['last_algorithm_run_status_2'] = 'Exitoso';
$string['log_allocation_published'] = 'Asignación publicada';
$string['log_allocation_published_description'] = 'El usuario con id "{$a->userid}" publicó la asignación para Asignación Justa con id "{$a->ratingallocateid}".';
$string['log_allocation_statistics_viewed'] = 'Estadísticas de asignación vistas';
$string['log_allocation_statistics_viewed_description'] = 'El usuario con id "{$a->userid}" vió las estadísticas de asignación para la Asignación Justa con id "{$a->ratingallocateid}".';
$string['log_allocation_table_viewed'] = 'Tabla de asignación vista';
$string['log_allocation_table_viewed_description'] = 'El usuario con id "{$a->userid}" vió la tabla de asignación para la Asignación Justa con id "{$a->ratingallocateid}".';
$string['log_distribution_triggered'] = 'Distribución disparada';
$string['log_distribution_triggered_description'] = 'El usuario con id "{$a->userid}" disparó/desencadenó la distribución para la Asignación Justa con id "{$a->ratingallocateid}". El algoritmo necesitó {$a->time_needed} segundos.';
$string['log_index_viewed'] = 'Usuario vió todas las instancias de Asignación Justa';
$string['log_index_viewed_description'] = 'El usuario con id "{$a->userid}" viió todas as instancias de Asignación justa en este curso".';
$string['log_manual_allocation_saved'] = 'Asignación manual guardada';
$string['log_manual_allocation_saved_description'] = 'El usuario con id "{$a->userid}" guardó una asignación manual para la Asignación Justa con id "{$a->ratingallocateid}".';
$string['log_ratingallocate_viewed'] = 'Ratingallocate (Asignación_de_Valoración) vista';
$string['log_ratingallocate_viewed_description'] = 'El usuario con id "{$a->userid}" vió la Asignación Justa con id "{$a->ratingallocateid}".';
$string['log_rating_deleted'] = 'Valoración de usuario eliminada';
$string['log_rating_deleted_description'] = 'El usuario con id "{$a->userid}" eliminó su valoración para la Asignación Justa con id "{$a->ratingallocateid}".';
$string['log_rating_saved'] = 'Valoración de usuario guardada';
$string['log_rating_saved_description'] = 'El usuario con id "{$a->userid}" guardó su valoración para la asignación Justa con id "{$a->ratingallocateid}".';
$string['log_rating_viewed'] = 'Valoración de usuario vista';
$string['log_rating_viewed_description'] = 'El usuario con id "{$a->userid}" vió su valoración para la ratingallocate con id "{$a->ratingallocateid}".';
$string['manual_allocation'] = 'Asignación Manual';
$string['manual_allocation_form'] = 'Formato de Asignación Manual';
$string['manual_allocation_nothing_to_be_saved'] = 'No había nada para guardar.';
$string['manual_allocation_saved'] = 'Su Asignación Manual se ha guardado.';
$string['messageprovider:notifyalloc'] = 'Notificación de opción asignación';
$string['modify_allocation_group'] = 'Modificar Asignación';
$string['modify_allocation_group_desc_published'] = 'Las asignaciones han sido publicadas. Usted ya no puede alterarlas.';
$string['modify_allocation_group_desc_rating_in_progress'] = 'Actualmente está corriendo la fase de valoración. Usted puede empezar el proceso de asignación después de que haya terminado la fase de valoración.';
$string['modify_allocation_group_desc_ready'] = 'La fase de valoración ha terminado. Usted puede ahora correr el algoritmo para una asignación automática.';
$string['modify_allocation_group_desc_ready_alloc_started'] = 'La fase de valoración ha terminado. Ya se han creado algunas asignaciones.
El volver a correr el algoritmo eliminará todas las asignaciones actuales. Usted puede ahora modificar manualmente las asignaciones o puede proceder a publicar las asignaciones.';
$string['modify_allocation_group_desc_too_early'] = 'La fase de valoración está corriendo actualmente. Usted puede iniciar el proceso de asignación después de que haya terminado la fase de valoración.';
$string['modify_choices'] = 'Editar Opciones';
$string['modify_choices_explanation'] = 'Mostrar la lista de todas las opciones. Aquí, las opciones pueden ocultarse, alterarse y eliminarse.';
$string['modify_choices_group'] = 'Opciones';
$string['modify_choices_group_desc_published'] = 'Las asignaciones han sido publicadas; ya no se recomienda alterar las opciones.';
$string['modify_choices_group_desc_rating_in_progress'] = 'La valoración está en progreso; Usted no debe de cambiare l conjunto de opciones disponibles en este paso.';
$string['modify_choices_group_desc_ready'] = 'La fase de valoración ha terminado; ahora Usted puede modificar la cantidad de estudiantes de cada opción o desactivar algunas opciones para variar el resultado de la distribución.';
$string['modify_choices_group_desc_ready_alloc_started'] = 'La fase de valoración ha terminado; ahora Usted puede modificar la cantidad de estudiantes de cada opción o desactivar algunas opciones para variar el resultado de la distribución.';
$string['modify_choices_group_desc_too_early'] = 'Aquí pueden especificarse las opciones, que deberían de estar disponibles para los estudiantes.';
$string['modulename'] = 'AsignarValoración';
$string['modulename_help'] = 'El modulo de AsignarValoración le permite definir opciones que sus usuarios pueden valorar. Puede después distribuir automáticamente los usuarios a las opciones.';
$string['modulenameplural'] = 'AsignarValoraciones';
$string['moodlegroups_created'] = 'Los Grupos y Agrupamientos correspondientes de Moodle han sido creados.';
$string['newchoice'] = 'Añadir una nueva Elección.';
$string['newchoicetitle'] = 'Nueva Opción/Selección {$a}';
$string['no_choice_to_rate'] = '¡No hay opciones para valorar!';
$string['no_id_or_m_error'] = 'Usted debe especificar una course_module ID (ID del módulo del curso) o una ID de instancia';
$string['no_rating_given'] = 'No-valorada';
$string['no_rating_possible'] = '¡Actualmente, no hay valoración posible!';
$string['no_user_to_allocate'] = 'No hay usuario que pueda asignar';
$string['pluginadministration'] = 'Administración de AsignarValoraciones';
$string['pluginname'] = 'AsignarValoraciones';
$string['publish_allocation'] = 'Publicar Aasignación';
$string['publish_allocation_group'] = 'Publicar Asignación';
$string['publish_allocation_group_desc_published'] = 'Las asignaciones ya están publicadas.
Usted puede elegir crear grupos dentro de su curso para todas las asignaciones.
Si los mismos grupos ya han sido creados por este plugin, ellos serán purgados antes de rellenarlos.';
$string['publish_allocation_group_desc_rating_in_progress'] = 'La fase de valoración está en progreso. Por favor, espere hasta que haya terminado la fase de valoración y entonces empiece a crear asignaciones, primeramente.';
$string['publish_allocation_group_desc_ready'] = 'Todavía no hay asignaciones. Por favor, vea la sección sobre modificar asignación.';
$string['publish_allocation_group_desc_ready_alloc_started'] = 'La asignación puede publicarse ahora.
Después de publicar la asignación, ya no podrá alterarse.
Por favor revíse la asignación actual siguiendo el enlace en la sección del reporte.
Usted puede elegir crear grupos dentro de su curso para todas las asignaciones.
Si los mismos grupos ya habían sido creados por este plugin, ellos serán purgados antes de re-llenarlos.
Esto puede hacerse antes y después de publicar las asignaciones.';
$string['publish_allocation_group_desc_too_early'] = 'Todavía no hay asignaciones. Por favor, vea la sección sobre modificar asignación.';
$string['publishdate'] = 'Fecha de publicación';
$string['publishdate_estimated'] = 'Fecha de publicación estimada';
$string['rateable_choices'] = 'Opciones que se pueden valorar';
$string['rated'] = 'valorado {$a}';
$string['ratingallocate'] = 'AsignarValoraciones';
$string['ratingallocate:addinstance'] = 'Añadir nueva instnacia de Asignación Justa';
$string['ratingallocate:export_ratings'] = 'Habilidad para exportar las valoraciones de usuario';
$string['ratingallocate:give_rating'] = 'Crear/editar selección/opción';
$string['ratingallocate:modify_choices'] = 'Habilidad para modificar, editar o eliminar el conjunto de opciones de una Asignación Justa.';
$string['ratingallocatename'] = 'Nombre de esta asignación';
$string['ratingallocatename_help'] = 'Por favor elija un nombre para esta actividad de asignación_de_valoración';
$string['ratingallocate:start_distribution'] = 'Iniciar asignación de usuarios a selecciones';
$string['ratingallocate:view'] = 'Ver instancias de asignación_de_valoración';
$string['rating_begintime'] = 'Valoraciones inician en';
$string['rating_endtime'] = 'Valoraciones terminan en';
$string['rating_is_over'] = 'La valoración se termino.';
$string['rating_raw'] = '{$a}';
$string['ratings_deleted'] = 'Sus valoraciones han sido eliminadas.';
$string['ratings_saved'] = 'Sus valoraciones se han guardado.';
$string['ratings_table'] = 'Valoraciones y Asignaciones';
$string['ratings_table_sum_allocations'] = 'Número de asignaciones / Máximo';
$string['ratings_table_sum_allocations_value'] = '{$a->sum} / {$a->max}';
$string['ratings_table_user'] = 'Usuario';
$string['reports_group'] = 'Reportes';
$string['results_not_yet_published'] = 'Los resultados aun no se han publicado';
$string['runalgorithmbycron'] = 'Asignación automática después del períodod de valoración';
$string['runalgorithmbycron_help'] = 'Corre automáticamente el algoritmo de asignación después de que terminó el período de valoración. Sin embargo, los resultados tienen que ser publicados manualmente.';
$string['saveandcontinue'] = 'Guardar y Continuar';
$string['saveandnext'] = 'Guaradr y añadir siguiente';
$string['select_strategy'] = 'Elija la Estrategia para valorar';
$string['select_strategy_help'] = 'Elija una estrategia para valoración:

* **Si-No** El usuario puede valorar cada opción con si o no.
* **Si-Talvez-No**  El usuario puede valorar cada opción con si , talvez o no.
* **Escala Likert** El usuario puede valorar cada opción con un número de un rango definido.El rango de números puede ser definido individualmente (comenzando con 0). Un número alto corresponde a una preferencia alta.
* **Dar Puntos** El usuario puede valorar las opciones al asignar un número de puntos. El número máximo de puntos puede ser definido individualmente. Un número alto de puntos corresponde a una preferencia alta.
* **Rankear Opciones** El usuario tiene que rankear (priorizar) las opciones disponibles. Cuantas opciones necesitan valorarse puede ser definido individualmente.
* **Elegir Aceptar** El usuario puede decidir para cada opción si es que resulta aceptable para él/ella.';
$string['show_allocation_statistics'] = 'Mostrar Estadísticas de Asignación';
$string['show_choices_header'] = 'Lista de todas las opciones';
$string['show_table'] = 'Mostrar Valoraciones y Asignaciones';
$string['start_distribution'] = 'Correr Algoritmo de Asignación';
$string['start_distribution_explanation'] = 'Un algoritmo automaticamente intentará asignar justamente a los usuarios por las valoraciones dadas.';
$string['strategy_lickert_max_no'] = 'Solamente puede darle de 0 puntos a un maximo de {$a} (s)elección(es).';
$string['strategy_lickert_name'] = 'Escala likert';
$string['strategy_lickert_rating_biggestwish'] = '{$a} - Altamente apreciado';
$string['strategy_lickert_rating_exclude'] = '{$a} - Excluir';
$string['strategy_lickert_setting_maxlickert'] = 'Número maximo en la escala likert (3, 5 o 7 son valores comunes)';
$string['strategy_lickert_setting_maxno'] = 'Maximo Número de opciones/selecciones que el usuario puede valorar con 0';
$string['strategyname'] = 'La Estrategia es "{$a}"';
$string['strategy_not_specified'] = 'Usted debe seleccionar una estrategia.';
$string['strategyoptions_for_strategy'] = 'Opciones para Estrategia "{$a}"';
$string['strategy_order_choice_none'] = 'Elija una opción por favor';
$string['strategy_order_explain_choices'] = 'Seleccione una opción en cada cuadro de selección. La primera elección tiene la priorida mas alta, etc.';
$string['strategy_order_header_description'] = 'Opciones Disponibles';
$string['strategy_order_name'] = 'Rankear Opciones.';
$string['strategy_order_no_choice'] = '{$a}. Opción';
$string['strategy_order_setting_countoptions'] = 'Número de campos que se le presentan al usuario para que vote (¡más pequeño que el número de opciones!)';
$string['strategy_order_use_only_once'] = 'Las opciones no pueden ser seleccionadas dos veces y deben ser únicas.';
$string['strategy_points_explain_distribute_points'] = 'Darle puntos a cada opción, Usted tiene un total de {$a} puntos para distribuir. Debe priorizar la mejor opción con la mayor cantidad de puntos';
$string['strategy_points_explain_max_zero'] = 'Usted solamente puede darle 0 puntos a como máximo {$a} opciones';
$string['strategy_points_incorrect_totalpoints'] = 'Número incorrecto de puntos totales. La suma de todos los puntos debe ser {$a}';
$string['strategy_points_max_count_zero'] = 'Debe asignarle más de 0 puntos a por lo menos {$a} opcion(es)';
$string['strategy_points_name'] = 'Dar Puntos';
$string['strategy_points_setting_maxzero'] = 'Número maximo de opciones a las que el usuario puede darle 0  puntos';
$string['strategy_points_setting_totalpoints'] = 'Número total de puntos que el usuario puede asignar';
$string['strategy_settings_label'] = 'Designación para "{$a}"';
$string['strategy_tickyes_accept'] = 'Aceptar';
$string['strategy_tickyes_error_mintickyes'] = 'Debe seleccionar al menos {$a} cajas.';
$string['strategy_tickyes_explain_mintickyes'] = 'Debe seleccionar un mínimo de {$a} cajas.';
$string['strategy_tickyes_name'] = 'Seleccionar Aceptar';
$string['strategy_tickyes_not_accept'] = '-';
$string['strategy_tickyes_setting_mintickyes'] = 'Número mínimo de opciones a aceptar';
$string['strategy_yesmaybeno_max_count_no'] = 'Solamente puede asignar "No" para un maximo de {$a} opciones.';
$string['strategy_yesmaybeno_max_no'] = 'Solamente puede asignar "No" a {$a} grupo().s';
$string['strategy_yesmaybeno_name'] = 'Si-Quizás-No';
$string['strategy_yesmaybeno_rating_maybe'] = 'Quizás';
$string['strategy_yesmaybeno_rating_no'] = 'No';
$string['strategy_yesmaybeno_rating_yes'] = 'Si';
$string['strategy_yesmaybeno_setting_maxno'] = 'Maximo número de opciones que el usuario puede calificar con "No"';
$string['strategy_yesno_maximum_crossout'] = 'Usted solamente puede asignarle "No" a un maximo de {$a} opcion(es).';
$string['strategy_yesno_max_no'] = 'Solamente puede asignarle "No" a {$a} grupos.';
$string['strategy_yesno_name'] = 'Si-No';
$string['strategy_yesno_rating_choose'] = 'Si';
$string['strategy_yesno_rating_crossout'] = 'No';
$string['strategy_yesno_setting_crossout'] = 'Máximo número de opciones que el usuario puede valorar con "No"';
$string['timeremaining'] = 'Tiempo restante';
$string['too_early_to_distribute'] = 'Demasiado pronto para distribuir. Todavía no termina la valoración.';
$string['too_early_to_rate'] = 'Es demasiado pronto para calificar';
$string['too_few_choices_to_rate'] = '¡Hay muy pocas opciones para valorar! Los estudiantes tienen que clasificar al menos {$a} opciones!';
$string['unassigned_users'] = 'Usuarios sin asignar';
$string['update_filter'] = 'Actualizar Filtro';
$string['your_allocated_choice'] = 'Su Asignación';
$string['your_rating'] = 'Su Valoración.';
