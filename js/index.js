var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
})
const myInput = document.getElementById("floatingInput");
if (myInput.value === "") {
    alert("Vui lòng nhập dữ liệu vào trường này!");
}
const myInput = document.getElementById("floatingPassword");
if (myInput.value === "") {
    alert("Vui lòng nhập dữ liệu vào trường này!");
}
//function formatPhoneNumber
// function formatPhoneNumber() {
//     const phoneNumber = document.getElementById("phone").value;
//     if (phoneNumber.length === 3) {
//         document.getElementById("phone").value = phoneNumber.slice(0, 3) + "-";
//     }
// }