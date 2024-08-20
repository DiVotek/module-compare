<?php

use App\Models\StaticPage;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        StaticPage::createSystemPage('Compare', 'compare');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
