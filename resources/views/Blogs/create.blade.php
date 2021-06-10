<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
        <form method="POST" action="{{ route('blogs') }}">
            @csrf
            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input
                        class="input @error('name') is-danger @enderror"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}">
                    @error('name')
                    <p class="help is-danger" >{{ $errors->first('name') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="age">Age</label>
                <div class="control">
                    <input
                        class="input @error('age') is-danger @enderror"
                        type="text"
                        name="age"
                        id="age"
                        value="{{ old('age') }}">
                    @error('name')
                    <p class="help is-danger" >{{ $errors->first('age') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                        <textarea
                            class="textarea @error('excerpt') is-danger @enderror"
                            name="excerpt"
                            id="excerpt"
                        >{{ old('excerpt') }}</textarea>
                </div>
                @error('excerpt')
                <p class="help is-danger" >{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit" style="background: rosybrown">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
