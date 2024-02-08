const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
erroText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
  e.preventDefault();
}

continueBtn.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        if(data == "success") {
            location.href = "user.php"
        }else{
            erroText.textContent = data;
            erroText.style.display = "block";
        }
      }
    }
  }

  let formData = new FormData(form);
  xhr.send(formData);
}