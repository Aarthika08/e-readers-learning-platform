const history = [];
let position = null;

const input = document.querySelector("#text");
const undo = document.querySelector("#undo");
const redo = document.querySelector("#redo");
const clear = document.querySelector("#clear");

const buttons = document.querySelectorAll(".buttons textarea");

buttons.forEach((button) => {
  button.addEventListener("click", (event) => {
    const value = event.target.innerText;
    input.value += value;
    position = history.length;
    history.push(input.value);
    console.log(history, position);
  });
});

undo.addEventListener("click", (event) => {
  if (position === 0) {
    input.value = null;
  }
  if (position > 0 && history.length) {
    position -= 1;
    input.value = history[position];
    console.log(history, position);
  }
});

redo.addEventListener("click", (event) => {
  if (position !== "null" && position < history.length - 1) {
    position += 1;
    input.value = history[position];
    console.log(history, position);
  }
});

clear.addEventListener("click", (event) => {
  position = null;
  history.length = 0;
  input.value = null;
});
