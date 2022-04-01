<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class TestPaper extends Model
{
    use HasFactory;
    
    protected $table="test_papers";


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'exam_key',
        'question_id'
    ];


    /**
     * The roles that belong to the TestPaper
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

     // relation with question    -> many to many
    public function testpaperquestions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'test_paper_questions');
    }
}
