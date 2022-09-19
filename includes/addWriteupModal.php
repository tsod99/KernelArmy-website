<div class="modal fade" id="writeupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" writeup-id="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100 ms-4 writeup-modal-title" id="staticBackdropLabel">Add Writeup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <label for="formFile" class="form-label">Title</label>
                            <input type="text" class="form-control" placeholder="Title" aria-label="Title" name="WriteupTitle">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <label for="formFile" class="form-label">CTF</label>
                            <input type="text" class="form-control" placeholder="CTF" aria-label="CTF" name="WriteupCTF">
                        </div>
                        <div class="col-3">
                            <label for="formFile" class="form-label">Month</label>
                            <select class="form-select" aria-label="Default select example" name="WriteupMonth">
                                <option selected>Select a Month</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="formFile" class="form-label">Year</label>
                            <input type="text" class="form-control" placeholder="Year" aria-label="Year" name="WriteupYear">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="formFile" class="form-label">Author</label>
                            <input type="text" class="form-control" placeholder="Author" aria-label="Author" name="WriteupAuthor">
                        </div>
                        <div class="col">
                            <label for="formFile" class="form-label">Original Link</label>
                            <input type="text" class="form-control" placeholder="Link" aria-label="Link" name="WriteupOGLink">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="formFile" class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" name="WriteupCategory">
                                <option selected>Select a Category</option>
                                <option value="Reverse Engineering">Reverse Engineering</option>
                                <option value="Cryptography">Cryptography</option>
                                <option value="Binary Exploitation">Binary Exploitation</option>
                                <option value="Web">Web</option>
                                <option value="Scripting">Scripting</option>
                                <option value="Forensics">Forensics</option>
                                <option value="Miscellaneous">Miscellaneous</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="formFile" class="form-label">Tags</label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Tag" aria-label="Tag" name="Tag">
                        </div>
                        <div class="col-1 position-relative">
                            <button type="button" class="btn add-tag position-absolute top-50 start-50 translate-middle" aria-label="Plus">
                                <i class="bi bi-plus" style="font-size: 32px; color:blue;"></i>
                            </button>
                        </div>
                        <div class="col-1 position-relative">
                            <button type="button" class="btn-close rm-tag position-absolute top-50 start-50 translate-middle" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="formFile" class="form-label">Writeup</label>
                            <textarea class="form-control" id="descriptionTextarea" rows="3" name="Writeup"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="formFile" class="form-label">Files</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple name="WriteupFiles">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">

                        </div>
                    </div>

                    <div id="modal-alert-writeup">
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary save-writeup">Save</button>
                    <button type="button" class="btn btn-primary upload-writeup">Upload</button>
                    <button type="button" class="btn btn-danger clear-writeup">Clear</button>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/Javascript">
    var catCount = 1;

    $('body').on('click', '.add-tag', function() {
        $(this).parent().parent().after('<div class="row mt-1"><div class="col-10"><input type="text" class="form-control" placeholder="Tag" aria-label="Tag" name="Tag"></div><div class="col-1 position-relative"><button type="button" class="btn add-tag position-absolute top-50 start-50 translate-middle" aria-label="Plus"><i class="bi bi-plus" style="font-size: 32px; color:blue;"></i></button></div><div class="col-1 position-relative"><button type="button" class="btn-close rm-tag position-absolute top-50 start-50 translate-middle" aria-label="Close"></button></div></div>');
    });

    $('body').on('click', '.rm-tag', function() {
        if ($('.rm-tag').length > 1)
            $(this).parent().parent().remove();
    });

    function clearWriteup()
    {
        $('[name="WriteupTitle"]').val("");
        $('[name="WriteupAuthor"]').val("");
        $('[name="WriteupOGLink"]').val("");
        $('[name="Writeup"]').val("");
        $('[name="WriteupCTF"]').val("");
        $('[name="WriteupYear"]').val("");
        $('[name="WriteupMonth"]').val("Select a Month");
        $('[name="WriteupFiles"]').val("");
        $('[name="WriteupCategory"]').val("Select a Category");

        $('.rm-tag').trigger('click');

        $('[name="Tag"]').val("");
    }

    $('.clear-writeup').on("click", function() {
        clearWriteup();
        
        if ($('body .writeup-modal-title').text() == "Edit Write Up")
        {
            $('body').find('.delete-writeup').find("[writeup-id=" + $('#writeup-modal').attr('writeup-id') +"]").trigger('click');
            $('.btn-close').trigger('click');
        }
    });

    function uploadWriteup(isVisible)
    {
        console.log("im hereee");
        var writeupArguments = [];

        var title = $('[name="WriteupTitle"]').val();
        // var files = $('[name="WriteupFiles"]')[0].files;
        var files;
        var author = $('[name="WriteupAuthor"]').val();
        var link = $('[name="WriteupOGLink"]').val();
        var writeup = $('[name="Writeup"]').val();
        var year = $('[name="WriteupYear"]').val();
        var month = $('[name="WriteupMonth"]').val();
        var ctf = $('[name="WriteupCTF"]').val();
        var category = $('[name="WriteupCategory"]').val();

        var tags = [];
        var tagNames = document.getElementsByName("Tag");

        for (let i = 0; i < tagNames.length; i++)
        {
            tags.push(tagNames[i].value)
        }

        var functionToCall = ($('body .writeup-modal-title').text() == "Edit Writeup") ? 'updateWriteup' : 'addWriteup';

        writeupArguments.push(title);

        if (files)
        {
            var reader = new FileReader();

            reader.addEventListener('load', (event) => {
                writeupArguments.push(event.target.result);
                writeupArguments.push(author);
                writeupArguments.push(tags);
                writeupArguments.push(link);
                writeupArguments.push(writeup);
                writeupArguments.push(year);
                writeupArguments.push(month);
                writeupArguments.push(ctf);
                writeupArguments.push(category);
                writeupArguments.push(isVisible);
                if (functionToCall == "updateWriteup") writeupArguments.push($('#writeupModal').first().attr('writeup-id'));
                callPHP(functionToCall, writeupArguments).done(function(result) {
                    addAlert("writeup", (functionToCall == "updateWriteup") ? "Writeup Updated!" : "Writeup Added!");
                    callPHP('getAllWriteups', "").done(function(result) {
                        populateWithWriteups(result.result);
                    });
                });

            });

            // reader.readAsDataURL(files);
        }
        else
        {
            writeupArguments.push("");
            writeupArguments.push(author);
            writeupArguments.push(tags);
            writeupArguments.push(link);
            writeupArguments.push(writeup);
            writeupArguments.push(year);
            writeupArguments.push(month);
            writeupArguments.push(ctf);
            writeupArguments.push(category);
            writeupArguments.push(isVisible);
            if (functionToCall == "updateWriteup") writeupArguments.push($('#writeupModal').first().attr('writeup-id'));
            callPHP(functionToCall, writeupArguments).done(function(result) {
                console.log(result.result);
                addAlert("writeup", (functionToCall == "updateWriteup") ? "Writeup Updated!" : "Writeup Added!");
                callPHP('getAllWriteups', "").done(function(result) {
                    populateWithWriteups(result.result);
                });
            });
        }

        

    }

    $('.save-writeup').on("click", function() {
       uploadWriteup(false);
    });
    
    $('.upload-writeup').on("click", function() {
       uploadWriteup(true);
    });


    $('body').on('click', '.edit-writeup', function(){
        clearWriteup();
        $('body .writeup-modal-title').text("Edit Writeup");

        $('body .clear-writeup').text("Delete");

        $('#writeupModal').first().attr('writeup-id', $(this).attr('writeup-id'));

        callPHP('getWriteupById', $(this).attr('writeup-id')).done(function(result) {
            var writeup = result.result;

            console.log(writeup);



            $('[name="WriteupTitle"]').val(writeup.title);
            $('[name="WriteupAuthor"]').val(writeup.author);
            $('[name="WriteupOGLink"]').val(writeup.originalLink);
            $('[name="Writeup"]').val(writeup.writeup);
            $('[name="WriteupCTF"]').val(writeup.ctf);
            $('[name="WriteupYear"]').val(writeup.year);
            $('[name="WriteupMonth"]').val(writeup.month);
            if (writeup.category != "") $('[name="WriteupCategory"]').val(writeup.category);
            
            for (let i = 0; i < writeup.tags.length - 1; i++) 
            {
                $('.add-tag').first().trigger('click', function() {});
            }
            
            

            
            var tagNames = document.getElementsByName("Tag");

            for (let i = 0; i < writeup.tags.length; i++)
            {
                tagNames[i].value = writeup.tags[i].tag;
            }

        });
    });
    
    $('body').on('click', '.add-writeup', function(){
        if ($('body .writeup-modal-title').text() == "Edit Writeup") clearWriteup();
        $('body .writeup-modal-title').text("Add Writeup");

        $('body .clear-writeup').text("Clear");
        
    });
    
</script>