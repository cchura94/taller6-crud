<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 200);
            $table->integer("capacidad")->default(10);
            $table->text("detalle")->nullable();
            $table->decimal("precio", 10, 2)->nullable();
            $table->bigInteger("categoria_id")->unsigned();

            $table->foreign("categoria_id")->references("id")->on("categorias");
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
        Schema::dropIfExists('cursos');
    }
}
