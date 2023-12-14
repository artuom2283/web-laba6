let value = '';

function handleClick(myRadio){
    if(myRadio.value === "email") {
        value = "mail.php"; //"form.php";
    }
    else if (myRadio.value === "file") {
        value = "form.php";
    } 
    else {
        value = "telegram.php"; 
    }
    console.log('resform_value = '+value);
    let b = document.querySelector("form");
    console.log(b);
    b.setAttribute('action', value);
    
}