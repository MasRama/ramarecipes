<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="bg-gray-100 min-h-screen">
  <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
    <!-- Heading -->
    <div class="text-center">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
        Kontak Saya
      </h2>
      <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600 lg:w-2/3 mx-auto">
        Saya akan berusaha menjawab secepat yang saya bisa
      </h3>
    </div>
    <!-- END Heading -->

    <!-- Card -->
<div class="flex flex-col rounded shadow-sm bg-white overflow-hidden">
  <!-- Card Header -->
  <div class="py-4 px-5 lg:px-6 w-full bg-gray-50">
    <h3 class="font-medium text-center">
      Whatsapp
    </h3>
  </div>
  <!-- END Card Header -->

  <!-- Card Body -->
  <div class="p-5 lg:p-6 grow w-full text-center">
    <p>
      +62-857-4572-6082
    </p>
  </div>
  <!-- END Card Body -->

</div>
<div class="flex flex-col rounded shadow-sm bg-white overflow-hidden">
  <!-- Card Header -->
  <div class="py-4 px-5 lg:px-6 w-full bg-gray-50">
    <h3 class="font-medium text-center">
      Email
    </h3>
  </div>
  <!-- END Card Header -->

  <!-- Card Body -->
  <div class="p-5 lg:p-6 grow w-full text-center">
    <p>
      ryushineo@gmail.com
    </p>
  </div>
  <!-- END Card Body -->

</div>
<!-- END Card -->
  </div>
</div>
<?= $this->endSection() ?>