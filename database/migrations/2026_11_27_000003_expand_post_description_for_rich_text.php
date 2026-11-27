<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::statement('ALTER TABLE posts ALTER COLUMN description TYPE TEXT');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE posts ALTER COLUMN description TYPE VARCHAR(280)');
    }
};
