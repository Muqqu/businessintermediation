<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'tag_line',
        'description',
        'logo',
        'cover',
        'gallery',
        'email',
        'phone',
        'website',
        'social',
        'url',
        'timezone',
        'location',
        'category_id',
        'tags',
        'range',
        'product',
        'jobs',
        'events',
        'related',
        'from_date',
        'to_date',
    ];}
