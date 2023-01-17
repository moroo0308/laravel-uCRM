<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // コントローラー側のCustomer::create()で保存できるように追記
    protected $fillable = [
        'name',
        'kana',
        'tel',
        'email',
        'postcode',
        'address',
        'birthday',
        'gender',
        'memo'
    ];

    /**
     * customer検索
     * @param $query クエリ
     * @param $input 入力情報
     */
    public function scopeSearchCustomers($query, $input = null)
    {
        $customers = $query->where('kana', 'like', $input . '%')
            ->orWhere('tel', 'like', $input . '%');

        if (!empty($input)) {
            if ($customers->exists()) {
                return $customers;
            } else {
                return $customers;
            }
        }
    }
}