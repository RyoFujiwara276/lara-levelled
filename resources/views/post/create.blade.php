<x-app-layout>

<x-slot name="header">
<h2 class="font-semibold text-md text-teal-900 leading-tight">
  Form
</h2>
</x-slot>

<div class="max-w-7xl mx-auto px-4">
  <form action="">
    <div class="mt-8">
      <div class="w-full flex flex-col">
        <label for="title" class="font-semibold mt-4">Subject</label>
        <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
      </div>
      <div class="w-full flex flex-col">
        <label for="body" class="font-semibold mt-4">Contents</label>
        <textarea name="body" id="body" class="w-auto py-2 border border-gray-300 rounded-md" cols="30" rows="8"></textarea>
      </div>
    </div>

    <x-primary-button class="mt-4">
      Submit
    </x-primary-button>
  </form>
</div>

</x-app-layout>
