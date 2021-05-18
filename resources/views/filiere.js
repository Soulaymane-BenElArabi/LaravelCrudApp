$(document).ready(function () {
    $(document).on("click", ".supprimer", function () {
        var id = $(this).closest("tr").find("th").text();
        alert("Working");
        $.ajax({
            url: "{{route('Fil.delete')}}",
            data: { id: id },
            type: "POST",
            success: function (data, textStatus, jqXHR) {
                console.log(
                    "Soulaymane Made it and deleted the  concerned Filiere"
                );
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            },
        });
    });
});
