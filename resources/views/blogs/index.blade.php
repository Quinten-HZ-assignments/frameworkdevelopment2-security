<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blogs') }}
        </h2>
    </x-slot>
    <form  action="{{ route('blogs.create') }}">
        <input style="background: rosybrown; margin: 20px" type="submit" value="Click here to create a blog" />
    </form>

    @foreach($blogs as $blog)
        <div style="margin: 20px; background: lightcoral; text-align: center">
            <h1>A blog title I didn't add to the database</h1>
            <h2>Publisher: {{ $blog->name }} , {{ $blog->age }} years old.</h2>
            <h2>Excerpt: {{ $blog->excerpt }}</h2>
            <form method="POST"
                  action="{{ route('blogs.destroy', $blog) }}">
                @csrf
                @method('DELETE')
                <button class="button is-small is-light" style="background: aquamarine">Delete</button>
            </form>
        </div>
    @endforeach
</x-app-layout>
