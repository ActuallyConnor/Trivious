<button class="hamburger hamburger--squeeze" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
<ul class="main-menu">
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/projects') }}">Projects</a>
        <ul class="sub-menu">
            <li><a href="{{ url('/projects/blockdown') }}">BlockDown</a></li>
            <li><a href="{{ url('/projects/orpheum-tedx-2019') }}">Orpheum & TedX 2019</a></li>
            <li><a href="{{ url('/projects/barco-rollo') }}">Barco Rollo</a></li>
        </ul>
    </li>
    <li><a href="https://github.com/actuallyconnor" target="_blank">GitHub</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
</ul>
