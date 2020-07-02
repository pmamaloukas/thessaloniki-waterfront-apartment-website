function showBox() {
    document.getElementById("reply").style.display = "block";
    document.getElementById("submitReply").style.display = "block";          
}

window.onclick = function(event) {
    if (!event.target.matches('#replyLink') && !event.target.matches('#reply') && !event.target.matches('#submitReply')) {
        document.getElementById("reply").style.display="none";
        document.getElementById("submitReply").style.display="none";
    }
}