function pop_up(id, nomdelapage) {
    var ide = document.getElementById(id);
    ide.innerHTML("<%@ include file=\"" + nomdelapage + "\" %>");
}