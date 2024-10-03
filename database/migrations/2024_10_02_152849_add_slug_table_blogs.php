<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::table('blogs', function (Blueprint $table) {
        // $table->string('slug')->unique()->after('author');
    });

    // Mengisi nilai slug untuk data yang sudah ada
    $blogs = DB::table('blogs')->get();
    foreach ($blogs as $blog) {
        DB::table('blogs')
            ->where('id', $blog->id)
            ->update(['slug' => Str::slug($blog->title)]);
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
