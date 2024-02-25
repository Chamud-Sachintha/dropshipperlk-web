<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'category',
        'team_commision',
        'direct_commision',
        'is_store_pick',
        'waranty',
        'description',
        'supplier_name',
        'stock_count',
        'images',
        'weight',
        'create_time'
    ];

    public function get_by_category($categoryId) {
        $map['category'] = $categoryId;

        return $this->where($map)->get();
    }

    public function get_featured_list() {
        return $this->limit(5)->get();
    }
}
