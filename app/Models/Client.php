<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const LEARN_BEFORE_RADIO = [
        'yes' => 'نعم',
        'no'  => 'لا',
    ];

    public const COURSE_REQUIRED_RADIO = [
        'beginer'    => 'مبتدئ',
        'by_session' => 'بالحصة',
        'practice'   => 'ممارسة',
    ];

    public $table = 'clients';

    public static $searchable = [
        'written_at',
        'name',
        'telephone',
        'address',
        'contract',
    ];

    protected $dates = [
        'written_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'written_at',
        'name',
        'telephone',
        'address',
        'course_required',
        'required_training',
        'number_of_days',
        'amount_paid',
        'remainig_amount',
        'amount_total',
        'learn_before',
        'where',
        'how_you_know_us',
        'contract',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function clientReservations()
    {
        return $this->hasMany(Reservation::class, 'client_id', 'id');
    }

    public function clientIncomes()
    {
        return $this->hasMany(Income::class, 'client_id', 'id');
    }

    public function getWrittenAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setWrittenAtAttribute($value)
    {
        $this->attributes['written_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
