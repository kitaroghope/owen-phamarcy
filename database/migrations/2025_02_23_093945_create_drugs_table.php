<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the drug
            $table->text('description')->nullable(); // Description of the drug
            $table->string('dosage'); // Dosage information
            $table->decimal('price', 8, 2); // Price of the drug
            $table->integer('stock'); // Stock quantity
            $table->string('manufacturer')->nullable(); // Manufacturer of the drug
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs');
    }
}