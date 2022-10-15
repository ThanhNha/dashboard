<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-layouts.admin.head>

    @if (!empty($title))
        <x-slot name="title">
            {!! !empty($title->attributes->has('title')) ? $title->attributes->get('title') : $title !!}
        </x-slot>
    @endif


</x-layouts.admin.head>

<body class="">

@stack('body_stack')
<div class="main-content">
    <div class="container-scroller">
        <x-layouts.admin.menu/>

        <div class="container-fluid page-body-wrapper">
            <x-layouts.admin.navbar/>
            <div class="main-panel">
                <x-layouts.admin.content>

                    {!! $content !!}

                </x-layouts.admin.content>
                <x-layouts.admin.footer/>
            </div>

        </div>

    </div>


</div>


@stack('body_end')

<x-layouts.admin.script/>
</body>

</html>
