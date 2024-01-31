// define a function to enable the disabled textbox (Last Name)
function enableInput() {
  document.getElementById("lastname").disabled = false;
}
// define a function to change the pictures
function turnOn() {
  document.getElementById("pic1").src = "/images/5dbf8f6f5b229c461e38f1eab8ed30f9.jpg";
  document.getElementById("pic2").src = "/images/d4dfe9bb6b59139092241408ec2cc4a2.jpg";
}

// define a function to change the pictures back
function turnOff() {
  document.getElementById("pic1").src = "/images/adc9dffcaf0582934c7566998f9f5bbd.jpg";
  document.getElementById("pic2").src = "/images/36aa7302ed45b2252f67889fdafa377b.jpg";
}