<?php

return  [
    'merchant_id' => env('MIDTRANS_MERCHANT_ID', 'G410461048'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'Mid-client-Y77zrTYGgoNq3u0Y'),
    'server_key' => env('MIDTRANS_SERVER_KEY', 'Mid-server-X3x3RSU2Odc6HckElV8VMcon'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', 'true'),
    'snap_url' => env('MIDTRANS_SNAP_URL', 'https://app.midtrans.com/snap/snap.js'),
];
