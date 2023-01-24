<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="flex flex-col lg:flex-row-reverse space-y-16 lg:space-y-0 text-center lg:text-left container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
        <div class="lg:w-1/2 lg:flex lg:items-center">
          <div>
            <div class="font-semibold inline-flex px-2 py-1 leading-4 mb-2 text-lg rounded text-emerald-700 bg-emerald-200">
              Halo <?= session()->get('name') ?> !
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
              Ngga perlu ribet <br> untuk masak yang istimewa!
            </h2>
            <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-600">
              Dengan RamaRecipes, kami menghadirkan cara dan resep yang simpel anti ribet untuk membuat makanan enak favorit keluarga!
            </h3>
            <div class="flex flex-col sm:flex-row sm:items-center justify-center lg:justify-start space-y-2 sm:space-y-0 sm:space-x-2 pt-10 pb-16">
              <a href="resep" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-6 py-4 leading-6 rounded border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                <span>Lihat Resep Lengkap</span>
                <svg fill="currentColor" viewBox="0 0 20 20" class="opacity-50 hi-solid hi-arrow-right inline-block w-5 h-5"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
              
            </div>
          </div>
        </div>
        <div class="lg:w-1/2 lg:mr-16 lg:flex lg:justify-center lg:items-center">
          <div class="lg:w-96 relative">
            <div class="absolute pattern-dots-xl text-indigo-100 top-0 left-0 w-32 h-48 md:h-96 transform -translate-y-12 -translate-x-16 -rotate-3"></div>
            <div class="absolute pattern-dots-xl text-indigo-100 bottom-0 right-0 w-32 h-48 md:h-96 transform translate-y-12 translate-x-16 rotate-3"></div>
            <div class="absolute rounded-full top-0 right-0 w-32 h-32 bg-yellow-200 bg-opacity-50 -mt-12 -mr-12"></div>
            <div class="absolute rounded-xl bottom-0 left-0 w-32 h-32 bg-blue-200 bg-opacity-50 -mb-10 -ml-10 transform rotate-3"></div>
            <img src="/images/main.jpg" alt="Hero Image" class="relative rounded-lg mx-auto shadow-lg" />
          </div>
        </div>
      </div>
<?= $this->endSection() ?>