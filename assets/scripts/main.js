let path = window.location.pathname;

//console.log(path);

switch (path) {
  case "/":
    document.getElementById("home").className += " active";
    break;
  case "/about.php":
    document.getElementById("about").className += " active";
    break;
  case "/programs.php":
    document.getElementById("programs").className += " active";
    break;
  default:
    null;
}
