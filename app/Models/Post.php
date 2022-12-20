<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $table = "user_posts";
    // 覆寫Model預設行為
    //protected $primaryKey = "post_id";
    // 覆寫Model預設讀取table名稱，原本應該為id
}
