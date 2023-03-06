<?php
/** 
 * Default file extensions and its mime types.
 * 
 * To create your own extension => mime types, please write all keys and values in lower case only.
 * 
 * @author Vee W.
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://www.freeformatter.com/mime-types-list.html Reference
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Complete_list_of_MIME_types Reference
 * @link https://www.sitepoint.com/mime-types-complete-list/ Reference
 */


return array(
    '3g2' => array('audio/3gpp2', 'video/3gpp2'),
    '3gp' => array('audio/3gpp', 'video/3gpp'),
    '7z' => array('application/x-7z-compressed'),
    'aac' => array('audio/aac', 'audio/aacp', 'audio/x-aac', 'audio/x-hx-aac-adts'),
    'avi' => array('video/avi', 'video/msvideo', 'video/x-msvideo'),
    'bmp' => array('image/bmp', 'image/x-windows-bmp'),
    'bz' => array('application/x-bzip'),
    'bz2' => array('application/x-bzip2'),
    'css' => array('text/css'),
    'csv' => array('application/csv', 'application/excel', 'application/vnd.ms-excel', 'application/vnd.msexcel', 'application/x-csv', 'text/comma-separated-values', 'text/csv', 'text/x-comma-separated-values', 'text/x-csv'),
    'db' => array('application/vnd.sqlite3', 'application/x-sqlite3'),// sqlite
    'doc' => array('application/msword'),
    'docx' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
    'dvi' => array('application/x-dvi'),
    'eot' => array('application/vnd.ms-fontobject'),
    'epub' => array('application/epub+zip'),
    'flac' => array('audio/x-flac'),
    'flv' => array('video/x-flv'),
    'gif' => array('image/gif'),
    'gz' => array('application/x-gzip'),
    'h264' => array('video/h264'),
    'htm' => array('text/html'),
    'html' => array('text/html'),
    'ico' => array('image/x-icon'),
    'ics' => array('text/calendar'),
    'inf' => array('application/inf'),
    'jfif' => array('image/jpeg', 'image/pjpeg'),
    'jpg' => array('image/jpeg', 'image/pjpeg', 'image/x-citrix-jpeg'),
    'jpe' => array('image/jpeg', 'image/pjpeg', 'image/x-citrix-jpeg'),
    'jpeg' => array('image/jpeg', 'image/pjpeg', 'image/x-citrix-jpeg'),
    'js' => array('application/ecmascript', 'application/javascript', 'application/x-javascript', 'text/ecmascript', 'text/javascript'),
    'json' => array('application/json', 'text/json'),
    'jsonld' => array('application/ld+json'),
    'log' => array('text/plain', 'text/x-log'),
    'lzh' => array('application/x-lzh'),
    'm3u' => array('audio/x-mpegurl'),
    'm4a' => array('audio/mp4', 'audio/x-m4a'),
    'm4v' => array('video/x-m4v'),
    'mdb' => array('application/x-msaccess'),
    'mid' => array('application/midi', 'application/x-midi', 'audio/midi', 'audio/x-mid', 'audio/x-midi', 'music/crescendo', 'x-music/x-midi'),
    'midi' => array('application/midi', 'application/x-midi', 'audio/midi', 'audio/x-mid', 'audio/x-midi', 'music/crescendo', 'x-music/x-midi'),
    'mjs' => array('text/javascript'),
    'mkv' => array('video/x-matroska'),
    'mov' => array('video/quicktime'),
    'mpa' => array('audio/mpeg', 'video/mpeg'),
    'mp3' => array('audio/mp3', 'audio/mpeg', 'audio/mpeg3', 'audio/mpg', 'audio/x-mpeg-3'),
    'mp4' => array('application/mp4', 'video/mp4'),
    'mp4a' => array('audio/mp4'),
    'mpe' => array('video/mpeg'),
    'mpeg' => array('video/mpeg'),
    'mpg' => array('video/mpeg'),
    'mpga' => array('audio/mpeg'),
    'odp' => array('application/vnd.oasis.opendocument.presentation'),
    'ods' => array('application/vnd.oasis.opendocument.spreadsheet'),
    'odt' => array('application/vnd.oasis.opendocument.text'),
    'oga' => array('audio/ogg'),
    'ogg' => array('application/ogg', 'audio/ogg', 'video/ogg'),
    'ogv' => array('video/ogg'),
    'opus' => array('audio/ogg', 'audio/opus'),
    'otf' => array('application/x-font-otf', 'font/otf'),
    'pdf' => array('application/pdf'),
    'png' => array('image/png', 'image/x-citrix-png', 'image/x-png'),
    'ppt' => array('application/powerpoint', 'application/vnd.ms-powerpoint'),
    'pptx' => array('application/vnd.openxmlformats-officedocument.presentationml.presentation'),
    'psd' => array('image/vnd.adobe.photoshop'),
    'rar' => array('application/x-rar-compressed'),
    'rtf' => array('application/rtf', 'application/x-rtf', 'text/richtext'),
    'rss' => array('application/rss+xml'),
    'shtml' => array('text/html', 'text/x-server-parsed-html'),
    'sql' => array('application/sql', 'text/plain'),
    'sqlite' => array('application/vnd.sqlite3', 'application/x-sqlite3'),// sqlite
    'sub' => array('image/vnd.dvb.subtitle'),
    'svg' => array('image/svg+xml'),
    'swf' => array('application/x-shockwave-flash'),
    'tar' => array('application/x-tar'),
    'text' => array('application/plain', 'text/plain'),
    'tgz' => array('application/x-gzip-compressed', 'application/x-tar'),
    'tif' => array('image/tiff', 'image/x-tiff'),
    'tiff' => array('image/tiff', 'image/x-tiff'),
    'torrent' => array('application/x-bittorrent'),
    'ttf' => array('application/x-font-ttf', 'font/ttf'),
    'txt' => array('text/plain'),
    'vcs' => array('text/x-vcalendar'),
    'vsd' => array('application/vnd.visio'),
    'wav' => array('audio/wav', 'audio/wave', 'audio/x-wav'),
    'wbmp' => array('image/vnd.wap.wbmp'),
    'weba' => array('audio/webm'),
    'webm' => array('audio/webm', 'video/webm'),
    'webp' => array('image/webp'),
    'woff' => array('font/woff'),
    'woff2' => array('font/woff2'),
    'word' => array('application/msword'),
    'xhtml' => array('application/xhtml+xml'),
    'xls' => array('application/excel', 'application/msexcel', 'application/vnd.ms-excel'),
    'xlsx' => array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'),
    'xml' => array('application/atom+xml', 'application/rss+xml', 'application/xml', 'text/xml'),
    'xsl' => array('text/xml'),
    'yaml' => array('text/yaml'),
    'yml' => array('text/yaml'),
    'zip' => array('application/x-compressed', 'application/x-zip', 'application/x-zip-compressed', 'application/zip', 'multipart/x-zip'),
);