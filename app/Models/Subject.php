<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    // Add the fields that are mass assignable
    protected $fillable = [
        'name',
        'code',
        'description',
        'credits',
        'lecturer_id',
    ];

    /**
     * Define the relationship between Subject and User (Lecturer).
     * Assuming 'User' is the model for lecturers.
     */
    public function lecturer()
    {
        return $this->belongsTo(User::class, 'lecturer_id');
    }
}
