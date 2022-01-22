import Api from "./Api.js";

const Login = function () {
    document.querySelector('button').addEventListener('click', function () {
        const email = document.querySelector('#email').value;
        const password = document.querySelector('#password').value;

        if (email && password) {
            const payload = {
                email: email,
                password: password
            }
            Api.sendLoginData(payload);
        }
    })
}

export default Login;