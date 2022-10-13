<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-layouts.auth.head>

    @if (!empty($title))
        <x-slot name="title">
            {!! !empty($title->attributes->has('title')) ? $title->attributes->get('title') : $title !!}
        </x-slot>
    @endif


</x-layouts.auth.head>

<body>

@stack('body_stack')
<x-notify-messages />
<x-layouts.auth.content>

    {!! $content !!}

</x-layouts.auth.content>

@stack('body_end')

<x-layouts.auth.scripts/>

</body>

</html>
