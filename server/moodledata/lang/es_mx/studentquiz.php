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
 * Strings for component 'studentquiz', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   studentquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anonymous_checkbox_label'] = 'Anonimizador de estudiante';
$string['anonymrankhelp'] = 'Anonimizar';
$string['anonymrankhelp_help'] = 'Anonimizar para los estudiantes la columna de \'creada por\' en la vista general de preguntas y los nombres en la tabla de ranking.';
$string['approve'] = 'Des-/Aprobar';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Aprobado';
$string['approveselectedscheck'] = 'Está Usted seguro de querer des/aprobar las preguntas siguientes ?<br /><br />{$a}';
$string['comment_column_name'] = 'Comentarios';
$string['config_add_q_quantifier'] = 'Puntos recibidos por crear una pregunta nueva.';
$string['config_correct_answered_q_quantifier'] = 'Puntos recibidos por contestar corrrectamente una pregunta.';
$string['config_incorrect_answered_q_quantifier'] = 'Puntos recibidos por contestar equivocadamente una pregunta.';
$string['config_vote_quantifier'] = 'Por ejemplo, si el multiplicador es 3 y una pregunta está valorada con un promedio de 4.3 estrellas, el autor de la pregunta recibirá 13 puntos (= ROUND(3 * 4.3; 1)).';
$string['createnewquestion'] = 'Crear pregunta nueva';
$string['createnewquestionfirst'] = 'Crear primera pregunta';
$string['createnewquizfromfilter'] = 'Correr preguntas filtradas';
$string['creator_anonym_firstname'] = 'anónimo';
$string['creator_anonym_lastname'] = 'anónimo';
$string['difficulty_level_column_name'] = 'Dificultad';
$string['emailapprovedbody'] = 'Estimado/a {$a->studentname},

Este Email le informa que su pregunta \'{$a->questionname}\'
en el curso \'{$a->coursename}\' ha sido aprobada por {$a->teachername}.

Uste dpuede revisar esta pregunta en: {$a->questionurl}.';
$string['emailapprovedsmall'] = 'Su pregunta \'{$a->questionname}\' ha sido aprobada por {$a->teachername}.';
$string['emailapprovedsubject'] = 'Pregunta aprobada: {$a->questionname}';
$string['emailchangebody'] = 'Estimado/s {$a->studentname},
Su pregunta \'{$a->questionname}\' en el curso \'{$a->coursename}\' en la actividad ExamenEstudiante (StudentQuiz) \'{$a->modulename}\'
ha sido modificada por \'{$a->teachername}\' at \'{$->questiontime}\'.

Usted puede revisar esta pregunta en:  {$a->questionurl}.';
$string['emailchangesmall'] = 'Su pregunta\'{$a->questionname}\'  sido modificad por {$a->teachername}.';
$string['emailchangesubject'] = 'Modificación de pregunta: {$a->questionname}';
$string['emailunapprovedbody'] = 'Estimado/a {$a->studentname},

Este Emaille informa que su pregunta  \'{$a->questionname}\'
en el curso \'{$a->coursename}\' ha sido desaprobada por {$a->teachername}.

Usted puede revisar esta pregunta en: {$a->questionurl}.';
$string['emailunapprovedsmall'] = 'Su pregunta\'{$a->questionname}\' ha sido des-aprobada por {$a->teachername';
$string['emailunapprovedsubject'] = 'Pregunta desaprobada: {$a->questionname}';
$string['filter'] = 'Filtro';
$string['filter_ishigher'] = 'Es superior';
$string['filter_islower'] = 'Es inferior';
$string['filter_label_approved'] = 'Preguntas probadas';
$string['filter_label_comment'] = 'Comentarios';
$string['filter_label_createdate'] = 'Creación';
$string['filter_label_difficulty_level'] = 'Dificultad';
$string['filter_label_firstname'] = 'Nombre';
$string['filter_label_practice'] = 'Intentos';
$string['filter_label_question'] = 'Título de pregunta';
$string['filter_label_questiontext'] = 'Contenido de pregunta';
$string['filter_label_search'] = 'Buscar';
$string['filter_label_show_mine'] = 'Mis preguntas';
$string['filter_label_surname'] = 'Apellido(s)';
$string['filter_label_tags'] = 'Marca (tag)';
$string['filter_label_votes'] = 'Valoración';
$string['messageprovider:approved'] = 'Notificación aprobación de pregunta';
$string['messageprovider:change'] = 'Notificación cambio de pregunta';
$string['messageprovider:unapproved'] = 'Notificación desaprobación de pregunta';
$string['modulename'] = 'ExamenEstudiante';
$string['modulename_help'] = 'La actividad ExamenEstudiante (StudentQuiz) le permite a los estudiantes que añadan preguntas para la multitud. En la vista general del ExamenEstudiante los estudiantes pueden filtrar las preguntas. Ellos también pueden usar las preguntas filtradas en la multitud para practicar. El profesor tiene la opción de anonimizar la columna de \'creado por\'.<br><br>La actividad de ExamenEstudiante le otorga  a los estudiantes puntos para motivarlos a que añadan preguntas y a que practiquen. Los puntos están enlistados en una tabla de ranking.<br><br>Para más información lea el  <a href="https://github.com/frankkoch/moodle-mod_studentquiz/blob/master/manuals/User-Manual.pdf">Manual del Usuario en idioma inglés</a>.';
$string['modulenameplural'] = 'ExamenEstudiante';
$string['nav_export'] = 'Exportar';
$string['nav_import'] = 'Importar';
$string['nav_question_and_quiz'] = 'Examen y Preguntas';
$string['nav_questionbank'] = 'Banco de preguntas';
$string['nav_report'] = 'Reporte';
$string['nav_report_quiz'] = 'Examen';
$string['nav_report_rank'] = 'Ranking';
$string['no_comment'] = 'sin comentario';
$string['no_difficulty_level'] = 'sin dificultad';
$string['no_practice'] = 'sin intentos';
$string['no_tags'] = 'sin marcas (tags)';
$string['not_approved'] = '✗';
$string['no_votes'] = 'sin valoraciones';
$string['pluginadministration'] = 'Administración de ExamenEstudiante';
$string['pluginname'] = 'ExamenEstudiante';
$string['practice_column_name'] = 'Intentos';
$string['questionsinuse'] = '(* Las preguntas marcadas con un asterisco ya están en uso en algunos exámenes.)';
$string['quiz_advanced_settings_header'] = 'Configuraciones Avanzadas';
$string['quizpracticebehaviour'] = 'Valorar y Comentar';
$string['quizpracticebehaviourhelp'] = 'Valoración y comentado de preguntas';
$string['quizpracticebehaviourhelp_help'] = 'Valoración y comentado de preguntas';
$string['rankingsettingsheader'] = 'Configuraciones de ranking';
$string['reportquiz_admin_quizzes_table_column_qbehaviour'] = 'Comportamiento del examen';
$string['reportquiz_admin_quizzes_table_column_quizname'] = 'Nombre del examen';
$string['reportquiz_admin_quizzes_table_column_timecreated'] = 'Creado';
$string['reportquiz_admin_quizzes_table_link_to_quiz'] = 'Enlazar a examen';
$string['reportquiz_admin_quizzes_title'] = 'Exámenes creados';
$string['reportquiz_admin_title'] = 'Estadísticas del usuario';
$string['reportquiz_admin_total_title'] = 'Total General';
$string['reportquiz_dashboard_title'] = 'Estadíticas';
$string['reportquiz_stats_attempt'] = 'Veces que Usted corre el examen';
$string['reportquiz_stats_avg_rating'] = 'Su promedio de valoración recibida';
$string['reportquiz_stats_nr_of_approved_questions'] = 'Número de preguntas parobadas';
$string['reportquiz_stats_nr_of_own_questions'] = 'Usted ha contribuído';
$string['reportquiz_stats_nr_of_questions'] = 'Número depreguntas en este examen';
$string['reportquiz_stats_own_grade_of_max'] = 'Su calificación total';
$string['reportquiz_stats_questions_answered'] = 'Total de sus respuestas';
$string['reportquiz_stats_questions_right'] = 'Total de respuestas correctas';
$string['reportquiz_stats_right_answered_questions'] = 'Usted ha contestado correctamente';
$string['reportquiz_stats_title'] = 'Estadísticas';
$string['reportquiz_summary_title'] = 'Sus instancias de examen';
$string['reportquiz_total_attempt'] = 'Veces que los usuarios corrieron el examen';
$string['reportquiz_total_obtained_marks'] = 'Calificación Total';
$string['reportquiz_total_questions_answered'] = 'Total de respuestas';
$string['reportquiz_total_questions_right'] = 'Total de respuestas correctas';
$string['reportquiz_total_questions_wrong'] = 'Respuestas equivocadas';
$string['reportquiz_total_title'] = 'Estadísticas de Intentos';
$string['reportquiz_total_users'] = 'Número de participantes';
$string['reportrank_table_column_fullname'] = 'Nombre_completo';
$string['reportrank_table_column_points'] = 'Puntos';
$string['reportrank_table_column_rank'] = 'Ranking';
$string['reportrank_table_title'] = '- Ranking';
$string['reportrank_title'] = 'Ranking del usuario';
$string['settings_add_q_quantifier'] = 'Puntos por cada pregunta creada';
$string['settings_correct_answered_q_quantifier'] = 'Puntos por cada respuesta correcta';
$string['settings_incorrect_answered_q_quantifier'] = 'Puntos por cada pregunta incorrecta';
$string['settings_vote_quantifier'] = 'Multiplicador para el promedio de estrellas recibidas por una pregunta';
$string['start_quiz_button'] = 'Iniciar Examen';
$string['studentquiz'] = 'examenestudiante';
$string['studentquiz:addinstance'] = 'Añadir nueva instancia';
$string['studentquiz:approved'] = 'Notificación de aprobación de pregunta';
$string['studentquiz:change'] = 'Notificación de cambio de pregunta';
$string['studentquiz:emailnotifyapproved'] = 'Notificación de aprobación de pregunta';
$string['studentquiz:emailnotifychange'] = 'Notificación de cambio de pregunta';
$string['studentquiz:emailnotifyunapproved'] = 'Notificación de desaprobación de pregunta';
$string['studentquizfieldset'] = 'Conjunto_de_campo de ejemplo personalizado';
$string['studentquizname'] = 'Nombre del ExamenEstudiante';
$string['studentquizname_help'] = 'Nombre del ExamenEstudiante';
$string['studentquiz:submit'] = 'Enviar en ExamenEstudiante';
$string['studentquiz:unapproved'] = 'Notificación de desaprobación de pregunta';
$string['studentquiz:view'] = 'Ver ExamenEstudiante';
$string['tag_column_name'] = 'Marcas (Tags)';
$string['viewlib_please_contact_the_admin'] = 'Por favor, contacte al administrador.';
$string['viewlib_please_select_question'] = 'Por favor, seleccione una pregunta.';
$string['vote_column_name'] = 'Valoraciones';
$string['vote_points'] = 'Puntos';
