<?php

include 'ErrorHandler.class.php';

// Init Error Handler
ErrorHandler::Init(E_ALL);

// Report all errors except E_NOTICE
//ErrorHandler::Init(E_ALL ^ E_NOTICE);

// Report simple running errors
//ErrorHandler::Init(E_ERROR | E_WARNING | E_PARSE);

// Display Errors
ErrorHandler::$displayErrors = TRUE;

// Log file path
// ErrorHandler::Init(E_ALL, 'error.log');
ErrorHandler::$logFile = 'error.log';


// Trigger user errors
//trigger_error('Testing E_USER_WARNING.', E_USER_WARNING);
//trigger_error('Testing E_USER_NOTICE.', E_USER_NOTICE);
//trigger_error('Testing E_USER_ERROR.', E_USER_ERROR);

// Notice
$a = CONSTANT_IS_NOT_DEFINED;

// Mail on E_USER_ERROR
ErrorHandler::$mailOnErrorType = E_USER_ERROR; // any type of error eg E_ALL
ErrorHandler::$mail = 'rade@it-radionica.com';
ErrorHandler::$mailSub = 'Critical E_USER_ERROR foo bar baz qux.';

// This error will send email now
trigger_error('Testing E_USER_WARNING with mail.', E_USER_WARNING);

// Fatal error
function_is_not_defined_asdf($a);
