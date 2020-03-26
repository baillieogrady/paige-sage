<div class="main__box main__box--image" style="background-image: url('{{ the_post_thumbnail_url('large') }}');"></div>
<div class="main__box main__box--alt">
    @include('partials.page-header')
    @php the_content() @endphp
</div>
{{-- {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} --}}
