var ft_list;
//load cookie
var onload = () => {
  ft_list = document.getElementById("ft_list");

  button.addEventListener("click", () => {
    var txt = prompt("What do u wanna add to ur toDo list?:)", "Type here something");
    if (txt) addEntry(txt);
  });
  var todoItems = localStorage.getItem('todo');
  if (todoItems) {
      var parsedItems = JSON.parse(todoItems);
      parsedItems.forEach(addEntry);
  }
  console.log(todoItems);
}
//save cookie
var onunload = () => {
  var todoItems = [...ft_list.children]
    .filter(div => div.tagName === "DIV")
    .map(div => div.innerHTML)
    .reverse();
  localStorage.setItem('todo', JSON.stringify(todoItems));
}
// Create List
var addEntry = (txt) => {
  if (txt == "Type here something" || txt == "" || txt == null) {
    return (alert("You need type something"));
  }
  var div = document.createElement("div");
  div.className = "entry";
  div.innerHTML = txt;
  div.addEventListener("click", deleteEntry);
  ft_list.insertBefore(div, ft_list.firstChild);
}
//Delete
var deleteEntry = (event) =>{
  var { target } = event;
  if(confirm("Delete this entry?"))
    target.parentElement.removeChild(target);
}

window.onload = onload;
window.onunload = onunload;
