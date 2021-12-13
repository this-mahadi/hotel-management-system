const screen = document.getElementById("showinfos");
screen.innerHTML = '<object type="text/html" width="100%" height="500px"  data="./../php/design/room.php" ></object>';

const room = document.getElementById('room');
const guest = document.getElementById('guest');
const price = document.getElementById('price');
const user = document.getElementById('user');
const salary = document.getElementById('salary');
changeColor([room, guest, price, user, salary]);

function showRoom() {
    changeColor([room, guest, price, user, salary])
    screen.innerHTML = '<object type="text/html" width="100%" height="500px"  data="./../php/design/room.php" ></object>';
}

function showGuest() {
    changeColor([guest, room, price, user, salary]);
    screen.innerHTML = '<object type="text/html" width="100%" height="500px" data="./../php/design/guest.php" ></object>';
}

function showPrice() {
    changeColor([price, guest, room, user, salary]);
    screen.innerHTML = '<object type="text/html" width="100%" height="500px" data="./../php/design/price.php" ></object>';
}

function showUser() {
    changeColor([user, guest, price, room, salary]);
    screen.innerHTML = '<object type="text/html" width="100%" height="500px" data="./../php/design/user.php" ></object>';
}


function showSalary() {
    changeColor([salary, guest, price, user, room]);
    screen.innerHTML = '<object type="text/html" width="100%" height="500px" data="./../php/design/salary.php" ></object>';
}


function changeColor(colorElement) {
    colorElement[0].style.background = 'pink';
    colorElement[1].style.background = 'white';
    colorElement[2].style.background = 'white';
    colorElement[3].style.background = 'white';
    colorElement[4].style.background = 'white';
}