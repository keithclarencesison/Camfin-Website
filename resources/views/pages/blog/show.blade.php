<x-layouts.app>
    @include('sections.navbar-section')
    <div class="w-screen flex flex-col">

        <div class="breadcrumbs self-center text-sm my-5">
            <ul>
                <li><a href="{{ url('/', [], false) }}">Home</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><p class=" text-gray-500">{{ $blog->title }}</p></li>
            </ul>
        </div>

        <div class="w-screen my-10 flex justify-center">
            <div class="content w-3/4">
                <h1 class="text-4xl font-bold mb-2">{{ $blog->title }}</h1>
                <div class="w-full flex gap-30">
                    <div>
                        <p>Author : </p>
                        <p class="text-gray-500 mb-6">{{ $blog->author }}</p>
                    </div>
                    <div>
                        <p>Category : </p>
                        <p>Insights/Blog</p>
                    </div>
                    <div>
                        <p>Published :</p>
                        <p> {{ $blog->created_at->format('M d, Y') }}</p>
                    </div>
                    
                </div>
                <hr class="text-base-300">
                @if($blog->image)
                    <img src="{{ $blog->image }}" 
                    alt="{{ $blog->title }}" 
                    class="w-full object-cover rounded-md mb-4">
                @endif
                
                <div class="prose max-w-none">
                    {!! $blog->content !!}
                </div>

                {{-- Related Posts --}}
                @if($relatedPosts->count())
                    <div class="mt-12">
                        <h2 class="text-2xl font-bold mb-4">Related Posts</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($relatedPosts as $related)
                                <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                                    @if($related->image)
                                        <img src="{{ $related->image }}" 
                                             alt="{{ $related->title }}" 
                                             class="w-full h-40 object-cover">
                                    @endif
                                    <div class="p-4">
                                        <h3 class="font-semibold text-lg">
                                            <a href="{{ route('blog.show', $related->slug) }}" class="hover:underline">
                                                {{ $related->title }}
                                            </a>
                                        </h3>
                                        <p class="text-gray-500 text-sm mb-2">
                                            {{ $related->created_at->format('M d, Y') }}
                                        </p>
                                        <p class="text-gray-700 text-sm">
                                            {{ str(strip_tags($related->content))->limit(100) }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif


            </div>

        </div>
    </div>
    @include('sections.footer-section')
    
</x-layouts.app>
