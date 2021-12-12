const screen = document.getElementById("showinfos");

function showRoom() {
    screen.innerHTML = '<object type="text/html" width="100%" height="500px"  data="./../php/design/room.php" ></object>';
}

function showGuest() {
    screen.innerHTML = '<object type="text/html" width="100%" height="500px" data="./../php/design/guest.php" ></object>';
}

function showPrice() {
    screen.innerHTML = '<object type="text/html" width="100%" height="500px" data="./../php/design/price.php" ></object>';
}


function showSalary() {
    screen.innerHTML = '<object type="text/html" width="100%" height="500px" data="./../php/design/salary.php" ></object>';
}