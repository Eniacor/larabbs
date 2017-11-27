@if(count($topics))
    <ul class="media-list">
        <li class="media">
            <div class="media-left">
            右边导航
                {{--  <a href="route('users.show',[$topic->user_id])">
                    <img class="media-object img-thumbnail" style="width:52px;height:52px;" src="{{$topic->user->avatar}}" title="{{$topic->user->name}}">
                </a>  --}}
            </div>
        </li>
    </ul>
    
@endif