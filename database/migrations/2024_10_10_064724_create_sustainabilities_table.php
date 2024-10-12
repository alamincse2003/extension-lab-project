<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'sustainabilities', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'title' )->nullable();
            $table->longText( 'first_content' )->nullable();
            $table->longText( 'second_content' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'sustainabilities' );
    }
};
