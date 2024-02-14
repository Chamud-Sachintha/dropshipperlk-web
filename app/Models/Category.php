<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'status',
        'description',
        'create_time',
    ];

    public function get_by_category($categoryId) {
        $map['id'] = $categoryId;

        return $this->where($map)->get();
    }

    public function get_first_five_categorylist() {
        return $this->limit(5)->get();
    }

    public function get_all() {
        return $this->all();
    }
}
