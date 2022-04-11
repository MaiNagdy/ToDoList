<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const SESSION_TYPE_RADIO = [
        'practical'   => 'عملي',
        'theoritical' => 'نظري',
    ];

    public $table = 'appointments';

    protected $dates = [
        'session_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'client_name_id',
        'course_id',
        'employee_id',
        'start_time',
        'end_time',
        'session_number',
        'session_type',
        'session_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function client_name()
    {
        return $this->belongsTo(Client::class, 'client_name_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function getSessionDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setSessionDateAttribute($value)
    {
        $this->attributes['session_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
