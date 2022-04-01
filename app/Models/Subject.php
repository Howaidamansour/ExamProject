<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Subject extends Model
{
    use HasFactory;
    protected $table ="subjects";


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject_name',
        'subject_description',
        'chapter_count'
    ];


    // Rrlation between subject and exams  ->one to many
    public function subject_exams(): HasMany
    {
        return $this->hasMany(Exam::class, 'subject_id', 'id');
    }

     // Rrlation between subject and questions  ->one to many
     public function subject_questions(): HasMany
     {
         return $this->hasMany(Question::class, 'subject_id', 'id');
     }

      // Rrlation between subject and professor  ->many to many
      public function proffesorsubjects(): BelongsToMany
      {
          return $this->belongsToMany(Proffesor::class, 'proffesor_subjects');
      }
}
