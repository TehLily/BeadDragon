function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
        const token = await grecaptcha.enterprise.execute('6LfjascoAAAAAKTqjsKxCxhCTMRjK18Or9Ae3bML', {action: 'LOGIN'});
        console.log(token);
    // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
    // reCAPTCHA Enterprise to the end user's browser.
    // This token must be validated by creating an assessment.
    // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
    });
}

function onSubmit(token) {
    document.getElementById("demo-form").submit();
    console.log(token);
}

// const form = document.querySelector("#demo-form");

// form.addEventListener('submit', () => {
//     e.preventDefault();

//     const captchaResponse = grecaptcha.getResponse();

//     console.log(captchaResponse);
// });