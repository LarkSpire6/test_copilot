<?php

namespace App;

class Formatter
{
    /**
     * Format a date string
     */
    public static function formatDate($date, $format = 'Y-m-d'): string
    {
        if ($date instanceof \DateTime) {
            return $date->format($format);
        }
        return \DateTime::createFromFormat('Y-m-d H:i:s', $date)->format($format);
    }

    /**
     * Format a string to uppercase
     */
    public static function formatUpper($string): string
    {
        return strtoupper($string);
    }

    /**
     * Format a string to lowercase
     */
    public static function formatLower($string): string
    {
        return strtolower($string);
    }

    /**
     * Format a number with thousand separators
     */
    public static function formatNumber($number, $decimals = 0): string
    {
        return number_format($number, $decimals, '.', ',');
    }

    /**
     * Format currency
     */
    public static function formatCurrency($amount, $currency = 'USD'): string
    {
        return $currency . ' ' . number_format($amount, 2, '.', ',');
    }

    /**
     * Trim and capitalize first letter of each word
     */
    public static function formatTitle($string): string
    {
        return ucwords(trim($string));
    }

    /**
     * Format a string to slug format
     */
    public static function formatSlug($string): string
    {
        return strtolower(preg_replace('/[^a-z0-9]+/i', '-', trim($string)));
    }
}