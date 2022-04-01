<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Exam extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'exam_key',
        'name',
        'duration',
        'creator_id',
        'subject_id',
        'depart_id',
        'level_id',
        'num_question',
    ];

     // Rrlation between subject and exams  ->one to one

     public function subject(): BelongsTo
     {
         return $this->belongsTo(Subject::class);
     }

     // Rrlation between department and exams  ->one to one

     public function department(): BelongsTo
     {
         return $this->belongsTo(Department::class);
     }

     // Rrlation between level and exams  ->one to one

     public function level(): BelongsTo
     {
         return $this->belongsTo(Level::class);
     }

     // Rrlation between professor and exams  ->one to one

     public function professor(): BelongsTo
     {
         return $this->belongsTo(Proffesor::class, 'creator_id');
     }
}
