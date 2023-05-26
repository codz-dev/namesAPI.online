import requests

class NamesAPI:
    def __init__(self):
        self.api_url = 'https://namesapi.online/api'
        self.api_key = self.get_api_key()

    def get_api_key(self):
        # Importer la clé d'API depuis le fichier de configuration
        from config import api_key
        return api_key

    def get_gender(self, name):
        url = f'{self.api_url}/gender'
        headers = {
            'Content-Type': 'application/json',
            'API-Key': self.api_key
        }
        data = {
            'name': name
        }

        response = requests.post(url, headers=headers, json=data)
        response_data = response.json()

        return response_data
