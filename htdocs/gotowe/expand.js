document.getElementById("lock_box_right_second").onclick = function() {functionUnlock()};
document.getElementById("lock_box_right_fifth").onclick = function() {functionLock()};

function functionUnlock() {
  document.getElementById("lock").style.height="190px";
  document.getElementById("lock_box").style.height="180px";
  document.getElementById("box").style.height="590px";
  document.getElementById("lock_box_right_second").style.display="none";
  document.getElementById("lock_box_right_third").style.display="block";
  document.getElementById("lock_box_right_fourth").style.display="block";
  document.getElementById("lock_box_right_fifth").style.display="block";
}

function functionLock() {
    document.getElementById("lock").style.height="65px";
    document.getElementById("lock_box").style.height="53px";
    document.getElementById("box").style.height="445px";
    document.getElementById("lock_box_right_second").style.display="block";
    document.getElementById("lock_box_right_third").style.display="none";
    document.getElementById("lock_box_right_fourth").style.display="none";
    document.getElementById("lock_box_right_fifth").style.display="none";
}