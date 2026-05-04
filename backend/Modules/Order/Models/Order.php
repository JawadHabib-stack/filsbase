<?php

namespace Modules\Order\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Order extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use Notifiable;
    use SoftDeletes;

    protected $table = 'orders';

    protected $casts = [
        'billing_details' => 'array',
        'shipping_details' => 'array',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
