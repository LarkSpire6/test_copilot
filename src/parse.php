<?php

/**
 * Parse query string parameters into an associative array.
 *
 * @param string $queryString
 * @return array
 */
function parseQueryParams(string $queryString): array {
    parse_str($queryString, $params);
    return $params;
}

/**
 * Parse JSON string into an associative array.
 *
 * @param string $json
 * @return array|null
 */
function parseJsonParams(string $json): ?array {
    $data = json_decode($json, true);
    return is_array($data) ? $data : null;
}

/**
 * Parse URL-encoded form data into an associative array.
 *
 * @param string $formData
 * @return array
 */
function parseFormParams(string $formData): array {
    parse_str($formData, $params);
    return $params;
}

/**
 * Parse parameters from $_GET, $_POST, or $_REQUEST.
 *
 * @param string $method 'GET', 'POST', or 'REQUEST'
 * @return array
 */
function getRequestParams(string $method = 'REQUEST'): array {
    switch (strtoupper($method)) {
        case 'GET':
            return $_GET;
        case 'POST':
            return $_POST;
        default:
            return $_REQUEST;
    }
}