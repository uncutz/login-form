const sendLoginData = function (payload) {
    return fetch('/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(payload)
    })
}

const Api = {
    sendLoginData
}

export default Api;