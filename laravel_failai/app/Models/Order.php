<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @property int $id
 * @property int $user_id
 * @property user $user
 * @property int $shipping_address_id
 * @property Address $shippingAddress
 * @property int $billing_address_id
 * @property Address $billingAddress
 * @property Collection<Payment> $payments
 * @property int $status_id
 * @property Status $status
 * @property Collection<Product> $products
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Order extends Model
{
    use HasFactory;

    public const STATUS_NEW = 'Naujas';

    protected $fillable = [

        'shipping_address_id',
        'billing_address_id',
        'user_id',
        'status_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function shippingAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'shipping_address_id');
    }

    public function billingAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'billing_address_id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function total() {

    }

    public function products(): HasManyThrough
    {
        return $this->hasManyThrough(
            Product::class,
            OrderDetail::class,
            'order_id',
            'id',
            'id',
            'product_id'
        );
//      Alternatyva:
//
//        return $this->hasMany(Product::class, 'id', 'product_id')
//            ->join('order_details', 'products.id', '=', 'order_details.product_id')
//
    }
}


