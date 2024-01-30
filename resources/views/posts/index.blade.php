<x-layout>
    <div class="space-y-10 md:space-y-16">
        @foreach ($posts as $post)
            <x-post :$post list />
        @endforeach
    </div>
    {{ $posts->links() }}
</x-layout>
