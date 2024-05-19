<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_data', function (Blueprint $table) {
            $table->id();
            $table->string('namesite');
            $table->string('logo')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('keyword')->nullable();
            $table->string('image_seo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('zalo')->nullable();
            $table->string('youtube')->nullable();
            $table->string('telegram')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('mail_host')->nullable();
            $table->string('mail_port')->nullable();
            $table->string('mail_username')->nullable();
            $table->string('mail_password')->nullable();
            $table->string('google_client_id')->nullable();
            $table->string('google_client_secret')->nullable();
            $table->string('google_redirect')->nullable();
            $table->string('facebook_client_id')->nullable();
            $table->string('facebook_client_secret')->nullable();
            $table->string('facebook_redirect')->nullable();
            $table->text('script_header')->nullable();
            $table->text('script_footer')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('status')->default(true);
            $table->string('domain')->nullable();
            $table->timestamps(); // Tạo cột created_at và updated_at tự động
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_data');
    }
}
