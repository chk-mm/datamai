<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data-Mai ? | Your World My World</title>
  <link rel="icon" href="{{ asset('images/icon/monster.png') }}"><link rel="stylesheet" href="{{ asset('css/style.css') }}"></head>


  <body
    x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
    <!-- ===== Header Start ===== -->
    <header
  class="g s r vd ya cj"
  :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
  @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false"
>
  <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
    <div class="vd to/4 tc wf yf">
      <a href="{{ route('home') }}">
        <img class="om" src="{{ asset('images/icon/icon-datamai.png') }}" alt="Logo Light" />
      </a>
    </div>

    <div
      class="vd wo/4 sd qo f ho oo wf yf"
      :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }"
    >
      <nav>
        <ul class="tc _o sf yo cg ep">
          <li><a href="{{ route('modules.index') }}" class="xl" :class="{ 'mk': page === 'module' }">Module</a></li>

          <li><a href="{{ route('mentors.index') }}" class="xl">Mentors</a></li>
          <li class="c i" x-data="{ dropdown: false }">
            <a
              href="#"
              class="xl tc wf yf bg"
              @click.prevent="dropdown = !dropdown"
              :class="{ 'mk': page === 'blog-grid' || page === 'blog-single' || page === 'signin' || page === 'signup' || page === '404' }"
            >
              Pages

              <svg
              :class="{ 'wh': dropdown }"
              class="th mm we fd pf" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
              </svg>
            </a>

            <!-- Dropdown Start -->
            <ul class="a" :class="{ 'tc': dropdown }">
              <li><a href="blog-grid.html" class="xl" :class="{ 'mk': page === 'blog-grid' }">Blog Grid</a></li>
              <li><a href="blog-single.html" class="xl" :class="{ 'mk': page === 'blog-single' }">Blog Single</a></li>
              <li><a href="signin.html" class="xl" :class="{ 'mk': page === 'signin' }">Sign In</a></li>
              <li><a href="signup.html" class="xl" :class="{ 'mk': page === 'signup' }">Sign Up</a></li>
              <li><a href="404.html" class="xl" :class="{ 'mk': page === '404' }">404</a></li>
            </ul>
            <!-- Dropdown End -->
          </li>
          <li><a href="index.html#support" class="xl">Support</a></li>
        </ul>
      </nav>

      <div class="tc wf ig pb no">
        <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
          <label class="rc ab i">
            <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="pf vd yc uk h r za ab" />
            <!-- Icon Sun -->
            <svg :class="{ 'wn' : page === 'home', 'xh' : page === 'home' && stickyMenu }" class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.0908 18.6363C10.3549 18.6363 8.69 17.9467 7.46249 16.7192C6.23497 15.4916 5.54537 13.8268 5.54537 12.0908C5.54537 10.3549 6.23497 8.69 7.46249 7.46249C8.69 6.23497 10.3549 5.54537 12.0908 5.54537C13.8268 5.54537 15.4916 6.23497 16.7192 7.46249C17.9467 8.69 18.6363 10.3549 18.6363 12.0908C18.6363 13.8268 17.9467 15.4916 16.7192 16.7192C15.4916 17.9467 13.8268 18.6363 12.0908 18.6363ZM12.0908 16.4545C13.2481 16.4545 14.358 15.9947 15.1764 15.1764C15.9947 14.358 16.4545 13.2481 16.4545 12.0908C16.4545 10.9335 15.9947 9.8236 15.1764 9.00526C14.358 8.18692 13.2481 7.72718 12.0908 7.72718C10.9335 7.72718 9.8236 8.18692 9.00526 9.00526C8.18692 9.8236 7.72718 10.9335 7.72718 12.0908C7.72718 13.2481 8.18692 14.358 9.00526 15.1764C9.8236 15.9947 10.9335 16.4545 12.0908 16.4545ZM10.9999 0.0908203H13.1817V3.36355H10.9999V0.0908203ZM10.9999 20.8181H13.1817V24.0908H10.9999V20.8181ZM2.83446 4.377L4.377 2.83446L6.69082 5.14828L5.14828 6.69082L2.83446 4.37809V4.377ZM17.4908 19.0334L19.0334 17.4908L21.3472 19.8046L19.8046 21.3472L17.4908 19.0334ZM19.8046 2.83337L21.3472 4.377L19.0334 6.69082L17.4908 5.14828L19.8046 2.83446V2.83337ZM5.14828 17.4908L6.69082 19.0334L4.377 21.3472L2.83446 19.8046L5.14828 17.4908ZM24.0908 10.9999V13.1817H20.8181V10.9999H24.0908ZM3.36355 10.9999V13.1817H0.0908203V10.9999H3.36355Z" fill=""/>
            </svg>
            <!-- Icon Sun -->
            <img class="xc nm" src="{{ asset('images/icon/icon-moon.svg') }}" alt="Moon" />
          </label>
        </div>

        <a href="signin.html" :class="{ 'nk yl' : page === 'home', 'ok' : page === 'home' && stickyMenu }" class="ek pk xl">Sign In</a>
        <a href="signup.html" :class="{ 'hh/[0.15]' : page === 'home', 'sh' : page === 'home' && stickyMenu }" class="lk gh dk rg tc wf xf _l gi hi">Sign Up</a>
      </div>
    </div>
  </div>
</header>

    <!-- ===== Header End ===== -->

    <main>
      <!-- ===== Hero Start ===== -->
      <section class="gj do ir hj sp jr i pg">
        <!-- Hero Images -->
        <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
          <img src="{{ asset('images/icon/shape-01.svg') }}" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
          <img src="{{ asset('images/icon/shape-02.svg') }}" alt="shape" class="xc 2xl:ud-block h u p va" />
          <img src="{{ asset('images/icon/shape-03.svg') }}" alt="shape" class="xc 2xl:ud-block h v w va" />
          <img src="{{ asset('images/icon/shape-04.svg') }}" alt="shape" class="h q r" />
          <img src="{{ asset($mentor->photo_url) }}" alt="Woman" class="h q r ua" />
        </div>

        <!-- Hero Content -->
        <div class="bb ze ki xn 2xl:ud-px-0">
          <div class="tc _o">
            <div class="animate_left jn/2">
              <h1 class="fk vj zp or kk wm wb">{{ $mentor->name }} {{ $mentor->surname }}</h1>
              @foreach ($mentor->modules as $module)
                  <li> {{ $module->title }}</li> <!-- Displays the name of each module taught by the mentor -->
              @endforeach              
              

              <div class="tc tf yo zf mb">
                <a href="{{ route('mentors.index') }}" class="ek jk lk gh gi hi rg ml il vc _d _l">Back to previous page</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Hero End ===== -->


    

      <!-- ===== CTA End ===== -->
    </main>
    

    <!-- ====== Back To Top Start ===== -->
    <button
  class="xc wf xf ie ld vg sr gh tr g sa ta _a"
  @click="window.scrollTo({top: 0, behavior: 'smooth'})"
  @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
  :class="{ 'uc' : scrollTop }"
>
  <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
  </svg>
</button>

    <!-- ====== Back To Top End ===== -->

  <script src="{{ asset('js/bundle.js') }}" defer></script>
</body>
</html>
