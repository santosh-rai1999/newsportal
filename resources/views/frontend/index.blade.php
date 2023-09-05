<x-frontend-layout>

    {{-- <x-navbar-component/> --}}
    {{-- {{$menus}} --}}
    <section>
        <div class="container m-auto my-5">
            @foreach ($posts as $index => $post)
                @if ($index < 3)
                <a href="{{ route('fe.post', $post->id) }}">
                    <div class="border my-5 flex justify-center">
                        <div class="px-2">
                            <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                            <img src="{{ asset($post->image) }}" alt="">
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
                    <div class="bg-blue-800 px-2">
                        <h1 class="font-bold my-5 text-white">{{ $category->nep_title }}</h1>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        @foreach ($category->posts as $i=>$post)
                            <a href="{{ route('fe.post', $post->id) }}">
                                <div class="border">
                                    <img src="{{ asset($post->image) }}" class="w-full" alt="">
                                    <div class="lining px-2 py-2">
                                        <h1>{{$post->title}}</h1>
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
