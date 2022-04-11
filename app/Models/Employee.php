<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'employees';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'working_name',
        'working_days',
        'from',
        'to',
        'working_days_1',
        'from_1',
        'to_1',
        'working_days_2',
        'from_2',
        'to_3',
        'working_day_3',
        'from_3',
        'to_4',
        'working_days_4',
        'from_4',
        'to_5',
        'working_days_5',
        'from_5',
        'to_6',
        'salary',
        'contract_percentage',
        'commission',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function employeeAppointments()
    {
        return $this->hasMany(Appointment::class, 'employee_id', 'id');
    }

    public function employeeReservations()
    {
        return $this->hasMany(Reservation::class, 'employee_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
