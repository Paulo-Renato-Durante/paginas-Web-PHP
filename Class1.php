<?php
	class Usuario{
		private $SalarioBruto;
		private $ValorHoraExtra;
		private $QuantidadeHoras;
		private $SalarioLiquido;
		private $INSS;



		public function setSalarioBruto ($valor1)
		{
			$this-> SalarioBruto = $valor1;
		}
		public function setValorHoraExtra($valor)
		{
			$this->setValorHoraextra = $valor;
		}
		public function setQuantidadeHoras($valor)
		{
			$this->QuantidadeHoras = $valor;
		}




		
		public function  INSS($valor1, $valor2, $valor3)
		{
			$this->INSS=($valor1+($valor2*$valor3))*0.08;
		}
		public function SalarioLiquido($valor1, $valor2, $valor3, $valor4)
		{
			$this->SalarioLiquido = ($valor1+($valor2*$valor3))-$valor4;
	   	}
   		public function getSalarioBruto()
		{
			return $this-> SalarioBruto;
		}
		public function getValorHoraExtra()
		{
			return $this->ValorHoraExtra ;
			
		}
		public function getQuantidadeHoras()
		{
			return $this->QuantidadeHoras ;
			
		}
		public function getSalarioLiquido()
		{
			return $this-> SalarioLiquido;
		}
		public function getINSS()
		{
			return $this->INSS ;
			
		}
	}
?>