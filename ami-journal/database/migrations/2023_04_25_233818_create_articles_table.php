<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->uuid('id');
			$table->uuid('user_id')->nullable()->default(null);
			$table->uuid('editor_id')->nullable()->default(null);
			$table->string('title');
			$table->text('abstract');
			$table->tinyInteger('state')->default(0);
			$table->integer('page_count')->nullable()->default(null);
			$table->text('note')->nullable()->default(null);
			$table->string('language')->default('en');
			$table->string('doi')->nullable()->default(null);
			$table->text('source')->nullable()->default(null);
			$table->integer('type_id')->nullable();
			$table->integer('volume_id')->default(0);
			$table->string('latex_path')->nullable()->default(null);
			$table->timestamp('deleted_at')->nullable()->default(null);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('articles');
	}
}