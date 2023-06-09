<script setup></script>

<template>
  <header>
    <h1 class="text-2xl text-center mb-5">Bunker-Project</h1>
  </header>

  <main>
    <slot />
  </main>

  <footer class="bg-gradient-to-b from-transparent to-gray-300 w-full text-center mt-5 py-10 mx-auto  fixed bottom-0">
    <!-- <h2 class="font-bold text-xl pb-5">Join our Newsletter</h2>

    <input class="rounded-xl w-80 h-12 px-3 py-2 shadow-md" type="email" placeholder="Write your email.." /> -->
  </footer>
</template>
