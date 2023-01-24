<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="bg-white min-h-screen">
  <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
    <!-- Heading -->
    <div class="text-center">
      <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 mb-5 hi-outline hi-code inline-block w-24 h-24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
      <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
        Fatqan <span class="font-light">Rama</span>
      </h2>
      <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600 lg:w-2/3 mx-auto">
        Saya membuat web-page ini dengan CodeIgniter 4 dan TailwindCSS <br> untuk melengkapi Tugas UAS Pemrogaman web lanjut
      </h3>
    </div>
    <!-- END Heading -->

    <!-- Values with Icons -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-8 rounded-lg border text-center p-8">
      <div class="space-y-4">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-outline hi-heart inline-block w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
        <h3 class="font-medium">
          Passion
        </h3>
      </div>
      <div class="space-y-4">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-emerald-500 hi-outline hi-beaker inline-block w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
        <h3 class="font-medium">
          Creativity
        </h3>
      </div>
      <div class="space-y-4">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-orange-500 hi-outline hi-badge-check inline-block w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
        <h3 class="font-medium">
          Design
        </h3>
      </div>
      <div class="space-y-4">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-blue-500 hi-outline hi-check-circle inline-block w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <h3 class="font-medium">
          Quality
        </h3>
      </div>
      <div class="space-y-4">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-purple-500 hi-outline hi-lightning-bolt inline-block w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
        <h3 class="font-medium">
          Simplicity
        </h3>
      </div>
      <div class="space-y-4">
        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-pink-500 hi-outline hi-fire inline-block w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path></svg>
        <h3 class="font-medium">
          Motivation
        </h3>
      </div>
    </div>
    <!-- END Values with Icons -->

    
    <!-- END Values -->
  </div>
</div>
<?= $this->endSection() ?>