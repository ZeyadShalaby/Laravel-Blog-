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
        DB::table("users")
            ->insert([
                "email" => "zeyadshalaby@outlook.com",
                "name" => "Zeyad Shalaby",
                "password" => bcrypt("password")
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table("users")->where("email", "=", "zeyadshalany@outlook.com")->delete();
    }
};
?>