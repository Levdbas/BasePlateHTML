<?php include 'assets.php'; ?>
<!DOCTYPE html>
<html class="no-js app" lang="nl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Bare - Start Bootstrap Template</title>
  <!-- Bootstrap Core CSS -->
  <link media="all" type="text/css" href="<?php the_asset('app.css'); ?>" id="sage/css-css" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="180x180" href="{{ favicons.path }}/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ favicons.path }}/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ favicons.path }}/favicon-16x16.png" />
  <link rel="manifest" href="{{ favicons.path }}/site.webmanifest" />
  <link rel="mask-icon" href="{{ favicons.path }}/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="{{ favicons.theme_color }}" />
  <meta name="theme-color" content="{{ favicons.theme_color }}" />
  <script>
    document.documentElement.className = document.documentElement.className.replace("no-js",
      "js");
  </script>

</head>

<body>
  <script src="<?php the_asset('vendor.js'); ?>"></script>
  <script src="<?php the_asset('app.js'); ?>"></script>
</body>

</html>