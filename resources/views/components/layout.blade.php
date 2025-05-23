<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <!-- <title>Home | Datta able Dashboard Template</title> -->

   
    @php
    $data = '| Datta able Dashboard';
    $title = ucwords(str_replace('-', ' ', request()->segment(1) ?? 'Home'.$data));
@endphp

<title>{{ ($title == 'Login' || $title == 'Register') ? $title : $title.$data }}  </title>

  

    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta able is trending dashboard template made using Bootstrap 5 design framework. Datta able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="Codedthemes" />

    <!-- [Favicon] icon --> 
<link rel="icon" href="{{ asset('build/assets/images/favicon.svg') }}" type="image/svg+xml">


 <!-- [Font] Family -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset('build/assets/fonts/tabler-icons.min.css')}}" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{asset('build/assets/fonts/feather.css')}}" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{asset('build/assets/fonts/fontawesome.css')}}" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{asset('build/assets/fonts/material.css')}}" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}" id="main-style-link" />
<link rel="stylesheet" href="{{asset('build/assets/css/style-preset.css')}}" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-14K1GBX9FG');
</script>
<!-- WiserNotify -->
<script>
  !(function () {
    if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
    else {
      window.t4hto4 = !0;
      var t = document,
        e = window,
        n = function () {
          var e = t.createElement('script');
          (e.type = 'text/javascript'),
            (e.async = !0),
            (e.src = 'https://pt.wisernotify.com/pixel.js?ti=1jclj6jkfc4hhry'),
            document.body.appendChild(e);
        };
      'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
    }
  })();
</script>
<!-- Microsoft clarity -->
 <script type="text/javascript">
  (function (c, l, a, r, i, t, y) {
    c[a] =
      c[a] ||
      function () {
        (c[a].q = c[a].q || []).push(arguments);
      };
    t = l.createElement(r);
    t.async = 1;
    t.src = 'https://www.clarity.ms/tag/' + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
  })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
</script>

  </head>
<body> 
 
 {{$main}}


</body>




   <script src="{{asset('build/assets/js/plugins/apexcharts.min.js')}}"></script>

    <script src="{{asset('build/assets/js/plugins/jsvectormap.min.js')}}"></script>
    <script src="{{asset('build/assets/js/plugins/world.js')}}"></script>

    <script src="{{asset('build/assets/js/pages/dashboard-default.js')}}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{asset('build/assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('build/assets/js/plugins/simplebar.min.js')}}"></script>
    <script src="{{asset('build/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('build/assets/js/fonts/custom-font.js')}}"></script>
    <script src="{{asset('build/assets/js/script.js')}}"></script>
    <script src="{{asset('build/assets/js/theme.js')}}"></script>
    <script src="{{asset('build/assets/js/plugins/feather.min.js')}}"></script>

       
    <script>
      // layout_change('light');
    </script>
       
    <script>
      // change_box_container('false');
    </script>
     
    <script>
      // layout_caption_change('true');
    </script>
       
    <script>
      // layout_rtl_change('false');
    </script>
     
    <script>
      // preset_change('preset-1');
    </script>
     
    <script>
      // layout_theme_sidebar_change('false');
    </script>