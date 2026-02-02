<div class="navbar bg-base-100 shadow-sm px-2 md:px-8">
  <img class="w-12 h-12" src="{{ asset('images/logo.png') }}" alt="logo">
  <div class="flex-1">
    <a href="/" class="btn btn-ghost text-sm md:text-xl">daisyUI</a>
  </div>

  <!-- Menu Tengah -->
  <ul class="menu-horizontal menu lg:menu-horizontal bg-base-180  lg:bg-base-180 rounded-box mx-auto gap-8">
<x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
<x-nav-link href="/berita" :active="request()->is('posts')">Blog</x-nav-link>
<x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
<x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
  </ul>

  <!-- Avatar / Dropdown kanan -->
  <div class="flex-1 flex justify-end">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul
        tabindex="-1"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>