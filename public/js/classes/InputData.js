class InputData {

    constructor(form) {
        this.form = form
        this.mistakeArray = [-1, ""]
    }

    isEmpty(){
        for(let i = 0; i < this.form.length; i++){
            if(this.form[i].value === "") {
                this.mistakeArray = [i, "*Required field"]
                break
            }
        }
        return this.mistakeArray
    }

    validateLetters(text){
        let re = /^[a-zA-Z ]*$/
        return re.test(text)
    }

    validateText(text){
        let re = /[^A-Za-z0-9]*$/
        return re.test(text)
    }

    validateEmail(email){
        let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        return re.test(email)
    }

}