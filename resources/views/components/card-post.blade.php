@props(['post'])

<article class="mb-8 bg-white sh rounded-lg overflow-hidden">
    @if ($post->image)
        <img src="{{ Storage::url($post->image->url) }}" alt="" class="w-full h-72 object-cover object-center">
    @else
        <img src="https://cdn.pixabay.com/photo/2021/01/13/05/33/tulips-5913275_960_720.jpg" alt="" class="w-full h-72 object-cover object-center">
    @endif
    
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {!! $post->extract !!}
        </div>
    </div>
    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{ route('posts.tag', $tag) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{ $tag->name }}</a>
        @endforeach
    </div>
</article>