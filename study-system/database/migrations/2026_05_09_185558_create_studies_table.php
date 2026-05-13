<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
//     public function up(): void
//     {
//         Schema::create('studies', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('studies');
//     }
// };

    public function up(): void
    {
        Schema::create('studies', function (Blueprint $table) {

            $table->id();

            $table->foreignId('subject_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('title');

            $table->text('description')->nullable();

            $table->date('study_date');

            $table->time('study_time');

            $table->string('status')
                ->default('Pendente');

            $table->integer('minutes_studied')
                ->default(0);

            $table->timestamps();
        });
    }

}; 