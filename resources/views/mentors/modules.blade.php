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
          <img src="{{ asset('images/icon/hero.png') }}" alt="Woman" class="h q r ua" />
        </div>
        
        <!-- Hero Content -->
        <div class="bb ze ki xn 2xl:ud-px-0">
          <div class="tc _o">
            <div class="animate_left jn/2">

              <div class="container">



              <h1 class="fk vj zp or kk wm wb">Assign Modules for {{ $mentor->name }}</h1>
              
                

              <h1></h1>
    <form action="{{ route('mentors.update.modules', $mentor->id) }}" method="POST">
            <label for="modules">Select Modules:</label>
        @csrf
        <div class="form-group">
            <select multiple class="form-control" id="module_id" name="module_id[]">
            @foreach($modules as $module)
            <div>
                <input type="checkbox" name="modules[]" value="{{ $module->id }}" {{ $mentor->modules->contains($module->id) ? 'checked' : '' }}>
                <label>{{ $module->title }}</label>
            </div>
        @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Modules</button>
    </form>
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
