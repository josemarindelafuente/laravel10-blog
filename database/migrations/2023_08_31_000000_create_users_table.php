<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');//creo la clave foranea
            //$table->integer('role_id')->unsigned(); 
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id_user_role')->on('users_roles');
            //conecto la foranea
            //id_user_role en la otra tabla debe ser unique para poder vincularlo
            //https://youtu.be/YRh7sYrxxM8?list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&t=1175

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
