<!DOCTYPE html>
<html lang="en" data-theme="corporate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="navbar bg-base-100 shadow-sm">
  <!-- Brand / Logo -->
  <div class="flex-1">
    <a class="btn btn-ghost text-xl">daisyUI</a>
  </div>

  <!-- Menu Tengah -->
  <ul class="menu lg:menu-horizontal bg-base-200 rounded-box mx-auto">
    <li><a>Item 1</a></li>
    <li>
      <details class="ease-in-out duration-300 ">
        <summary>Parent item</summary>
        <ul>
          <li><a>Submenu 1</a></li>
          <li><a>Submenu 2</a></li>
          <li>
            <details open>
              <summary>Parent</summary>
              <ul>
                <li><a>item 1</a></li>
                <li><a>item 2</a></li>
              </ul>
            </details>
          </li>
        </ul>
      </details>
    </li>
    <li><a>Item 3</a></li>
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

    <h1>{{ $judul }}</h1>
    <p>{{ $isi }}</p>
</body>
</html>