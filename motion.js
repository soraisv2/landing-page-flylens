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