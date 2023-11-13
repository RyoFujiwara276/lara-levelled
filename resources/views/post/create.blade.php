<x-app-layout>

<x-slot name="header">
<h2 class="font-semibold text-md text-teal-900 leading-tight">
  Form
</h2>
</x-slot>

<div class="max-w-7xl mx-auto px-4">
  @if(session('message'))
  <div class="text-center text-lg py-2 text-slate-50 bg-teal-500 font-bold">
    {{session('message')}}
  </div>
  @endif
  <form method="post" action="{{ route('post.store') }}">
    @csrf
    <div class="mt-8">
      <div class="w-full flex flex-col">
        <label for="title" class="font-semibold mt-4">Subject</label>
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
        <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md"
        id="title" value="{{old('title')}}">
      </div>
      <div class="w-full flex flex-col">
        <label for="body" class="font-semibold mt-4">Contents</label>
        <x-input-error :messages="$errors->get('body')" class="mt-2" />
        <textarea name="body" id="body"
        class="w-auto py-2 border border-gray-300 rounded-md" cols="30" rows="8">
          {{old('body')}}
        </textarea>
      </div>
    </div>

    <x-primary-button class="mt-4">
      Submit
    </x-primary-button>
  </form>
</div>

</x-app-layout>
