<section class="container">
    <div class="jumbotron">
        <h1>Exercício 1</h1>
        <p>
            Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 
            imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para 
            números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.
        </p>
    </div>
</section>

<section class="container">
	<div class="col-sm-4">
        <?php
            
            $result = '';
            
            for ($i=1; $i<=100; $i++) {
                
                if ($i%3 == 0 && $i%5 == 0)
                    $result .= '<span class="label label-success">FizzBuzz</span>';
                elseif ($i%3 == 0)
                    $result .= '<span class="label label-primary">Fizz</span>';
                elseif ($i%5 == 0)
                    $result .= '<span class="label label-danger">Buzz</span>';
                else
                    $result .= '<span class="label label-default">'.$i.'</span>';
                
                if ($i%10 == 0)
                    $result .= '<br />';
                
            }
            
            echo $result;
            
        ?>
    </div>
    
    <div class="col-sm-8">
        <pre>
            &lt;?php
                
                $result = '';
                
                for ($i=1; $i&lt;=100; $i++) {
                    
                    if ($i%3 == 0 && $i%5 == 0)
                        $result .= '&lt;span class="label label-success"&gt;FizzBuzz&lt;/span&gt;';
                    elseif ($i%3 == 0)
                        $result .= '&lt;span class="label label-primary"&gt;Fizz&lt;/span&gt;';
                    elseif ($i%5 == 0)
                        $result .= '&lt;span class="label label-danger"&gt;Buzz&lt;/span&gt;';
                    else
                        $result .= '&lt;span class="label label-default"&gt;'.$i.'&lt;/span&gt;';
                    
                    if ($i%10 == 0)
                        $result .= '&lt;br /&gt;';
                    
                }
                
                echo $result;
                
            ?&gt;
        </pre>
    </div>
</section>