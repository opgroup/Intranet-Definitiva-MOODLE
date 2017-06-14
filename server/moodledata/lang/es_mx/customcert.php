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
 * Strings for component 'customcert', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   customcert
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = 'Añadir otra página de certificado';
$string['addelement'] = 'Añadir elemento';
$string['awardedto'] = 'Otorgado a';
$string['certificate'] = 'Certificado';
$string['code'] = 'Código';
$string['copy'] = 'Copiar';
$string['coursetimereq'] = 'Minutos requeridos en curso';
$string['coursetimereq_help'] = 'Escriba aquí la cantidad mínima de tiempo, en minutos, que un estudiante debe de permanecer ingresado en el curso antes de que pueda recibir el certificado.';
$string['createtemplate'] = 'Crear platilla';
$string['customcert:addinstance'] = 'Añadir una nueva instancia de certificado personalizado';
$string['customcert:manage'] = 'Gestionar un certificado personalizado';
$string['customcertreport'] = 'Reporte de certificado personalizado';
$string['customcert:verifycertificate'] = 'Verificar un certificado';
$string['customcert:view'] = 'Ver un certificado personalizado';
$string['customcert:viewallcertificates'] = 'Ver todos los certificados';
$string['customcert:viewreport'] = 'Reporte de vista del curso';
$string['deletecertpage'] = 'Eliminar página del certificado';
$string['deleteconfirm'] = 'Confirmación de eliminación';
$string['deleteelement'] = 'Eliminar elemento';
$string['deleteelementconfirm'] = '¿Está Usted seguro de querer eliminar este elemento?';
$string['deletepageconfirm'] = '¿Está Usted seguro de querer eliminar esta página del certificado?';
$string['deletetemplateconfirm'] = '¿Está Usted seguro de querer eliminar esta plantilla de certificado?';
$string['description'] = 'Descripción';
$string['editcustomcert'] = 'Editar certificado personalizado';
$string['editelement'] = 'Editar elemento';
$string['edittemplate'] = 'Editar plantilla';
$string['elementname'] = 'Nombre del elemento';
$string['elementname_help'] = 'Este será el nombre usado para identificar este elemento al editar un certificado personalizado. Por ejemplo, Usted puede tener varias imágenes sobre una página y querrá distinguirlas entre ellas rápidamente al editar el certificado. Nota: Esto no se mostrará en el PDF.';
$string['elements'] = 'Elementos';
$string['elements_help'] = 'Esta es la lista de los elementos que se mostrarán en el certificado.

Por favor, tome nota: Los elementos son renderizados en este orden. El orden puede cambiarse al usar las flechas junto a cada elemento.';
$string['elementwidth'] = 'Ancho';
$string['elementwidth_help'] = 'Especificar el ancho del elemento - \'0\' significa que no hay limitante para el ancho.';
$string['emailnonstudentbody'] = 'Adjunto está el certificado \'{$a->certificatename}\' para \'{$a->userfullname}\' para el curso \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Ver reporte de certificado';
$string['emailnonstudentgreeting'] = 'Hola';
$string['emailnonstudentsubject'] = '{$a->coursename}: {$a->certificatename}';
$string['emailothers'] = 'Email otros';
$string['emailothers_help'] = 'Si se activa, esto mandará las direcciones Email aquí enlistadas (separadas por una coma) con una copia del certificado cuando se vuelva disponible.';
$string['emailstudentbody'] = 'Anexo está su certificado \'{$a->certificatename}\' para el curso \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Ver certificado';
$string['emailstudentgreeting'] = 'Estimado/a {$a}';
$string['emailstudents'] = 'Email estudiantes';
$string['emailstudents_help'] = 'Si se activa, esto enviará Email a los estudiantes con una copia del certificado cuando se vuelva disponible.';
$string['emailstudentsubject'] = '{$a->coursename}: {$a->certificatename}';
$string['emailteachers'] = 'Email profesores';
$string['emailteachers_help'] = 'Si se activa, esto enviará Email a los profesores con una copia del certificado cuando se vuelva disponible.';
$string['font'] = 'Tipo de letra (font)';
$string['fontcolour'] = 'Color';
$string['fontcolour_help'] = 'El color del tipo de letra.';
$string['font_help'] = 'El tipo de letra (font) usado al generar este elemento.';
$string['fontsize'] = 'Tamaño';
$string['fontsize_help'] = 'El tamaño del tipo de letra en puntos.';
$string['getcustomcert'] = 'Descargar certificado';
$string['height'] = 'Altura';
$string['height_help'] = 'Esta es la altura del PDF del certificado en mm. Para referencia, una hoja tamaño carta mide 279 mm de alto y una hoja A4 mide 297 mm.';
$string['invalidcode'] = 'Código proporcionado inválido.';
$string['invalidcolour'] = 'Color elegido inválido; por favor, ingrese un nombre de color HTML válido, o un color de 6 dígitos, o un color  HEXadecimal de tres dígitos.';
$string['invalidelementwidth'] = 'Por favor escriba un número positivo.';
$string['invalidheight'] = 'La altura debe de ser un número válido mayor de 0.';
$string['invalidmargin'] = 'El márgen debe de ser un número válido mayor de 0.';
$string['invalidposition'] = 'Por favor seleccione un número positivo para la posición {$a}.';
$string['invalidwidth'] = 'El ancho debe de ser un número válido mayor de 0.';
$string['issued'] = 'Emitido';
$string['landscape'] = 'Apaisado';
$string['leftmargin'] = 'Márgen izquierdo';
$string['leftmargin_help'] = 'Este es el margen izquierdo del PDF del certificado en mm.';
$string['load'] = 'Cargar';
$string['loadtemplate'] = 'Cargar plantilla';
$string['loadtemplatemsg'] = '¿Está Usted seguro de querer cargar esta plantilla? Esto quitará cualquier páginas y elementos existentes para este certificado.';
$string['managetemplates'] = 'Gestionar certificados';
$string['managetemplatesdesc'] = 'Este enlace lo llevará a una nueva pantalla en donde Usted podrá gestionar plantillas usadas por las actividades de certificado-personalizado en cursos.';
$string['modify'] = 'Modificar';
$string['modulename'] = 'Certificado personalizado';
$string['modulename_help'] = 'Este módulo permite la generación dinámica de certificados PDF.';
$string['modulenameplural'] = 'Certificado personalizado';
$string['mycertificates'] = 'Mis certificados';
$string['name'] = 'Nombre';
$string['nametoolong'] = 'Usted ha excedido la longitud máxima permitida para el nombre';
$string['nocustomcerts'] = 'No hay certificados personalizados para este curso.';
$string['noimage'] = 'Sin imagen';
$string['notemplates'] = 'Sin plantilla';
$string['notissued'] = 'No emitido';
$string['notverified'] = 'No verificado';
$string['options'] = 'Opciones';
$string['page'] = 'Página {$a}';
$string['pluginadministration'] = 'Administración del certificado personalizado';
$string['pluginname'] = 'Certificado personalizado';
$string['portrait'] = 'Retrato';
$string['posx'] = 'Posición X';
$string['posx_help'] = 'Esta es la posición en mm desde la esquina superior izquierda a donde Usted desea el punto de referencia del elemento para localizarlo en el eje de las X.';
$string['posy'] = 'Posición Y';
$string['posy_help'] = 'Esta es la posición en mm desde la esquina superior izquierda a donde Usted desea el punto de referencia del elemento para localizarlo en el eje de las Y.';
$string['print'] = 'Imprimir';
$string['rearrangeelements'] = 'Re-posicionar elementos';
$string['rearrangeelementsheading'] = 'Arrastre y suelte elementos para cambiar en donde están posicionados sobre del certificado.';
$string['receiveddate'] = 'Fecha recibido';
$string['refpoint'] = 'Localización del punto de referencia';
$string['refpoint_help'] = 'El punto de referencia es la localización de un elemento desde el cual se determinan sus coordenadas x  y. Está indicado por el símbolo  \'+\' que aparece en el centro o en las esquinas del elemento.';
$string['replacetemplate'] = 'Remplazar';
$string['requiredtimenotmet'] = 'Usted debe dedicar cuando menos un mínimo de {$a->requiredtime} minutos en el curso antes de que pueda acceder a este certificado.';
$string['rightmargin'] = 'Márgen derecho';
$string['rightmargin_help'] = 'Este es el margen derecho del PDF del certificado en mm.';
$string['save'] = 'Guardar';
$string['saveandclose'] = 'Guardar y cerrar';
$string['saveandcontinue'] = 'Guardar y continuar';
$string['savechangespreview'] = 'Guardar cambios y pre-visualizar';
$string['savetemplate'] = 'Guardar plantilla';
$string['search:activity'] = 'Certificado personalizado - información de actividad';
$string['setprotection'] = 'Configurar protección';
$string['setprotection_help'] = 'Elegir las acciones que Usted quiere evitar que hagan los usuarios sobre este certificado.';
$string['showposxy'] = 'Mostrar posición X y Y';
$string['showposxy_desc'] = 'Esto mostrará la posición X y Y al editar un elemento, permitiéndole al usuario que especifique exactamente la localización.

Esto no es necesario si Usted planea usar solamente la interfaz de arrastrar y soltar para este propósito.';
$string['summaryofissue'] = 'Resumen de la emisión';
$string['taskemailcertificate'] = 'Manejar envíar Emails de certificados.';
$string['templatename'] = 'Nombre de la plantilla';
$string['templatenameexists'] = 'El nombre de la plantilla está actualmente en uso; por favor elija otro.';
$string['topcenter'] = 'Centrado';
$string['topleft'] = 'Superior izquierda';
$string['topright'] = 'Superior derecha';
$string['type'] = 'Tipo';
$string['uploadimage'] = 'Subir imagen';
$string['uploadimagedesc'] = 'Este enlace lo llevará a Usted a una nueva pantalla en donde podrá subir imágenes. Las imágenes subidas mediante este método estará disponibles para todo el sitio para todos los usuarios que puedan crear un certificado personalizado.';
$string['verified'] = 'Verificado';
$string['verify'] = 'Verificar';
$string['verifycertificate'] = 'Verificar certificado';
$string['verifycertificateanyone'] = 'Permitirle a cualquiera verificar un certificado';
$string['verifycertificateanyone_help'] = 'Esta configuración habilita a cualquiera con el enlace a verificación de certificado (incluyendo a usuarios no ingresados al sitio) para verificar un certificado.';
$string['viewcustomcertissues'] = 'Ver{$a} certificados personalizados emitidos';
$string['width'] = 'Ancho';
$string['width_help'] = 'Este es  el ancho en mm del certificado. Para referencia, una hoja de tamaño carta tiene 216 mm de ancho y un tamaño A4 mide 210 mm de ancho.';
