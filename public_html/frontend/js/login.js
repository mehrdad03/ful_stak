const canvas = document.getElementById("matrix");
const context = canvas.getContext("2d");


canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const nums = "01";

const fontSize = 16;

const columns = canvas.width / fontSize;

const rainDrops = [];

for (let x = 0; x < columns; x++) {
  rainDrops[x] = 1;
}

const draw = () => {
  context.fillStyle = "rgba(0, 0, 0, 0.05)";
  context.fillRect(0, 0, canvas.width, canvas.height);

  context.fillStyle = "#0F0";
  context.font = fontSize + "px monospace";

  for (let i = 0; i < rainDrops.length; i++) {
    const text = nums.charAt(Math.floor(Math.random() * nums.length));
    context.fillText(text, i * fontSize, rainDrops[i] * fontSize);

    if (rainDrops[i] * fontSize > canvas.height && Math.random() > 0.975) {
      rainDrops[i] = 0;
    }
    rainDrops[i]++;
  }
};

setInterval(draw, 40);

// input value limitations
const form = document.getElementById("form");
const error = document.getElementById("error");
const loginInput = document.getElementById("phoneNumber");
const btn = document.getElementById("submit");

form.addEventListener("submit", (e)=>{
  let message = []
  if(loginInput.value === '' || loginInput.value === null || loginInput.value.length != 11){
    e.preventDefault();
    message.push('لطفا شماره تلفن رو درست وارد کنید')
  }
  if(message.length > 0){
    e.preventDefault();
    error.innerText = message.join('\n')
  }
})