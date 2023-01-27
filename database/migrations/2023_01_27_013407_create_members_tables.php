<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('membership_type');
            $table->date('membership_expiration');
            $table->foreignId('trainer_id')->constrained('trainer')->onDelete('cascade');
            $table->foreignId('membership_id')->constrained('membership')->onDelete('cascade');
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
        Schema::dropIfExists('members_tables');
    }
};
