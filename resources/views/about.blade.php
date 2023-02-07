@extends('layouts.app')

@section('content')
    <h1>This is About Page, with shared Header, Footer</h1>
    {{ $x = 1 }}
    @if ($x > 2)
        <h3>x is greater than 2</h3>
    @elseif ($x == 2)
        </h3>
        <h3>x is equal 2</h3>
    @else
        <h3>x is less than 2</h3>
    @endif

    {{-- unless = if not --}}
    {{-- {{ $name; }}
    @unless(empty($name))
        <h3>Name is NOT empty</h3>
    @else
        <h3>Name is empty</h3>
    @endunless --}}

    {{-- @empty(!$name)
        <h3>Name is NOT empty</h3>
    @endempty --}}

    {{-- @empty($age)
        <h3>Age is empty</h3>
    @endempty --}}
    {{-- 
    @isset($name)
        <h3>Name has been set</h3>
    @endisset --}}
    {{-- 
    @switch($name)
        @case('Dang')
            <h3>Họ</h3>
        @break

        @case('Thi')
            <h3>Đệm 1</h3>
        @break

        @case('Huyen')
            <h3>Đệm 2</h3>
        @break

        @case('Trang')
        @case('gNart')
            <h3>Tên</h3>
        @break

        @default
            <h3>Not my gout</h3>
    @endswitch --}}

    {{-- @for ($i = 0; $i < 20; $i++)
        <h4>i = {{ $i }}<h4>
    @endfor --}}

    {{-- {{ $names[0] }} --}}

    {{-- @foreach ($names as $item)
        <p>each name :{{ $item ?? '~' }}</p>
    @endforeach --}}

    {{-- {{ $i = 0 }}
    @while ($i < 10)
        {{ $i++ }};
        <p>i: {{ $i }}</p>
    @endwhile --}}
@endsection
