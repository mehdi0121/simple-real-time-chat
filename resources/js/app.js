require('./bootstrap');

const messages_el=document.getElementById("messages");
const username_input=document.getElementById("username");
const message_input=document.getElementById("messages_input");
const messages_form=document.getElementById("messages_form");

messages_form.addEventListener('submit',function (e) {
    e.preventDefault();
    let has_errors=false;

    if (username_input.value="") {
        alert("please enter a username")
        has_errors=true;
    }
    if (message_input.value="") {
        alert("please enter a message")
        has_errors=true;
    }

    if (has_errors) {
        return ;
    }


    const option



})