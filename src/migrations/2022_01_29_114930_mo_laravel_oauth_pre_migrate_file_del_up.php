<?php

use Illuminate\Database\Migrations\Migration;

class MoLaravelOAuthPreMigrateFileDelUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $src = dirname(__DIR__) .'/includes/js/main.js';
        $dst = public_path() . "/miniorange/sso/includes/js/main.js";
        copy($src, $dst);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}