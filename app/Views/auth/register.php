<?= $this->extend('layout/auth') ?>

<?= $this->section('content') ?>

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
      <li class="flex items-center justify-center">
       '.$value.'
      </li>
    </ul>
  </div> <br>';
  break;
}
} else if(session('success')) {
    echo '<div class="p-4 md:p-5 rounded text-green-700 bg-green-100" id="toastedit">
      <div class="flex items-center justify-center mb-3">
        <a href="#" onclick="hideEdit()"> <svg class="hi-solid hi-x-circle inline-block w-5 h-5 mr-3 flex-none text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
        </a>
        <h3 class="font-semibold">
          Success:
        </h3>
      </div>
      <ul class="list-inside space-y-2">
        <li class="flex items-center justify-center">
         '.session('success').'
        </li>
      </ul>
    </div> <br>';
} ?>

<div class="flex flex-col rounded shadow-sm bg-white overflow-hidden">
          <div class="p-5 lg:p-6 grow w-full">
            <div class="sm:p-5 lg:px-10 lg:py-8">

              <form action="/register" method="POST" enctype="multipart/form-data" class="space-y-6">
              <div class="space-y-1">
                  <label for="email" class="font-medium">Nama</label>
                  <input class="block border border-gray-200 rounded px-5 py-3 leading-6 w-full focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                  type="text" id="nama" name="nama" placeholder="Masukkan nama anda" />
                </div>
                <div class="space-y-1">
                  <label for="email" class="font-medium">Email</label>
                  <input class="block border border-gray-200 rounded px-5 py-3 leading-6 w-full focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                  type="email" id="email" name="email" placeholder="Masukkan email anda" />
                </div>
                <div class="space-y-1">
                  <label for="password" class="font-medium">Password</label>
                  <input class="block border border-gray-200 rounded px-5 py-3 leading-6 w-full focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                  type="password" id="password" name="password" placeholder="Masukkan password" />
                </div>
                <div>
                <div class="space-y-1">
                  <label for="password" class="font-medium">Kofnrimasi Password</label>
                  <input class="block border border-gray-200 rounded px-5 py-3 leading-6 w-full focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                  type="password" id="password_conf" name="password_conf" placeholder="Konfirmasi password" />
                </div>
                <div>
                    <br>
                  <button type="submit" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none w-full px-4 py-3 leading-6 rounded border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                    Daftar
                  </button>
                </div>
              </form>          
            </div>
          </div>        
          <div class="py-4 px-5 lg:px-6 w-full text-sm text-center bg-gray-50">
            Sudah punya akun?
            <a class="font-medium text-indigo-600 hover:text-indigo-400" href="/login">Login disini</a>
          </div>
        </div>
<?= $this->endSection() ?>