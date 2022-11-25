<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'description',
        'content',
        'category_id',
        'thumdnail'
    ];

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function uploadImage(Request $request, $image = null) {
        if($request->hasFile('thumdnail')) {
            if($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumdnail')->store("images/{$folder}");
        }
        return null;
    }

    public function getPostDate () {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('M. Y');
    }

    public function getPostDay () {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('j');
    }

    public function getPostDateIndex () {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('F d, Y');
    }
}
