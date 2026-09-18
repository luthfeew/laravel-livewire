<?php

// Pastikan direktori temporary storage di /tmp tersedia untuk Laravel di Vercel
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

/**
 * Here is the serverless function entry
 * for deployment with Vercel.
 */
require __DIR__.'/../public/index.php';