<?php

/**
 * Send a JSON response.
 *
 * @param mixed $data
 * @param int $statusCode
 */
function response_json($data, $statusCode = 200)
{
    http_response_code($statusCode);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit;
}

/**
 * Send an HTML response.
 *
 * @param string $html
 * @param int $statusCode
 */
function response_html($html, $statusCode = 200)
{
    http_response_code($statusCode);
    header('Content-Type: text/html; charset=utf-8');
    echo $html;
    exit;
}

/**
 * Send an error message as JSON.
 *
 * @param string $message
 * @param int $statusCode
 */
function response_error($message, $statusCode = 400)
{
    response_json(['error' => $message], $statusCode);
}