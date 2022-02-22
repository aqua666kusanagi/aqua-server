<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ProductCategory;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->string("name",250);
            $table->integer("registry_number");
            $table->string("data_sheet",250);
            $table->double("security_term",4,2);
            $table->unsignedBigInteger("product_category_id");  //campo que sera llave foranea
            $table->foreign("product_category_id")->references("id")->on("product_categories"); //asignacion llave foranea
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
        Schema::dropIfExists('supplies');
    }
}
