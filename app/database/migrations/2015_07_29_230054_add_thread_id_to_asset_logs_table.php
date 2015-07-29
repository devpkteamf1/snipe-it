<?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Support\Facades\Schema;

    class AddThreadIdToAssetLogsTable extends Migration
    {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::table( 'action_logs', function ( Blueprint $table ) {

                $table->integer( 'thread_id', false, true );
                $table->index( 'thread_id' );
            } );
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {

            Schema::table( 'action_logs', function ( Blueprint $table ) {

                $table->dropIndex( 'thread_id' );
                $table->dropColumn( 'thread_id' );
            } );
        }

    }
