"use strict";

let saveToFile = function () {

  let inp_username;
  let inp_usersurname;
  let inp_age;
  let inp_emailuser;

  inp_username = document.querySelector('#username');
  inp_usersurname = document.querySelector('#usersurname');
  inp_age = document.querySelector('#age');
  inp_emailuser = document.querySelector('#emailuser');

  document.querySelector('#submit1').addEventListener('click', function (){
 
    let params = 'username=' + inp_username.value + '&' + 'usersurname=' + inp_usersurname.value + '&' + 'age=' + inp_age.value  + '&'+ 'emailuser=' + inp_emailuser.value;
  
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

