<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductVariation
 *
 * @property int $id
 * @property int $product_id
 * @property int $product_variation_type_id
 * @property string $name
 * @property float|null $price
 * @property int|null $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\ProductVariationType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation whereProductVariationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductVariation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductVariation extends Model
{
    public function type()
    {
        return $this->hasOne(ProductVariationType::class, 'id', 'product_variation_type_id');
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
