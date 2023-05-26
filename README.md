
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

```python
import requests
import json

url = 'https://namesapi.online/api'
api_key = '<API_KEY>'
name = 'Ahmed'

data = {
    'name': name
}

headers = {
    'Content-Type': 'application/json',
    'API-Key': api_key
}

response = requests.post(url, headers=headers, json=data)
response_data = response.json()

print(response_data)

# {"gender":"m","name":"ahmed","probability":1.0}

```

