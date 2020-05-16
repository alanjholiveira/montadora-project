<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'name', 'date_birth', 'gender', 'cpf', 'occupation',
        'salary', 'address', 'zip_code', 'city', 'state',
        'country', 'phone', 'email', 'situation',
    ];

    public function setDateBirthAttribute($value)
    {
        $this->attributes['date_birth'] = Carbon::parse($value);
    }

    /**
     * Company Relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Category::class, 'company_id', 'id');
    }

}
