<section class="container">
    <div class="jumbotron">
        <h1>Exercício 2</h1>
        <p>Refatore o código abaixo, fazendo as alterações que julgar necessário.</p>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-header">Antes</h3>
            
            <pre>
            &lt;?

                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    header("Location: http://www.google.com");
                    exit();
                } elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
                    header("Location: http://www.google.com");
                    exit();
                }
            </pre>
        </div>
        
        <div class="col-sm-12">
            <h3 class="page-header">Depois</h3>
            
            <pre>
            &lt;?php

                if ( (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) ) || 
                   ( (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) ) {
                    header("Location: http://www.google.com");
                }
            </pre>
        </div>
    </div>
</section>