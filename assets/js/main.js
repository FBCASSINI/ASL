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



function show_confirm(act,gotoid)

{
    if(act=="edit")

    var r=confirm("Do you really want to edit?");

else

    var r=confirm("Do you really want to delete?");

    if (r==true)
    {

        window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;

    }
}

