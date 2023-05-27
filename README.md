
# NamesAPI.online 
<img src="https://namesapi.online/logo.png" height="100">



NamesAPI.online allows you to predict the gender associated with a given name. By utilizing advanced algorithms and machine learning models, the API can accurately determine whether a name is typically associated with males or females. This feature is valuable for applications that require gender-based analysis or personalization.



## API Reference

#### Get method

```http
  GET /api
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `key` | `string` | **Required**. Your API key |
| `name` | `string` | **Required**. Your API key |


#### Post method

```http
 Post /api
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required**. Your API key |

| Header | Description     | 
| :-------- | :------- | 
| `Content-type` | **Required**. application/json
| `API-Key` |  **Required**. Your API key







## Usage/Examples

namesAPI.py

```python
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
      
```

config.py

```python
api_key = 'YOUR_API_KEY'  # You have to replace this with your API key !
```

example.py - How to get the gender and the probabiity

```python
from namesAPI import NamesAPI

# Create an instance of the NamesAPI class
namesAPI = NamesAPI()

# Use the getGender method to get the gender and probability of a name
name = 'Achour'
result = namesAPI.getGender(name)
try:
    print('Gender:', result['gender'])
    print('Probability:', result['probability'])
except KeyError:
    print('Error:', result['error'])

# {"gender":"m","name":"achour","probability":1.0}
```



