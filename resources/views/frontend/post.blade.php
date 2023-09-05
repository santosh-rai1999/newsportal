<x-frontend-layout>
    <section>
        <div class="container m-auto grid grid-cols-4 py-10 gap-5">
            <div class="col-span-3 border">
                <img src="{{ asset($post->image) }}" alt="">
                <h1 class="my-2 font-bold px-4">{{ $post->title }}</h1>
                <div class="px-2 my-2 mx-2 hover:bg-indigo-50">
                    {!! $post->description !!}
                </div>
            </div>
            <div class="col-span-1 border">

            </div>
            <div class="container m-auto">
                <h5 class="font-bold">Comments</h5>
                <div class="py-10">
                    <div>
                        @foreach ($comments as $comment)
                            <div class="border-b">
                                <h5 class="font-bold">{{ $comment->name }}</h5>
                                <p>{{ $comment->comment }}</p>
                                <span class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>

                            </div>
                        @endforeach
                        {!! $comments->links() !!}
                    </div>

                </div>
                <form action="{{ route('comment.post') }}" method="post">
                    @csrf
                    <input type="text" name="post_id" value="{{ $post->id }}" hidden>
                    <div class="w">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                            Name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Santosh" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="w">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="email@gmail.com" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="w">
                        <label for="comment"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">comment</label>
                        <textarea class="bg-gray-50 border border-gray-300" name="comment" id="" cols="27" rows="5">{{ old('comment') }}</textarea>
                    </div>
                    @error('comment')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="my-5">
                        <div>
                            <div class="captcha flex gap-5">
                                <span>{!! captcha_img('math') !!}</span>
                                <button type="button" id="reload_captcha"
                                    class="bg-red-500 text-white p-2 rounded hover:bg-red-800">Reload</button>
                            </div>
                        </div>
                        <div class="w">
                            <label for="captcha"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Captcha</label>
                            <input type="text" id="captcha" name="captcha"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="captcha">
                        </div>
                        @error('captcha')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>
                    <button type="submit" class="px-10 py-2 bg-blue-500 text-white rounded-md">Send Comment</button>
                </form>
            </div>
        </div>
    </section>
</x-frontend-layout>
