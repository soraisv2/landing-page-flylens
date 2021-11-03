//
//
//
//

var isLoad = false;

window.onload = () => {
    var k = document.querySelectorAll(".adm-pages").length;
    for (var i = 1; i <= k; i++)
        document.getElementById(`PAGE${i}`).style.display = "none";
    if (!isLoad) {
        document.getElementById("PAGE1").click();
        isLoad = true;
    }
}

window.onscroll = () => {
    if (scrollY > 0)
        document.getElementById("_BTNUP").style.display = "flex";
    else {
        document.getElementById("_BTNUP").style.display = "none";
    }
}

function page_switcher(numOfPage)
{
    var k = document.querySelectorAll(".adm-pages").length;
    for (var i = 1; i <= k; i++) {
        if (numOfPage == i)
            document.getElementById(`PAGE${numOfPage}`).style.display = "";
        else
            document.getElementById(`PAGE${i}`).style.display = "none";
    }
    console.log("page: " + numOfPage);
}

function responsiveChecker()
{
    console.log(screen.width);
}   

function classSwitcher(id1, addClass, removeClass)
{
    document.getElementById(id1).classList.add(addClass);
    document.getElementById(id1).classList.remove(removeClass);
}

var verifyCallback = function(response) {
    alert(response);
};
function googleTranslateElementInit() { 
    new google.translate.TranslateElement({pageLanguage: 'en'},
    'google_translate_element'); 
} 