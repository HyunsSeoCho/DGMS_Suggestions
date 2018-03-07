function randomPassword(length)
{
  chars = "123456789123456789123456789";
  pass = "";
  for(x=0;x<length;x++)
  {
    i = Math.floor(Math.random() * 27);
    pass += chars.charAt(i);
  }
  return pass;
}
function recieve()
{
  var passcode = randomPassword(4);
  console.log("일회용 인증코드를 정확하게 입력하세요.", [+passcode]);
  input = prompt("인증코드 입력");
  if (input == passcode) {
      location.replace("../webmaster/encrypted/");
    } else {
      alert("인증코드가 일치하지 않습니다");
      return false;
    }
}
