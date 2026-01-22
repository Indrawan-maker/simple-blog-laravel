@props(['active' => false])

<li><a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-800 hover:text-white hover:bg-gray-700 hover:text-white-700' }} rounded-md px-3 py-2 text-sm font-medium"
    {{ $attributes }}>{{ $slot }}</a></li>