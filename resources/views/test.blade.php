@include('headers')
<h1>test</h1>

@php
  $name = 'Jennifer';
  $fruits = array('Mango','apple','banana','pineapple');
  $age = 18;
@endphp

<h2>{{$name}}</h2>

<h2>Fruits</h2>

@foreach($fruits as $fruit)
    <ul>
      <li>{{$fruit}}</li>
    </ul>
@endforeach

@for($i=1;$i<=10;$i++)
  {{$i}}<br>
@endfor

@if(count($fruits)==1)
    single filter_input
@elseif(count($fruits)>1)
    More than one Fruits
@else
    No Fruits
@endif
<br>

{{$age>=18? 'You are adult' : 'You are not adult'}}