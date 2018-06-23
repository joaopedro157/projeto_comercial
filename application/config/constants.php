<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
 |--------------------------------------------------------------------------
 | Constants do sistema
 |--------------------------------------------------------------------------
 |
 |
 */

	define('PIPEDRIVE_TOKEN', 'f661b861ef0003d87caca166e54e380bf219dd2a'); // TOKEN DO PIPEDRIVE
	
	
//Campos do Pipe
define('PIPEDRIVE_FIELD_RESUMO_FECHAMENTO', '52b8fe5eb819af8d45827a7cdd8fbc1a7424f433');
define('PIPEDRIVE_FIELD_ORIGEM', '4679f896a7accaed359932edd6319330604180f4');
define('PIPEDRIVE_FIELD_QUANT_COLABORADOR', '336eec072dc37308f8f0458ad19680292efca387');
define('PIPEDRIVE_FIELD_CENARIO', '719eae8cbead5f3730910de201e856f365df8d9d');
define('PIPEDRIVE_FIELD_CARGO', '8adc4874811c46505565954840ca710306d0e559');
define('PIPEDRIVE_FIELD_LOCALIZACAO', '99a82cb0e29b3b998f491c05af8a55094e4cc701');
define('PIPEDRIVE_FIELD_MERCADO', '186d11b7fb863185058271b52128fa7752d4410c');
define('PIPEDRIVE_FIELD_ENVIAR_PROPOSTA', 'b6d853e4d043919c1f01fcefbcc617f484fbc6fe');
define('PIPEDRIVE_FIELD_TEXTO_PROPOSTA', 'c5fddcfc4c34a0cf732fc32e9b0e4e19da50dd5a');
define('PIPEDRIVE_FIELD_TEMPLATE_PROPOSTA', 'cc858e2a298d2be07ee499d94a2c6b86df623a5e');
define('PIPEDRIVE_FIELD_PLANOS_PROPOSTA', 'db2dc1905e3de3d8a1a11f1e623fc93d18b98ffc');
define('PIPEDRIVE_FIELD_CONDICAO_FECHAMENTO', '5b1c9224f608fa204f3ed678bf634702f31398b3');
define('PIPEDRIVE_FIELD_QTDE_COLABORADORES', 'cda2cbb3f1eaff0f54bef00c693c437c9bfbf42b');
define('PIPEDRIVE_FIELD_QTDE_REL_RECRUTAMENTO', '7130008414a1b81f999291e41c092d568db8f86a');
define('PIPEDRIVE_FIELD_DATA_VENCIMENTO', '9cae83b75aae7dfcbce8fad7c08dca31bd03904a');
define('PIPEDRIVE_FIELD_TEMPLATE_OPTIONS', serialize(array(
	'169' => 'profiler gestão',
	'180' => 'profiler',
)));

//Sdr e closer
define('PIPEDRIVE_QUALIFICADOR_FIELD', 'ad52fb6c63280806e3734c32e61038d28039f580');
define('PIPEDRIVE_CLOSER_FIELD', '48359c2b9e6663f1f515a48b0a6c766f2370b5bc');

//IDs DOS STAGES
define('PIPEDRIVE_STAGE_BANCO_DE_LEAD', 135);
define('PIPEDRIVE_STAGE_PESQUISA', 125);
define('PIPEDRIVE_STAGE_PROPESCCAO', 126);
define('PIPEDRIVE_STAGE_CONEXAO', 127);
define('PIPEDRIVE_STAGE_REUNIAO_AGENDADA', 128);
define('PIPEDRIVE_STAGE_REAGENDAR_1', 129);
define('PIPEDRIVE_STAGE_REAGENDADO_1', 130);
define('PIPEDRIVE_STAGE_REAGENDAR_2', 137);
define('PIPEDRIVE_STAGE_REAGENDADO_2', 138);
define('PIPEDRIVE_STAGE_DIAGNOSTICO', 131);
define('PIPEDRIVE_STAGE_SOLUCAO', 133);
define('PIPEDRIVE_STAGE_PROPOSTA', 139);
define('PIPEDRIVE_STAGE_ABERTURA', 138);



define('RHPORTAL_BOTID', 70320);