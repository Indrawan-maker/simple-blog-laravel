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
<div class="navbar bg-base-100 shadow-sm px-2 md:px-8">
  <img class="w-12 h-12" src="{{ asset('images/logo.png') }}" alt="logo">
  <div class="flex-1">
    <a href="/" class="btn btn-ghost text-sm md:text-xl">daisyUI</a>
  </div>

  <!-- Menu Tengah -->
  <ul class="menu-horizontal menu lg:menu-horizontal bg-base-180  lg:bg-base-180 rounded-box mx-auto">
    <li><a href="/">Home</a></li>
    <li>
      <details class="ease-in-out duration-300 ">
        <summary>Fakultas</summary>
        <ul>
          <li><a>Ushuluddin Adab dan Dakwah(FUAD)</a></li>
          <li><a>Syariah(FASYA)</a></li>
          <li><a>Ekonomi dan Bisnis Islam(FEBI)</a></li>
          <li><a>Syariah(FASYA)</a></li>
          <li>
            <details>
              <summary>Jurusan</summary>
<ul>
  <!-- ===== S1 ===== -->
  <li><a>S1 Hukum Keluarga (Ahwal Syakhsiyah)</a></li>
  <li><a>S1 Hukum Ekonomi Syariah (Muamalah)</a></li>
  <li><a>S1 Hukum Tata Negara (Siyasah)</a></li>

  <li><a>S1 Komunikasi dan Penyiaran Islam</a></li>
  <li><a>S1 Manajemen Dakwah</a></li>
  <li><a>S1 Ilmu Al-Qur'an dan Tafsir</a></li>
  <li><a>S1 Ilmu Hadis</a></li>
  <li><a>S1 Bimbingan dan Konseling Islam</a></li>

  <li><a>S1 Pendidikan Agama Islam (PAI)</a></li>
  <li><a>S1 Manajemen Pendidikan Islam</a></li>
  <li><a>S1 Pendidikan Guru Madrasah Ibtidaiyah (PGMI)</a></li>
  <li><a>S1 Pendidikan Islam Anak Usia Dini (PIAUD)</a></li>
  <li><a>S1 Pendidikan Bahasa Arab</a></li>
  <li><a>S1 Tadris Bahasa Inggris</a></li>
  <li><a>S1 Tadris Matematika</a></li>
  <li><a>S1 Tadris Biologi</a></li>

  <li><a>S1 Ekonomi Syariah</a></li>
  <li><a>S1 Perbankan Syariah</a></li>
  <li><a>S1 Manajemen Bisnis Syariah</a></li>

  <li><a>S1 Sistem Informasi</a></li>


  <li><a>S2 Ekonomi Syariah</a></li>
  <li><a>S2 Hukum Keluarga (Ahwal Syakhsiyah)</a></li>
  <li><a>S2 Ilmu Al-Qur'an dan Tafsir</a></li>
  <li><a>S2 Pendidikan Islam Anak Usia Dini</a></li>
  <li><a>S2 Manajemen Pendidikan Islam</a></li>
  <li><a>S2 Komunikasi dan Penyiaran Islam</a></li>

 
  <li><a>S3 Pendidikan Agama Islam</a></li>
</ul>
            </details>
          </li>
        </ul>
      </details>
    </li>
    <li><a href="/blog">Blog</a></li>
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
<main class="px-2 md:px-8">

    {{-- <h1>{{ $judul }}</h1>
    <p>{{ $isi }}</p> --}}
</main>
</body>
</html>