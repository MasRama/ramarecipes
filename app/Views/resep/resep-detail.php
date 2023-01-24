<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="bg-gray-100 min-h-screen">
  <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-15">

  <!-- Breadcrumb -->
  <ol class="flex items-center">
    <li> 
      <a href="<?= base_url() ?>" class="font-semibold text-indigo-600 hover:text-indigo-400">Home</a>
    </li>
    <li class="flex items-center px-1 sm:px-2 opacity-25">
      <svg class="hi-outline hi-chevron-right inline-block w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </li>
    <li>
      <a href="<?= base_url('resep') ?>" class="font-semibold text-indigo-600 hover:text-indigo-400">Resep</a>
    </li>
    <li class="flex items-center px-1 sm:px-2 opacity-25">
      <svg class="hi-outline hi-chevron-right inline-block w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </li>
    <li class="font-semibold">
      <?= $result['nama'] ?>
    </li>
  </ol>
<br>
<!-- END Breadcrumb -->

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16">
      <!-- Images -->
      <div>
        <img src="<?= base_url($result['url_gambar']) ?>" alt="Product Image" />
        
      </div>
      <!-- END Images -->

      <!-- Product Info -->
      <div>
        <div class="grid grid-cols-1 gap-2 mb-4">
          <div>
            <a class="block font-bold text-3xl">
              <?= $result['nama'] ?>
            </a>
          </div>
          <div class="text-orange-500 text-left sm:text-right">
           </div>
        </div>
        <div class="prose prose-indigo mb-4">
        <p class="text-xl font-semibold">Bahan :</p>
        <?= nl2br($result['bahan']) ?> <br><br>
        <p class="text-xl font-semibold"> Cara Memasak : </p>
        <?= nl2br($result['cara_masak']) ?>
        </div>
        
      </div>
      <!-- END Product Info -->
    </div>
  </div>
</div>
<?= $this->endSection() ?>