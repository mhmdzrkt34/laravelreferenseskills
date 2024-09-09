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
        Schema::create('usergroups', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->uuid("member_id");
            $table->uuid("group_id");

            $table->string("rule");
            $table->foreign("member_id")->references("id")->on("users");
            $table->foreign("group_id")->references("id")->on("groups");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usergroups');
    }
};
