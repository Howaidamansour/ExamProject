<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Proffesor extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'prof_name',
        'email',
        'depart_id',
        'subject_id',
        'hasApprovel'
    ];


    protected $table ="professors";
    // Rrlation proffesor and exam  ->one to many
    public function proffesor_exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
    
    // Rrlation proffesor and subject  ->many to many
    public function proffesorsubjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'proffesor_subjects');
    }
    // Rrlation proffesor and department  ->one to one
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
