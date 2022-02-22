<?php

use App\Models\TypeAvocado;
use App\Models\TypeTopography;
use App\Models\TypeSoil;
use App\Models\TypeClimate;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrchardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orchards', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TypeAvocado::class)->nullable()->constrained();
            $table->foreignIdFor(TypeTopography::class)->nullable()->constrained();
            $table->foreignIdFor(TypeSoil::class)->nullable()->constrained();
            $table->foreignIdFor(TypeClimate::class)->nullable()->constrained();
            $table->foreignIdFor(User::class)->nullable()->constrained();

            $table->string("name_orchard",250);
            $table->string("image",250);
            $table->string("location_orchard",250);
            $table->integer("latitude");
            $table->integer("longitude");
            $table->integer("length");//extension
            $table->double("surface",4,2);
            $table->string("state",250);
            $table->year('creation_year');
            $table->integer("planting_density");
            $table->boolean('irrigation');

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
        Schema::dropIfExists('orchards');
    }
}
