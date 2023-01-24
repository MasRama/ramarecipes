<nav id="page-header" class="flex flex-none items-center bg-white py-10">
        <div class="flex flex-col text-center md:flex-row md:items-center md:justify-between space-y-6 md:space-y-0 container xl:max-w-7xl mx-auto px-4 lg:px-8">
          <div>
            <a href="/" class="inline-flex items-center space-x-2 font-bold text-lg tracking-wide text-indigo-600 hover:text-indigo-400">
              <span>RamaRecipes</span>
            </a>
          </div>
          <div class="flex flex-col text-center md:flex-row md:items-center md:justify-between space-y-6 md:space-y-0 md:space-x-10">
            <nav class="space-x-4 md:space-x-6">
              <a href="<?= base_url() ?>" class="font-semibold text-gray-900 hover:text-gray-500">
                <span>Home</span>
              </a>
              <a href="<?= base_url('tentang') ?>" class="font-semibold text-gray-900 hover:text-gray-500">
                <span>Tentang</span>
              </a>
              <a href="<?= base_url('kontak') ?>" class="font-semibold text-gray-900 hover:text-gray-500">
                <span>Kontak</span>
              </a>
              <a href="/logout">
              <button type="button" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-6 border-red-200 bg-red-200 text-red-700 hover:text-red-700 hover:bg-red-300 hover:border-red-300 focus:ring focus:ring-red-500 focus:ring-opacity-50 active:bg-red-200 active:border-red-200">
                Log Out
              </button>
              </a>
            </nav>
            <div class="flex items-center justify-center space-x-2">
              
            </div>
          </div>
        </div>
</nav>