<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('messages_id');
            $table->text('content');
            $table->unsignedBigInteger('discussion_id');
            $table->unsignedBigInteger('member_id');

            $table->timestamps();

            $table->foreign('discussion_id')->references('discussion_id')->on('discussions')->onDelete('cascade');
            $table->foreign('member_id')->references('members_id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
