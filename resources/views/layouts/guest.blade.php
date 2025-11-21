<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default">
<head>
    <!-- META + CSS Sneat -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css">
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css">
    <link rel="stylesheet" href="/assets/css/demo.css">
    <link rel="stylesheet" href="/assets/vendor/css/pages/page-auth.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">

        <div class="card">
          <div class="card-body">

            <!-- logo sneat -->
            <div class="app-brand justify-content-center">
                ...logo sneat...
            </div>

            <!-- FORM LOGIN/REGISTER MUNCUL DI SINI -->
            {{ $slot }}

          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- JS Sneat -->
  <script src="/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="/assets/vendor/js/bootstrap.js"></script>
  <script src="/assets/js/main.js"></script>
</body>
</html>

