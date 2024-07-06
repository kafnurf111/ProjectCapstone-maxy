    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateMembersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('members', function (Blueprint $table) {
                $table->bigIncrements('members_id');
                $table->text('profile_picture')->nullable();
                $table->string('name', 255);
                $table->unsignedBigInteger('group_id');

                $table->timestamps();

                $table->foreign('group_id')->references('groups_id')->on('groups')->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('members');
        }
    }
