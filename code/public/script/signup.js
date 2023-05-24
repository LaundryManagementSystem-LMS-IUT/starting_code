let passwordValid=false;
let confirmPasswordValid=false;

function passwordValidator(){
  let errorPassword=document.getElementById("errorPassword");
  let password=document.getElementById('password').value;
  let buttonRegister=document.getElementById('buttonRegister');
  let confirmPassword=document.getElementById('confirmPassword').value;
  let password_message = []
    if (password.length >= 8) {
        let charPresentSmall = false
        let charPresentBig = false
        let numPresent = false
        let symbolPresent = false
        for (let i = 0; i < password.length; i++) {
            if (password.charAt(i) >= 'A' && password.charAt(i) <= 'Z') {
                charPresentBig = true
            }
            else if (password.charAt(i) >= 'a' && password.charAt(i) <= 'z') {
                charPresentSmall = true
            }
            else if (password.charAt(i) >= '0' && password.charAt(i) <= '9') {
                numPresent = true
            }
            else if ((password.charAt(i) >= ' ' && password.charAt(i) < '9') || (password.charAt(i) > '9' && password.charAt(i) < 'A') || (password.charAt(i) > 'Z' && password.charAt(i) < 'a') || (password.charAt(i) > 'z' && password.charAt(i) <= '~')) {
                symbolPresent = true
            }
            else {
                continue
            }
        }
        for(let i=0;i<password.length;i++){
            if(password.charAt(i)==='(' || password.charAt(i)===')' || password.charAt(i)==='\'' || password.charAt(i)==='\"' || password.charAt(i)===';' || password.charAt(i)==='='||password.charAt(i)==='\\'){
                messages.push('Please do not enter (,),\',\",=,;,\\ in the password input fields')
            }
        }
        if (charPresentSmall === false || charPresentBig === false || numPresent === false || symbolPresent === false) {
            password_message.push("Weak Password")
        }

    }
    else {
        password_message.push('Weak Password')
    }
    if (password_message.length > 0) {
        errorPassword.style.display = "block"
        errorPassword.innerText = password_message.join(', ')
        buttonRegister.disabled=true;
        passwordValid=false;
    }
    else{
      errorPassword.style.display = "none";
      passwordValid=true;
      if(password!==confirmPassword){
        confirmPasswordValidator();
      }
      if(passwordValid===true && confirmPasswordValid===true){
        buttonRegister.disabled=false;
      }
    }
}

function confirmPasswordValidator(){
  let errorPassword=document.getElementById('confirmErrorPassword');
  let confirmPassword=document.getElementById('confirmPassword').value;
  let password=document.getElementById('password').value;
  let buttonRegister=document.getElementById('buttonRegister');
  if(password!==confirmPassword){
    errorPassword.style.display = "block"
        errorPassword.innerText = "Passwords do not match";
        buttonRegister.disabled=true;
        confirmPasswordValid=false;
  }
  else{
    errorPassword.style.display = "none";
    confirmPasswordValid=true;
    if(passwordValid===true && confirmPasswordValid===true){
      buttonRegister.disabled=false;
    }
  }

}