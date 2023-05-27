import requests

class NamesAPI:
    def __init__(self):
        self.api_url = 'https://namesapi.online/api'
        self.api_key = self.getApiKey()

    def getApiKey(self):
        # Import API key from config.py
        from config import api_key
        return api_key

    def getGender(self, name):
        url = f'{self.api_url}'
        headers = {
            'Content-Type': 'application/json',
            'X-API-Key': self.api_key
        }
        data = {
            'name': name
        }
        
        response = requests.post(url, headers=headers, json=data)
        if response.status_code != 200:
            return {
                'error': 'An error occured while calling the NamesAPI'
            }
        response_data = response.json()

        return response_data
       
            

        
