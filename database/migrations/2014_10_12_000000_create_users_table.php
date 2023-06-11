<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa as migrações.
     *
     * @return void
     */
    public function up()
    {
        // Cria a tabela 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tipo_perfil'); // professor = 0 aluno = 1
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverte as migrações.
     *
     * @return void
     */
    public function down()
    {
        // Exclui a tabela 'users'
        Schema::dropIfExists('users');
    }
};
