<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApi1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api1', function (Blueprint $table) {
            $table->id();
            $table->string('Nom',13)->nullable()->default('NULL');
            $table->float('Analyse1')->nullable()->default(0);
            $table->float('Algebre1')->nullable()->default(0);
            $table->float('Electricite')->nullable()->default(0);
            $table->float('Thermodynamique')->nullable()->default(0);
            $table->float('CHIMIE')->nullable()->default(0);
            $table->float('Langues')->nullable()->default(0);
            $table->float('Moyenne S1')->nullable()->default(0);
            $table->float('ANALYSE 2')->nullable()->default(0);
            $table->float('ALGEBRE2')->nullable()->default(0);
            $table->float('MECANIQUE DU POINT')->nullable()->default(0);
            $table->float('PROCEDES DE FABRICATION')->nullable()->default(0);
            $table->float('ANALYSE DES CIRCUITS')->nullable()->default(0);
            $table->float('TECHNIQUES D\'EXPRESSION')->nullable()->default(0);
            $table->float('Moyenne S2')->nullable()->default(0);
            $table->float('Moyenne API1')->nullable()->default(0);
            $table->float('Analyse3')->nullable()->default(0);
            $table->float('Algebre3')->nullable()->default(0);
            $table->float('MECANIQUE DU SOLIDE')->nullable()->default(0);
            $table->float('ELECTROMAGNETISME')->nullable()->default(0);
            $table->float('ELECTRONIQUE')->nullable()->default(0);
            $table->float('TECHNIQUES D\'EXPRESSION II')->nullable()->default(0);
            $table->float('Moyenne S3')->nullable()->default(0);
            $table->float('ANALYSE NUMERIQUE')->nullable()->default(0);
            $table->float('ALGORITHMIQUE & PROGRAMMATION')->nullable()->default(0);
            $table->float('BASE DE LA CONCEPTION')->nullable()->default(0);
            $table->float('METALLURGIE ET THERMOCHIMIE')->nullable()->default(0);
            $table->float('TECHNIQUE DE DOCUMENTATION')->nullable()->default(0);
            $table->float('DAO ET OUTILS DE MATLAB')->nullable()->default(0);
            $table->float('Moyenne S4')->nullable()->default(0);
            $table->float('Moyenne API2')->nullable()->default(0);
            $table->string('filiere');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api1');
    }
}
