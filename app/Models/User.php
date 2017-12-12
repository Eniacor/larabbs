<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable{
        notify as protected laravelNotify;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','introduction','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /* topics */
    public function topics(){
        return $this->hasMany(Topic::class);
    }
    /**isAuthorof */
    public function isAuthorOf($model){
        return $this->id==$model->user_id;
    }
    //user->reply
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    //notify
    public function notify($instance)
    {
        //如果要通知的人是当前的用户,就不必通知
        if($this->id==Auth::id()){
            return;
        }
        $this->increment('notification_count');
        $this->laravelNotify($instance);
    }
    //清楚未读消息
    public function markAsRead()
    {
        $this->notification_count=0;
        $this->save();
        $this->unreadNotifications->markAsRead();
    }
}
