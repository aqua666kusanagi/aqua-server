<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Application::class)->nullable()->constrained();
            $table->foreignIdFor(\App\Models\ChemicalElement::class)->nullable()->constrained();
            $table->foreignIdFor(\App\Models\Unit::class)->nullable()->constrained();
            $table->double("dose",4,2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doses');
    }
}
