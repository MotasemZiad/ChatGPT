const request = require('request');
const jar = request.jar();

// Set the login URL
const loginUrl = 'https://example.com/login';

// Set the username and password
const username = 'username';
const password = 'password';

// Set the post fields
const postFields = {
    username: username,
    password: password
};

// Send the login request
request.post({url: loginUrl, form: postFields, jar: jar, followAllRedirects: true}, (err, httpResponse, body) => {
    if (err) {
        console.error(err);
    } else {
        // Send the access request
        request.get({url: 'https://example.com/access', jar: jar, followAllRedirects: true}, (err, httpResponse, body) => {
            if (err) {
                console.error(err);
            } else {
                // Echo the redirected URL
                console.log(httpResponse.request.uri.href);
            }
        });
    }
});
