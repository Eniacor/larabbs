<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'category_id', 'excerpt', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /* topics order */
    public function scopeWithOrder($query,$order)
    {
        //不同的排序，使用不同的数据读取逻辑
        switch($order){
            case 'recent':
                $query=$this->recent();
                break;
            default:
                $query=$this->recentReplied();
                break;
        }
        return $query->with('user','category');
    }
    /**
     * 当话题有新回复时，我们编写逻辑更新的话题模型的reply_count属性
     * 此时会自动触发框架对数据模型updated_at时间戳的更新
     */
    public function scopeRecentReplied($query)
    {
        return $query->orderBy('updated_at','desc');
    }
    public function scopeRecent($query)
    {
        return $query->orderBy('updated_at','desc');
    }
    //新建link方法
    public function link($params=[])
    {
        return route('topics.show',array_merge([$this->id,$this->slug],$params));
    }
}
