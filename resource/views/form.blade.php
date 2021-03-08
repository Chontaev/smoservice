@if(isset($data))
<div class="container">
    @switch($data['action'])
        @case('balance' || 'services')
            <form action="https://smoservice.media/api/" method="post">
                <input type="hidden" name="user_id" value="{{$data['user_id']}}">
                <input type="hidden" name="api_key" value="{{$data['api_key']}}">
                <input type="hidden" name="action" value="{{$data['action']}}">
                <input type="submit" placeholder="перейти">
            </form>
            @break
        @case('create_order')
            <form action="https://smoservice.media/api/" method="post">
                <input type="hidden" name="user_id" value="{{$data['user_id']}}">
                <input type="hidden" name="api_key" value="{{$data['api_key']}}">
                <input type="hidden" name="action" value="{{$data['action']}}">
                <input type="hidden" name="service_id" value="{{$data['service_id']}}">
                <input type="hidden" name="count" value="{{$data['count']}}">
                <input type="hidden" name="url" value="{{$data['url']}}">
                <input type="submit" placeholder="перейти">
            </form>
            @break
        @case('check_order') 
            <form action="https://smoservice.media/api/" method="post">
                <input type="hidden" name="user_id" value="{{$data['user_id']}}">
                <input type="hidden" name="api_key" value="{{$data['api_key']}}">
                <input type="hidden" name="action" value="{{$data['action']}}">
                <input type="hidden" name="order_id" value="{{$data['order_id']}}">
                <button type="submit">отправить</button>
            </form>
            @break
    @endswitch
</div>
@endif

