<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Question extends Model
{
    use HasFactory;

         
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'difficulty',
        'title',
        'chapter_number',
        'subject_id',
        'depart_id',
        'level_id',
        'option_one',
        'option_two',
        'option_three',
        'option_four',
        'answer',
        'mark'
    ];


    protected $table = "questions";
    /**
     * The roles that belong to the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    // relation with TestPaper    -> many to many
    public function testpaperquestions(): BelongsToMany
    {
        return $this->belongsToMany(TestPaper::class, 'test_paper_questions');
    }
}
