<?php

class NamesAPI {
    private $config;
    private $apiUrl = 'https://namesapi.online/api';
    
    public function __construct($configFile = 'config.php') {
        $this->loadConfig($configFile);
    }
    
    private function loadConfig($configFile) {
        if (!file_exists($configFile)) {
            throw new Exception('Config file not found');
        }
        
        $this->config = require $configFile;
    }
    
    public function getGender($name) {
        $url = $this->apiUrl;
        
        $data = [
            'name' => $name
        ];
        
        $headers = [
            'Content-Type: application/json',
            'API-Key: ' . $this->config['api_key']
        ];
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);
        
        if ($httpCode === 200) {
            $result = json_decode($response, true);
            return [
                'gender' => $result['gender'],
                'probability' => $result['probability']
            ];
        } else {
            return [
                'gender' => 'Unknown',
                'probability' => null
            ];
        }
    }
}

?>
