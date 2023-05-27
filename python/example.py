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

