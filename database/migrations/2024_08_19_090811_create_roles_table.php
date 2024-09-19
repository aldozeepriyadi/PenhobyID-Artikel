<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateRolesTable extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel `roles`.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('role_id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Insert default roles
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'reviewer'],
            ['name' => 'author'],
        ]);
    }

    /**
     * Rollback untuk migration ini.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}