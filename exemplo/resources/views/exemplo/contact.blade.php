@extends('leyout.ex')
@section("style")
p{
  color:red;
  font-size:22pt;
}
ul#exemplo li {
  display:inline-block;
  color:red;
  margin-left:1px;
  list-style:none;
}
@endsection
@section("exemplo")
<p>{{$title}}</p>
@if(count($services) > 0)
<ul id="exemplo">
  @foreach($services as $service)
  <li>{{$service}}</li>
  @endforeach
</ul>
@endif
@endsection
