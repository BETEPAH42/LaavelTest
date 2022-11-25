<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'post_id',
        'user_id',
        'rescomment_id'
    ];

    public function posts() {
        return $this->belongsTo(Post::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
    public static function arrComment($arr) {
        $newArr = [];
        foreach($arr as $key=>$val) {
            if($val['rescomment_id']) {
                if(array_key_exists($val['rescomment_id'], $newArr)) {
                    $newArr[$val['rescomment_id']]['respons'][] = $val;
                    continue;
                }
            }
            $newArr[$val['id']] = $val;
        }
        return $newArr;
    }
}
