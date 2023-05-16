<?php
	
	class calculator
	{
		public $a = false;
		public $b = false;
		public $action = false;
		public $error = array();
		
		public function __construct()
		{
			$this->setA( $_REQUEST['a'] );
			$this->setB( $_REQUEST['b'] );
			$this->setAction( $_REQUEST['action'] );
		}
		
		public function init()
		{
			if( !$this->action ) {
				return 'Введите данные';
			}
			
			$this->check( $this->a, 'A' );
			$this->check( $this->b, 'B' );
			
			if( count( $this->getErrors() ) > 0 ) {
				foreach( $this->error as $error ) {
					$res .= $error . "<br>";
				}
				return $res;
			}
			
			switch( $this->action ) {
				case 'plus':
					return $this->plus( $this->a, $this->b );
				case'minus':
					return $this->minus( $this->a, $this->b );
				case 'multiply':
					return $this->multiply( $this->a, $this->b );
				case 'divide':
					return $this->divide( $this->a, $this->b );
				case 'equal':
					return $this->equal( $this->a, $this->b );
				default:
					return "Неизвестная операция";
			}
			
		}
		
		public function setError( string $error )
		{
			$this->error[] = $error;
		}
		
		public function getErrors()
		{
			return $this->error;
		}
		
		public function check( $x, $name )
		{
			return ( $x >= 0 ) ?: $this->setError( "Invalid input " . $name );
		}
		
		public function setA( $a )
		{
			$this->a = $a;
		}
		
		public function setB( $b )
		{
			$this->b = $b;
		}
		
		public function setAction( $action = false )
		{
			$this->action = ( !$action ) ? false : htmlspecialchars( $action );
		}
		
		public function plus( $a, $b )
		{
			return $a + $b;
		}
		
		public function minus( $a, $b )
		{
			return $a - $b;
		}
		
		public function multiply( $a, $b )
		{
			return $a * $b;
		}
		
		public function divide( $a, $b )
		{
			return ( $b == 0 ) ? "Invalid input B" : $a / $b;
		}
		
		public function equal( $a, $b )
		{
			return ($a == $b)?"A = B":"A != B";
		}
	}
