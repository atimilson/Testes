<?php
    //header('Content-Type: application/json');
/*
    Class Config{

        public function cadastrar(){
            $estado = $_POST['uf'];
            $cidade = $_POST['cid'];
            echo json_encode('Seu Estado é '.$estado.' Sua Cidade é '.$cidade.'');
        }

    }
*/
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    echo json_encode('Seu Estado é '.$estado.' Sua Cidade é '.$cidade.'');

    

  


    


