const axios = require('axios');
const config = require('./config');

class NamesAPI {
  constructor() {
    this.api_url = 'https://namesapi.online/api';
    this.api_key = config.api_key;
  }

  getGender(name) {
    const url = `${this.api_url}`;
    const headers = {
      'Content-Type': 'application/json',
      'X-API-Key': this.api_key
    };
    const data = {
      name: name
    };

    return axios.post(url, data, { headers })
      .then(response => response.data)
      .catch(error => {
        throw new Error(`Une erreur s'est produite lors de la requête : ${error.message}`);
      });
  }
}

module.exports = NamesAPI;
