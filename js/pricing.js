var btnPremium1 = document.getElementsByClassName("btnPremium")[0];
var btnPremium2 = document.getElementsByClassName("btnPremium")[1];
btnPremium1.addEventListener("click", function () {
  document.location.href = "payment.php";
});

btnPremium2.addEventListener("click", function () {
  document.location.href = "payment.php";
});

var btnSwitchValue = "monthly";

var btnSwitch = document.getElementById("btnSwitchRound");

btnSwitch.addEventListener("click", function () {
  var monthlyValue = 150;
  var annualyValue = 0;

  if (btnSwitchValue === "monthly") {
    annualyValue = monthlyValue - monthlyValue * 0.02;

    document.getElementById("value").innerHTML = "$" + annualyValue + "/Annu";
    btnSwitchValue = "Annualy";
  } else {
    document.getElementById("value").innerHTML = "$" + monthlyValue + "/mon";
    btnSwitchValue = "monthly";
  }
});
