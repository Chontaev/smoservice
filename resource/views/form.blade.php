@if(isset($data))
    @switch($data['action'])
    @case('balance' || 'services') 
        <input type="text" name="usre_id" value="{{$data['user_id]}}">
        <input type="text" name="api_key" value="{{$data['api_key]}}">
        <input type="text" name="action" value="{{$data['action]}}">
        @breack
    @case('services') 
        <input type="text" name="usre_id" value="{{$data['user_id]}}">
        <input type="text" name="api_key" value="{{$data['api_key]}}">
        <input type="text" name="action" value="{{$data['action]}}">
        <input type="text" name="service_id" value="{{$data['service_id]}}">
        <input type="text" name="count" value="{{$data['count]}}">
        <input type="text" name="url" value="{{$data['url]}}">
        @breack
    @case('create_order') 
        <input type="text" name="usre_id" value="{{$data['user_id]}}">
        <input type="text" name="api_key" value="{{$data['api_key]}}">
        <input type="text" name="action" value="{{$data['action]}}">
        <input type="text" name="order_id" value="{{$data['order_id]}}">
        @breack
    @endswitch
@endif