<?php

    class MY_API {
        private $key = null;
        private $error = false;

        function __construct($key = null){
            if (!empty ($key)) $this->key = $key;
        }

        function request ( $endpoint = '', $params = array() ){
            $uri = "https://api.hgbrasil.com/" . $endpoint . "?key=" . $this->key . "&format=0";

        if ( is_array($params)){
            foreach ($params as $key => $value){
                if (empty($value)) continue;
                $uri .=$key . '=' . urlencode($value) . '&';
            }

        }else {
            $this->error = false;
            return true;
        }
    }

    function is_error (){
        return $this->error;
    }

    function dolar_cot(){
        $data = $this->request('finance/quotations');

        if(!empty($data) && is_array($data['results']['currencies']['USD']) ) {
            $this->error = false;
            return $data['results']['currencies']['USD'];
        }else {
            $this->error = true;
            return false;
            }
        }

        function libra_cot(){
            $data = $this->request('finance/quotations');
    
            if(!empty($data) && is_array($data['results']['currencies']['GBR']) ) {
                $this->error = false;
                return $data['results']['currencies']['GBR'];
            }
        }
            function euro_cot(){
                $data = $this->request('finance/quotations');
        
                if(!empty($data) && is_array($data['results']['currencies']['EUR']) ) {
                    $this->error = false;
                    return $data['results']['currencies']['EUR'];
                }
            }
                function bitcoin_cot(){
                    $data = $this->request('finance/quotations');
            
                    if(!empty($data) && is_array($data['results']['currencies']['BTC']) ) {
                        $this->error = false;
                        return $data['results']['currencies']['BTC'];
                    }
                }
                function ibovespa_cot(){
                    $data = $this->request('finance/quotations');
            
                    if(!empty($data) && is_array($data['results']['currencies']['Ibovespa']) ) {
                        $this->error = false;
                        return $data['results']['currencies']['Ibovespa'];
                    }
                }
       
   
    }
?>