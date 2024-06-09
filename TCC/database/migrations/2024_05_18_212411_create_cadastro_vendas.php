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
        Schema::create('cadastro_vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('cadastro_clientes')->onDelete('cascade');;
            $table->string('situacao');
            $table->date('dataEntregaMercadoria');
            $table->date('dataRecebimento');
            $table->string('observacoes')->nullable();
            $table->double('valorTotal', 10,2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_vendas');
    }
};
