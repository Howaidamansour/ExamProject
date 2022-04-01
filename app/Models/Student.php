<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Student extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_name',
        'email',
        'depart_id',
        'level_id'
    ];

    protected $table ="students";

    //relation between Student and department
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

     //relation between Student and Level
     public function level(): BelongsTo
     {
         return $this->belongsTo(Level::class);
     }

      // Rrlation Student  and score  ->one to many
      public function Student_score(): HasMany
      {
          return $this->hasMany(Score::class, 'student_id', 'id');
      }
}

