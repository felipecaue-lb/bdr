<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="ex1">Teste PHP</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php echo $class = $page == 'ex1' ? 'active' : ''; ?>"><a href="ex1">Exercício 1</a></li>
        <li class="<?php echo $class = $page == 'ex2' ? 'active' : ''; ?>"><a href="ex2">Exercício 2</a></li>
        <li class="<?php echo $class = $page == 'ex3' ? 'active' : ''; ?>"><a href="ex3">Exercício 3</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>