<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->char('nidn', 12)->unique();
			$table->string('nama_dosen, 100);
			$table->string('tempat_lahir'), 40);
			$table->date('tanggal_lahir');
			$table->string('alamat');
			$table->char('jenis_kelamin');
			$table->date('no_telepon');
            $table->timestamps();
			$table->foreign('mata_kuliah_id')
				->references('id')->on('mata_kuliahs')
				->onDelete('cascode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}
