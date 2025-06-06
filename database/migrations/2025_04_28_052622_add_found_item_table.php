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
        Schema::create('found_item', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("location_found");
            $table->time("time_found", precision: 0);
            $table->date("date_found");
            $table->unsignedBigInteger('category_id');
            $table->string('path'); // To store the image file path
            $table->text("description");
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('uploaded_by');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('uploaded_by')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('found_item');
    }
};
