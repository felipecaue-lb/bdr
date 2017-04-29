<section class="container">
    <div class="jumbotron">
        <h1>Exercício 3</h1>
        <p>Refatore o código abaixo, fazendo as alterações que julgar necessário.</p>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-header">Antes</h3>
            
            <pre>
                &lt;?php

                class MyUserClass
                {
                    public function getUserList()
                    {
                        $dbconn = new DatabaseConnection('localhost','user','password');
                        $results = $dbconn->query('select name from user');

                        sort($results);

                        return $results;
                    }
                }
            </pre>
        </div>
        
        <div class="col-sm-12">
            <h3 class="page-header">Depois</h3>
            
            <pre>
                &lt;?php

                    class MyUserClass
                    {
                        
                        private host = 'localhost';
                        private user = 'user';
                        private pass = 'password';
                        
                        private dbconn;
                        
                        private function __construct()
                        {
                            $this->dbconn = new DatabaseConnection(
                                $this->localhost,
                                $this->user,
                                $this->password
                            );
                        }
                        
                        public function getUserList()
                        {
                            
                            $results = $this->dbconn->query('SELECT name FROM user');

                            return sort($results);
                        }
                    }
            </pre>
        </div>
    </div>
</section>