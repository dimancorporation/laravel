<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('partner_id')->nullable();
            $table->unsignedInteger('b24_id')->nullable();
            $table->string('stage')->nullable();
            $table->integer('opportunity')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('comments')->nullable();
            $table->dateTime('close_date')->nullable();

            // Добавляем внешний ключ к таблице users
            $table->foreignId('id')
                ->constrained('users')
                ->onDelete('cascade');

            // Создаем индекс по полю partner_id
            $table->index('partner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
