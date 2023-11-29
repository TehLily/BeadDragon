const express = require('express');
const cors = require('cors');
const app = express();
const port = 3000;

app.use(cors());

app.use(express.urlencoded({ extedned: false}));

app.post('/upload', function(req, rex=s) {

    const params = new URLSearchParams({
        secret: '6LdoZ8coAAAAAGGMuVYXUh_nM0Iwu-MUMRWUT-2e',
        response: req.body['g-recaptcha-response'],
        remoteip: req.ip,
    });

    fetch('https://recaptchaenterprise.googleapis.com/v1/projects/first-recaptcha-1698189268326/assessments', {
        method: "POST",
        body: params,
    })

    .then(res => res.json())
    .then(data => {
        if(data.success) {
            res.json({ captchaSuccss: true});
        } else {
            res.json({ captchaSuccss: false });
        }
    })
});

app.listen(port, () => {
    console.log(`App running on port ${port}`);
});