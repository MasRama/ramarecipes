<?= $this->extend('layout/default')  ?>

<?= $this->section('content')  ?>

<script src="<?= base_url('js/hide-toast.js') ?>" defer></script>


<ol class="flex items-center pt-6 px-6 ml-64">
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
      Tambah
    </li>
  </ol>


<div class="p-14 grid place-items-center min-h-screen">

<?php if(session('errors')) {
 foreach(session('errors') as $key => $value) {
  echo '<div class="p-4 md:p-5 rounded text-red-700 bg-red-100" id="toastedit">
    <div class="flex items-center justify-center mb-3">
      <a href="#" onclick="hideEdit()"> <svg class="hi-solid hi-x-circle inline-block w-5 h-5 mr-3 flex-none text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
      </a>
      <h3 class="font-semibold">
        Error:
      </h3>
    </div>
    <ul class="list-inside space-y-2">
      <li class="flex items-center">
       '.$value.'
      </li>
    </ul>
  </div> <br>';
  break;
}
} ?>

    <form action="<?= base_url('resep/edit/'.$result['id_mkn']) ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
    <input type="hidden" name="_method" value="PUT" />
        
        <label class="block">
             <label class="font-medium text-lg" for="tk-form-elements-name">Gambar Masakan</label>
             <input class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-indigo-100 file:text-indigo-700 hover:file:bg-indigo-300" type="file" id="gambar" name="gambar" />
        </label>

        <div class="space-y-1">
            <label class="font-medium text-lg" for="tk-form-elements-name">Nama Masakan</label>
            <input value="<?= $result['nama'] ?>" class="w-96 block border border-gray-200 rounded px-3 py-2 leading-6 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" type="text" id="nama" placeholder="Masukkan nama masakan" name="nama" />
        </div>

        <div class="space-y-1">
            <label class="font-medium text-lg" for="tk-form-elements-textarea">Bahan-bahan</label>
            <textarea class="w-full block border border-gray-200 rounded px-3 py-2 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" id="bahan" rows="4" placeholder="Masukkan Bahan-bahan masakan" name="bahan"><?= $result['bahan'] ?></textarea>
        </div>

        <div class="space-y-1">
            <label class="font-medium text-lg" for="tk-form-elements-textarea">Cara memasak</label>
            <textarea class="w-full block border border-gray-200 rounded px-3 py-2 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" id="masak" rows="4" placeholder="Jelaskan langkah-langkah memasak nya" name="masak"><?= $result['cara_masak'] ?></textarea>
        </div>

        <div class="space-y-1">
            <label class="font-medium text-lg" for="tk-form-elements-textarea">Deskripsi</label>
            <textarea class="w-full block border border-gray-200 rounded px-3 py-2 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" id="desc" rows="4" placeholder="Deskripsi singkat masakan" name="desc"><?= $result['desc'] ?></textarea>
        </div>

        <button type="submit" value="Upload" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-2 py-1 leading-5 text-lg border-emerald-200 bg-emerald-200 text-emerald-700 hover:text-emerald-700 hover:bg-emerald-300 hover:border-emerald-300 focus:ring focus:ring-emerald-500 focus:ring-opacity-50 active:bg-emerald-200 active:border-emerald-200">
             Simpan
        </button>
        
    </form>
</div>

<?= $this->endSection() ?>