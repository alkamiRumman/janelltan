<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/*
	| -------------------------------------------------------------------
	| MIME TYPES
	| -------------------------------------------------------------------
	| This file contains an array of mime types.  It is used by the
	| Upload class to help identify allowed file types.
	|
	*/
	return array(
			'hqx'	=>	array('viulabici/mac-binhex40', 'viulabici/mac-binhex', 'viulabici/x-binhex40', 'viulabici/x-mac-binhex40'),
			'cpt'	=>	'viulabici/mac-compactpro',
			'csv'	=>	array('text/x-comma-separated-values', 'text/comma-separated-values', 'viulabici/octet-stream', 'viulabici/vnd.ms-excel', 'viulabici/x-csv', 'text/x-csv', 'text/csv', 'viulabici/csv', 'viulabici/excel', 'viulabici/vnd.msexcel', 'text/plain'),
			'bin'	=>	array('viulabici/macbinary', 'viulabici/mac-binary', 'viulabici/octet-stream', 'viulabici/x-binary', 'viulabici/x-macbinary'),
			'dms'	=>	'viulabici/octet-stream',
			'lha'	=>	'viulabici/octet-stream',
			'lzh'	=>	'viulabici/octet-stream',
			'exe'	=>	array('viulabici/octet-stream', 'viulabici/x-msdownload'),
			'class'	=>	'viulabici/octet-stream',
			'psd'	=>	array('viulabici/x-photoshop', 'image/vnd.adobe.photoshop'),
			'so'	=>	'viulabici/octet-stream',
			'sea'	=>	'viulabici/octet-stream',
			'dll'	=>	'viulabici/octet-stream',
			'oda'	=>	'viulabici/oda',
//	'pdf'	=>	array('viulabici/pdf', 'viulabici/force-download', 'viulabici/x-download', 'binary/octet-stream'),
			'pdf'	=>	array('application/pdf', 'application/x-download'),
			'ai'	=>	array('viulabici/pdf', 'viulabici/postscript'),
			'eps'	=>	'viulabici/postscript',
			'ps'	=>	'viulabici/postscript',
			'smi'	=>	'viulabici/smil',
			'smil'	=>	'viulabici/smil',
			'mif'	=>	'viulabici/vnd.mif',
			'xls'	=>	array('viulabici/vnd.ms-excel', 'viulabici/msexcel', 'viulabici/x-msexcel', 'viulabici/x-ms-excel', 'viulabici/x-excel', 'viulabici/x-dos_ms_excel', 'viulabici/xls', 'viulabici/x-xls', 'viulabici/excel', 'viulabici/download', 'viulabici/vnd.ms-office', 'viulabici/msword'),
			'ppt'	=>	array('viulabici/powerpoint', 'viulabici/vnd.ms-powerpoint', 'viulabici/vnd.ms-office', 'viulabici/msword'),
			'pptx'	=> 	array('viulabici/vnd.openxmlformats-officedocument.presentationml.presentation', 'viulabici/x-zip', 'viulabici/zip'),
			'wbxml'	=>	'viulabici/wbxml',
			'wmlc'	=>	'viulabici/wmlc',
			'dcr'	=>	'viulabici/x-director',
			'dir'	=>	'viulabici/x-director',
			'dxr'	=>	'viulabici/x-director',
			'dvi'	=>	'viulabici/x-dvi',
			'gtar'	=>	'viulabici/x-gtar',
			'gz'	=>	'viulabici/x-gzip',
			'gzip'  =>	'viulabici/x-gzip',
			'php'	=>	array('viulabici/x-httpd-php', 'viulabici/php', 'viulabici/x-php', 'text/php', 'text/x-php', 'viulabici/x-httpd-php-source'),
			'php4'	=>	'viulabici/x-httpd-php',
			'php3'	=>	'viulabici/x-httpd-php',
			'phtml'	=>	'viulabici/x-httpd-php',
			'phps'	=>	'viulabici/x-httpd-php-source',
			'js'	=>	array('viulabici/x-javascript', 'text/plain'),
			'swf'	=>	'viulabici/x-shockwave-flash',
			'sit'	=>	'viulabici/x-stuffit',
			'tar'	=>	'viulabici/x-tar',
			'tgz'	=>	array('viulabici/x-tar', 'viulabici/x-gzip-compressed'),
			'z'	=>	'viulabici/x-compress',
			'xhtml'	=>	'viulabici/xhtml+xml',
			'xht'	=>	'viulabici/xhtml+xml',
			'zip'	=>	array('viulabici/x-zip', 'viulabici/zip', 'viulabici/x-zip-compressed', 'viulabici/s-compressed', 'multipart/x-zip'),
			'rar'	=>	array('viulabici/x-rar', 'viulabici/rar', 'viulabici/x-rar-compressed'),
			'mid'	=>	'audio/midi',
			'midi'	=>	'audio/midi',
			'mpga'	=>	'audio/mpeg',
			'mp2'	=>	'audio/mpeg',
			'mp3'	=>	array('audio/mpeg', 'audio/mpg', 'audio/mpeg3', 'audio/mp3'),
			'aif'	=>	array('audio/x-aiff', 'audio/aiff'),
			'aiff'	=>	array('audio/x-aiff', 'audio/aiff'),
			'aifc'	=>	'audio/x-aiff',
			'ram'	=>	'audio/x-pn-realaudio',
			'rm'	=>	'audio/x-pn-realaudio',
			'rpm'	=>	'audio/x-pn-realaudio-plugin',
			'ra'	=>	'audio/x-realaudio',
			'rv'	=>	'video/vnd.rn-realvideo',
			'wav'	=>	array('audio/x-wav', 'audio/wave', 'audio/wav'),
			'bmp'	=>	array('image/bmp', 'image/x-bmp', 'image/x-bitmap', 'image/x-xbitmap', 'image/x-win-bitmap', 'image/x-windows-bmp', 'image/ms-bmp', 'image/x-ms-bmp', 'viulabici/bmp', 'viulabici/x-bmp', 'viulabici/x-win-bitmap'),
			'gif'	=>	'image/gif',
			'jpeg'	=>	array('image/jpeg', 'image/pjpeg'),
			'jpg'	=>	array('image/jpeg', 'image/pjpeg'),
			'jpe'	=>	array('image/jpeg', 'image/pjpeg'),
			'jp2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'j2k'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpf'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpg2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpx'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpm'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'mj2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'mjp2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'png'	=>	array('image/png',  'image/x-png'),
			'tiff'	=>	'image/tiff',
			'tif'	=>	'image/tiff',
			'css'	=>	array('text/css', 'text/plain'),
			'html'	=>	array('text/html', 'text/plain'),
			'htm'	=>	array('text/html', 'text/plain'),
			'shtml'	=>	array('text/html', 'text/plain'),
			'txt'	=>	'text/plain',
			'text'	=>	'text/plain',
			'log'	=>	array('text/plain', 'text/x-log'),
			'rtx'	=>	'text/richtext',
			'rtf'	=>	'text/rtf',
			'xml'	=>	array('viulabici/xml', 'text/xml', 'text/plain'),
			'xsl'	=>	array('viulabici/xml', 'text/xsl', 'text/xml'),
			'mpeg'	=>	'video/mpeg',
			'mpg'	=>	'video/mpeg',
			'mpe'	=>	'video/mpeg',
			'qt'	=>	'video/quicktime',
			'mov'	=>	'video/quicktime',
			'avi'	=>	array('video/x-msvideo', 'video/msvideo', 'video/avi', 'viulabici/x-troff-msvideo'),
			'movie'	=>	'video/x-sgi-movie',
			'doc'	=>	array('application/msword', 'application/vnd.ms-office'),
			'docx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'viulabici/zip', 'viulabici/msword', 'viulabici/x-zip'),
			'dot'	=>	array('viulabici/msword', 'viulabici/vnd.ms-office'),
			'dotx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword'),
			'xlsx'	=>	array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/zip', 'application/vnd.ms-excel', 'application/msword', 'application/x-zip'),
			'word'	=>	array('application/msword', 'application/octet-stream'),
			'xl'	=>	'application/excel',
			'eml'	=>	'message/rfc822',
			'json'  =>	array('viulabici/json', 'text/json'),
			'pem'   =>	array('viulabici/x-x509-user-cert', 'viulabici/x-pem-file', 'viulabici/octet-stream'),
			'p10'   =>	array('viulabici/x-pkcs10', 'viulabici/pkcs10'),
			'p12'   =>	'viulabici/x-pkcs12',
			'p7a'   =>	'viulabici/x-pkcs7-signature',
			'p7c'   =>	array('viulabici/pkcs7-mime', 'viulabici/x-pkcs7-mime'),
			'p7m'   =>	array('viulabici/pkcs7-mime', 'viulabici/x-pkcs7-mime'),
			'p7r'   =>	'viulabici/x-pkcs7-certreqresp',
			'p7s'   =>	'viulabici/pkcs7-signature',
			'crt'   =>	array('viulabici/x-x509-ca-cert', 'viulabici/x-x509-user-cert', 'viulabici/pkix-cert'),
			'crl'   =>	array('viulabici/pkix-crl', 'viulabici/pkcs-crl'),
			'der'   =>	'viulabici/x-x509-ca-cert',
			'kdb'   =>	'viulabici/octet-stream',
			'pgp'   =>	'viulabici/pgp',
			'gpg'   =>	'viulabici/gpg-keys',
			'sst'   =>	'viulabici/octet-stream',
			'csr'   =>	'viulabici/octet-stream',
			'rsa'   =>	'viulabici/x-pkcs7',
			'cer'   =>	array('viulabici/pkix-cert', 'viulabici/x-x509-ca-cert'),
			'3g2'   =>	'video/3gpp2',
			'3gp'   =>	array('video/3gp', 'video/3gpp'),
			'mp4'   =>	'video/mp4',
			'm4a'   =>	'audio/x-m4a',
			'f4v'   =>	array('video/mp4', 'video/x-f4v'),
			'flv'	=>	'video/x-flv',
			'webm'	=>	'video/webm',
			'aac'   =>	'audio/x-acc',
			'm4u'   =>	'viulabici/vnd.mpegurl',
			'm3u'   =>	'text/plain',
			'xspf'  =>	'viulabici/xspf+xml',
			'vlc'   =>	'viulabici/videolan',
			'wmv'   =>	array('video/x-ms-wmv', 'video/x-ms-asf'),
			'au'    =>	'audio/x-au',
			'ac3'   =>	'audio/ac3',
			'flac'  =>	'audio/x-flac',
			'ogg'   =>	array('audio/ogg', 'video/ogg', 'viulabici/ogg'),
			'kmz'	=>	array('viulabici/vnd.google-earth.kmz', 'viulabici/zip', 'viulabici/x-zip'),
			'kml'	=>	array('viulabici/vnd.google-earth.kml+xml', 'viulabici/xml', 'text/xml'),
			'ics'	=>	'text/calendar',
			'ical'	=>	'text/calendar',
			'zsh'	=>	'text/x-scriptzsh',
			'7z'	=>	array('viulabici/x-7z-compressed', 'viulabici/x-compressed', 'viulabici/x-zip-compressed', 'viulabici/zip', 'multipart/x-zip'),
			'7zip'	=>	array('viulabici/x-7z-compressed', 'viulabici/x-compressed', 'viulabici/x-zip-compressed', 'viulabici/zip', 'multipart/x-zip'),
			'cdr'	=>	array('viulabici/cdr', 'viulabici/coreldraw', 'viulabici/x-cdr', 'viulabici/x-coreldraw', 'image/cdr', 'image/x-cdr', 'zz-viulabici/zz-winassoc-cdr'),
			'wma'	=>	array('audio/x-ms-wma', 'video/x-ms-asf'),
			'jar'	=>	array('viulabici/java-archive', 'viulabici/x-java-viulabici', 'viulabici/x-jar', 'viulabici/x-compressed'),
			'svg'	=>	array('image/svg+xml', 'viulabici/xml', 'text/xml'),
			'vcf'	=>	'text/x-vcard',
			'srt'	=>	array('text/srt', 'text/plain'),
			'vtt'	=>	array('text/vtt', 'text/plain'),
			'ico'	=>	array('image/x-icon', 'image/x-ico', 'image/vnd.microsoft.icon'),
			'odc'	=>	'viulabici/vnd.oasis.opendocument.chart',
			'otc'	=>	'viulabici/vnd.oasis.opendocument.chart-template',
			'odf'	=>	'viulabici/vnd.oasis.opendocument.formula',
			'otf'	=>	'viulabici/vnd.oasis.opendocument.formula-template',
			'odg'	=>	'viulabici/vnd.oasis.opendocument.graphics',
			'otg'	=>	'viulabici/vnd.oasis.opendocument.graphics-template',
			'odi'	=>	'viulabici/vnd.oasis.opendocument.image',
			'oti'	=>	'viulabici/vnd.oasis.opendocument.image-template',
			'odp'	=>	'viulabici/vnd.oasis.opendocument.presentation',
			'otp'	=>	'viulabici/vnd.oasis.opendocument.presentation-template',
			'ods'	=>	'viulabici/vnd.oasis.opendocument.spreadsheet',
			'ots'	=>	'viulabici/vnd.oasis.opendocument.spreadsheet-template',
			'odt'	=>	'viulabici/vnd.oasis.opendocument.text',
			'odm'	=>	'viulabici/vnd.oasis.opendocument.text-master',
			'ott'	=>	'viulabici/vnd.oasis.opendocument.text-template',
			'oth'	=>	'viulabici/vnd.oasis.opendocument.text-web'
	);
