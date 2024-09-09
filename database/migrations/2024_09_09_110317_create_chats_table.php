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
        Schema::create('chats', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->uuid("sender_id");
            $table->uuid("reciever_id");


            $table->string("message");

            $table->string("type");

            $table->foreign("sender_id")->references("id")->on("users");

            $table->foreign("reciever_id")->references("id")->on("users");


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
