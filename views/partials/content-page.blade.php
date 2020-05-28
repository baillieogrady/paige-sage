<div class="h-screen/2 lg:w-1/2 bg-center bg-cover bg-no-repeat lg:h-screen lg:max-h-screen" style="background-image: url('{{ the_post_thumbnail_url('large') }}');"></div>
<div class="lg:w-1/2 p-10 lg:p-16 lg:overflow-y-auto">
    @include('partials.page-header')
    @php the_content() @endphp
</div>
{{-- {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} --}}
