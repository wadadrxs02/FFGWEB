<script>
//javascript For update data through modal
$(document).ready(function() {
    $('#add').click(function() {
        $('#insert').val("Insert");
        $('#insert_form')[0].reset();
    });
    $(document).on('click', '.edit_data', function() {
        var id_homeless = $(this).attr("id_homeless");
        $.ajax({
            url: "Xfetch.php",
            method: "POST", //for sending data to server
            data: {
                id_homeless: id_homeless
            },
            dataType: "json", //receive data in json format
            success: function(data) { //call back function ; receive data from server
                $('#name').val(data.name);
                $('#icnumber').val(data.icnumber);
                $('#phoneNum').val(data.phoneNum);
                $('#gender').val(data.gender);
                $('#dob').val(data.date);
                $('#race').val(data.race);
                $('#location').val(data.location);
                $('#medCondition').val(data.health);
                $('#datereg').val(data.datereg);
                $('#image').val(data.image);
                $('#id_homeless').val(data.id_homeless);
                $('#insert').val("Update");
                $('#registerform').modal('show');
            }
        });
    });
    $('#insert_form').on("submit", function(event) {
        event.preventDefault();
        if ($('#name').val() == "") {
            alert("Name is required");
        } else if ($('#gender').val() == '') {
            alert("Gender is required");
        } else if ($('#medCondition').val() == '') {
            alert("Health is required");
        } else {
            $.ajax({
                url: "XhomelessUpdate.php",
                method: "POST",
                data: $('#insert_form').serialize(),
                beforeSend: function() {
                    $('#insert').val("Inserting");
                },
                success: function(data) {
                    $('#insert_form')[0].reset();
                    $('#registerform').modal('hide');
                    $('#homeless_table').html(data);
                }
            });
        }
    });
   
});
</script>