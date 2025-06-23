<?php
class Rota{
    private $controlador = "Paginas";
    public function __construct(){
        //echo 'criando a primeira classe<br>';
        $this->url();
        var_dump($this);
    }//fim da função construtor    

    private function url(){
        //echo 'carregando url';
        //echo $_GET['url'];
        //o filtro FILTER_SANITIZE_URL remove todos os caracteres ilegais de uma URL
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        //verifica se a url existe
        if(isset($url)){

            //trim - Retira espaço no início e final de uma string
            //rtrim - Retira espaço em branco (ou outros caracteres) do final da string
            //explode - divide uma string em strings, e retorna um array
            $url = explode('/', $url);
            return $url; //retorna url
        }//fim do if 
        
    }//fim da função url

}//fim da classe Rota
