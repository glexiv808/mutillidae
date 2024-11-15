<?php

// Define constants for readability and maintainability
define('SECURITY_LEVEL_INSECURE', 0);
define('SECURITY_LEVEL_MEDIUM', 1);
define('SECURITY_LEVEL_SECURE', 5);
define('SUCCESS_CODE', 200);
define('SUCCESS_CREATED', 201);
define('SUCCESS_NO_CONTENT', 204);
define('NOT_MODIFIED_CODE', 304);
define('BAD_REQUEST_CODE', 400);
define('UNAUTHORIZED_CODE', 401);
define('FORBIDDEN_CODE', 403);
define('NOT_FOUND_CODE', 404);
define('METHOD_NOT_ALLOWED_CODE', 405);
define('CONFLICT_CODE', 409);
define('PRECONDITION_FAILED_CODE', 412);
define('UNSUPPORTED_MEDIA_TYPE_CODE', 415);
define('TOO_MANY_REQUESTS_CODE', 429);
define('SERVER_ERROR_CODE', 500);

define('CONTENT_TYPE_JSON', 'Content-Type: application/json');
define('ACCESS_CONTROL_MAX_AGE', 'Access-Control-Max-Age: 600');
define('JWT_SECRET_KEY', 'snowman');
define('JWT_EXPIRATION_TIME', 3600); // Token expiration time in seconds
define('MAX_FAILED_ATTEMPTS', 5); // Maximum number of failed login attempts
define('EXPECTED_ISSUER', 'http://mutillidae.localhost');
define('EXPECTED_ALGORITHM', 'HS256');
define('DATE_TIME_FORMAT', 'Y-m-d H:i:s');
define('TRUSTED_ORIGINS', [
    'http://mutillidae.localhost'
]);

// Define the Base URL dynamically based on the current request
define('BASE_URL', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);

define('VALID_AUDIENCES', [
    BASE_URL . "/webservices/rest/ws-cors-echo.php",
    BASE_URL . "/webservices/rest/ws-dns-lookup.php",
    BASE_URL . "/webservices/rest/ws-echo.php",
    BASE_URL . "/webservices/rest/ws-test-connectivity.php",
    BASE_URL . "/webservices/rest/ws-user-account.php",
    BASE_URL . "/webservices/soap/ws-dns-lookup.php",
    BASE_URL . "/webservices/soap/ws-echo.php",
    BASE_URL . "/webservices/soap/ws-test-connectivity.php",
    BASE_URL . "/webservices/soap/ws-user-account.php"
]);

?>