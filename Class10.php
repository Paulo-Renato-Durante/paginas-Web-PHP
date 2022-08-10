<?php
   class Usuario{
       private $pastaArquivo = "usuariosArquivos/";
 
       public $Nome;
       public $Email;
       public $Telefone;
       public $Empresa;
       public $Assunto;
       public $Mensagem;
 
       public function set_Nome($valor){
           $this->Nome = $valor;
       }
       public function get_Nome(){
           return $this->Nome;
       }
 
       public function set_Email($valor){
           $this->Email = $valor;
       }
       public function get_Email(){
           return $this->Email;
       }
 
       public function set_Telefone($valor){
           $this->Telefone = $valor;
       }
       public function get_Telefone(){
           return $this->Telefone;
       }
 
       public function set_Empresa($valor){
           $this->Empresa = $valor;
       }
       public function get_Empresa(){
           return $this->Empresa;
       }
 
       public function set_Assunto($valor){
           $this->Assunto = $valor;
       }
       public function get_Assunto(){
           return $this->Assunto;
       }
 
       public function set_Mensagem($valor){
           $this->Mensagem = $valor;
       }
       public function get_Mensagem(){
           return $this->Mensagem;
       }
 
       public function CriarTxt(){
           $hoje = date('d-m-y');
           $caminho = $this->pastaArquivo.$hoje.$this->get_Email().".br".".txt";
           
           $Arquivo = fopen($caminho, 'w');
         
           fwrite($Arquivo, "Nome: <br/>");
           fwrite($Arquivo, "$this->Nome <br/><br/>");
 
           fwrite($Arquivo, "Email: <br/>");
           fwrite($Arquivo, "$this->Email <br/><br/>");
 
           fwrite($Arquivo, "Telefone: <br/>");
           fwrite($Arquivo, "$this->Telefone <br/><br/>");
 
           fwrite($Arquivo, "Empresa: <br/>");
           fwrite($Arquivo, "$this->Empresa <br/><br/>");
 
           fwrite($Arquivo, "Assunto: <br/>");
           fwrite($Arquivo, "$this->Assunto <br/><br/>");
           
           fwrite($Arquivo, "Mensagem: <br/>");
           fwrite($Arquivo, "$this->Mensagem <br/><br/>");
       
           fclose($Arquivo);
 
           return $caminho;
       }
 
       public function AbrirTxt($valor){
            $dados = file_get_contents($valor);
            return $dados;
       }
   }
?>
