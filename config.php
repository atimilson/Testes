<?php
    header('Content-Type: application/json');

    Class Config{

        public function cadastrar(){
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            return 'Seu Estado é '.$estado.' Sua Cidade é '.$cidade;
        }

    }
    $config = new Config();
    $result = $config->cadastrar();
    echo json_encode($result);

    // $estado = $_POST['estado'];
    // $cidade = $_POST['cidade'];
    // echo json_encode('Seu Estado é '.$estado.' Sua Cidade é '.$cidade.'');

    

  


    


