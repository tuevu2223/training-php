<?php
ini_set('session.save_handler', 'redis');
ini_set('session.save_path', 'tcp://web-redis:6379');
ini_set('session.gc_maxlifetime', 3600);

// lấy session_id từ URL hoặc header
if (!empty($_GET['session_id'])) {
    session_id($_GET['session_id']);
} elseif (!empty($_SERVER['HTTP_X_SESSION_ID'])) {
    session_id($_SERVER['HTTP_X_SESSION_ID']);
}

session_start();
