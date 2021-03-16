@extends('layouts.app')

@section('title','shop online')

@section('content')
<ul>
    @foreach($dresses as $dress)
        <li>
            @php //@dump($dress) imported correctly @endphp
            {{ $dress->id }} {{ $dress->tipo }} {{ $dress->taglia }} {{ $dress->stagione }} {{ $dress->occasione }}
        </li>

    @endforeach
    
</ul>
@endsection