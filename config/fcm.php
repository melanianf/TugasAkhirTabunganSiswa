<?php

return [
    'driver' => env('FCM_PROTOCOL', 'http'),
    'log_enabled' => false,

    'http' => [
        'server_key' => env('FCM_SERVER_KEY', 'AAAABbwLVUg:APA91bHo2AMLlHhyb0K9wmyyjwP-k8elUvs_csqrufcZA6KUJ45hNN6AVLPb2NQjrUxXxHbew1MSPgJYk5iWjFNBk4cMq8Ocqb_zUZYTyHY6wdl2E8NC0OLZxS6Tz9DWqHp0KGZGgP_o'),
        'sender_id' => env('FCM_SENDER_ID', '24629695816'),
        'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
        'server_group_url' => 'https://android.googleapis.com/gcm/notification',
        'timeout' => 30.0, // in second
    ],
];
