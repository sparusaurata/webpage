/**
 * Shows or hides the abstract of a paper (in a list of publications).
 * Triggered by a click on the "Abstract" link under the paper.
 * 
 * @param {String}  id      The id of the surrounding <li>.
 */
function abstract(id) {
    var e = document.getElementById(id + "-abstract");
    if ( e.style.display === "none" ) {
        e.style.display = "block";
    } else {
        e.style.display = "none";
    }
}
