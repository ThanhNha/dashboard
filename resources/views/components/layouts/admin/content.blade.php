@stack('content_start')
<div id="app">
    @stack('content_content_start')

    {!! $slot !!}

    @stack('content_content_end')
</div>
@stack('content_end')