<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageItem extends Model
{
    use HasFactory;
    public function page()
    {
        return $this->belongsTo('App\Model\Page', 'page_id');
    }




    public function getLocaleContentAttribute()
    {
 
        if(app()->getLocale() == 'bn')
        {
            return $this->content_bn ?: $this->content;

        }else
        {
            return $this->content ?: $this->content_bn;
        }
    }

}
