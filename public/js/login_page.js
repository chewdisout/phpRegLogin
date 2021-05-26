const form = document.getElementsByTagName('form')[0]
form.innerHTML = '' +
    '<div class="input-field">\n' +
    '  <label for="email">Email: <span class="error"></span></label>\n' +
    '  <input type="email" name="email" id="email" autocomplete="off" required>\n' +
    '</div>\n' +
    '<div class="input-field">\n' +
    '  <label for="password">Password:<span class="error"></span></label>\n' +
    '  <input type="password" name="password" id="password" required>\n' +
    '</div>\n' +
    ' <div class="error" id="error"></div>' +
    '<div class="btn">\n' +
    '  <button id="submitLogin" type="submit">Login <span></span></button>\n' +
    '  <a href="/register">Register <span></span></a>\n' +
    '</div>'
;

const loginBtn = document.getElementById("submitLogin")
const errorFields = document.getElementsByClassName("error")

loginBtn.addEventListener('click', (e) => {
    e.preventDefault()
    let formArray = $('form').serializeArray()
    let data = new InputData(formArray)
    let inputValue = data.isEmpty()

    if(inputValue[0] !== -1) return errorFields[inputValue[0]].innerHTML = inputValue[1].toString()

    for (let i = 0; i < errorFields.length; i++) {
        errorFields[i].innerHTML = ""
    }

    if(!data.validateEmail(formArray[0].value)) return errorFields[0].innerHTML = "*Invalid email"

    $.ajax({
        type: "POST",
        url: "../includes/controllers/login.controller.php",
        data: {
            data: formArray
        },
        success: (res) => {
            if(res === "Success login!") location.href = '/'
            else document.getElementById('error').innerHTML = res
        }
    })

})