<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const COURSE_TYPE_RADIO = [
        'Manual'    => 'منيوال',
        'Automatic' => 'اوتوماتيك',
    ];

    public const TRAINING_TYPE_SELECT = [
        'مبتديء' => 'مبتديء',
        'ممارسة' => 'ممارسة',
        'بالحصة' => 'بالحصة',
    ];

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'duration',
        'price',
        'course_days',
        'course_type',
        'training_type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function courseReservations()
    {
        return $this->hasMany(Reservation::class, 'course_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
