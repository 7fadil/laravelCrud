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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table -> string('uuid', 50);
            $table -> string('firstName', 50);
            $table -> string('secondName', 50);
            $table -> string('otherName', 50);
            $table -> string('phoneNumber', 50)->unique();
            $table -> string('email', 70)->unique();
            $table -> string('secondNumber', 50)->nullable()->unique();
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
        Schema::dropIfExists('students');
    }
};
