<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OverseerRegistration extends Model
{
    public function up()
{
    Schema::create('overseer_registrations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('status')->default('pending'); // pending, approved, rejected
        $table->text('reason')->nullable();
        $table->timestamps();
    });
}

}
