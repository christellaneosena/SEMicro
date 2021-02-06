function textChange() {
  document.getElementById("demo").innerHTML = "Have a nice day! :)";
}
function textReset() {
  document.getElementById("demo").innerHTML = "Welcome to my page!";
}

var ninja = {
  name:"",
  rank:"",
  hairColor:"",
  eyeColor:"",
  skills: ["Supernova Shotgun", "Stun Drone", "Deployable Shield"],
};
function customizeNinja() {
  ninja.name = prompt("What shall your ninja name be?");
  ninja.rank = prompt("What rank is this ninja?");
  ninja.hairColor = prompt("What color is your ninja's hair?");
  ninja.eyeColor = prompt("What color are your ninja's eyes?");

  document.getElementById("ninjaDesc").innerHTML=("Your ninja's name is " + ninja.name + ". " + "This ninja is within the ranks of " + ninja.rank + ". " + "Your ninja's hair color is " + ninja.hairColor + ". " + "Your ninja's eye color is " + ninja.eyeColor + ". " + "Your ninja's abilities consist of a " + ninja.skills[0] + ", " + ninja.skills[1] + ", " + ninja.skills[2] + "." );
}
