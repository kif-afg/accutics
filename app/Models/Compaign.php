<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'author',
        'channel',
        'source',
        'campaign_name',
        'target_url',      
    ];
}

 function up()
{
    Schema::create('compaign', function (Blueprint $table) {
        $table->increments('id');
        $table->string('author');
        $table->string('input');
        $table->timestamps();
    });
}
