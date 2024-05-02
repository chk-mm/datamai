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
    <x-navigation/>


      
</header>

    <!-- ===== Header End ===== -->

    <main>
       <!-- ===== Team Start ===== -->
       <section class="i pg ji gp uq">
        <!-- Bg Shapes -->
        <span class="rc h s r vd fd/5 fh rm"></span>
        <img  src="{{ asset('images/icon/shape-08.svg') }}" alt="Shape Bg" class="h q r" />
        <img  src="{{ asset('images/icon/shape-09.svg') }}" alt="Shape" class="of h y z/2" />
        <img  src="{{ asset('images/icon/shape-10.svg') }}" alt="Shape" class="h _ aa" />
        <img  src="{{ asset('images/icon/shape-11.svg') }}" alt="Shape" class="of h m ba" />

        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Meet With Our Lovely Mentors`, sectionTitleText: `hungry`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->
        
        <div class="bb ye ki xn vq jb jo">
          <div class="wc qf pn xo zf iq">
          @foreach ($mentors as $mentor)
            <div class="animate_top sg vk rm xm">
                <div class="c rc i z-1 pg">
                    <img class="w-full" src="{{ asset($mentor->photo_url) }}" alt="Blog" />
                    <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                    </div>
                </div>
                <div class="yh">
                    <h4 class="ek tj ml il kk wm xl eq lb">
                    <a href="{{ route('mentors.show', $mentor->id) }}">{{ $mentor->name }} {{ $mentor->surname}} </a>
                    <ul>
                    @foreach ($mentor->modules as $module)
    <li>- {{ $module->title }}</li> <!-- Displays the name of each module taught by the mentor -->
@endforeach

                </ul>
                </h4>
                </div>
            </div>
            @endforeach
          </div>
        </div>


       
        </div>
      </section>
      <!-- ===== Team End ===== -->



    

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
