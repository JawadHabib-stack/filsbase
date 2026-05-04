<?php

namespace Modules\Payment\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'payment_methods';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'description',
        'settings',
        'order',
    ];

    protected $casts = [
        'settings' => 'array',
    ];
}
