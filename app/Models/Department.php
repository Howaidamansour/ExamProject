<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Department extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dep_name',
        'dep_description',
    ];



    protected $table ="departments";
    // Rrlation between department and exam  ->one to many
    public function department_exams(): HasMany
    {
        return $this->hasMany(Exam::class, 'depart_id', 'id');
    }

    // Rrlation between department and exam  ->one to many
    public function department_questions(): HasMany
    {
        return $this->hasMany(Question::class, 'depart_id', 'id');
    }

     // Rrlation between department and professor  ->one to many
     public function professor(): HasMany
     {
         return $this->hasMany(Proffesor::class, 'depart_id', 'id');
     }

      // Rrlation between department and students  ->one to many
      public function students(): HasMany
      {
          return $this->hasMany(Student::class, 'depart_id', 'id');
      }
}
