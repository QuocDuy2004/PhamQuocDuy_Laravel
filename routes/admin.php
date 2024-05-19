<?php

use App\Models\SiteData;
use Illuminate\Support\Facades\Route;

Route::get('/add-site-data', function () {
    SiteData::create([
        'namesite' => 'Example Site',
        'logo' => 'logo.png',
        'title' => 'Example Title',
        'description' => 'Example Description',
        'keyword' => 'example, site',
        'image_seo' => 'image_seo.png',
        'facebook' => 'https://facebook.com/example',
        'zalo' => 'https://zalo.me/example',
        'youtube' => 'https://youtube.com/example',
        'telegram' => 'https://telegram.me/example',
        'phone' => '1234567890',
        'email' => 'example@example.com',
        'mail_host' => 'smtp.example.com',
        'mail_port' => '587',
        'mail_username' => 'user@example.com',
        'mail_password' => 'password',
        'google_client_id' => 'google_client_id',
        'google_client_secret' => 'google_client_secret',
        'google_redirect' => 'http://example.com/google-callback',
        'facebook_client_id' => 'facebook_client_id',
        'facebook_client_secret' => 'facebook_client_secret',
        'facebook_redirect' => 'http://example.com/facebook-callback',
        'script_header' => '<script>Header Script</script>',
        'script_footer' => '<script>Footer Script</script>',
        'is_admin' => false,
        'status' => true,
        'domain' => 'example.com'
    ]);

    return 'Site data created';
});

Route::get('/site-data', function () {
    $data = SiteData::all();
    return response()->json($data);
});
