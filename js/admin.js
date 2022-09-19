

function populateWithWriteups(writeups)
{
    var strToAdd = ""

    for (let i = 0; i < writeups.length; i++)
    {
        strToAdd = strToAdd.concat('<li class="list-group-item d-flex align-items-center border">' + writeups[i].title + '<button type="button" class="btn btn-outline-danger edit-writeup ms-auto me-2" writeup-id="' + writeups[i].id + '" data-bs-toggle="modal" data-bs-target="#writeupModal">Edit Writeup</button><button type="button" class="btn btn-outline-danger delete-writeup" writeup-id="' + writeups[i].id + '" >Delete Writeup</button></li>');
    }

    $('.writeup-list')[0].innerHTML = (strToAdd);
}

callPHP('getAllWriteups', "").done(function(result) {
    populateWithWriteups(result.result);
});

$('body').on('click', '.delete-writeup', function() {
    callPHP('deleteWriteupById', $(this).attr('writeup-id'));
    $(this).parent().remove();
});