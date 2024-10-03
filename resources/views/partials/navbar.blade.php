<div class="bg-blue-300 flex p-4">
    <h2 class="mx-4 text-xl font-extrabold">Belajar</h2>
    <div class="flex w-[20%] justify-between ml-4">
        <a href="/" class="btn btn-ghost hover:text-white hover:underline {{ ($title === 'home') ? 'text-yellow-300' : '' }}">Home</a>
        <p>|</p>
        <a href="/about" class="btn btn-ghost hover:text-white hover:underline {{ ($title === 'about') ? 'text-yellow-300' : '' }}">About</a>
        <p>|</p>
        <a href="/blog" class="btn btn-ghost hover:text-white hover:underline {{ ($title === 'blog') ? 'text-yellow-300' : '' }}">Blog </a>
        <p>|</p>
        <a href="/categories" class="btn btn-ghost hover:text-white hover:underline {{ ($title === 'categories') ? 'text-yellow-300' : '' }}">Category </a>
    </div>
  </div>