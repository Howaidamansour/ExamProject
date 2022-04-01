<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Level extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level_number'
    ];


    protected $table ="levels";
     // Rrlation Level  and exam  ->one to many
     public function level_exams(): HasMany
     {
         return $this->hasMany(Exam::class, 'level_id', 'id');
     }

      // Rrlation Level  and quetions  ->one to many
      public function level_questions(): HasMany
      {
          return $this->hasMany(Question::class, 'level_id', 'id');
      }

       // Rrlation between Level and students  ->one to many
       public function students(): HasMany
       {
           return $this->hasMany(Student::class, 'level_id', 'id');
       }
}
