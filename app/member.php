<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'img', 'team', 'decription', 'created_at', 'updated_at'
    ];
}
?>