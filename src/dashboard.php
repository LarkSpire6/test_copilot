<?php

// Function to get total users
function getTotalUsers($db) {
    $stmt = $db->query("SELECT COUNT(*) FROM users");
    return $stmt->fetchColumn();
}

// Function to get total sales
function getTotalSales($db) {
    $stmt = $db->query("SELECT SUM(amount) FROM sales");
    return $stmt->fetchColumn();
}

// Function to get recent activities
function getRecentActivities($db, $limit = 10) {
    $stmt = $db->prepare("SELECT * FROM activities ORDER BY created_at DESC LIMIT :limit");
    $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get active users
function getActiveUsers($db, $minutes = 30) {
    $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE last_active >= NOW() - INTERVAL :minutes MINUTE");
    $stmt->bindValue(':minutes', (int)$minutes, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchColumn();
}

