function loadData() {
    $.ajax("library.xml", {dataType:"xml"}).done(function(data){
        showTheList(data);
    });
}

function showTheList(xml) {
    let divBooks = $('#books');
    $(xml).find("List").each(function(item){
        $(divBooks).append(
            $('<div></div>').addClass('col1').text(
                $(this).find('BookName').text()
                )
        );
        $(divBooks).append(
            $('<div></div>').addClass('col2').text($(this).find('Editor').text())
        );
    });

};