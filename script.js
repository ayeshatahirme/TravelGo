window.addEventListener('load', function(){
    document.querySelector('input[type="file"]').addEventListener('change', function(){
        // check if images are uploaded
        if(this.files && this.files[0]){
            var image = document.getElementById("avatar");
            image.src = URL.createObjectURL(this.files[0]);
            image.onload = imageLoaded;
        }
    })
})

function imageLoaded(e){
    alert(e);
}

function passvalue() {
    const fullname = document.getElementById("fullname").value;

    sessionStorage.setItem("FULLNAME", fullname);
    return;
}

// moving name to next page
window.addEventListener('load', () => {
    const fullname = sessionStorage.getItem('FULLNAME');

    document.getElementById('result-fullname').innerHTML = fullname;
})

// Open Side Menu
function openSideMenu() {
    document.getElementById("mySideMenu").style.width="250px";
}

// Close Side Menu
function closeSideMenu() {
    document.getElementById("mySideMenu").style.width="0px";
}

// // Change text color
// function changeTextColor() {
//     document.getElementById('change').style.color = 'blue';
// }

// oninput function
// function onInputFunction() {
//     var temp = document.getElementById('myInput').value;
//     document.getElementById('output').innerHTML = 'You are searching: ' + temp;
// }