<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
        
    </body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradient Generator</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body id="output-color">
        <input type="text" id="output-code" readonly>
        <div class="buttons">
            <button id="generate-btn">Generate</button>
            <button id="copy-btn">Copy Code</button>
</div>
  
 <!-- <div class="popup">
 <h1>Code copied</h1>
 </div> -->
    <!-- Script -->
   <script>
       let generateBtn = document.getElementById("generate-btn");
let copyBtn = document.getElementById("copy-btn");
let outputColor = document.getElementById("output-color");
let outputCode = document.getElementById("output-code");
let hexString = "0123456789abcdef";

let randomColor = () => {
  let hexCode = "#";
  for (i = 0; i < 6; i++) {
    hexCode += hexString[Math.floor(Math.random() * hexString.length)];
  }
  return hexCode;
}

let generateGrad = () => {
  let colorOne = randomColor();
  let colorTwo = randomColor();
  let angle = Math.floor(Math.random() * 360);
  outputColor.style.background = `linear-gradient(${angle}deg, ${colorOne}, ${colorTwo})`;
  outputCode.value = `background: linear-gradient(${angle}deg, ${colorOne}, ${colorTwo});`;
}

copyBtn.addEventListener("click", () => {
  outputCode.select();
  document.execCommand("copy");
  
  /*
let popup = document.querySelector(".popup");
popup.style.display = "flex";
setTimeout(function(){
  let popup = document.querySelector(".popup");
  popup.style.display = "none";
}, 2000)
*/
swal("Good job!", "Code is copied to clipboard!", "success");
});

generateBtn.addEventListener("click", generateGrad);
window.onload = generateGrad;
   </script>
   <style>body {
    
}*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    font-family: "Poppins",sans-serif;
}
body{
    min-height: 100vh;
background: linear-gradient(287deg, #f543d7, #8617c6) no-repeat;
background-size: 100%;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
}

#output-color{
    width: 100%;
    height: 35vmin;
    border-radius: 5px;
}
#output-code{
    background-color: #fcf1fb;
    font-size: 2.3vmin;
    font-weight: 400;
    color: #3f415f;
    width: 80%;
    border-radius: 20px;
    padding: 15px 10px;
    margin: 20px 0 40px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    z-index: -1;
}
.buttons button{
    background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);
    min-width: 40%;
    padding: 15px 0;
    color: #000000;
    border-radius: 30px;
    background-size: 200% auto;
    font-size: 4.6vmin;
    font-weight: 500;
    cursor: default;
    margin: 10px;
    transition: .5s;
    position: relative;
    bottom: 50px;
}
.buttons button:hover{
  background-position: right center;
}
.buttons{
  width: 100%;
  display: flex;
  height: auto;
  display: flex;
  align-items: center;
  justify-content: center;
}/*
.popup{
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #000;
  height: 200px;
  width: 80%;
  z-index: 1;
  
  /*position: absolute;
  bottom: 100px;*/
  /*animation: animate .5s linear;*/
  /*display: none;
}/*
@keyframes animate{
  0%{
    left: 2000px;
  }
  100%{
    left: 0;
  }
}*/
/*
.popup h1{
  font-size: 20px;
  font-weight: 300;
  
}
*/</style>
</body>
</html>
