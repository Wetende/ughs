<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('counties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code', 3)->unique(); // County code (e.g., 001 for Mombasa)
            $table->timestamps();
        });

        // Insert all 47 counties of Kenya
        $counties = [
            ['name' => 'Mombasa', 'code' => '001'],
            ['name' => 'Kwale', 'code' => '002'],
            ['name' => 'Kilifi', 'code' => '003'],
            ['name' => 'Tana River', 'code' => '004'],
            ['name' => 'Lamu', 'code' => '005'],
            ['name' => 'Taita Taveta', 'code' => '006'],
            ['name' => 'Garissa', 'code' => '007'],
            ['name' => 'Wajir', 'code' => '008'],
            ['name' => 'Mandera', 'code' => '009'],
            ['name' => 'Marsabit', 'code' => '010'],
            ['name' => 'Isiolo', 'code' => '011'],
            ['name' => 'Meru', 'code' => '012'],
            ['name' => 'Tharaka-Nithi', 'code' => '013'],
            ['name' => 'Embu', 'code' => '014'],
            ['name' => 'Kitui', 'code' => '015'],
            ['name' => 'Machakos', 'code' => '016'],
            ['name' => 'Makueni', 'code' => '017'],
            ['name' => 'Nyandarua', 'code' => '018'],
            ['name' => 'Nyeri', 'code' => '019'],
            ['name' => 'Kirinyaga', 'code' => '020'],
            ['name' => 'Murang\'a', 'code' => '021'],
            ['name' => 'Kiambu', 'code' => '022'],
            ['name' => 'Turkana', 'code' => '023'],
            ['name' => 'West Pokot', 'code' => '024'],
            ['name' => 'Samburu', 'code' => '025'],
            ['name' => 'Trans Nzoia', 'code' => '026'],
            ['name' => 'Uasin Gishu', 'code' => '027'],
            ['name' => 'Elgeyo Marakwet', 'code' => '028'],
            ['name' => 'Nandi', 'code' => '029'],
            ['name' => 'Baringo', 'code' => '030'],
            ['name' => 'Laikipia', 'code' => '031'],
            ['name' => 'Nakuru', 'code' => '032'],
            ['name' => 'Narok', 'code' => '033'],
            ['name' => 'Kajiado', 'code' => '034'],
            ['name' => 'Kericho', 'code' => '035'],
            ['name' => 'Bomet', 'code' => '036'],
            ['name' => 'Kakamega', 'code' => '037'],
            ['name' => 'Vihiga', 'code' => '038'],
            ['name' => 'Bungoma', 'code' => '039'],
            ['name' => 'Busia', 'code' => '040'],
            ['name' => 'Siaya', 'code' => '041'],
            ['name' => 'Kisumu', 'code' => '042'],
            ['name' => 'Homa Bay', 'code' => '043'],
            ['name' => 'Migori', 'code' => '044'],
            ['name' => 'Kisii', 'code' => '045'],
            ['name' => 'Nyamira', 'code' => '046'],
            ['name' => 'Nairobi', 'code' => '047'],
        ];

        DB::table('counties')->insert($counties);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counties');
    }
};
