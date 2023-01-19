let button = document.getElementsByName('update');

let artist = document.getElementById('exampleInputEmail1');
let album = document.getElementById('exampleInputPassword1');
let track = document.getElementById('exampleCheck1');
let lyrics = document.getElementById('exampleCheck2');


// button.addEventListener("click", setAtt);

function setAtt(){

for(let i=0 ; i<button.length; i++){
    button[i].setAttribute('data-bs-toggle','modal')
    button[i].setAttribute('data-bs-target','#exampleModal')
}
 
    artist.setAttribute('name','u_artist');
    album.setAttribute('name','u_album');
    track.setAttribute('name','u_track');
    lyrics.setAttribute('name','u_lyrics');



}
function resetAtt(){

    artist.setAttribute('name','artist');
    album.setAttribute('name','album');
    track.setAttribute('name','track');
    lyrics.setAttribute('name','lyrics');


}