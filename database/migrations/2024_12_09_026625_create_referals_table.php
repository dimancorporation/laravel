<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateReferalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referals', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('partner_id')->nullable();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('middle_name', 255)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->unsignedInteger('b24_id')->nullable();
            $table->string('b24_status', 255)->nullable();
            $table->text('comment')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->float('opportunity')->nullable();
            $table->string('link_to_court', 255)->nullable();
            $table->text('link_contract')->nullable();
            $table->text('link_payment')->nullable();

            // Внешний ключ к таблице users
            $table->foreign('partner_id')
                ->references('id')
                ->on('users')
//                ->constrained('users')
                ->onDelete('cascade');

            // Индекс по полю partner_id
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
        Schema::dropIfExists('referals');
    }
}
