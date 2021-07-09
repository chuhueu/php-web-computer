
/*document.querySelector("#button").addEventListener("click", () => {

  const xhr = new XMLHttpRequest();
  xhr.open("GET", "./order.php?id=1", true);
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let users = JSON.parse(this.responseText);
      console.log(users);
      let output = "";
      users.forEach(element => {
        output += `
        <td>${element.id} </td>
        <td>${element.title}</td>
        <td>${element.description}</td>
        <td>${element.price}0.000đ</td>
        <td>
            <span><button id="dec">-</button><span>
            <span><input type="text" value="1" style="width:2rem"></span>
            <span><button id="inc">+</button></span>
        </td>
        <td><b>${element.price}0.000đ</b></td>
        <td><button id="delete">X</button></td>
        `;
      });
      document.querySelector('#show').innerHTML = output;
    }
  };

  xhr.send();
});*/


