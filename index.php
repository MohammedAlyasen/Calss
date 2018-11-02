<script src="jquery.min.js"></script>
<form action="result.php" method="post" id="my-form">
    enter your name:<input type="text" id="name" name="name">
    <button type="button" id="save">Click to save</button>
</form>

<div id="rec"></div>
<script>
$(document).ready(function() {
   $("#my-form").submit(function(e) {
       e.preventDefault();
       $.ajax({
            url : "result.php",
            method : "POST",
            data : {
                name : $("#name").val()
            },
            success : function(data) {
                $("#rec").html(data);
            }
       });
   });
    
    $("#save").on("click", function() {
        //while (true) {
        $.ajax({
            url : "save.php",
            method : "POST",
            data : {
                name : $("#name").val()
            },
            success : function(data) {
                $("#rec").html("Inserted Successfully");
            }
       });
        //}
    });
    
    $("#name").on("input", function() {
        $("#my-form").submit();
    });
});
</script>