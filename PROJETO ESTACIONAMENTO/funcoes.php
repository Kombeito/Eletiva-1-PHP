<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    function prepararDados(){
        if(!isset($_SESSION['veiculos'])){
            $_SESSION['veiculos'] = [
                1 => ['id'=>1, 'placa'=>'ABC1D23', 'modelo'=>'Gol', 'cor'=>'Prata'],
                2 => ['id'=>2, 'placa'=>'BRA2E45', 'modelo'=>'Civic', 'cor'=>'Preto']
            ];
        }

        if(!isset($_SESSION['clientes'])){
            $_SESSION['clientes'] = [
                1 => ['id'=>1, 'nome'=>'João Pedro', 'telefone'=>'18999990000', 'cpf'=>'123.456.789-00'],
                2 => ['id'=>2, 'nome'=>'Maria Souza', 'telefone'=>'18988880000', 'cpf'=>'987.654.321-00']
            ];
        }

        if(!isset($_SESSION['vagas'])){
            $_SESSION['vagas'] = [
                1 => ['id'=>1, 'numero'=>'A01', 'setor'=>'Coberto', 'status'=>'Livre'],
                2 => ['id'=>2, 'numero'=>'A02', 'setor'=>'Descoberto', 'status'=>'Livre'],
                3 => ['id'=>3, 'numero'=>'B01', 'setor'=>'Moto', 'status'=>'Livre']
            ];
        }

        if(!isset($_SESSION['movimentacoes'])){
            $_SESSION['movimentacoes'] = [];
        }
    }

    function proximoId($lista){
        if(count($lista) == 0){
            return 1;
        }
        return max(array_keys($lista)) + 1;
    }

    function localizar($lista, $id){
        if(isset($lista[$id])){
            return $lista[$id];
        }
        return null;
    }

    function nomeCliente($id){
        if(isset($_SESSION['clientes'][$id])){
            return $_SESSION['clientes'][$id]['nome'];
        }
        return 'Cliente não encontrado';
    }

    function placaVeiculo($id){
        if(isset($_SESSION['veiculos'][$id])){
            return $_SESSION['veiculos'][$id]['placa'] . ' - ' . $_SESSION['veiculos'][$id]['modelo'];
        }
        return 'Veículo não encontrado';
    }

    function numeroVaga($id){
        if(isset($_SESSION['vagas'][$id])){
            return $_SESSION['vagas'][$id]['numero'] . ' - ' . $_SESSION['vagas'][$id]['setor'];
        }
        return 'Vaga não encontrada';
    }

    prepararDados();
?>
