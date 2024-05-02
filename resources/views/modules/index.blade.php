<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module List</title>
</head>
<body>
    <h1>Modules</h1>
    <ul>
        @foreach ($modules as $module)
            <li>
                {{ $module->title }} - Created at: {{ $module->created_at }}
            </li>
        @endforeach
    </ul>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data-Mai ? | Your World My World</title>
  <link rel="icon" href="{{ asset('images/icon/monster.png') }}"><link rel="stylesheet" href="{{ asset('css/style.css') }}"></head>
<!-- <body>
    <h1>Modules</h1>
    <ul>
        @foreach ($modules as $module)
            <li>
                <strong>{{ $module->title }}</strong>
                <p>{{ $module->content }}</p>
                <img src="{{ asset($module->img_url) }}" alt="Image for {{ $module->title }}" style="width:100px; height:auto;">
                <br>
                <small>Created at: {{ $module->created_at }}</small>
            </li>
        @endforeach
    </ul>
</body> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Base - Tailwind CSS Startup Template</title>
  <link rel="icon" href="favicon.ico"><link href="style.css" rel="stylesheet"></head>
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

      <!-- Hamburger Toggle BTN -->
      <button class="po rc" @click="navigationOpen = !navigationOpen">
        <span class="rc i pf re pd">
          <span class="du-block h q vd yc">
            <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
          </span>
          <span class="du-block h q vd yc lf">
            <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
            <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
          </span>
        </span>
      </button>
      <!-- Hamburger Toggle BTN -->
    </div>

    <div
      class="vd wo/4 sd qo f ho oo wf yf"
      :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }"
    >
    <x-navigation/>
      

     
    </div>
  </div>
</header>

    <!-- ===== Header End ===== -->

    <main>
      

      <!-- ===== Projects Start ===== -->
      <section class="pg pj vp mr oj wp nr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `We Offer Great Digestable Content.`, sectionTitleText: `With a kind mentor.`}"
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

       
      </section>
      <!-- ===== Projects End ===== -->

      <!-- ===== Testimonials Start ===== -->
      <section class="hj rp hr">
        <!-- Section Title Start -->
        
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

      <!-- ===== Blog Start ===== -->
      

        <div class="bb ye ki xn vq jb jo">
          <div class="wc qf pn xo zf iq">
          @foreach ($modules as $module)
            <div class="animate_top sg vk rm xm">
                <div class="c rc i z-1 pg">
                    <img class="w-full" src="{{ asset($module->img_url) }}" alt="Blog" />
                    {{ $module->content }}
                    <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                    </div>
                </div>
                <div class="yh">
                    <div class="tc uf wf ag jq">
                        <div class="tc wf ag">
                            <img src="{{ asset('images/icon/icon-calender.svg') }}" alt="Calendar" />
                            <p>{{ $module->created_at->format('d M, Y') }}</p>
                        </div>
                    </div>
                    <h4 class="ek tj ml il kk wm xl eq lb">
                    <a href="{{ route('modules.show', $module->id) }}">{{ $module->title}} </a>
                </h4>
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- ===== Blog End ===== -->

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

</html>
