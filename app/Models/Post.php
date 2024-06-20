<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JeroenG\Explorer\Application\Explored;
use Laravel\Scout\Searchable;

class Post extends Model implements Explored
{
    use HasFactory,Searchable;
//    protected $guarded=['id'];
    protected $fillable=['name','content','description'];
    public function mappableAs() : array
    {
        return [
            'id' => 'keyword',
            'name' => 'text',
        ];
    }
}
