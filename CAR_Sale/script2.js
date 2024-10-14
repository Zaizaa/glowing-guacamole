const form = document.querySelector("form");
const name = document.getElementById("name");
const email = document.getElementById("email");
const subject = document.getElementById("subject");
const message = document.getElementById("message");

function sendEmail() {
    const bodyMessage = `Full Name: ${name.value}<br>Email: ${email.value}<br>Subject: ${subject.value}<br>Message: ${message.value}`;
    
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "hadadiasalma11@gmail.com",
        Password : "E5B875B00DE8D2A715B66B4E564328AAF51F",
        To : 'hadadiasalma11@gmail.com',
        From : "hadadiasalma11@gmail.com",
        Subject : subject.value,
        Body : bodyMessage
    }).then(message => {
        if(message=="OK"){
            Swal.fire({
                title: "Success!",
                text: "Message sent successfully!",
                icon: "success"
              });
        }
        //alert(message);
    });
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    sendEmail();
});
