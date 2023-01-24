<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= base_url("css/tailwind.css") ?>"></script>
    <title>Rama Recipes</title>
</head>
<body>

<!-- Page Container -->
<div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
  <!-- Page Content -->
  <main id="page-content" class="flex flex-auto flex-col max-w-full">
      <!-- Navbar -->
      <?= $this->include('layout/navbar') ?>
      <!-- END Navbar -->

      <!-- Content -->
      <?= $this->renderSection('content') ?>
      <!-- END Content -->


    <!-- Footer -->
    <?= $this->include('layout/footer') ?>
    <!-- END Footer -->
  </main>
  <!-- END Page Content -->
</div>
<!-- END Page Container -->



</body>
</html>