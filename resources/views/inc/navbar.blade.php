<nav class="navbar navbar-inverse">
  <div class="container">
    <a class="navbar-brand" href="home"> <strong> <span style="color:white; font-size:20px;">B</span>asics </strong> </a>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li @yield('class_act_home')><a href="home"> Home </a></li>
        <li @yield('class_act_about')><a href="about"> About </a></li>
        <li @yield('class_act_contact')><a href="contact"> Contact </a></li>
      </ul>
    </div>
  </div>
</nav>
