<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
   * Массово присваиваемые атрибуты.
   *
   * @var array
   */
  protected $fillable = ['name','text'];
  
  /**
   * Получить пользователя - владельца данной задачи
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
