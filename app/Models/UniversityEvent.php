<?php



namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityEvent extends Model
{
    use HasFactory;

    protected $table = 'universityEvent'; // Assurez-vous que cela correspond au nom de table Django


    protected $fillable = [ 
        'title', 'slug', 'description', 'location', 'image', 'date_start_event', 'date_end_event', 'target_audience'
    ];

    

    public function getRouteKeyName()
    {
        return 'slug';
    }
}