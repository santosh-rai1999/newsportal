<x-frontend-layout>
    {{-- {{$menus}} --}}
<div class="container">
    <div class="row">
        <marquee behavior="scroll" direction="left">
            <h3></h3>
        </marquee>
    </div>
</div>
    <section>
        <div class="container m-auto my-5">
            @foreach ($posts as $index => $post)
                @if ($index < 3)
                    <a href="{{ route('fe.post', $post->id) }}">
                        <div class="border my-5">
                            <div class="px-2">
                                <h1 class="text-xl font-bold m-2">{{ $post->title }}</h1>
                                <img src="{{ asset($post->image) }}" class="w-full p-3 my-3" alt="image-fluid">
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </section>

    <section>
        <div class="container m-auto">
            @foreach ($categories as $index => $category)
                @if ($index > 0)
                    <div class="bg-blue-800">
                        <h1 class="font-bold my-5 text-white">{{ $category->nep_title }}</h1>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach ($category->posts as $i => $post)
                            <a href="{{ route('fe.post', $post->id) }}">
                                <div class="border" style="width: 100%">
                                    <div>
                                        <img src="{{ asset($post->image) }}" class="w-full"
                                            style="width:100%;height:200px;object-fit:cover" alt="">
                                    </div>
                                    <div class="lining px-2">
                                        <h5>{{ $post->title }}</h5>
                                    </div>
                                    <div class="px-2">
                                        <span class="text-xs"><i
                                                class="fa-regular fa-clock"></i>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            @endforeach
            </a>

        </div>
    </section>
</x-frontend-layout>
