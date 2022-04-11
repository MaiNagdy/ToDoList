<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'expenses';

    protected $dates = [
        'entry_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'expense_category_id',
        'entry_date',
        'description',
        'employee_name_id',
        'salary_id',
        'salary_commission_id',
        'amount',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function expense_category()
    {
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id');
    }

    public function getEntryDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEntryDateAttribute($value)
    {
        $this->attributes['entry_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function employee_name()
    {
        return $this->belongsTo(Employee::class, 'employee_name_id');
    }

    public function salary()
    {
        return $this->belongsTo(Employee::class, 'salary_id');
    }

    public function salary_commission()
    {
        return $this->belongsTo(Employee::class, 'salary_commission_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
