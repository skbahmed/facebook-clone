// FORM ACTIVATION
// var loginForm = document.getElementById("login-form");
//     async function handleSubmit(event) {
//         event.preventDefault();
//         var loginBtn = document.getElementById("login-btn");
//         var data = new FormData(event.target);
//         fetch(event.target.action, {
//             method: loginForm.method,
//             body: data,
//             headers: {
//                 'Accept': 'application/json'
//             }
//         }).then(visit => {
//             loginBtn.value = "network error!";
//             loginForm.reset()
//         },setTimeout(visit => {
//             loginBtn.value = "log in"
//         }, 3000)).catch(error => {
//             loginBtn.value = "try again!"
//         });
//     }
//     loginForm.addEventListener("submit", handleSubmit)