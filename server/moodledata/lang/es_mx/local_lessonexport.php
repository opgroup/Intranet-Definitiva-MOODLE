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
 * Strings for component 'local_lessonexport', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   local_lessonexport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotatepermission'] = 'anotaciones-formatos';
$string['annotatepermission_desc'] = 'Hacer anotaciones en formatos de documentos';
$string['assemblepermission'] = 'ensamblar';
$string['assemblepermission_desc'] = 'Ensamblar el documento';
$string['copypermission'] = 'copiar';
$string['copypermission_desc'] = 'Copiar el documento';
$string['covercolour'] = 'Color del banner de cubierta de Portada';
$string['covercolour_desc'] = 'El color del banner el la cubierta de la Portada que contiene el título de la lección.';
$string['created'] = 'Creado en {$a}';
$string['customfont'] = 'Familia de tipo de letra (font) PDF por defecto';
$string['customfont_desc'] = 'Tipo de letra (font) por defecto para usar en el PDF impreso. Los fonts posibles incluyen: times (Times-Roman), timesb (Times-Bold), timesi (Times-Italic), timesbi (Times-BoldItalic), helvetica (Helvetica), helveticab (Helvetica-Bold), helveticai, helveticabi, courier (Courier), courierb (Courier-Bold), courieri (Courier-Oblique), courierbi (Courier-BoldOblique), symbol (Symbol), zapfdingbats (ZapfDingbats)';
$string['exportpdf'] = 'Exxportar como PDF';
$string['exportstrict'] = 'Exportación estricta';
$string['exportstrict_desc'] = 'Si es que los documentos deberían de lanzar excepciones o suprimirlas en errores.';
$string['extractpermission'] = 'extraer';
$string['extractpermission_desc'] = 'Extraer páginas del documento';
$string['failedinsertimage'] = 'No se pudo insertar imagen: {$a}';
$string['filename'] = 'Exportar {$a->lessonname} {$a->timestamp}';
$string['formfillpermission'] = 'llenar-formatos';
$string['formfillpermission_desc'] = 'LLenar formatos en el documento';
$string['highdefpermission'] = 'imprimir-alta';
$string['highdefpermission_desc'] = 'Imprimir el documento en alta definición';
$string['lessonexport:exportpdf'] = 'Exportar lección como PDF';
$string['lessonexportfailed'] = 'Fallo la exportación de lección \'{$a}\' failed';
$string['lessonexportfailed_body'] = 'La lección \'{$a->name}\' ha sido actualizada, pero el intento para exportarla y mandar en Email ha fallado, después de   {$a->exportattempts} intentos. Si la lección es actualizada nuevamente, entonces se harán nuevos intentos para exportarla. La lección puede ser encontrada en: {$a->url}.';
$string['lessonupdated'] = 'Lección \'{$a}\' actualizada';
$string['lessonupdated_body'] = 'Exportación actualizada anexa';
$string['modified'] = 'Última modificación por {$a->modifiedby} en {$a->timemodified}';
$string['modifypermission'] = 'modificar';
$string['modifypermission_desc'] = 'Modificar el documento';
$string['pdffooterbottomleft'] = 'El campo inferior-izquierda del pie de página';
$string['pdffooterbottomleft_desc'] = 'El área inferior a la izquierda del pie de página que se llenará con texto. Esto puede incluir marcas (tags) HTML para formateo, enlaces, etc.';
$string['pdffooterbottommiddle'] = 'El campo inferior-enmedio del pie de página.';
$string['pdffooterbottommiddle_desc'] = 'El área inferior-enmedio del pie de página que se llenará con texto. Esto puede incluir marcas (tags) HTML para formateo, enlaces, etc.';
$string['pdffooterbottomright'] = 'El campo inferior-derecho del pie de página.';
$string['pdffooterbottomright_desc'] = 'El área del fondo a la derecha del pie de página que se llenará con texto. Esto puede incluir marcas (tags) HTML para formateo, enlaces, etc.';
$string['pdffootertopleft'] = 'El campo superior-izquierdo del pie de página.';
$string['pdffootertopleft_desc'] = 'El área superior a la izquierda del pie de páginaque se llenará con texto. Esto puede incluir marcas (tags) HTML para formateo, enlaces, etc.';
$string['pdffootertopmiddle'] = 'El campo superior-enmedio del pie de página.';
$string['pdffootertopmiddle_desc'] = 'El área superior-enmedio del pie de página que se llenará con texto. Esto puede incluir marcas (tags) HTML para formateo, enlaces, etc.';
$string['pdffootertopright'] = 'El campo superior-derecho del pie de página.';
$string['pdffootertopright_desc'] = 'El área superior a la derecha del pie de páginaque se llenará con texto. Esto puede incluir marcas (tags) HTML para formateo, enlaces, etc.';
$string['pdffrontcoverpagenumbers'] = 'Números de página de cubierta-portada';
$string['pdffrontcoverpagenumbers_desc'] = 'Alterna si es que los números de página se muestran en la cubierta-portada de un documento.';
$string['pdfownerpassword'] = 'Contraseña del propietario del documento PDF';
$string['pdfownerpassword_desc'] = 'Una contraseña del propietario para aplicar a documentos PDF. Dejar vacía para ninguna';
$string['pdfprotection'] = 'Permisos del PDF';
$string['pdfprotection_desc'] = 'Permisos a aplicar para generar documentos PDF.';
$string['pdfuserpassword'] = 'Contraseña del usuario del documento PDF';
$string['pdfuserpassword_desc'] = 'Una contraseña del usuario para aplicar a documentos PDF. Dejar vacía para ninguna';
$string['pluginname'] = 'Exportar Lección';
$string['printed'] = 'Este documento fue descargado en {$a}';
$string['printpermission'] = 'imprimir';
$string['printpermission_desc'] = 'Imprimir el documento';
$string['publishemail'] = 'Auto-publicar Email';
$string['publishemail_desc'] = 'La dirección Email a donde se enviarán automáticamente los PDFs siempre que cambie una lección';
$string['publishername'] = 'Desconocido';
