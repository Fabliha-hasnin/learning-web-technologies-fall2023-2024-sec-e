function remove() {
    let password = document.getElementById("password").value;
    let addMemberId = document.getElementById("addMemberId").value;
    let xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../controller/removeMemberCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
      }
    };
    xhttp.send("pword=" + password ) ;
  }

function showMembers() {
    let xhttp = new XMLHttpRequest();
    
    xhttp.open("GET", "../controller/showaddedmembers.php", true);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("members").innerHTML = this.responseText;
        }
    };

    xhttp.send();
}