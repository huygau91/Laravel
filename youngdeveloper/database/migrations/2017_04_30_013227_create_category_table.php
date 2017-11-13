<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	public function up() {
		Schema::create('categories',
				function (Blueprint $table) {
					
					$table->increments('id');
					$table->string('name')->unique();
					$table->string('description');
					$table->timestamps();
				});
	}

	public function down() {
		Schema::drop('categories');
	}
}
