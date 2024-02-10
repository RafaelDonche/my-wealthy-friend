<?php
namespace App\Services;

class AlterarValorVenda {

    public static function validar($quantidade_atual, $valor_novo, $valor_anterior) {

        if (!is_numeric($quantidade_atual)) {
            return false;
        }if (!is_numeric($valor_novo)) {
            return false;
        }if (!is_numeric($valor_anterior)) {
            return false;
        }

        $diferenca = $valor_anterior - $valor_novo;

        if (strval($diferenca) < 0) {
            if (strval($quantidade_atual) < abs($diferenca)) {
                return false;
            }else {
                return true;
            }
        }else {
            return true;
        }

    }
}
