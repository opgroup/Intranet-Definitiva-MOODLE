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
 * Strings for component 'qtype_stack', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   qtype_stack
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanothernode'] = 'Añadir otro nodo';
$string['addanothertestcase'] = 'Añadir otro caso de prueba...';
$string['addatestcase'] = 'Añadir un caso de prueba...';
$string['addingatestcase'] = 'Añadir un caso de prueba a pregunta {$a}';
$string['alg_indices_fact'] = 'Las leyes siguientes gobiernan la manipulación de índice:
\\[a^ma^n = a^{m+n}\\]
\\[\\frac{a^m}{a^n} = a^{m-n}\\]
\\[(a^m)^n = a^{mn}\\]
\\[a^0 = 1\\]
\\[a^{-m} = \\frac{1}{a^m}\\]
\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]
\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';
$string['alg_indices_name'] = 'Las Leyes de Índices';
$string['alg_inequalities_fact'] = '\\[a>b \\hbox{ means } a \\hbox{ es mayor que } b.\\]
\\[ a < b \\hbox{ means } a \\hbox{ es menor que } b.\\]
\\[a\\geq b \\hbox{ means } a \\hbox{ es mayor que o igual a } b.\\]
\\[a\\leq b \\hbox{ means } a \\hbox{ es menor que o igual a } b.\\]';
$string['alg_inequalities_name'] = 'Desigualdades';
$string['alg_logarithms_fact'] = 'Para cualquier base \\(c>0\\) con \\(c \\neq 1\\):
\\[\\log_c(a) = b \\mbox{, means } a = c^b\\]
\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]
\\[\\log_c(a) - \\log_c(b) = \\log_c\\left(\\frac{a}{c}\\right)\\]
\\[n\\log_c(a) = \\log_c\\left(a^n\\right)\\]
\\[\\log_c(1) = 0\\]
\\[\\log_c(b) = 1\\]
La fórmula para un cambio de base es: \\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]
Logaritmos a base  \\(e\\), denoted \\(\\log_e\\)  o alternativamente \\(\\ln\\)  se llaman logaritmos naturales. La letra  \\(e\\)  representa la constante exponencial que es aproximadamentes  \\(2.718\\).';
$string['alg_logarithms_name'] = 'Las Leyes de Logaritmos';
$string['alg_partial_fractions_fact'] = 'Fracciones propias ocurren con [{frac{P(x)}{Q(x)}}]
cuando (P) y (Q) son polinomios con el grado de (P) menor que el grado de  (Q).Con este caso,  nosotros procedemos como sigue: escribir (Q(x)) en forma factorizada,
<ul>
<li>
un <em>factor lineal</em> (ax+b) en el denominador produce una fracción parcial de la forma [{frac{A}{ax+b}}.]
</li>
<li>
un <em>factor lineal repetido</em> ((ax+b)^2) ien el denominador
produce fracciones parciales de la forma [{Aover ax+b}+{Bover (ax+b)^2}.]
</li>
<li>
un <em>factor cuadrático</em> (ax^2+bx+c)
en el denominador produce una fracción parcial de la forma [{Ax+Bover ax^2+bx+c}]
</li>
<li>
<em>Fracciones impropias}</em> requieren un término adicional que es un polinomio de grado (n-d) donde (n) es
el grado del  numerador (por ejemplo (P(x))) y (d) es el grado del denominador (por ejemplo (Q(x))).
</li></ul>';
$string['alg_partial_fractions_name'] = 'Fracciones Parciales';
$string['alg_quadratic_formula_fact'] = 'Si tenemos una ecuación cuadrática de la forma:
\\[ax^2 + bx + c = 0,\\]
entonces la(s) solución(es) para esa ecuación dadas por la fórmula cuadrática son:
\\[x = \\frac{-b \\pm \\sqrt{b^2 - 4ac}}{2a}.\\]';
$string['alg_quadratic_formula_name'] = 'La fórmula cuadrática';
$string['all'] = 'Todos/as';
$string['allnodefeedbackmustusethesameformat'] = 'Toda la retroalimentación para todos los nodos en este PRT (Potencial Response Tree = Árbol de Respuesta Potencial) deben usar el mismo formato de texto.';
$string['allowwords'] = 'Palabras permitidas';
$string['allowwords_help'] = 'Por defecto. funciones arbitrarias o nombres de variables de más de dos caracteres de longitud no están permitidas. Esta es una lista separada por comas de funciones o nombres de variables que están permitidos en una respuesta de estudiante.';
$string['alreadydeployed'] = 'Una variante que coincide con esta nota de Pregunta ya está desplegada.';
$string['answernote'] = 'Nota de Respuesta';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernote_err'] = 'Las notas de respuesta no pueden contener el caracter |. Este caracter es insertado por STACK y después es usado para dividir automáticamente las notas de respuesta.';
$string['answernote_help'] = 'Esta es una marca (tag) que es clave para propósitos de reporte. Está designada para grabar la ruta única a través del árbol, y la resultante de cada prueba de respuesta. Esta es generada automáticamente, pero puede cambiarse por algo más significativo.';
$string['answernoterequired'] = 'La nota de respuesta no puede estar vacía';
$string['answernoteunique'] = 'Notas de respuesta duplicadas detectadas en este árbol de respuesta potencial';
$string['answertest'] = 'Prueba de respuesta';
$string['answertest_help'] = 'Una prueba de respuesta se usa para comparar dos expresiones, para establecer si satisfacen algunos criterios matemáticos.';
$string['assumepositive'] = 'Asuma positivo';
$string['assumepositive_help'] = 'Esta opción configura el valor de la variable assume_pos de Máxima.';
$string['ATAlgEquiv_SA_not_equation'] = 'Su respuesta debería ser una ecuación, pero no la es.';
$string['ATAlgEquiv_SA_not_expression'] = 'Su respuesta debería ser una expresión, no una ecuación, desigualdad, lista, conjunto ni matriz.';
$string['ATAlgEquiv_SA_not_function'] = 'Su respuesta debería de ser una función, definida usando el operador  <tt>:=</tt>, pero no lo es.';
$string['ATAlgEquiv_SA_not_inequality'] = 'Su respuesta debería ser una desigualdad, pero no la es.';
$string['ATAlgEquiv_SA_not_list'] = 'Su respuesta debería ser una lista, pero no la es. Tome nota de que la sintaxis para escribir una lista es incluir los valores separados por coma dentro de corchetes (paréntesis cuadrados).';
$string['ATAlgEquiv_SA_not_matrix'] = 'Su respuesta debería ser una matriz, pero no lo es.';
$string['ATAlgEquiv_SA_not_set'] = 'Su respuesta debería ser un conjunto, pero no lo es. Tome nota de que la sintaxis para escribir un conjunto es incluir los valores separados por coma dentro de corchetes {}.';
$string['ATAlgEquiv_TA_not_equation'] = 'Used ha escrito una ecuación, pero eso no es lo que se esperaba aquí. Usted pudo haber escrito algo parecido a  "y=2*x+1" cuando solamente necesitaba escribir "2*x+1".';
$string['ATCompSquare_false'] = '';
$string['ATCompSquare_false_no_summands'] = 'El cuadrado completo es de la forma \\( a(\\cdots\\cdots)^2 + b\\)  donde \\(a\\) y \\(b\\)  no dependen de su variable. Más de uno de sus sumandos al parecer depende de la variable en su respuesta.';
$string['ATCompSquare_not_AlgEquiv'] = 'Su respuesta parece estar en la forma correcta, pero no es equivalente a la respuesta correcta.';
$string['ATCompSquare_SA_not_depend_var'] = 'Su respuesta debería depender de la variable {$a->m0} pero no lo hace!';
$string['ATCompSquare_true'] = '';
$string['ATDiff_error_list'] = 'La prueba de respuesta falló. Por favor contacte a su administrador de sistemas';
$string['ATDiff_int'] = '¡Parece que Usted ha integrado en lugar de hacer lo que se le pidió!';
$string['AT_EmptySA'] = 'Se intentó ejecutar una prueba de respuesta con una respuesta de estudiante vacía, probablemente sea un problema de validación CAS al fabricar la pregunta.';
$string['AT_EmptyTA'] = 'Se intentó ejecutar una prueba de respuesta con una respuesta de maestro vacía, probablemente sea un problema de validación CAS al fabricar la pregunta.';
$string['ATFacForm_error_degreeSA'] = 'El cAS no pudo establecer el grado algebraico de su respuesta.';
$string['ATFacForm_error_list'] = 'La prueba de respuesta falló. Por favor contacte a su administrador de sistemas';
$string['ATFacForm_isfactored'] = 'Su respuesta está factorizada, bien hecho.';
$string['ATFacForm_notalgequiv'] = 'Tome nota de que su respuesta no es algebraicamente equivalente a la respuesta correcta. Usted debe de haber hecho algo mal.';
$string['ATFacForm_notfactored'] = 'Su respuesta no está factorizada';
$string['ATInequality_backwards'] = 'Su desigualdad parece que está al revés.';
$string['ATInequality_nonstrict'] = 'Su desigualdad debería ser estricta, pero no lo es ¡!';
$string['ATInequality_strict'] = '¡ Su desigualdad no debería ser estricta !';
$string['ATInt_const'] = 'Usted necesita añadir una constante de integración, por lo demás, esto parecería estar correcto, Bien hecho.';
$string['ATInt_const_int'] = 'Usted necesita añadir una constante de integración. Esta debería ser una constante arbitraria, no un número.';
$string['ATInt_diff'] = '¡ parecería que Usted ha diferenciado en lugar de hacer lo que se le pidió !';
$string['ATInt_EqFormalDiff'] = 'La derivada formal de su respuesta es igual a la expresión que se le pidió que integrara. Sin embargo, su respuesta difiere de la respuesta correcta en una forma significativa, no trivial; por ejemplo: una constante de integración. Por favor pregunte a su maestro a este respecto.';
$string['ATInt_error_list'] = 'La prueba de respuesta falló. Por favor contacte a su administrador de sistemas';
$string['ATInt_generic'] = 'La derivada de su respuesta debería de ser igual a la expresión que se le pidió que integrara, que era: {$a->m0} De hecho, la derivada de su respuesta, con respecto a {$a->m1} es: {$a->m2} por lo que ¡ Usted debe de haber hecho algo mal!';
$string['ATInt_logabs'] = 'La derivada formal de su respuesta no equivale a la expresión que se le pidió que integrara. Sin embargo, su respuesta difiere de la respuesta correcta de una manera significativa, lo que significa que no solamente es (por ejemplo) una constante de integración. Su profesor puede esperar que Usted use el resultado de (intfrac{1}{x} dx = log(|x|)+c), en lugar de (intfrac{1}{x} dx = log(x)+c). Por favor, pregúntele a su profesor acerca de esto.';
$string['ATInt_logabs_inconsistent'] = 'Al parecer hay inconsistencias extrañas entre su uso de \\(\\log(...)\\) and \\(\\log(|...|)\\). . Por favor, pregúntele  a su profesor al respecto.';
$string['ATInt_STACKERROR_OptList'] = 'La prueba de respuesta falló y no se ejecutó correctamente. Por favor alerte a su profesor. Cuando la opción para ATInt es una lista, debe de tener exactamente sod elementos, pero no los tiene.';
$string['ATInt_weirdconst'] = 'La derivada formal de su respuesta no es igual a la expresión que se le pidió integrar. Sin embargo, Usted tiene una extraña constante de integración. Por favor,pregunte a su maestro a este respecto.';
$string['AT_InvalidOptions'] = 'El campo de opción es inválido. {$a->errors}';
$string['ATList_wrongentries'] = 'Las entradas en rojo son aquellas que están incorrectas. {$a->m0}';
$string['ATList_wronglen'] = 'Su lista debería de tener {$a->m0} elementos, pero en realidad tiene {$a->m1}.';
$string['ATLowestTerms_entries'] = 'Los siguientes términos en su respuesta no están en los términos menores. {$a->m0} Por favor intente de nuevo.';
$string['ATLowestTerms_wrong'] = 'Usted necesita cancelar fracciones dentro de su respuesta.';
$string['ATMatrix_wrongentries'] = 'Las entradas inferiores en rojo son aquellas que están incorrectas. {$a->m0}';
$string['ATMatrix_wrongsz'] = 'Su matriz debería de ser {$a->m0} por {$a->m1}, pero en realidad es {$a->m2} por {$a->m3}.';
$string['AT_MissingOptions'] = 'Faltó opción al ejecutar la prueba';
$string['AT_NOTIMPLEMENTED'] = 'Esta prueba de respuesta no ha sido implementada.';
$string['ATNumDecPlaces_NoDP'] = 'Su respuesta debe ser un número decimal, incluyendo un punto decimal.';
$string['ATNumDecPlaces_OptNotInt'] = 'Para ATNumDecPlaces la opción de prueba debe ser un entero positivo, de hecho "{$a->opt}" fue recibido.';
$string['ATNumDecPlaces_Wrong_DPs'] = 'Su respuesta ha sido dada al número equivocado de decimales.';
$string['ATNumerical_FAILED'] = 'Su respuesta debería de ser un número de punto flotante, o una lista o conjunto de números. No es así.';
$string['ATNumerical_SA_not_list'] = 'Su respuesta debería de ser una lista, pero no lo es. Tome nota de que la sintaxis para escribir una lista es incluir los valores separados por coma dentro de corchetes (paréntesis cuadrados).';
$string['ATNumerical_SA_not_number'] = 'Su respuesta debería de ser un número de punto flotante, pero no lo es.';
$string['ATNumerical_SA_not_set'] = 'Su respuesta debería de ser un conjunto, pero no lo es. Tome nota de que la sintaxis para escribir un conjunto es incluir los valores separados por coma dentro de paréntesis ondulados.';
$string['ATNumerical_STACKERROR_tol'] = 'La tolerancia numérica para ATNumerical debería de ser un número de punto flotante, pero no lo es. Este es un error interno con la prueba. Por favor, dígale esto a su profesor.';
$string['ATNum_OutofRange'] = 'Una expresión numérica está fuera del rango soportado. Por favor, contacte a su profesor.';
$string['ATNumSigFigs_error_list'] = 'La prueba de respuesta falló. Por favor contacte a su administrador de sistemas';
$string['ATNumSigFigs_Inaccurate'] = 'La precisiónde su respuesta no es correcta. Puede ser que Usted no haya redondeado correctamente, o puede que haya redondeado una respuesta intermedia que propagó un error.';
$string['ATNumSigFigs_NotDecimal'] = '¡ Su respuesta debería ser un número decimal, pero no lo es!';
$string['ATNumSigFigs_WrongDigits'] = 'Su respuesta contiene el número equivocado de dígitos significativos.';
$string['ATNumSigFigs_WrongSign'] = 'Su respuesta tiene el signo algebraico equivocado.';
$string['ATPartFrac_denom_ret'] = 'Si su respuesta está escrita como una fracción única, entonces el denominador sería {$a->m0}. De hecho, debería de ser {$a->m1}.';
$string['ATPartFrac_diff_variables'] = 'Las variables en su respuesta son diferentes de las de la pregunta, por favor revíselas.';
$string['ATPartFrac_error_list'] = 'La prueba de respuesta falló. Por favor contacte a su administrador de sistemas';
$string['ATPartFrac_ret_expression'] = 'Su respuesta como una fracción sencilla es {$a->m0}';
$string['ATPartFrac_single_fraction'] = 'Su respuesta parece ser una fracción única, necesita estar en forma de fracción parcial';
$string['ATPartFrac_true'] = '';
$string['ATRegEx_missing_option'] = 'Falta expresión regular en el campo de Opción CAS';
$string['ATSet_wrongentries'] = 'Las siguientes entradas son incorrectas, aunque estas pueden aparecer en una forma simplificada respecto a las que usted originalmente escribió. {$a->m0}';
$string['ATSet_wrongsz'] = 'Su conjunto debería de tener  {$a->m0} diferentes elementos, pero en realidad tiene {$a->m1}.';
$string['ATSingleFrac_div'] = 'Su respuesta contiene fracciones dentro de fracciones. Usted necesita resolver estas y escribir su respuesta como una fracción única.';
$string['ATSingleFrac_error_list'] = 'La prueba de respuesta falló. Por favor contacte a su administrador de sistemas';
$string['ATSingleFrac_part'] = 'Su respuesta necesita ser una fracción sencilla en la forma \\( {a}\\sobre{b} \\).';
$string['ATSingleFrac_ret_exp'] = 'Su respuesta no es algebraicamente equivalente a la respuesta correcta. Usted debe de haber hecho algo mal.';
$string['ATSingleFrac_true'] = '';
$string['ATSingleFrac_var'] = 'Las variables en su respuesta son diferentes a las de lapregunta, por favor revíselas';
$string['ATSysEquiv_SA_extra_variables'] = '¡ Su respuesta incluye demasiadas variables !';
$string['ATSysEquiv_SA_missing_variables'] = '¡ A su respuesta le faltan una o más variables !';
$string['ATSysEquiv_SA_not_eq_list'] = '¡ Su respuesta debería ser una lista de ecuaciones, pero no lo es !';
$string['ATSysEquiv_SA_not_list'] = '¡ Su respuesta debería ser una lista, pero no lo es !';
$string['ATSysEquiv_SA_not_poly_eq_list'] = '¡ Una o más de sus ecuaciones no es un polinomio !';
$string['ATSysEquiv_SA_system_overdetermined'] = 'Las entradas inferiores en rojo son aquellas que están incorrectas. {$a->m0}';
$string['ATSysEquiv_SA_system_underdetermined'] = 'Las ecuaciones en su sistema parecen estar correctas, pero usted necesita además otras.';
$string['ATSysEquiv_SB_not_eq_list'] = 'La respuesta del maestro no es una lista de ecuaciones, aunque si debería de serlo.';
$string['ATSysEquiv_SB_not_list'] = 'La respuesta del maestro no es una lista, Por favor contacte a su profesor.';
$string['ATSysEquiv_SB_not_poly_eq_list'] = 'La respuesta del maestro debería ser una lista de ecuaciones polinomiales, pero no lo es. Por favor contacte a su maestro.';
$string['ATUnits_compatible_units'] = 'Sus unidades son diferentes de las usadas por el profesor, pero son comptibles con ellas. Los valores numéricos están siendo convertidos a unidades en base del Sistema Internacional de Unidades para comparación.';
$string['ATUnits_correct_numerical'] = 'Por favor revise cuidadosamente sus unidades.';
$string['ATUnits_incompatible_units'] = 'Sus unidades son incompatibles con las unidades usadas por el profesor.';
$string['ATUnits_SA_bad_units'] = 'Su respuesta debe de tener unidades, y Usted debe de usar multiplicación para anexarle las unidades a un valor; por ejemplo <code>3.2*m/s</code>.';
$string['ATUnits_SA_excess_units'] = 'Su respuesta ha usado unidades (o variables), pero no debería de ser así.';
$string['ATUnits_SA_not_expression'] = 'Su respuesta necesita ser un número junto con unidades. No use conjuntos, listas, ecuaciones o matrices.';
$string['ATUnits_SA_no_units'] = 'Su respuesta debe de tener unidades.';
$string['ATUnits_SA_only_units'] = 'Su respuesta necesita ser un número junto con unidades. Su respuesta únicamente tiene unidades.';
$string['autosimplify'] = 'Auto-simplificar';
$string['autosimplify_help'] = 'Configura la variable "simp" dentro de Maxima para esta pregunta. Por ejemplo, variables de pregunta, texto de pregunta, etc. El conjunto de valores en cada árbol de respuesta potencial anulará esto para cualesquieras expresiones subsecuentes definidas dentro del árbol.';
$string['autosimplifyprt'] = 'Auto-simplificar';
$string['autosimplifyprt_help'] = 'Configura la variable "simp" dentro de Maxima para las variables de retroalimentación definidas en este árbol de respuesta potencial, y mientras se evalúa éste Arbol de Respuesta Potencial. Esto anaulará cualquier valor configurado en la pregunta para cualquier expresión definida dentro del árbol.';
$string['booleangotunrecognisedvalue'] = 'Entrada inválida';
$string['boxsize'] = 'Tamaño de caja de entrada';
$string['boxsize_help'] = 'Ancho del campodeforma HTML';
$string['branchfeedback'] = 'Retroalimentación de rama de nodo';
$string['branchfeedback_help'] = 'Esto es texto CAS que puede depender de cualquiera de las variables de la pregunta, elementos de entrada o las variables de retroalimentación. Esto es evaluado y mostrado al estudiante si pasan por esta rama.';
$string['bulktestcontinuefromhere'] = 'Correr nuevamente, comenzando desde aquí';
$string['bulktestindexintro'] = 'Al hacer click sobre cualquiera de los enlaces correrá todas las pruebas de preguntas en todas las preguntas STACK en ese contexto.';
$string['bulktestindexintro_desc'] = 'El <a href="{$a->link}"> corre las pruebas de pregunta en un \'\'script\'\' masivamente</a> y le permite correr facilmente todas las preguntas STACK en un contexto dado. No solamente prueba las preguntas, también es una fuena forma para re-poblar la caché CAS después de que ha sido limpiada.';
$string['bulktestindextitle'] = 'Correr las pruebas de preguntas en lote';
$string['bulktestnotests'] = 'Esta pregunta no tiene prueba alguna.';
$string['bulktestrun'] = 'Correr todas las pruebas de pregunta en el sistema (lento, solamente administradores)';
$string['bulktesttitle'] = 'Corriendo todas las pruebas de pregunta en {$a}';
$string['calc_chain_rule_fact'] = 'La regla siguiente le permite a uno encontrar la derivada de una composición de dos funciones.
Asuma que tenemos una función (f(g(x))), entonces definiendo (u=g(x)), la derivada con respecto a (x) está dada por:
[frac{df(g(x))}{dx} = frac{dg(x)}{dx}cdotfrac{df(u)}{du}.]
Alternativamente, podemos escribir: [frac{df(x)}{dx} = f\'(g(x))cdot g\'(x).]';
$string['calc_chain_rule_name'] = 'La regla de cadena';
$string['calc_diff_linearity_rule_fact'] = '[{{rm d},sobre {rm d}x}big(af(x)+bg(x)big)=a{{rm d}f(x)over {rm d}x}+b{{rm d}g(x)sobre {rm d}x}quad a,b {rm constant}]';
$string['calc_diff_linearity_rule_name'] = 'La regla de Linearidad para Diferenciación';
$string['calc_diff_standard_derivatives_fact'] = 'La siguiente tabla muestra las derivadas de algunas funciones estándar. Es útil aprenderse estas derivadas estándar, porque son frecuentemente usadas en cálculo.
<center>
<table>
<tr><th>\\(f(x)\\) </th><th> \\(f\'(x)\\)</th></tr>
<tr>
<td>\\(k\\), constant </td> <td> \\(0\\) </td> </tr> <tr> <td>
\\(x^n\\), any constant \\(n\\) </td> <td> \\(nx^{n-1}\\)</td> </tr> <tr> <td>
\\(e^x\\) </td> <td> \\(e^x\\)</td> </tr> <tr> <td>
\\(\\ln(x)=\\log_{\\rm e}(x)\\) </td> <td> \\(\\frac{1}{x}\\) </td> </tr> <tr> <td>
\\(\\sin(x)\\) </td> <td> \\(\\cos(x)\\) </td> </tr> <tr> <td>
\\(\\cos(x)\\) </td> <td> \\(-\\sin(x)\\) </td> </tr> <tr> <td>
\\(\\tan(x) = \\frac{\\sin(x)}{\\cos(x)}\\) </td> <td> \\(\\sec^2(x)\\) </td> </tr> <tr> <td>
\\(cosec(x)=\\frac{1}{\\sin(x)}\\) </td> <td> \\(-cosec(x)\\cot(x)\\) </td> </tr> <tr> <td>
\\(\\sec(x)=\\frac{1}{\\cos(x)}\\) </td> <td> \\(\\sec(x)\\tan(x)\\) </td> </tr> <tr> <td>
\\(\\cot(x)=\\frac{\\cos(x)}{\\sin(x)}\\) </td> <td> \\(-cosec^2(x)\\) </td> </tr> <tr> <td>
\\(\\cosh(x)\\) </td> <td> \\(\\sinh(x)\\) </td> </tr> <tr> <td>
\\(\\sinh(x)\\) </td> <td> \\(\\cosh(x)\\) </td> </tr> <tr> <td>
\\(\\tanh(x)\\) </td> <td> \\(sech^2(x)\\) </td> </tr> <tr> <td>
\\(sech(x)\\) </td> <td> \\(-sech(x)\\tanh(x)\\) </td> </tr> <tr> <td>
\\(cosech(x)\\) </td> <td> \\(-cosech(x)\\coth(x)\\) </td> </tr> <tr> <td>
\\(coth(x)\\) </td> <td> \\(-cosech^2(x)\\) </td> </tr>
</table>
</center>

\\[ \\frac{d}{dx}\\left(\\sin^{-1}(x)\\right) = \\frac{1}{\\sqrt{1-x^2}}\\]
\\[ \\frac{d}{dx}\\left(\\cos^{-1}(x)\\right) = \\frac{-1}{\\sqrt{1-x^2}}\\]
\\[ \\frac{d}{dx}\\left(\\tan^{-1}(x)\\right) = \\frac{1}{1+x^2}\\]
\\[ \\frac{d}{dx}\\left(\\cosh^{-1}(x)\\right) = \\frac{1}{\\sqrt{x^2-1}}\\]
\\[ \\frac{d}{dx}\\left(\\sinh^{-1}(x)\\right) = \\frac{1}{\\sqrt{x^2+1}}\\]
\\[ \\frac{d}{dx}\\left(\\tanh^{-1}(x)\\right) = \\frac{1}{1-x^2}\\]';
$string['calc_diff_standard_derivatives_name'] = 'Derivadas estándar';
$string['calc_int_linearity_rule_fact'] = '\\[\\int \\left(af(x)+bg(x)\\right){\\rm d}x = a\\int\\!\\!f(x)\\,{\\rm d}x
\\,+\\,b\\int \\!\\!g(x)\\,{\\rm d}x, \\quad (a,b \\, \\, {\\rm constant.})
\\]';
$string['calc_int_linearity_rule_name'] = 'La Regla de Linearidad para Integración';
$string['calc_int_methods_parts_fact'] = '\\[
\\int_a^b u{{\\rm d}v\\over {\\rm d}x}{\\rm d}x=\\left[uv\\right]_a^b-
\\int_a^b{{\\rm d}u\\over {\\rm d}x}v\\,{\\rm d}x\\]
or alternatively: \\[\\int_a^bf(x)g(x)\\,{\\rm d}x=\\left[f(x)\\,\\int
g(x){\\rm d}x\\right]_a^b -\\int_a^b{{\\rm d}f\\over {\\rm
d}x}\\left\\{\\int g(x){\\rm d}x\\right\\}{\\rm d}x.\\]';
$string['calc_int_methods_parts_name'] = 'Integración por Partes';
$string['calc_int_methods_substitution_fact'] = '\\[
\\int f(u){{\\rm d}u\\over {\\rm d}x}{\\rm d}x=\\int f(u){\\rm d}u
\\quad\\hbox{and}\\quad \\int_a^bf(u){{\\rm d}u\\over {\\rm d}x}\\,{\\rm
d}x = \\int_{u(a)}^{u(b)}f(u){\\rm d}u.
\\]';
$string['calc_int_methods_substitution_name'] = 'Integración por Sustitución';
$string['calc_int_standard_integrals_fact'] = '\\[\\int k\\ dx = kx +c, \\mbox{ where k is constant.}\\]
\\[\\int x^n\\ dx = \\frac{x^{n+1}}{n+1}+c, \\quad (n\\ne -1)\\]
\\[\\int x^{-1}\\ dx = \\int {\\frac{1}{x}}\\ dx = \\ln(|x|)+c = \\ln(k*|x|) = \\left\\{\\matrix{\\ln(x)+c & x>0\\cr
\\ln(-x)+c & x<0\\cr}\\right.\\]

<center>
<table>
<tr><th>\\(f(x)\\)</th><th> \\(\\int f(x)\\ dx\\)</th></tr>
<tr><td>\\(e^x\\) </td> <td> \\(e^x+c\\)</td> <td> </td> </tr>
<tr><td>\\(\\cos(x)\\) </td> <td> \\(\\sin(x)+c\\) </td> <td> </td> </tr>
<tr><td>\\(\\sin(x)\\) </td> <td> \\(-\\cos(x)+c\\) </td> <td> </td> </tr>
<tr><td>\\(\\tan(x)\\) </td> <td> \\(\\ln(\\sec(x))+c\\) </td> <td>\\(-\\frac{\\pi}{2} < x < \\frac{\\pi}{2}\\)</td> </tr>
<tr><td>\\(\\sec x\\) </td> <td> \\(\\ln (\\sec(x)+\\tan(x))+c\\) </td> <td> \\( -{\\pi\\over 2}< x < {\\pi\\over 2}\\)</td> </tr>
<tr><td>cosec\\(\\, x\\) </td> <td> \\(\\ln ($cosec$(x)-\\cot(x))+c\\) </td> <td>\\(0 < x < \\pi\\)</td> </tr>
<tr><td>cot\\(\\,x\\) </td> <td> \\(\\ln(\\sin(x))+c\\) </td> <td> \\(0< x< \\pi\\) </td> </tr>
<tr><td>\\(\\cosh(x)\\) </td> <td> \\(\\sinh(x)+c\\)</td> <td></td> </tr>
<tr><td>\\(\\sinh(x)\\) </td> <td> \\(\\cosh(x) + c\\) </td> <td> </td> </tr>
<tr><td>\\(\\tanh(x)\\) </td> <td> \\(\\ln(\\cosh(x))+c\\)</td> <td> </td> </tr>
<tr><td>coth\\((x)\\) </td> <td> \\(\\ln(\\sinh(x))+c \\)</td> <td> \\(x>0\\)</td> </tr>
<tr><td>\\({1\\over x^2+a^2}\\) </td> <td> \\({1\\over a}\\tan^{-1}{x\\over a}+c\\)</td> <td> \\(a>0\\)</td> </tr>
<tr><td>\\({1\\over x^2-a^2}\\) </td> <td> \\({1\\over 2a}\\ln{x-a\\over x+a}+c\\) </td> <td> \\(|x|>a>0\\)</td> </tr>
<tr><td>\\({1\\over a^2-x^2}\\) </td> <td> \\({1\\over 2a}\\ln{a+x\\over a-x}+c\\) </td> <td> \\(|x|<a\\)</td> </tr>
<tr><td>\\({1\\over \\sqrt{x^2+a^2}}\\) </td> <td> \\(\\sinh^{-1}\\left(\\frac{x}{a}\\right) + c\\) </td> <td> \\(a>0\\) </td> </tr>
<tr><td>\\({1\\over \\sqrt{x^2-a^2}}\\) </td> <td> \\(\\cosh^{-1}\\left(\\frac{x}{a}\\right) + c\\) </td> <td> \\(x\\geq a > 0\\) </td> </tr>
<tr><td>\\({1\\over \\sqrt{x^2+k}}\\) </td> <td> \\(\\ln (x+\\sqrt{x^2+k})+c\\)</td> <td> </td> </tr>
<tr><td>\\({1\\over \\sqrt{a^2-x^2}}\\) </td> <td> \\(\\sin^{-1}\\left(\\frac{x}{a}\\right)+c\\)</td> <td> \\(-a\\leq x\\leq a\\) </td> </tr>
</table></center>';
$string['calc_int_standard_integrals_name'] = 'Integrales Estándar';
$string['calc_product_rule_fact'] = 'La regla siguiente le permite a uno diferenciar funciones que son multiplicadas juntas. Asuma que deseamos diferenciar \\(f(x)g(x)\\)  con respecto a \\(x\\).
\\[ \\frac{\\mathrm{d}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{\\mathrm{d} g(x)}{\\mathrm{d}{x}} + g(x)\\cdot \\frac{\\mathrm{d} f(x)}{\\mathrm{d}{x}},\\] o, usando notación alternativa, \\[ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). \\]';
$string['calc_product_rule_name'] = 'La Regla del Producto';
$string['calc_quotient_rule_fact'] = 'La regla del cociente para diferenciación indica que para dos funciones diferenciables cualquieras  \\(f(x)\\) y \\(g(x)\\),
\\[\\frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx}\\ \\ - \\ \\ f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}. \\]';
$string['calc_quotient_rule_name'] = 'La Regla del Cociente';
$string['calc_rules_fact'] = '<b>La Regla del Producto</b><br />La siguiente regla le permite a uno diferenciar funciones que son multiplicadas juntas. Asuma que deseamos diferenciar (f(x)g(x)) con respecto a (x).
[ frac{mathrm{d}}{mathrm{d}{x}} big(f(x)g(x)big) = f(x) cdot frac{mathrm{d} g(x)}{mathrm{d}{x}} + g(x)cdot frac{mathrm{d} f(x)}{mathrm{d}{x}},] o, usando notación alternativa, [ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). ]
<b>La Regla del Cociente</b><br />LA regla del cociente para diferenciación dice que para cualesquiera dos funciones diferenciables (f(x)) y (g(x)),
[frac{d}{dx}left(frac{f(x)}{g(x)}right)=frac{g(x)cdotfrac{df(x)}{dx} - f(x)cdot frac{dg(x)}{dx}}{g(x)^2}. ]
<b>La Regla de Cadena</b><br />La siguiente regla le permite a uno encontrar la derivada de una composición de dos funciones.
Asuma que tenemos una función (f(g(x))), entonces definiendo (u=g(x)), la derivada con respecto a (x) está dada por:
[frac{df(g(x))}{dx} = frac{dg(x)}{dx}cdotfrac{df(u)}{du}.]
Alternativamente, podemos escribir:
[frac{df(x)}{dx} = f\'(g(x))cdot g\'(x).]';
$string['calc_rules_name'] = 'Reglas del cálculo';
$string['casdisplay'] = 'Visualización CAS';
$string['cassuitecolerrors'] = 'Errores CAS';
$string['castext'] = 'Texto CAS';
$string['casvalid'] = 'V2';
$string['casvalidatemismatch'] = '[Discrepancia al validar CAS]';
$string['casvalue'] = 'Valor CAS';
$string['chat'] = 'Mandar al CAS';
$string['chat_desc'] = 'El  <a href="{$a->link}">CAS chat script</a> le permite probar la conexión al CAS y probar la sintaxis de Maxima.';
$string['chatintro'] = 'Ésta página habilita que el texto CAS sea evaluado directamente. Es un script simple que es un ejemplo mínimo útil, y una forma conveniente para revisar que el CAS está funcionando, y para probar varias entradas. La primera caja de texto habilita que se definan las variables, la segunda es para el texto CAS mismo.';
$string['chattitle'] = 'Probar la conexión al CAS';
$string['checkanswertype'] = 'Revisar el tipo de la respuesta';
$string['checkanswertype_help'] = 'En caso de SI, las respuestas que sean de un "tipo" diferente (ejemplos: expresión, ecuación, matríz, lista, conjunto) son rechazadas como inválidas.';
$string['clearthecache'] = 'Limpiar el caché';
$string['completetestcase'] = 'LLenar el resto del formato para hacer un caso-de-prueba que pase';
$string['complexno'] = 'Significado y visualización de sqrt(-1)';
$string['complexno_help'] = 'Controla el significado y visualización del símbolo i y sqrt(-1)';
$string['createtestcase'] = 'Crear caso de prueba';
$string['currentlyselectedvariant'] = 'Esta es la variante mostrada debajo';
$string['ddl_badanswer'] = 'El campo de respuest amodelo para éste ingreso está malformado: <code>{$a}</code>.';
$string['ddl_duplicates'] = 'Se han encontrado valores duplicados al generar las opciones para ingresar.';
$string['ddl_empty'] = 'No se proporcionaron opciones para este menú desplegable.';
$string['ddl_nocorrectanswersupplied'] = 'El profesor no indicó al menos una respuesta correcta.';
$string['ddl_runtime'] = 'El ingreso ha generado el siguiente error de corrida que le impide a Usted contestar. Por favor, contacte a su profesor.';
$string['ddl_unknown'] = 'STACK recibió <code>{$a}</code> pero esto no está enlistado por el profesor como una opción.';
$string['debuginfo'] = 'Información para depuración (debug)';
$string['defaultmarkzeroifnoprts'] = 'La calificación por defecto debe ser de 0 si esta pregunta no tiene PRTs.';
$string['defaultprtcorrectfeedback'] = 'Respuesta correcta, bien hecho.';
$string['defaultprtincorrectfeedback'] = 'Respuesta incorrecta.';
$string['defaultprtpartiallycorrectfeedback'] = 'Su respuesta es parcialmente correcta.';
$string['deletetestcase'] = 'Eliminar caso de prueba  {$a->no} para pregunta {$a->question}';
$string['deletetestcaseareyousure'] = '¿Está seguro de querer eliminar el caso de prueba {$a->no} para pregunta {$a->question}?';
$string['deletethistestcase'] = 'Eliminar este caso de prueba...';
$string['deploy'] = 'Desplegar';
$string['deployedvariants'] = 'Variantes desplegadas';
$string['deployedvariantsn'] = 'Variantes desplegadas ({$a})';
$string['deploymany'] = 'Intentar desplegar automáticamente el siguiente número de variantes:';
$string['deploymanyerror'] = 'Error en la entrada del usuario: no pueden desplegarse "{$a->err}" variantes.';
$string['deploymanynonew'] = 'Se generaron demasiadas notas de preguntas existentes repetidas.';
$string['deploymanynotes'] = 'Tome nota de que STACK se dará por vencido si hubiera 3 intentos fallidos para generar una nueva nota de pregunta, o cuando falle una prueba de pregunta.';
$string['deploymanysuccess'] = 'Número de nuevas variantes exitosamente creadas, probadas y desplegadas: {$a->no}.';
$string['deploytoomanyerror'] = 'STACK tratará de desplegar cuando más hasta 100 variantes nuevas en una solicitud cualquiera. No se desplegaron variantes nuevas.';
$string['displaymismatch'] = '[Incompatibilidad LaTeX]';
$string['dropdowngotunrecognisedvalue'] = 'Entrada inválida';
$string['editingtestcase'] = 'Editando el caso de prueba {$a->no} para pregunta {$a->question}';
$string['editthistestcase'] = 'Editar este caso- d-e prueba...';
$string['errors'] = 'Errores';
$string['exceptionmessage'] = '{$a}';
$string['expectedanswernote'] = 'Nota de respuesta esperada';
$string['expectedoutcomes'] = 'Resultados esperados';
$string['expectedpenalty'] = 'Castigo esperado';
$string['expectedscore'] = 'Puntuación esperada';
$string['exportthisquestion'] = 'Exportar ésta pregunta';
$string['exportthisquestion_help'] = 'Ésto creará un archivo de exportación Moodle XML conteniendo solamente ésta pregunta. Un ejemplo de cuando ésto es útil es si Usted piensa que ésta pregunta demuestra un error (buhg) en STACK que Usted quisiera reportarle a los desarrolladores.';
$string['FacForm_UnPick_intfac'] = 'Usted necesita sacar un factor común';
$string['FacForm_UnPick_morework'] = 'Usted todavía podría trabajar más el término {$a->m0}.';
$string['false'] = 'Falso';
$string['falsebranch'] = 'Rama falsa';
$string['falsebranch_help'] = 'Estos campos controlan lo que sucede cuando la prueba de respuesta no pasa
### Modo y puntaje (Mod and score)
Cómo se ajusta el puntaje. = significa que se ajuste el puntaje a un valor particular, +/- significa añadir o restar el puntaje dado del total actual.

### Catigo (Penalty)
En modo adaptativo o interactivo, acumular esa acntidad de castigo.

### Siguiente (Next)
Si es que se va a otro nodo, y si así fuera a cual, o detenerse.

### Nota de respuesta (Answer note)
Esta es una marca (tag) que es una clave para propósitos de reporte. Está diseñada para  grabar la ruta única a traves del árbol, y el resultante de cada prueba de respuesta. Esto es generado automáticamente, pero puede cambiarse a algo significativo.';
$string['feedbackfromprtx'] = '[ Retroalimentación desde {$a}. ]';
$string['feedbackvariables'] = 'Variables de retroalimentación';
$string['feedbackvariables_help'] = 'Las variables de retroalimentación le permiten manipular cialquiera de las entradas, junto con las variables de las preguntas, antes de recorrer la rama. Las variables definidas aquí pueden ser usadas en cualquier otra parte de este árbol.';
$string['feedbackvariableskeys'] = 'Usted no puede re-definir el valor de una entrada dentro de las variables de retroalimentación, pero Usted ha re-definido  \'{$a}\'.';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} no debería de contener ningún sustituíble (placeholder) [[{$a->type}:...]].';
$string['firstnodemusthavelowestnumber'] = 'El primer nodo debe tener el número más bajo.';
$string['fixdollars'] = 'Corregir dólares';
$string['fixdollars_help'] = 'Esta opción es útil si Usted está copiando y pegando (o escribiendo) TeX con delimitadores <code>$...$</code> y <code>$$...$$</code> . Estos delimitadores serán remplazados por los delimitadores recomendados durante el proceso de guardado.';
$string['fixdollarslabel'] = 'Remplazar  <code>$...$</code> con <code>\\(...\\)</code> y <code>$$...$$</code> con <code>\\[...\\]</code> al guardar.';
$string['forbiddendoubledollars'] = 'Por favor use los delimitadores <code>(...)</code> para matemáticas enlínea y <code>[...]</code> para mostrar matemáticas. <code>$...$</code> y <code>$$...$$</code> no están permitidos. Existe una opción al final del formato para corregir esto automáticamente.';
$string['forbidfloat'] = 'Prohibir flotante';
$string['forbidfloat_help'] = 'Si se configura a SI, entonces cualquier respuesta del estudiante que tuviera un número de punto flotante será rechazada como inválida';
$string['forbidwords'] = 'Palabras prohibidas';
$string['forbidwords_help'] = 'Esta es una lista de palabras separadas por comas de cadenas de texto que están prohibidas en una respuesta del estudiante.';
$string['generalfeedback'] = 'Retroalimentación general';
$string['generalfeedback_help'] = 'La retroalimentación general es CASText (texto CAS). La retroalimentación general, también conocida como "solución trabajada", se muestra al estudiante después de que él/ella ha intentado responder la pregunta. A diferencia de la retroalimentación, que depende de la respuesta que dio el estudiante, en la retroalimentación general se mostrará el mismo texto a todos los estudiantes. Puede depender de las variables usadas en la versión de la pregunta.';
$string['greek_alphabet_fact'] = '<center>
<table>
<tr><td>
MAYÚSCULA, \\(\\quad\\) </td><td> minúscula, \\(\\quad\\) </td><td> nombre </td> </tr> <tr> <td>
\\(A\\) </td><td> \\(\\alpha\\) </td><td> alpha </td> </tr> <tr> <td>
\\(B\\) </td><td> \\(\\beta\\) </td><td> beta </td> </tr> <tr> <td>
\\(\\Gamma\\) </td><td> \\(\\gamma\\) </td><td> gamma </td> </tr> <tr> <td>
\\(\\Delta\\) </td><td> \\(\\delta\\) </td><td> delta </td> </tr> <tr> <td>
\\(E\\) </td><td> \\(\\epsilon\\) </td><td> epsilon </td> </tr> <tr> <td>
\\(Z\\) </td><td> \\(\\zeta\\) </td><td> zeta </td> </tr> <tr> <td>
\\(H\\) </td><td> \\(\\eta\\) </td><td> eta </td> </tr> <tr> <td>
\\(\\Theta\\) </td><td> \\(\\theta\\) </td><td> theta </td> </tr> <tr> <td>
\\(K\\) </td><td> \\(\\kappa\\) </td><td> kappa </td> </tr> <tr> <td>
\\(M\\) </td><td> \\(\\mu\\) </td><td> mu </td> </tr> <tr> <td>
\\(N\\) </td><td> \\( u\\) </td><td> nu </td> </tr> <tr> <td>
\\(\\Xi\\) </td><td> \\(\\xi\\) </td><td> xi </td> </tr> <tr> <td>
\\(O\\) </td><td> \\(o\\) </td><td> omicron </td> </tr> <tr> <td>
\\(\\Pi\\) </td><td> \\(\\pi\\) </td><td> pi </td> </tr> <tr> <td>
\\(I\\) </td><td> \\(\\iota\\) </td><td> iota </td> </tr> <tr> <td>
\\(P\\) </td><td> \\(\\rho\\) </td><td> rho </td> </tr> <tr> <td>
\\(\\Sigma\\) </td><td> \\(\\sigma\\) </td><td> sigma </td> </tr> <tr> <td>
\\(\\Lambda\\) </td><td> \\(\\lambda\\) </td><td> lambda </td> </tr> <tr> <td>
\\(T\\) </td><td> \\(\\tau\\) </td><td> tau </td> </tr> <tr> <td>
\\(\\Upsilon\\) </td><td> \\(\\upsilon\\) </td><td> upsilon </td> </tr> <tr> <td>
\\(\\Phi\\) </td><td> \\(\\phi\\) </td><td> phi </td> </tr> <tr> <td>
\\(X\\) </td><td> \\(\\chi\\) </td><td> chi </td> </tr> <tr> <td>
\\(\\Psi\\) </td><td> \\(\\psi\\) </td><td> psi </td> </tr> <tr> <td>
\\(\\Omega\\) </td><td> \\(\\omega\\) </td><td> omega </td></tr>
</table></center>';
$string['greek_alphabet_name'] = 'El Alfabeto Griego';
$string['healthautomaxopt'] = 'Crear automáticamente una imagen Maxima optimizada';
$string['healthautomaxoptintro'] = 'Para un mejor desempeño, necesitamos optimizar Maxima en una máquina Linux. Vea la <a href="doc/doc.php/CAS/Optimising_Maxima.md">documentación</a> acerca de este asunto.';
$string['healthautomaxopt_nolisp'] = 'No es posible determinar la versión de LISP, por lo que no se creó automáticamente la iagen de Maxima.';
$string['healthautomaxopt_nolisprun'] = 'No se pudo localizar lisp.run. Intente "ssudo updatedb" desde la línea de comandos y refiérase a los documentos sobre optimización.';
$string['healthautomaxopt_notok'] = 'No se creó automáticamente la imagen de Maxima.';
$string['healthautomaxopt_ok'] = 'Imagen de Maxima creada en: <tt>{$a->command}</tt>';
$string['healthcheck'] = 'Revisión de salud STACK';
$string['healthcheckcache_db'] = 'Los resultados CAS están siendo cachados en la base de datos.';
$string['healthcheckcache_none'] = 'Los resultados CAS no están siendo cachados.';
$string['healthcheckcache_otherdb'] = 'Los resultados CAS están siendo cacheados en otra BasedeDatos.';
$string['healthcheckcachestatus'] = 'El caché actualmente contiene {$a} entradas.';
$string['healthcheckconfig'] = 'Archivo de configuración maxima';
$string['healthcheckconfigintro1'] = 'Se encontró y se usa, Maxima en el directorio siguiente';
$string['healthcheckconfigintro2'] = 'Tratando de escribir automáticamente el archivo de configuración de Maxima.';
$string['healthcheckconnect'] = 'Tratando de conectarse al CAS';
$string['healthcheckconnectintro'] = 'Estamos tratando de evaluar el siguiente texto CAS:';
$string['healthcheckcreateimage'] = 'Crear imagen Maxima';
$string['healthcheck_desc'] = 'El script de salud <a href="{$a->link}">healthcheck script</a> le ayuda a verificar que todos los aspectos de STACK estén funcionando correctamente.';
$string['healthcheckfilters'] = 'Por favor asegúrese de que el filtro {$a->filter}esté habilitado en la página de (Gestionar filtros) <a href="{$a->url}">Manage filters</a>.';
$string['healthchecklatex'] = 'Revisar que LaTeX esté siendo convertido correctamente';
$string['healthchecklatexintro'] = 'STACK genera LaTeX al instante, y le permite a los maestros escribir LaTeX en preguntas. Se asume que LaTeX será convertido por un filtro Moodle. Debajo hay muestras de expresiones mostradas y en línea en LaTeX, que deberían de aparecer correctamente en su navegador. Los problemas aquí indican una configuración de filtros de Moodle incorrecta, no son problemas de STACK mismo. STACK mismo solamente usa la notación sencilla (única) y de doble dólar, pero algunos autores de preguntas pueden depender de los otros formatos.';
$string['healthchecklatexmathjax'] = 'Una forma de hacer que funcione la representación (\'\'rendering\'\') de ecuaciones es copiando el siguiente código dentro de la configuración de <b>Within HEAD (dentro del ENCABEZADO)</b> del <a href="{$a}">HTML Adicional (\'\'Additional HTML\'\')</a>.';
$string['healthcheckmathsdisplaymethod'] = 'Método de visualización matemático usado: {$a}.';
$string['healthcheckmaximabat'] = 'Falta el archivo maxima.bat';
$string['healthcheckmaximabatinfo'] = 'Este \'\'script\'\' intentó copiar automáticamente el \'\'script\'\' maxima.bat del interior de "C:Program filesMaxima-1.xx.ybin" hacia "{$a}stack". Sin embargo, parece que esto no funcionó. Por favor, copie manualmente este archivo.';
$string['healthcheckplots'] = 'Ploteo de Gráfica';
$string['healthcheckplotsintro'] = 'Debería de haber dos gráficas diferentes. Si se ven dos gráficas idénticas, entonces hay un error en el nombre de los archivos de las gráficas. Si no se regresan errores, pero no se muestra gráfica, entonces puede ayudar una de las siguientes:
(i) revise permisos de lectura de los dos subdirectorios temporales.
(ii) cambie las opciones usadas por GNUplot para crear la gráfica (\'\'plot\'\'). Actualmente no hay interfaz web para esto.';
$string['healthchecksamplecas'] = 'La derivada de @ x^4/(1+x^4) @ es [ frac{d}{dx} frac{x^4}{1+x^4} = @ diff(x^4/(1+x^4),x) @. ]';
$string['healthchecksampledisplaytex'] = '\\[\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}.\\]';
$string['healthchecksampleinlinetex'] = '\\(\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}\\).';
$string['healthchecksampleplots'] = 'Dos gráficas (plot) de ejemplo debajo. @plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@ @plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3])@';
$string['healthchecksstackmaximanotupdated'] = 'Al parecer STACK no ha sido actualizado apropiadamente. Por favor visite  la  <a href="{$a}">System administration -> Página de Notificaciones</a>.';
$string['healthchecksstackmaximatooold'] = '¡Tan antiguo que la versión es desconocida!';
$string['healthchecksstackmaximaversion'] = 'Versión Máxima';
$string['healthchecksstackmaximaversionfixoptimised'] = 'Por favor <a href="{$a}">reconstruya su ejecutable optimizado Maxima </a>.';
$string['healthchecksstackmaximaversionfixserver'] = 'Por favor reconstruya el código de Maxima en su servidor MaximaPool.';
$string['healthchecksstackmaximaversionfixunknown'] = 'Realmente no está claro como fue que esto sucedió. Usted mismo tendrá que depurar este problema.';
$string['healthchecksstackmaximaversionmismatch'] = 'La versión de las librerías (bibliotecas) STACK-Maxima que se usan ({$a->usedversion}) no coincide con lo esperado ({$a->expectedversion}) por esta versión del tipo de pregunta STACK. {$a->fix}';
$string['healthchecksstackmaximaversionok'] = 'Se está usando la versión correcta y esperada de la biblioteca (librería) de STACK-Maxima ({$a->usedversion}).';
$string['healthunabletolistavail'] = 'El tipo de plataforma no está configurado actualmente a "Unix", por lo que no se pueden enlistar versiones disponibles de Maxima.';
$string['healthuncached'] = 'Lamada a CAS no cacheada';
$string['healthuncachedintro'] = 'Esta sección siempre manda una llamada genuina al CAS, sin importar las configuraciones actuales del caché. Esto es necesario para asegurar que la conexión al CAS realmente está trabajando.';
$string['healthuncachedstack_CAS_calculation'] = 'Cálculo CAS esperado: {$a->expected}. Cálculo CAS actual: {$a->actual}.';
$string['healthuncachedstack_CAS_not'] = 'CAS regresó algunos datos como se esperaba, pero hubo errores.';
$string['healthuncachedstack_CAS_ok'] = 'CAS regresó datos como se esperaba. Usted tiene una conexión viva al CAS.';
$string['healthuncachedstack_CAS_version'] = 'Versión de Maxima esperada: "{$a->expected}". Versión de Maxima actual: {$a->actual}.';
$string['healthuncachedstack_CAS_versionnotchecked'] = 'Usted ha elegido la versión "default" (por defecto) de Maxima, por lo que no se hace revisión de la versión de Maxima. Su conexión cruda actualmente usa la versión {$a->actual}.';
$string['htmlfragment'] = 'Parece que Usted tiene algunos elementos HTML en su expresión';
$string['hyp_functions_fact'] = 'Las funciones hiperbólicas tienen propiedades similares a las funciones trigonométricas, pero pueden ser representadas en forma exponencial como sigue: [ cosh(x) = frac{e^x+e^{-x}}{2}, qquad sinh(x)=frac{e^x-e^{-x}}{2} ] [ tanh(x) = frac{sinh(x)}{cosh(x)} = frac{{e^x-e^{-x}}}{e^x+e^{-x}} ] [ {rm sech}(x) ={1over cosh(x)}={2over {rm e}^x+{rm e}^{-x}}, qquad {rm cosech}(x)= {1over sinh(x)}={2over {rm e}^x-{rm e}^{-x}} ] [ {rm coth}(x) ={cosh(x)over sinh(x)} = {1over {rm tanh}(x)} ={{rm e}^x+{rm e}^{-x}over {rm e}^x-{rm e}^{-x}}]';
$string['hyp_functions_name'] = 'Funciones hiperbólicas';
$string['hyp_identities_fact'] = 'La similitud entre la manera en que se comportan las funciones hiperbólicas y trigonométricas es aparente al observar algunas identidades hiperbólicas básicas: [{rm e}^x=cosh(x)+sinh(x), quad {rm e}^{-x}=cosh(x)-sinh(x)] [cosh^2(x) -sinh^2(x) = 1] [1-{rm tanh}^2(x)={rm sech}^2(x)] [{rm coth}^2(x)-1={rm cosech}^2(x)] [sinh(xpm y)=sinh(x) cosh(y) pm cosh(x) sinh(y)] [cosh(xpm y)=cosh(x) cosh(y) pm sinh(x) sinh(y)] [sinh(2x)=2,sinh(x)cosh(x)] [cosh(2x)=cosh^2(x)+sinh^2(x)] [cosh^2(x)={cosh(2x)+1over 2}] [sinh^2(x)={cosh(2x)-1over 2}]';
$string['hyp_identities_name'] = 'Identidades hiperbólicas';
$string['hyp_inverse_functions_fact'] = '[cosh^{-1}(x)=lnleft(x+sqrt{x^2-1}right) quad mbox{ for } xgeq 1] [sinh^{-1}(x)=lnleft(x+sqrt{x^2+1}right)] [tanh^{-1}(x) = frac{1}{2}lnleft({1+xover 1-x}right) quad mbox{ for } -1< x < 1]';
$string['hyp_inverse_functions_name'] = 'Funciones Hiperbólicas Inversas';
$string['illegalcaschars'] = 'Los caracteres @ , $ y  \\  no están permitidos en la entrada CAS.';
$string['Illegal_floats'] = 'Su respuesta contiene números de punto flotante, lo que no está permitido en esta pregunta. Usted necesita escribir los números como fracciones. Por ejemplo, Usted debería de escribir 1/3 en lugar de 0.3333, lo que, después de todo, es sólamente una aproximación a un tercio.';
$string['inputdisplayed'] = 'Mostrada como';
$string['inputentered'] = 'Valores introducidos';
$string['inputexpression'] = 'Entradas de Prueba';
$string['inputextraoptions'] = 'Opciones extra';
$string['inputextraoptions_help'] = 'Algunos tipos de entradas requieren de opciones extra para que funcionen.Usted puede escribirlas aquí. Este valor es una expresión CAS.';
$string['inputheading'] = 'Introducir: {$a}';
$string['inputname'] = 'Introducir nombre';
$string['inputnamelength'] = 'Los nombres de entrada no pueden ser más largos de 18 caracteres. \'{$a}\' es demasiado largo.';
$string['inputremovedconfirm'] = 'Yo confirmo que yo qiero quitar esta entrada de esta pregunta.';
$string['inputremovedconfirmbelow'] = 'La entrada \'{$a}\' ha sido removida. Por favor confirme ésto debajo.';
$string['inputs'] = 'Entradas';
$string['inputstatus'] = 'Status';
$string['inputstatusname'] = 'Vacío';
$string['inputstatusnameinvalid'] = 'Inválido';
$string['inputstatusnamescore'] = 'Puntaje';
$string['inputstatusnamevalid'] = 'Válido';
$string['inputtest'] = 'Prueba de entrada';
$string['inputtype'] = 'Tipo de entrada';
$string['inputtypealgebraic'] = 'Entrada algebraica';
$string['inputtypeboolean'] = 'Falso/Verdadero';
$string['inputtypecheckbox'] = 'Casilla de selección';
$string['inputtypedropdown'] = 'Lista desplegable';
$string['inputtype_help'] = 'Esto determina el tipo del elemento a escribir; por ejemplo, campo de forma, falso/verdadero, área de texto.';
$string['inputtypematrix'] = 'Matriz';
$string['inputtyperadio'] = 'Radio';
$string['inputtypesinglechar'] = 'Caracter único';
$string['inputtypetextarea'] = 'Área de texto';
$string['inputtypeunits'] = 'Unidades';
$string['insertspaces'] = 'Insertar asteriscos para espacios solamente';
$string['insertstars'] = 'Insertar estrellas';
$string['insertstarsassumesinglechar'] = 'Inserte estrellas asumiendo nombres de variables de un solo caracter';
$string['insertstars_help'] = 'Si se configura a FALSO entonces no se insertarán estrellas. Si se configura a SI, entonces el sistema insertará automáticamente estrellas ( * ) dentro de los patrones identificados por Sintaxis Estricta. Si se configura a "variables de un solo caracter" entonces nosotros asumimos que la respuesta tiene nombres de variables que consisten solamente de nombres de variables de una sola letra. Otros nombres de variables tendrán estrellas insertadas entre las letras, por ejemplo ab->a*b';
$string['insertstarsno'] = 'No inserte estrellas';
$string['insertstarsspaces'] = 'Insertar asteriscos para multiplicación implícita y para espacios';
$string['insertstarsspacessinglechar'] = 'Insertar asteriscos que asumen variables de un solo caracter, implícitos y para espacios';
$string['insertstarsyes'] = 'Insertar estrellas para multiplicación implícita';
$string['inversetrig'] = 'Funciones trigonométricas inversas';
$string['inversetrig_help'] = 'Controla cómo se mostrarán las funciones trigonométricas inversas en la salida CAS.';
$string['irred_Q_commonint'] = 'Usted necesita extraer un factor común.';
$string['irred_Q_factored'] = 'El término {$a->m0} debería estar sin factorizar, pero no lo está.';
$string['irred_Q_optional_fac'] = 'Usted podría trabajar más, dado que {$a->m0} puede ser más factorizado. Sin embargo, no necesita hacerlo.';
$string['Lowest_Terms'] = 'Su respuesta contiene fracciones que no están escritas en sus términos más bajos. Por favor cancele factores e inténtelo de nuevo.';
$string['matrixparens'] = 'Forma por defecto de los paréntesis de matrices';
$string['matrixparens_help'] = 'Controla la forma por defecto de los paréntesis de matrices al mostrarse en salida CAS.';
$string['Maxima_DivisionZero'] = 'División por cero';
$string['multcross'] = 'Cruz';
$string['multdot'] = 'Punto';
$string['multiplicationsign'] = 'Signo de multiplicación';
$string['multiplicationsign_help'] = 'Controla como se muestran los signos de multiplicación.';
$string['mustverify'] = 'Estudiante debe verificar';
$string['mustverify_help'] = 'Especifica si es que lo escrito por el estudiante se presenta de regreso a él antes de calificarlo.';
$string['mustverifyshowvalidation'] = 'Usted no puede elegir el requerir validación en dos pasos pero no mostrarle los resultados de validación al estudiante después del primer paso. Ésto pone al estudiante en una situación imposible.';
$string['namealreadyused'] = 'Usted ya ha usado antes este nombre.';
$string['newnameforx'] = 'Nuevo nombre para  \'{$a}\\';
$string['next'] = 'Siguiente';
$string['nextcannotbeself'] = 'Un nodo no puede ligarse a sí mismo como el nodo siguiente.';
$string['nodehelp'] = 'Nodo de árbol de respuesta';
$string['nodehelp_help'] = '### Prueba de respuesta (Answer test)
Se usa una prueba de respuesta para comparar dos expresiones para establecer si es que satizfacen algunos criterios matemáticos.

### SAns
Este es el primer argumento para la función de prueba de respuesta. En pruebas asimétricas esto se considera que es la "respuesta del estudiante" aunque podría ser cualquier expresión CAS válida, y podría depender de las variables de la pregunta o de las variables de la retroalimentación.

### TAns
Este es el segundo argumento para la función de prueba de la respuesta. En pruebas asimétricas esto se considera que es la "respuesta del profesor" aunque podría ser cualquier expresión CAS válida, y podría depender de las variables de la pregunta o de las variables de la retroalimentación.

### Opciones de la prueba (Test options)
Este campo habilita que las pruebas de respuesta acepten una opción; por ejemplo, una variable o una precisión numérica.

### Quieto (Quiet)
Cuando se configura a Sí, cualquier retroalimentación generada automáticamente por las pruebas de respuesta es suprimida  y no es mostrada a los estudiantes. Los campos de retroalimentación en las ramas no son afectados por esta opción.';
$string['nodeloopdetected'] = 'Este enlace crea un ciclo en este PRT (Potencial Response Tree = Árbol de Respuesta Potencial)';
$string['nodenotused'] = 'No hay otros nodos en este PRT (Potencial Response Tree = Árbol de Respuesta Potencial) que enlacen hacia este nodo.';
$string['nodex'] = 'Nodo {$a}';
$string['nodexdelete'] = 'Eliminar nodo {$a}';
$string['nodexfalsefeedback'] = 'Nodo {$a} retroalimentación falsa';
$string['nodextruefeedback'] = 'Nodo {$a} retroalimentación verdadera';
$string['nodexwhenfalse'] = 'Nodo {$a} cuando falso';
$string['nodexwhentrue'] = 'Nodo {$a} cuando verdadero';
$string['nonempty'] = 'Esto no debe estar vacío.';
$string['noprtsifnoinputs'] = 'Una pregunta sin entradas no puede tener ningún PRT (Potencial Response Tree = Árbol de Respuesta Potencial).';
$string['notanswered'] = 'No contestada';
$string['notavalidname'] = 'No es un nombre válido';
$string['notestcasesyet'] = 'Aún no se han añadido casos de prueba.';
$string['options'] = 'Opciones';
$string['optionsnotrequired'] = 'Este tipo de entrada no requiere ninguna opción.';
$string['overallresult'] = 'Resultado general';
$string['penalty'] = 'Castigo';
$string['penaltyerror'] = 'El castigo debe ser un valor numérico entre 0 y 1.';
$string['penaltyerror2'] = 'El castigo debe estar vacío, o ser un valor numérico entre 0 y 1.';
$string['penalty_help'] = 'El esquema de castigos deduce este valor del resultado de cada PRT (Potencial Response Tree = Árbol de Respuesta Potencial) para cada intento diferente y válido que no esté completamente correcto.';
$string['phpcasstring'] = 'Salida PHP';
$string['phpsuitecolerror'] = 'Errores PHP';
$string['phpvalid'] = 'V1';
$string['phpvalidatemismatch'] = '[Discrepancia en validación PHP]';
$string['pleaseananswerallparts'] = 'Por favor conteste todas las partes de la pregunta.';
$string['pleasecheckyourinputs'] = 'Por favor verifique que lo que haya escrito fue interpretado como se esperaba.';
$string['pluginname'] = 'STACK';
$string['pluginnameadding'] = 'Añadiendo una pregunta STACK';
$string['pluginnameediting'] = 'Editando una pregunta STACK';
$string['pluginname_help'] = 'STACK es un sistema de evaluación para matemáticas.';
$string['pluginnamesummary'] = 'STACK proporciona preguntas matemáticas para el exámen de Moodle. Estas preguntas usan un sistema de álgebra de computadora para establecer las propiedades matemáticas de las respuestas de los estudiantes.';
$string['prtcorrectfeedback'] = 'Retroalimentación estándar para correcto';
$string['prtheading'] = 'Árbol de respuesta potencial: {$a}';
$string['prtincorrectfeedback'] = 'Retroalimentación estándar para incorrecto';
$string['prtmustbesetup'] = 'Este PRT (Potencial Response Tree = Árbol de Respuesta Potencial) debe configurarse antes de que pueda guardarse la pregunta.';
$string['prtname'] = 'Nombre del PRT (Potencial Response Tree = Árbol de Respuesta Potencial)';
$string['prtnamelength'] = 'Los nombres PTR no pueden ser más largos de 18 caracteres. \'{$a}\' es demasiado largo.';
$string['prtnodesheading'] = 'Nodos de Árbol de Respuesta Potencial ({$a})';
$string['prtpartiallycorrectfeedback'] = 'Retroalimentación estándar para parcialmente correcto';
$string['prtremovedconfirm'] = 'Yo confirmo que yo quiero quitar éste árbol de respuesta potencial de esta pregunta.';
$string['prtremovedconfirmbelow'] = 'El  árbol de respuesta potencial  \'{$a}\' ha sido quitado. Por favor confirme ésto debajo.';
$string['prtruntimeerror'] = 'El nodo {$a->node} generó el siguiente error de corrida: {$a->error}';
$string['prts'] = 'Árboles de Respuesta Potencial';
$string['prtwillbecomeactivewhen'] = 'Éste árbol de respuesta potencial se volverá activo cuando el estudiante haya contestado: {$a}';
$string['qm_error'] = 'Su respuesta contiene signos de interrogación ? , los que no están permitidos en las respuestas. Usted debería de remplazarlos con un valor específico.';
$string['questiondoesnotuserandomisation'] = 'La pregunta no usa aleatorización';
$string['questionnotdeployedyet'] = 'No se han desplegado variantes de esta pregunta aún.';
$string['questionnote'] = 'Nota de pregunta';
$string['questionnote_help'] = 'La nota d epregunta es CASText (TextoCAS). El propósito de una nota de pregunta es distinguir entre versiones aleatorias de una pregunta. Dos versiones de pregunta son iguales si, y sólamente si, las notas de pregunta son iguales. En un análisis posterior es muy útil dejar una nota de pregunta explicatoria que tenga sentido.';
$string['questionnotempty'] = 'La nota de pregunta no puede estar vacía cuando rand() aparece en las variables de la pregunta. La nota de pregunta es usada para distinguir entre diferentes versiones aleatorias de la pregunta.';
$string['questionpreview'] = 'Vista previa de pregunta';
$string['questionsimplify'] = 'Simplificar a nivel-de-pregunta';
$string['questionsimplify_help'] = 'Configura la variable global "simp" dentro de Maxima para la pregunta completa.';
$string['questiontests'] = 'Pruebas de preguntas';
$string['questiontext'] = 'Texto de pregunta';
$string['questiontextfeedbackonlycontain'] = 'El texto de la pregunta combinado con la retroalimentación específica solamente debería de contener la ficha (token) \'{$a}\' una vez..';
$string['questiontext_help'] = 'El texto de la pregunta es CASText. Esta es la "pregunta" que el estudiante realmente ve. Usted debe poner elementos de entrada, y las cadenas de validación, en este campo, y solamente en este campo. Por ejemplo, usando `[[input:ans1]] [[validation:ans1]]`.';
$string['questiontextmustcontain'] = 'El texto de la pregunta debe contener la ficha (token) \'{$a}\'.';
$string['questiontextnonempty'] = 'El texto de la pregunta no debe estar vacío.';
$string['questiontextonlycontain'] = 'El texto de la pregunta solamente debe contener la ficha (token) \'{$a}\' una vez.';
$string['questiontextplaceholderswhitespace'] = 'Los remplazables (\'\'placeholders\'\') no pueden contener espacios blancos (\'\'whitespace\'\'). Este aparenta hacerlo: \'{$a}\'.';
$string['questionvalue'] = 'Valor de la pregunta';
$string['questionvaluepostive'] = 'El valor de la pregunta debe ser positivo';
$string['questionvariables'] = 'Variables de la pregunta';
$string['questionvariables_help'] = 'Éste campo le permite a Usted definir y manipular las variables CAS, por ejemplo, parar crear versiones aleatorias. Éstas están disponibles para otras partes de la pregunta.';
$string['questionvariablevalues'] = 'Valores de variables de pregunta';
$string['quiet'] = 'Silencioso';
$string['quiet_help'] = 'Cuando se configura a SI, cualquier retroalimentación generada automáticamente por las pruebas de respuesta es suprimida, y no se muestra al estudiante. Los campos de retroalimentación en las ramas no son afectados por esta opción.';
$string['renamequestionparts'] = 'Renombrar partes de la pregunta';
$string['replacedollarscount'] = 'Ésta categoría contiene {$a} preguntas STACK.';
$string['replacedollarsin'] = 'Delimitadores matemáticos fijos en el campo {$a}';
$string['replacedollarsindex'] = 'Contextos con preguntas STACK';
$string['replacedollarsindexintro'] = 'El elegir cualquiera de los enlaces lo llevará a una página en donde puede revisar las preguntas para ver si usan delimitadores de matemáticas de estilo antiguo, y arreglarlos automáticamente.';
$string['replacedollarsindextitle'] = 'Remplazar $s en textos de pregunta';
$string['replacedollarsnoproblems'] = 'No se encontraron problemas por delimitadores.';
$string['replacedollarstitle'] = 'Remplazar $s en textos de pregunta en {$a}';
$string['requiredfield'] = '¡Este campo es necesario!';
$string['requirelowestterms'] = 'Requerir términos más bajos';
$string['requirelowestterms_help'] = 'Cuando esta opción se configura a si, cualquier coeficiente u otro número racional en una expresión, debe estar escrito en términos más bajos. De otra forma la respuesta se rechaza como inválida.';
$string['runquestiontests'] = 'Pruebas de preguntas y versiones desplegadas';
$string['sans'] = 'SAns (Respuesta de Estudiante)';
$string['sans_help'] = 'Éste es el primer argumento para la función de prueba de respuesta. En pruebas asimétricas ésto es considerado como la "respuesta del estudiante", aunque puede ser cualquier expresión CAS válida, y puede depender de las variables de preguntas o las variables de retroalimentación.';
$string['sansinvalid'] = 'SAns (Respuesta de Estudiante) es iinválida: {$a}';
$string['sansrequired'] = 'SAns (Respuesta de Estudiante) no debe estar vacía';
$string['score'] = 'Puntaje';
$string['scoreerror'] = 'El puntaje debe ser un valor numérico entre 0 y 1.';
$string['scoremode'] = 'Mod';
$string['seedx'] = 'Semilla {$a}';
$string['seethisquestioninthequestionbank'] = 'Ver ésta pregunta en el banco de pregutas';
$string['settingajaxvalidation'] = 'Validación instantánea';
$string['settingajaxvalidation_desc'] = 'Cuando esta configuración se activa, la entrada actual de los estudiantes será validada siempre que se pausen al escribir. Esto proporciona una mejor experiencia para el usuario, pero es probable que aumente la carga del servidor.';
$string['settingcasdebugging'] = 'Depuración (debugging) de CAS';
$string['settingcasdebugging_desc'] = 'Si es que se almacena o no información para depuración acerca de la conexión CAS.';
$string['settingcasmaximaversion'] = 'Versión de Maxima';
$string['settingcasmaximaversion_desc'] = 'La versión de Maxima que se usa.';
$string['settingcasresultscache'] = 'Cachar resultados CAS';
$string['settingcasresultscache_db'] = 'Caché en la base de datos';
$string['settingcasresultscache_desc'] = 'Esta configuración determina si es que son cacheadas las llamadas a CAS. Esta configuración debería de activarse a menos que Usted estuviera haciendo desarrollos que involucren cambios al código de Maxima. El estado actual del caché se muestra en la página del estado-de-salud. Si Usted cambia su configuración (por  ejemplo, el comando gnuplot), Usted necesitará purgar el caché antes de que pueda ver los efectos de estos cambios.';
$string['settingcasresultscache_none'] = 'No cachar';
$string['settingcastimeout'] = 'Se agotó el tiempo para conexión CAS';
$string['settingcastimeout_desc'] = 'El tiempo a agotarse para usar al tratar de conectarse a Maxima.';
$string['settingdefaultinputoptions'] = 'Opciones de entrada por defecto';
$string['settingdefaultinputoptions_desc'] = 'Usadas al crear una nueva pregunta, o añadir una nueva entrada a una pregunta existente.';
$string['settingdefaultquestionoptions'] = 'Opciones de entrada por defecto';
$string['settingdefaultquestionoptions_desc'] = 'Usadas al crear una nueva pregunta.';
$string['settingmathsdisplay'] = 'Filtro de Matemáticas';
$string['settingmathsdisplay_desc'] = 'El método usado para mostrar matemáticas. Si Usted elige MathJax, entonces necesitará seguir las instrucciones en la página de Healthcheck (Revisión_de_Salud) para configurarlo. Si Usted selecciona un filtro, entonces debe de asegurarse de que el filtro esté habilitado en la página de configuración para Gestión de filtros.';
$string['settingmathsdisplay_mathjax'] = 'MathJax';
$string['settingmathsdisplay_maths'] = 'Antiguo filtro de Matemáticas de OU';
$string['settingmathsdisplay_oumaths'] = 'Nuevo filtro matemáticas OU';
$string['settingmathsdisplay_tex'] = 'Filtro de texto Moodle';
$string['settingmaximalibraries'] = 'Cargar librerías Mexima opcionales:';
$string['settingmaximalibraries_desc'] = 'Esta es una lista separada por comas de nombres de librería Maxima que serán automáticamente cargados a Maxima. Solamente pueden ser usados nombres de librería soportados: vea la documentación para los nombres de librería soportados. estas librerías no serán cargadas si Usted ha guardado una imagen Maxima para optimizar el desempeño.';
$string['settingmaximalibraries_error'] = 'El paquete siguiente no está soportado: {$a}';
$string['settingmaximalibraries_failed'] = 'Parece que algunos de los paquetes Maxima que Usted ha solicitado no cargaron. Por favor refiérase a las instrucciones de instalación para las notas respecto a éste errror.';
$string['settingplatformmaximacommand'] = 'Comando de Maxima';
$string['settingplatformmaximacommand_desc'] = 'Para el tipo de Plataforma: Servidor, esto debe configurarse a la URL del (mini-servidor) servlet  Maxima Pool. Para otros tipos de plataforma, si esto está vacío, STACK hará una adivinanza educada sobre donde encontrar a Maxima. Si eso fallara, esto debería de configurarse a la ruta completa del ehjecutable o el ejecutable optimizado de maaxima. Considere utilizar el comando de caducidad (timeout) en sistemas basados en Unix. Por ejemplo timeout --kill-after=10s 10s maxima';
$string['settingplatformplotcommand'] = 'Comando Plot';
$string['settingplatformplotcommand_desc'] = 'STACK necesita conocer el comando gnuplot. Si esto estuviera vacío, STACK hará una adivinanza educada (\'\'educated guess\'\').';
$string['settingplatformtype'] = 'Tipo de plataforma';
$string['settingplatformtype_desc'] = 'STACK necesita conocer en que tipo de sistema operativo está corriendo. Las opciones Servidor y MaximaPool dan el mejor desempeño, pero con el costo de tener que configurar un servidor adicional. La opción Linux (optimizado)  y MaxomaPool (optimizado) se explican en la página de Optimización de Maxima en la documentación.';
$string['settingplatformtypeserver'] = 'Servidor';
$string['settingplatformtypeunix'] = 'Linux';
$string['settingplatformtypeunixoptimised'] = 'Linux (optimizado)';
$string['settingplatformtypewin'] = 'Windows';
$string['settingreplacedollars'] = 'Remplazar <code>$</code> y <code>$$</code>';
$string['settingreplacedollars_desc'] = 'Replazar los delimitadores <code>$...$</code> y <code>$$...$$</code> en el texto de la pregunta, además de <code>[...]</code> y <code>(...)</code>. Una mejor opción es usar el \'\'script\'\' para \'Fix maths delimiters\', el cual se referencía abajo.';
$string['settingserveruserpass'] = 'Nombre_de_usuario:contraseña del usuario';
$string['settingserveruserpass_desc'] = 'Si Usted está usando Tipo de plataforma: Servidor, y si Usted ha configurado su servidor \'\'pool\'\' Maxima con autenticación HTTP, entonces Usted puede poner aquí el nombre_de_usuario y la contraseña. Esto es ligeramente más seguro que ponerlos en la URL. El formato es nombre_de_usuario:contraseña.';
$string['settingsmathsdisplayheading'] = 'Opciones de visualización matemáticas';
$string['settingsmaximasettings'] = 'Conectando a Maxima';
$string['settingusefullinks'] = 'Enlaces útiles';
$string['showingundeployedvariant'] = 'Mostrando variante no-desplegada: {$a}';
$string['showvalidation'] = 'Mostrar la validación';
$string['showvalidation_help'] = 'Al configurar esta opción se muestra cualquier retroalimentación de validación desde esta entrada, incluyendo hacer eco sus expresiones en la notación tradicional de dos dimensiones.';
$string['showvalidationno'] = 'No';
$string['showvalidationyes'] = 'Si, con lista de variables';
$string['showvalidationyesnovars'] = 'Si, sin lista de variables';
$string['singlechargotmorethanone'] = 'Usted solamente puede escribir un único caracter aquí.';
$string['specificfeedback'] = 'Retroalimentación específica';
$string['specificfeedback_help'] = 'Por defecto, la retroalimentación para cada árbol de respuesta potencial se mostrará en este bloque. Puede moverse al texto de la pregunta, en cuyo caso Moodle tendrá menos control acerca de cuando es mostrado por varios comportamientos. Tome nota de que este bloque no es CASText.';
$string['specificfeedbacktags'] = 'La retroalimentación específica no debe contener la(s) ficha(s) ( tokens) \'{$a}\'.';
$string['sqrtsign'] = 'Numero irracional para raíz cuadrada';
$string['sqrtsign_help'] = 'Controla cómo se muestran los números irracionales.';
$string['stackCas_allFailed'] = 'CAS no regresó ninguna expresión evaluada. Por favor revise su conexión con el CAS.';
$string['stackCas_apostrophe'] = 'No sepermiten apóstrofes en las respuestas.';
$string['stackCas_backward_inequalities'] = 'Las desigualdades no-estrictas como. ( leq ) o ( geq ) deben escribirse como  <= o >=. Usted tiene  {$a->cmd} en su expresión, lo que está al-revesado.';
$string['stackCas_badLogIn'] = 'Usted ha escrito la expresióm <tt>In</tt>. El logaitmo natural se escribe como <tt>ln</tt> en minúsculas. ("Lima Noviembre" no "India Noviembre")';
$string['stackCas_bracketsdontmatch'] = 'Los paréntesis están anidados incorrectamente en la expresión: {$a->cmd}.';
$string['stackCas_CASError'] = 'El CAS regresó el/los error(es) siguiente(s):';
$string['stackCas_CASErrorCaused'] = 'causó el siguiente error:';
$string['stackCas_chained_inequalities'] = 'Parece que Usted tiene "desigualdades encadenadas" como por ejemplo;  (a &lt b &lt c). Usted necesita conectar las desigualdades individuales con operaciones lógicas tales como (and) o (or).';
$string['stackCas_failedReturn'] = 'CAS no pudo regresar ningún dato.';
$string['stackCas_failedReturnOne'] = 'CAS no pudo regresar algunos datos.';
$string['stackCas_failedValidation'] = 'Falló la validación del CASText';
$string['stackCas_finalChar'] = '\'{$a->char}\' es un caracter final inválido en {$a->cmd}';
$string['stackCas_forbiddenChar'] = 'Los comandos (órdenes) no pueden contener los siguientes caracteres:  {$a->char}.';
$string['stackCas_forbiddenWord'] = 'La expresión {$a->forbid} está prohibida';
$string['stackCas_invalidCommand'] = 'Comandos CAS no válidos.';
$string['stackCas_MissingAt'] = 'A Usted le falta un signo de <code>@</code>.';
$string['stackCas_MissingCloseDisplay'] = 'Falta  <code>\\]</code>.';
$string['stackCas_MissingCloseHTML'] = 'Falta etiqueta de cierre HTML';
$string['stackCas_MissingCloseInline'] = 'Falta  <code>\\)</code>.';
$string['stackCas_MissingDollar'] = 'A Usted le falta un signo de  <code>$</code>';
$string['stackCas_missingLeftBracket'] = 'Te falta un paréntesis izquierdo <span class="stacksyntaxexample">{$a->bracket}</span> en la expresión: {$a->cmd}.';
$string['stackCas_MissingOpenDisplay'] = 'Falta <code>\\[</code>.';
$string['stackCas_MissingOpenHTML'] = 'Falta etiqueta de apertura HTML';
$string['stackCas_MissingOpenInline'] = 'Falta <code>\\(</code>.';
$string['stackCas_missingRightBracket'] = 'Te falta un paréntesis derecho <span class="stacksyntaxexample">{$a->bracket}</span> en la expresión: {$a->cmd}.';
$string['stackCas_MissingStars'] = 'Al parecer le faltan caracteres * . A lo mejor Usted quiso escribir {$a->cmd}.';
$string['stackCas_MissingString'] = 'Le falta un signo de comillas <code>"</code>.';
$string['stackCas_newline'] = 'No se permiten caracteres de línea nueva (newline) en las respuestas';
$string['stackCas_percent'] = '% encontrado en expresión {$a->expr}.';
$string['stackCas_spaces'] = 'Se encontraron espacios ilegales en la expresión {$a->expr}.';
$string['stackCas_spuriousop'] = 'Operador desconocido: {$a->cmd}.';
$string['stackCas_tooLong'] = 'La oración CASText es demasiado larga';
$string['stackCas_trigexp'] = 'Usted no puede obtener la potencia de una función trig al escribir {$a->forbid}. El cuadrado del valor de \\(sin(x)\\) se escribe como \\(sin(x)^2\\). La inversa de \\(sin(x)\\) se escribe <tt>asin(x)</tt> y no \\(sin^{-1}(x)\\) .';
$string['stackCas_triginv'] = 'Las funciones trigonométricas inversas se escriben como {$a->goodinv} no {$a->badinv}.';
$string['stackCas_trigop'] = 'Usted debe de aplicarle {$a->trig} a un argumento. Al parecer, Usted ha {$a->forbid}, lo que pareciera indicar que Usted intentó usar {$a->trig} como un nombre de variable.';
$string['stackCas_trigparens'] = 'Cuando Usted aplica una función trigonométrica a su argumento, Usted debe de usar paréntesis redondos, no corchetes (paréntesis cuadrados). Por ejemplo: {$a->forbid}.';
$string['stackCas_underscores'] = 'El siguiente uso de caracteres de guión_bajo no está permitido: {$a}.';
$string['stackCas_unencpsulated_comma'] = 'Una coma aparece de forma extraña en su expresión. Las comas se usan para separar ítems dentro de las listas, conjuntos, etc. Usted necesita usar un PUNTO DECIMAL, no una coma, en los números de punto flotante.';
$string['stackCas_unitssynonym'] = 'Aparentemente Usted tiene unidades {$a->forbid}. ¿Acaso quería usar unidades {$a->unit}?';
$string['stackCas_unknownFunction'] = 'Función desconocida: {$a->forbid}.';
$string['stackCas_unknownFunctionCase'] = 'La entrada es sensible a minúsculas/MAYÚSCULAS: {$a->forbid} es una función desconocida. ¿Habrá Usted querido poner {$a->lower}?';
$string['stackCas_unknownUnitsCase'] = 'La escritura de unidades es sensible a MAYÚSCULAS/minúsculas: {$a->forbid} es una unidad desconocida.¿Acaso Usted quería una unidad de entre la lista siguiente {$a->unit}?';
$string['stackCas_unsupportedKeyword'] = 'Palabra clave no soportada: {$a->forbid}.';
$string['stackDoc_404'] = 'Error 404';
$string['stackDoc_404message'] = 'Archivo no encontrado.';
$string['stackDoc_directoryStructure'] = 'Estructura del directorio';
$string['stackDoc_docs'] = 'Documentación de STACK';
$string['stackDoc_docs_desc'] = '<a href="{$a->link}">Documentación para STACK</a>: un wiki estático local.';
$string['stackDoc_home'] = 'Hogar de documentación';
$string['stackDoc_index'] = 'Índice de categoría';
$string['stackDoc_parent'] = 'Padre';
$string['stackDoc_siteMap'] = 'Mapa del sitio';
$string['stackDoc_version'] = 'Su sitio está corriendo STACK versión {$a}.';
$string['stackHintOld'] = 'El texto CASText tiene marcas (\'\'tags\'\') de pistas del estilo-antiguo. Estas marcas ahora deberían de ser del formato <pre>[[facts:tag]]</pre>';
$string['stackInstall_input_intro'] = 'Esta página le permite probar como es que el STACK interpreta varias entradas hechas por un estudiante. Actualmente esto solamente revisa con las configuraciones más liberales, tratando de adoptar una sintaxis informal y de insertar estrellas. <br />Las columnas \'V\' registran validez juzgada por PHP y el CAS. V1 = PHP válido, V2 = CAS válido.';
$string['stackInstall_input_title'] = 'Una suite de pruebas para validación de la respuesta del estudiante';
$string['stackInstall_input_title_desc'] = 'El <a href="{$a->link}">input-tests script</a> proporciona casos de prueba acerca de como es que STACK interpreta expresiones matemáticas. También son útiles para aprender por ejemplo.';
$string['stackInstall_replace_dollars_desc'] = 'El <a href="{$a->link}">fix maths delimiters script</a> puede usarse para remplazar delimitadores de estilo antiguo, como <code>$...$</code> y <code>$$...$$</code> en sus preguntas, con las nuevas recomendaciones <code>(...)</code> y <code>[...]</code>.';
$string['stackInstall_testsuite_choose'] = 'Por favor, elija una prueba de respuesta.';
$string['stackInstall_testsuite_fail'] = '¡ No pasaron todas las pruebas!';
$string['stackInstall_testsuite_failures'] = 'Pruebas que fallaron';
$string['stackInstall_testsuite_intro'] = 'Ésta página le permite probar si es que las pruebas de respuesta de STACK están funcionando correctamente. Tome nota de que  las pruebas de respuesta sólamente pueden revisarse mediante interfaz web. Otros comandos de Maxima necesitan revisarse desde la línea de comando: vea unittest.mac.';
$string['stackInstall_testsuite_pass'] = '¡ Pasaron todas las pruebas!';
$string['stackInstall_testsuite_title'] = 'Una suite de prueba para las pruebas de Respuesta de STACK';
$string['stackInstall_testsuite_title_desc'] = 'El <a href="{$a->link}">answer-tests script</a> verifica que las pruebas de las respuestas se estén desempeñando correctamente. Estas pruebas son útiles  también para aprender mediante ejemplo como puede usarse cada prueba-de-respuesta.';
$string['stackOptions_AnsTest_values_Expanded'] = 'Expandida';
$string['stackOptions_AnsTest_values_SameType'] = 'MismoTipo';
$string['stackOptions_AnsTest_values_String'] = 'Cadena';
$string['stackQuestion_noQuestionParts'] = 'Este ítem no tiene partes de pregunta para que las conteste Usted';
$string['stack:usediagnostictools'] = 'Usar las herramientas STACK';
$string['strictsyntax'] = 'Sintaxis estricta';
$string['strictsyntax_help'] = '¿La entrada tiene que hacerse usando sintaxis estricta de Maxima ? Si no fuera así, esto aumenta el rango de patrones que indican  *s faltantes en la entrada, incluyendo cualquier aplicación de función y notación científica.';
$string['strlengtherror'] = 'La cadena no puede exceder de 255 caracteres de longitud.';
$string['studentanswer'] = 'Respuesta del estudiante';
$string['studentValidation_invalidAnswer'] = 'Esta respuesta es inválida.';
$string['studentValidation_listofunits'] = 'Las unidades encontradas en su respuesta fueron: {$a}';
$string['studentValidation_listofvariables'] = 'Las variables encontradas en su respuesta fueron: {$a}';
$string['studentValidation_yourLastAnswer'] = 'Su última respuesta fue interpretada como sigue: {$a}';
$string['Subst'] = 'Su respuesta sería correcta si Usted usara la siguiente sustitución de variables. {$a->m0}';
$string['switchtovariant'] = 'Cambiar a variante arbitraria';
$string['syntaxattribute'] = 'Atributo de pista-sugerencia';
$string['syntaxattribute_help'] = 'La pista-sugerencia de sintaxis aparecerá como un *value* (*valor*) editable o un *placeholder* (*remplazable*) no-editable';
$string['syntaxattributeplaceholder'] = 'Remplazable';
$string['syntaxattributevalue'] = 'Valor';
$string['syntaxhint'] = 'Pista de sintaxis';
$string['syntaxhint_help'] = 'La pista de sintaxis aparecerá en la caja de respuesta siempre que esta sea dejada vacía por el estudiante.';
$string['tans'] = 'TAns (Respuesta del Maestro)';
$string['tans_help'] = 'Éste es el segundo argumento para la función de prueba de respuesta. En pruebas  asimétricas, ésta se considera que es la "Respuesta del Maestro", aunque podría ser cualquier expresión CAS válida, y puede depender de las variables de la pregunta o las variables de la restroalimentación.';
$string['tansinvalid'] = 'TAns (Respuesta del Maestro) es inválida: {$a}';
$string['tansrequired'] = 'TAns (Respuesta del Maestro) no puede estar vacía';
$string['teacheranswer'] = 'Respuesta del maestro';
$string['teacheranswershow'] = 'Una respuesta correcta es \\( {$a->display} \\), la cual puede escribirse de la siguiente manera: {$a->value}';
$string['teacheranswershow_disp'] = 'Una respuesta correcta es {$a->display}';
$string['teachersanswer'] = 'Respuesta modelo';
$string['teachersanswer_help'] = 'El maestro debe especificar una respuesta modelo para cada entrada. Esta debe der una cadena Maxima válida, y puede estar formada a partir de las variables de la pregunta.';
$string['testcasexresult'] = 'Caso de prueba {$a->no} {$a->result}';
$string['TEST_FAILED'] = 'La prueba de respuesta no se ejecutó: Por favor alerte a su maestro. {$a->errors}';
$string['TEST_FAILED_Q'] = 'La prueba de respuesta no pudo ejecutarse correctamente: por favor, alerte a su profesor.';
$string['testingquestion'] = 'Probando la pregunta {$a}';
$string['testinputs'] = 'Entradas de prueba';
$string['testinputsimpwarning'] = 'Por favor tome nota de que las entradas de prueba están siempre  <em>unsimplified</em> (sin simplificar), sin importar la configuración de la pregunta o de la opción PRT (Potencial Response Tree = Árbol de Respuesta Potencial). Por favor use <tt>ev(...,simp)</tt> para simplificar una parte o todas las expresiones de entrada de prueba.';
$string['testoptions'] = 'Opciones de prueba';
$string['testoptions_help'] = 'Este campo habilita pruebas de respuesta para aceptar una opción, por ejemplo: una variable o una precisión numérica.';
$string['testoptionsinvalid'] = 'Las opciones de prueba son inválidas: {$a}';
$string['testoptionsrequired'] = 'Las opciones de prueba son necesarias para esta prueba.';
$string['testpassesandfails'] = '{$a->passes} pasadas y {$a->fails} fallas.';
$string['testsuitecolerror'] = 'Errores CAS';
$string['testsuitecolexpectedscore'] = 'Calificación esperada';
$string['testsuitecolpassed'] = '¿Pasó?';
$string['testsuitecolrawmark'] = 'Calificación cruda';
$string['testsuitefail'] = 'Reprobó';
$string['testsuitefeedback'] = 'Retroalimentación';
$string['testsuiteknownfail'] = 'Falla esperada';
$string['testsuiteknownfailmaths'] = 'Falla esperada (maths)';
$string['testsuitenotests'] = 'Número de pruebas: {$a->no}.';
$string['testsuitepass'] = 'Pasó';
$string['testsuiteteststook'] = 'Las pruebas se tardaron {$a->time} segundos.';
$string['testsuiteteststookeach'] = 'Promedio por prueba: {$a->time} segundos.';
$string['testthisvariant'] = 'Cambiar para probar esta variante';
$string['texdisplaystyle'] = 'Ecuación estilo-Vista';
$string['texinlinestyle'] = 'Ecuación estilo-en-línea';
$string['tidyquestion'] = 'Arreglar pregunta';
$string['tidyquestionx'] = 'Renombrar las partes de pregunta {$a}';
$string['trig_degrees_radians_name'] = 'Grados y Radianes';
$string['trig_standard_identities_name'] = 'Identidades Trigonométricas Estándar';
$string['trig_standard_values_name'] = 'Valores Trigonométricas Estándar';
$string['true'] = 'Verdadero';
$string['truebranch'] = 'Rama verdadera';
$string['truebranch_help'] = 'Estos campos controlan lo que sucede cuando pasa el examen de prueba

### Modo y puntaje
Cómo se ajusta el puntaje. = medias configura la puntuación a valores particulares, +/- medias añade o resta la puntuación dada desde el total actual.

### Castigo
En modo adaptativo o interactivo, acumula dicha cantidad de castigo.

### Siguiente
Si es que se va al odo siguiente, y a cual, o dtenerse.

### Nota d erespuesta
Esta es una etiqueta que es clave para fines de reporte. está diseñada para grabar la ruta única a lo largo del árbol, y la resultante de cada prueba de respuesta. Esto es generado automáticamente, pero puede cambiarse a algo que tenga significado.';
$string['undeploy'] = 'Des-implementar';
$string['unrecognisedfactstags'] = 'Las siguientes marcas de hechos (\'\'facts tag(s)\'\') no son reconocidad: {$a->tags}.';
$string['Variable_function'] = 'Lo que sigue aparece en su expresión tanto como una variable y como una función: {$a->m0}. Por favor, clarifique su ingreso. Ya sea que inserte símbolos de <code>*</code> para quitar funciones, o haga todas las ocurrencias funciones.';
$string['variant'] = 'Variante';
$string['variantsselectionseed'] = 'Grupo aleatorio';
$string['variantsselectionseed_help'] = 'Normalmente Usted puede dejar esta caja vacía. Sin embargo, si quiere que dos diferentes preguntas en un examen usen la misma semilla aleatoria, entonces escriba la misma cadena de texto en esta caja para ambas preguntas (y despliegue el mismo conjunto de semillas aleatorias, si Usted está usando las versiones desplegadas) y las semillas aleatorias para ambas preguntas serán sincronizadas.';
$string['verifyquestionandupdate'] = 'Verificar el texto de la pregunta y actualizar el formato';
$string['youmustconfirm'] = 'Usted debe de confirmar aquí.';
