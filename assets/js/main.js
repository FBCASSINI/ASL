/**
 * Created by flaviocassini on 11/26/16.
 */

// Get the modal
var modal = document.getElementById('id01'||'id02');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

