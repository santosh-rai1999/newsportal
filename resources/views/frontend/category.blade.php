<x-frontend-layout>
    <section>
        <div class="container m-auto grid grid-cols-4 gap-5 py-10">
            <div class="col-span-3">
                @foreach ($posts as $post)
                    <a href="{{ route('fe.post', $post->id) }}">
                        <div class="my-5">
                            <div class="grid grid-cols-4 border hover:bg-indigo-50">
                                <div class="col-span-1 images">
                                    <img src="{{ asset($post->image) }}" class="w-full" alt="">
                                </div>
                                <div class="col-span-3 mx-2">
                                    <h1 class="font-bold mx-2">{{ $post->title }}</h1>
                                    {{-- <div class="line mx-2" >
                                {!! $post->description !!}
                            </div> --}}
                                </div>
                            </div>
                        </div>

                    </a>
                @endforeach
            </div>
            <div class="col-span-1">
        
            </div>
        </div>
    </section>

</x-frontend-layout>
