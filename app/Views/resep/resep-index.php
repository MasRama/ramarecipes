<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="bg-gray-100" id="resep">
      <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32 min-h-screen">
        <!-- Heading -->
        <div class="text-center">
          <div class="text-sm uppercase font-bold tracking-wider mb-1 text-indigo-700">
            </div>

          <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
            
            Resep Rumahan Lengkap !
          </h2>
          <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600 lg:w-2/3 mx-auto">
            Klik pada gambar untuk mendapatkan resep lengkap masakan
          </h3>
        </div>
        <!-- END Heading -->

        <!-- Features -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">

        <div class="py-5">
            <div class="p-2 bg-gray-100 rounded-lg mb-8 hover:bg-indigo-500 transition">
              <a href="resep/tambah"> <img src="https://images.unsplash.com/photo-1535384515441-5a7293014fce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Preview Feature Image" class="rounded-lg w-96 h-96 object-cover" />
             </a> 
            </div>
            <h4 class="text-lg font-bold mb-2 px-2">
            Tambahkan Resep Baru
            </h4>
            <p class="leading-relaxed text-gray-600 mb-3 px-2">
            Saatnya berkreasi! <br>
            Klik untuk menambahkan resep baru!
            </p>

          </div>

        <?php foreach ( $result as $key => $value ): ?>
          <div class="py-5">
            <div class="p-2 bg-gray-100 rounded-lg mb-8 hover:bg-indigo-500 transition">
              <a href="resep/<?= $value['id_mkn'] ?>"> <img src="<?= base_url($value['url_gambar']) ?>" alt="Preview Feature Image" class="rounded-lg w-96 h-96 object-cover" />
             </a> 
            </div>
            <h4 class="text-lg font-bold mb-2 px-2">
            <?= nl2br($value['nama'])  ?>
            </h4>
            <p class="leading-relaxed text-gray-600 mb-3 px-2">
            <?= nl2br($value['desc'])  ?>
            </p>

            <div class="flex">
            <form action="<?= base_url("resep/".$value['id_mkn']) ?>" method="POST">
              <input type="hidden" name="_method" value="DELETE" />
              <div class="font-semibold inline-flex px-2 py-1 leading-4 items-center space-x-1 rounded text-red-600 bg-red-100 hover:bg-red-300 transition">
                <svg class="hi-solid hi-exclamation inline-block w-4 h-4 opacity-75" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                  <button type="submit"> Hapus </button>
              </div> 
            </form>

            <form action="<?= base_url("resep/edit/".$value['id_mkn']) ?>" method="GET">
                <div class="font-semibold inline-flex px-2 py-1 leading-4 items-center space-x-1 rounded text-emerald-700 bg-emerald-200 ml-2 hover:bg-emerald-400 transition">
                  <svg class="hi-solid hi-bookmark inline-block w-4 h-4 opacity-75" fill="currentColor" viewBox="0 0 20 20"><path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"/></svg>
                    <button type="submit"> Edit </button> 
                </div>
            </form>
            </div>

          </div>
        <?php endforeach ?>
        </div>
        <!-- END Features -->
      </div>
    </div>
<?= $this->endSection() ?>