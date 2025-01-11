<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataUTSTable extends Migration
{
    public function up()
    {
        Schema::create('biodata_u_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('nilai');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biodata_u_t_s');
    }
}
