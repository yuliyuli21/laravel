@if (count($data) === 1)
    我有一条记录！
@elseif (count($data) > 1)
    <!--我有多条记录！-->
    @foreach ($data as $value)
    <p>数据 {{ $value }}</p>
@endforeach
@else
    我没有任何记录！
@endif
