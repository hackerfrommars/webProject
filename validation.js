// this is for registration
function validateForm(){
    var username = document.forms["registration"]["username"].value;
    var email = document.forms["registration"]["eMail"].value;
    var password = document.forms["registration"]["password"].value;
    var rePassword = document.forms["registration"]["rePassword"].value;
// Username validation
// working
    if (!validateUname(username)){
      alert("Username should be only english alphabet letters and numbers");
      return false;
    }
// Email validations
// working
    if(!validateEmail(email)){
      alert("Wrong email address");
      return false;
    }
// Password validation
// working
    if (!validatePass(password)){
      alert("Password lenght must be at least 6 symbols and should not exceed 18 symbols");
      return false;
    }
// Re Password validation
// working
    if(password != rePassword){
      alert("passwords are not the same");
      return false;
    }
    return true;
}
// -> for login
function validateLogin(){
  var username = document.forms["login"]["username"].value;
  var password = document.forms["login"]["password"].value;
  if (!validateUname(username)){
    alert("Username should be only english alphabet letters and numbers");
    return false;
  }
  if (!validatePass(password)){
    alert("Password lenght must be at least 6 symbols and should not exceed 18 symbols");
    return false;
  }
  return true;
}
function validateUname(username){
    var re = /^[a-zA-Z0-9]{1,16}$/;
    if (re.test(username)){
        return true;
    }
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validatePass(password){
  if (password.length > 18 || password.length < 6){
    return false;
  }
  else{
    return true;
  }
}
