<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
      .error-message {
        @apply text-sm text-red-500
      }
      
      .btn-edit {
        @apply bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded
      }

      .btn-delete {
        @apply bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded
      }

      .btn-mark-complete {
        @apply bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded
      }

      .link {
        @apply font-medium text-gray-700 underline decoration-pink-500
      }

      label {
        @apply block uppercase text-slate-700 mb-2
      }

      input, textarea {
        @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
      }

      .error {
        @apply text-red-500 text-sm
      }
    </style>
    {{-- blade-formatter-enable --}}
  </head>

  <body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="mb-4 text-2xl">@yield('title')</h1>
    <div x-data="{ flash: true }">
      @if (session()->has('success'))
        <div 
          x-show="flash"
          class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700"
          role="alert"
        >
          <strong class="font-bold">Success!</strong>
          <div>{{ session('success') }}</div>

          <span class="absolute top-0 bottom-0 px-4 py-3 right-0">
            <svg 
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor" class="h-6 w-6 cursor-pointer" @click="flash = false">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </div>
      @endif
      
      @yield('content')
    </div>  
  </body>
</html>