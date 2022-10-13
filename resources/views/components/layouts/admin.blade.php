<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-layouts.admin.head>

    @if (!empty($title))
        <x-slot name="title">
            {!! !empty($title->attributes->has('title')) ? $title->attributes->get('title') : $title !!}
        </x-slot>
    @endif


</x-layouts.admin.head>

<body>

    @stack('body_stack')
    <div class="main-content">
        <div class="main-body">

            <x-layouts.admin.navbar />

            <div class="h-screen flex flex-row flex-wrap">
                <x-layouts.admin.menu />

                <div class="bg-gray-100 flex-1 p-6 md:mt-16">
                    <x-layouts.admin.content>

                        {!! $content !!}

                    </x-layouts.admin.content>
                </div>

              
            </div>

            <x-layouts.admin.footer />

        </div>
    </div>

    @stack('body_end')


</body>

</html>
