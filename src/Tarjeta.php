<?php

namespace TpFinal;

class Tarjeta implements Tarjeta {
    protected $saldo;
    
    function __construct ($tipodetarjeta) { //Normal o MedioBoleto
        $this->saldo = 0;
	$this->tipotarjeta = $tipotarjeta;
    }
    public function saldo () {
        return $this->saldo;
    }
    
    public function cargarSaldo ( $monto ) {
		if ( $monto < 332 ) {
			$this->saldo += $monto;
			return;
		}
		elseif ( $monto < 624 ) {
			$this->saldo += 388;
			cargarSaldo ( $monto - 332 );
		}
		elseif ( $monto >= 624 ) {
			$this->saldo += 776;
			cargarSaldo ( $monto - 624 );
		}
    }

	public function pagar ( $transporte, $fechayhora )
		if ( is_a ( $transporte, 'Colectivo' ) ) {
			$this-< // aca va lo de el array y todo eso
			
			if ($this->tipotarjeta == "MedioBoleto")
				if (//aca va si fue un trasbordo
					$this->saldo -= 1.6
				else
					$this->saldo -= 4.85
		}
}
