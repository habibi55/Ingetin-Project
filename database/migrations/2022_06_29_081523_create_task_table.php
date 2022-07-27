<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->index('fk_task_to_users');
            $table->string('title');
            $table->integer('status');
            $table->datetime('deadline')->nullable();
            $table->date('notif_deadline')->nullable();
            $table->string('category')->nullable();
            $table->string('link')->nullable();
            $table->longText('photo')->nullable();
            $table->longText('description')->nullable();
            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
};
