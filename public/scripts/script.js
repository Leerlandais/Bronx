const linkSpan = document.querySelectorAll(".linkSpan");
console.log(linkSpan);
const URL_SearchParams = new URLSearchParams(window.location.search);
searchParams = URL_SearchParams.get("p");

window.addEventListener('resize', displayScreenWidth); 
function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();


function changeLinkColours() {

switch(searchParams) {
    case 'program' :
        linkSpan[0].style.backgroundColor = "yellow";
        break;
    case 'studio' :
        linkSpan[1].style.backgroundColor = "yellow";
        break;
    case 'school' :
        linkSpan[2].style.backgroundColor = "yellow";
        break;
    case 'huis' :
        linkSpan[3].style.backgroundColor = "yellow";
        break;
    case 'unknown' :
        linkSpan[4].style.backgroundColor = "yellow";
        break;                                
    case 'home' :
        linkSpan[5].style.backgroundColor = "yellow";
        break;        
}
}
changeLinkColours(); 