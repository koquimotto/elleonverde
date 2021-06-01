<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachedFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attached_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->nullable();
            $table->enum('type', array('image', 'video', 'pdf', 'url','youtube'));
            $table->unsignedBigInteger('post_id')->index()->nullable();
            // $table->bigInteger('advertisemen_id')->unsigned()->index()->nullable();

            $table->foreign('post_id')
            ->references('id')
                ->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attached_files');
    }
}
