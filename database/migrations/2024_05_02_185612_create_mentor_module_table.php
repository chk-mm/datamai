<?php

// Database/migrations/xxxx_xx_xx_xxxxxx_create_mentor_module_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorModuleTable extends Migration
{
    public function up()
    {
        Schema::create('mentor_module', function (Blueprint $table) {
            $table->foreignId('mentor_id')->constrained()->onDelete('cascade');
            $table->foreignId('module_id')->constrained()->onDelete('cascade');
            $table->primary(['mentor_id', 'module_id']); // Setting the primary key as a combination of mentor_id and module_id
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentor_module');
    }
}
