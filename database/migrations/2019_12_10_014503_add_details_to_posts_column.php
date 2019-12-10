<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToPostsColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('tonal_balance_neutrality')->nullable();
            $table->integer('price_performance')->nullable();
            $table->integer('sound_fidelity')->nullable();
            $table->integer('musicality')->nullable();
            $table->integer('build_quality')->nullable();
            $table->integer('bass_extension')->nullable();
            $table->integer('bass_balance')->nullable();
            $table->integer('lower_midrange_balance')->nullable();
            $table->integer('midrange_proper_balance')->nullable();
            $table->integer('upper_midrange_balance')->nullable();
            $table->integer('treble_balance')->nullable();
            $table->integer('treble_extension')->nullable();
            $table->integer('bass_control')->nullable();
            $table->integer('tone_density')->nullable();
            $table->integer('macro_dynamics')->nullable();
            $table->integer('micro_dynamics')->nullable();
            $table->integer('soundstage_width')->nullable();
            $table->integer('soundstage_depth')->nullable();
            $table->integer('resolution')->nullable();
            $table->integer('clarity')->nullable();
            $table->integer('score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('tonal_balance_neutrality');
            $table->dropColumn('price_performance');
            $table->dropColumn('sound_fidelity');
            $table->dropColumn('musicality');
            $table->dropColumn('build_quality');
            $table->dropColumn('bass_extension');
            $table->dropColumn('bass_balance');
            $table->dropColumn('lower_midrange_balance');
            $table->dropColumn('midrange_proper_balance');
            $table->dropColumn('upper_midrange_balance');
            $table->dropColumn('treble_balance');
            $table->dropColumn('treble_extension');
            $table->dropColumn('bass_control');
            $table->dropColumn('tone_density');
            $table->dropColumn('macro_dynamics');
            $table->dropColumn('micro_dynamics');
            $table->dropColumn('soundstage_width');
            $table->dropColumn('soundstage_depth');
            $table->dropColumn('resolution');
            $table->dropColumn('clarity');
            $table->dropColumn('score');
        });
    }
}
