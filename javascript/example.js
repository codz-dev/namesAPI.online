const NamesAPI = require('./NamesAPI');

// Create an instance of the NamesAPI class
const namesAPI = new NamesAPI();

// Use the getGender method to get the gender and probability of a name
const name = 'El Yazid';
namesAPI.getGender(name)
  .then(result => {
    // Display the result
    console.log('Name:', name);
    console.log('Gender:', result.gender);
    console.log('Probability:', result.probability);
  })
  .catch(error => {
    console.error('An error occurred:', error.message);
  });
