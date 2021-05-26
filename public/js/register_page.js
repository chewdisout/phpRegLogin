const form = document.getElementsByTagName('form')
form[0].innerHTML =
    `
              <div class="user-details">
                <div class="input-field">
                    <span class="details">Name <span class="error"></span></span>
                    <input id="name" name="name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-field">
                    <span class="details">Surname <span class="error"></span></span>
                    <input id="surname" name="surname" type="text" placeholder="Enter your surname" required>
                </div>
                <div class="input-field">
                    <span class="details">Email <span class="error"></span></span>
                    <input id="email" name="email" type="email" placeholder="Enter your email" required>
                </div>
                <div class="input-field">
                    <span class="details">Username <span class="error"></span></span>
                    <input id="username" name="username" type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-field">
                    <span class="details">Password <span class="error"></span></span>
                    <input id="password" name="password" type="password" placeholder="Enter your password" required>
                </div>
                <div class="input-field">
                    <span class="details">Confirm password <span class="error"></span></span>
                    <input id="passwordRp" name="passwordRp" type="password" placeholder="Confirm your password" required>
                </div>               
                <div class="button">
                    <input id="regSubmit" type="submit" value="Register">
                </div>
                <div class="error" id="error"></div>
              </div>
    `

const regBtn = document.getElementById('regSubmit')
const errorFields = document.getElementsByClassName('error')
regBtn.addEventListener('click', (e) => {
    e.preventDefault()

    let formArray = $('form').serializeArray()
    let data = new InputData(formArray)
    let inputValue = data.isEmpty()

    for (let i = 0; i < errorFields.length; i++) {
        errorFields[i].innerHTML = ""
    }

    if(inputValue[0] !== -1) return errorFields[inputValue[0]].innerHTML = inputValue[1].toString()

    if(!data.validateLetters(formArray[0].value)) return errorFields[0].innerHTML = "*Incorrect format"

    if(!data.validateLetters(formArray[1].value)) return errorFields[1].innerHTML = "*Incorrect format"

    if(!data.validateEmail(formArray[2].value)) return errorFields[2].innerHTML = "*Incorrect format"

    if(!data.validateText(formArray[3].value)) return errorFields[3].innerHTML = "*Incorrect format"

    if(formArray[4].value.length < 5) return errorFields[4].innerHTML = "*Too short password"

    if(formArray[4].value !== formArray[5].value) return errorFields[5].innerHTML = "*Password doesn't match"

    $.ajax({
        type: "POST",
        url: "../includes/controllers/register.controller.php",
        data: {
            name: formArray[0].value,
            surname: formArray[1].value,
            email: formArray[2].value,
            username: formArray[3].value,
            password: formArray[4].value,
            passwordRp: formArray[5].value
        },
        success: (res) => {
            if(res === "Added") location.href = '/'
            else document.getElementById('error').innerText = res
        }
    })
})

