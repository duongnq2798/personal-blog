<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Duong Shine</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/user/css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="/user/css/animate.css" />

    <link rel="stylesheet" href="/user/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/user/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/user/css/magnific-popup.css" />

    <link rel="stylesheet" href="/user/css/aos.css" />

    <link rel="stylesheet" href="/user/css/ionicons.min.css" />

    <link rel="stylesheet" href="/user/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="/user/css/jquery.timepicker.css" />
    <link rel="stylesheet" href="/user/css/flaticon.css" />
    <link rel="stylesheet" href="/user/css/icomoon.css" />
    {{-- <link rel="stylesheet" href="/user/css/primsmfix.css" /> --}}
    <link rel="stylesheet" href="/user/css/primsm.css" />
    <link rel="stylesheet" href="/user/css/style.css" />
    <link rel="shortcut icon" href="/user/icon/iconblog.svg" type="/image/x-icon">
    <script>//<![CDATA[
      function forEachElement(selector, fn) {
        var elements = document.querySelectorAll(selector);
        for (var i = 0; i < elements.length; i++)
          fn(elements[i], i);
      }
      
      forEachElement("pre>code[class*='language-']", function(el, i) {
        el.parentNode.insertAdjacentHTML("beforebegin", "<div class='code-header'><a class='copy-code'>Copy</a></div>");
      });
      
      forEachElement(".copy-code", function(el, i) {
        el.addEventListener("click", function() {
          var body = document.getElementsByTagName("body")[0];
      
          var txt = document.createElement("textarea");
          txt.setAttribute("id", "txt-cpy");
          txt.style.position = "absolute";
          txt.style.left = "-9999em";
          txt.value = el.parentNode.nextElementSibling.textContent;
          body.appendChild(txt);
      
          document.getElementById("txt-cpy").select();
      
          var div = document.createElement("div");
          div.setAttribute("class", "msg-alert");
          try {
            var successful = document.execCommand('copy');
            successful ? div.innerHTML = "Successfully copied to clipboard !" : div.innerHTML = "Fail to copy to clipboard !";
            body.appendChild(div);
          } catch (err) {
            console.log('Oops, unable to copy');
          }
      
          body.removeChild(txt);
          setTimeout(function() {
            body.removeChild(div);
          }, 2000)
        })
      });
      //]]>
      </script>
  </head>
  <body>
    <div id="colorlib-page">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

      <aside id="colorlib-aside" role="complementary" class="js-fullheight">
        <nav id="colorlib-main-menu" role="navigation">
          <ul>
            <li class="{{Request::path() === '/' ? 'colorlib-active' : ''}}"><a href="/">Blog</a></li>
            <li class="{{Request::path() === 'about' ? 'colorlib-active' : ''}}"><a href="/about">About</a></li>
            <li class="{{Request::path() === 'contact' ? 'colorlib-active' : ''}}"><a href="/contact">Contact</a></li>
          </ul>
        </nav>
        
        <div class="colorlib-footer">
          <h1 id="colorlib-logo" class="mb-4">
            <a
              href="/"
              style="background-image: url(/user/images/bg_1.jpg);"
            >
              Duong
              <span>Nguyen</span>
            </a>
          </h1>
          <div class="mb-4">
            <h3>Subscribe for newsletter</h3>
            <form action="#" class="colorlib-subscribe-form">
              <div class="form-group d-flex">
                <div class="icon"><span class="icon-paper-plane"></span></div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Email Address"
                />
              </div>
            </form>
          </div>
          <p class="pfooter">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            duongdev
          </p>
          <div class="iconskill">
            <p>
              <a href="https://github.com/duongnq2798" target="_blank" >
                <img src="/user/icon/github.svg"alt="github.com/duongnq2798">
              </a>
            </p>
          </div>
        </div>

        

      </aside>

      @yield('content')
    </div>
    <!-- END COLORLIB-PAGE -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script>
      src
    </script>

    <script src="/user/js/configfrism.js"></script>
    <script src="/user/js/prism.js"></script>
    <script src="/user/js/jquery.min.js"></script>
    <script src="/user/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/user/js/popper.min.js"></script>
    <script src="/user/js/bootstrap.min.js"></script>
    <script src="/ser/js/jquery.easing.1.3.js"></script>
    <script src="/user/js/jquery.waypoints.min.js"></script>
    <script src="/user/js/jquery.stellar.min.js"></script>
    <script src="/user/js/owl.carousel.min.js"></script>
    <script src="/user/js/jquery.magnific-popup.min.js"></script>
    <script src="/user/js/aos.js"></script>
    <script src="/user/js/jquery.animateNumber.min.js"></script>
    <script src="/user/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="/user/js/google-map.js"></script>
    <script src="/user/js/main.js"></script>
    
  </body>
</html>
