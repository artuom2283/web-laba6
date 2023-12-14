"use strict";

let saveToFile = function () {

  let inp_personality;
  let inp_username;
  let inp_usersurname;
  let inp_age;
  let inp_DOB;
  let inp_сountry;
  let inp_phone;
  let inp_emailuser;
  let inp_userpassword;

  inp_username = document.querySelector('#username');
  inp_usersurname = document.querySelector('#usersurname');
  inp_age = document.querySelector('#age');
  inp_DOB = document.querySelector('#DOB');
  inp_сountry = document.querySelector('#countries');
  inp_phone = document.querySelector('#phone');
  inp_emailuser = document.querySelector('#emailuser');
  inp_userpassword = document.querySelector('#userpassword');
  inp_personality = document.querySelector('input[name="pick"]:checked'); 

  document.querySelector('#submit1').addEventListener('click', function (){
 
    let params = 'username=' + inp_username.value + '&' + 'usersurname=' + inp_usersurname.value + '&' + 'age=' + inp_age.value + '&'+ 'DOB=' + inp_DOB.value + '&'+ 'personality=' + inp_personality.value + '&'+ 'сountry=' + inp_сountry.value +  '&' + 'phone=' + inp_phone.value + '&'+ 'emailuser=' + inp_emailuser.value + '&'+ 'userpassword=' + inp_userpassword.value;
  
    console.log(params);
    postAJAX(params);
})
}

function postAJAX(params) {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log(xhr.responseText);
    }
  };

  xhr.open('POST', 'form.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send(params);
}

