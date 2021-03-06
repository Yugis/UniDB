<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['avatar'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $with = ['secret_id'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot('finals', 'grades', 'attendance')->withTimestamps();
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function secret_id()
    {
        return $this->morphOne(SecretIds::class, 'owner');
    }

    public function getSecretId()
    {
        return $this->morphOne(SecretIds::class, 'owner')->first()->secret_id;
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class)->withPivot('completed', 'score')->withTimestamps();
    }
}
