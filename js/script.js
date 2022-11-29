/********************************** 
 * Notes:
 *  
 * Great attection was given to the mobile 
 * responsive design, please review it for 
 * awarding extra credit (specifically mobile, not tablet)
 * 
 * ***********************************/

// redirect to log in page
document.getElementById("login_redirect").onclick = function () {
    displayLoginForm();
};

var themeList = document.getElementById('theme_list');
themeList.addEventListener("click", () => {
    themeList.addEventListener('change', toogleTheme());
});

function toogleTheme() {
    let theme = themeList.options[themeList.selectedIndex].value;

    var rootElement = document.querySelector(':root');
    switch(theme){
        case "1":// fury theme
            rootElement.style.setProperty('--bg-color-grad', '#3f0d12');
            rootElement.style.setProperty('--bg-sec-color-grad', '#99041d');
            rootElement.style.setProperty('--bg-img-grad', 'linear-gradient(315deg, #99041d 24%, #531419 74%)');
            break;
        case "2": // vibrant sky theme
            rootElement.style.setProperty('--bg-color-grad', '#09090a');
            rootElement.style.setProperty('--bg-sec-color-grad', '#2a2a72');
            rootElement.style.setProperty('--bg-img-grad', 'linear-gradient(315deg, #2a2a72 24%, #006caa 74%)');
            break;
        default: break;
    }
}

// system info event listener
var sysInfo = document.getElementById("sys_info");
sysInfo.addEventListener('click', function(e) {
  dispalySysInfo();
});

// system info button
function dispalySysInfo() {

    let info = "\nappCodeName: " + navigator.appCodeName
                + "\nappName:  "+ navigator.appName
                + "\nappVersion: " + navigator.appVersion
                + "\ncookieEnabled: " + navigator.cookieEnabled
                + "\nlanguage: " + navigator.language 
                + "\nuserAgent: " + navigator.userAgent
                + "\nplatform: " + navigator.platform  
                + "\nonLine: " + navigator.onLine;  
    alert(info);
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = (event) => {
    // Get the modal
    var modal = document.getElementById('form_container');
    if (event.target == modal) modal.style.display = "none";
}

function displayLoginForm() {
    document.getElementById("form_container").style.display = 'block';
}

function closeForm() {
    document.getElementById("form_container").style.display = 'none';
}

function toggleMobileMenu() {
    /* Toggle between adding and removing the "responsive" class in NavBar */

    var navMainMenu = document.getElementById("navMain");
    navMainMenu.onclick = () => window.scrollTo( { top: 0, behavior: 'smooth' } );

    /* show/hide navigation */
    if (navMainMenu.className === "nav-main")
        navMainMenu.className += " responsive";
    else navMainMenu.className = "nav-main";

    /* set to change background of responsive mobile menu */
    var navAside = document.getElementById("navAside");
    if (navAside.className === "nav-aside") 
        navAside.className += " responsive";
    else navAside.className = "nav-aside";

    /* set to adjust nav-content menu top position */
    var navContentMenu = document.getElementById("navContent");
    if (navContentMenu.className === "nav-content") 
        navContentMenu.className += " responsive";
    else navContentMenu.className = "nav-content";
} 


function movePresent(present) {
    if (present.classList.length === 0) {
        present.classList.add("activated");
        present.innerHTML = "🎁🎁🎁";
    } else {
        present.classList.remove("activated");
        present.innerHTML = "🎁";
    }
}

/************************************************* 
                    card flip start
**************************************************/
var cardContainer = document.querySelector(".all-cards");

function frontFlipA(){
    var cardsFrontA = document.getElementById("afront");
    var cardsBackA = document.getElementById("aback");
    cardsFrontA.classList.toggle("card-frontflip");
    cardsBackA.classList.toggle("card-backflip");
}

function frontFlipS(){
    var cardsFrontS = document.getElementById("sfront");
    var cardsBackS = document.getElementById("sback");
    cardsFrontS.classList.toggle("card-frontflip");
    cardsBackS.classList.toggle("card-backflip");
}

function frontFlipT(){
    var cardsFrontT = document.getElementById("tfront");
    var cardsBackT = document.getElementById("tback");
    cardsFrontT.classList.toggle("card-frontflip");
    cardsBackT.classList.toggle("card-backflip");
}

/************************************************* 
                    card flip end
**************************************************/

/*
class Helper {

    constructor(){
        this.accounts = [
            {username: "tim", password: "tim"},
            {username: "anil", password: "anil"},
            {username: "siya", password: "siya"}
        ];

        this.gameContent = {};
    }

    isValidUser(username, password) {
        username = username.trim().toLowerCase();

        for(const key in this.accounts) {
            let user = this.accounts[key];
            
            if (user.username === username
                && user.password === password)
                return true;   
        }

        return false;
    }
}


var helper = new Helper();

var login_form = document.getElementById("login_form");
login_form.addEventListener("submit", function(e) {

    let username = document.getElementById("username_input").value;
    let password = document.getElementById("password_input").value;

    let validUsername = ValidateUser(username, password);
    if (validUsername === "") {
        let errorMsg = document.getElementById("error_msg");
        errorMsg.innerHTML = "Login failed, User acoount does not exist";  
        errorMsg.style.display = 'block';
        e.preventDefault();

        setTimeout(function(){ errorMsg.style.display = 'none'; }, 9000);
    } else {
        validUsername = (validUsername[0].toUpperCase() + validUsername.substring(1));    
        document.getElementById("user_btn_text").textContent = validUsername;

        let welcomeMsg = document.getElementById("welcome-msg");
        welcomeMsg.innerHTML = "Welcome " + validUsername;
        welcomeMsg.style.display = "block";

        setTimeout(function(){ 
            welcomeMsg.style.display = "none";
        }, 7000); // timeout for welcome message

        username.innerHTML = "";
        password.innerHTML = "";

        login_form.reset();
        closeForm();

        e.preventDefault();
    }
});  //Modern browsers

function ValidateUser(username, password) {
    if ( helper.isValidUser(username, password) )
        return username;
    return "";
} */