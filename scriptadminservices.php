<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        id: $("#id").val(),
        fullname: $("#fullname").val(),
        email: $("#email").val(),
        phonenumber: $("#phonenumber").val(),
        gender: $("#gender").val(),
        age:$("#age").val(),
        height:$("#height").val(),
        weight:$("#weight").val(),
        country:$("#country").val(),
        calories:$("#calories").val(),
        activity:$("#activity").val(),
        wakeup:$("#wakeup").val(),
        lswtime:$("#lswtime").val(),
        fswtime:$("#fswtime").val(),
        gymtime:$("#gymtime").val(),
        sleeptime:$("#sleeptime").val(),
        goal:$("#goal").val(),
        history:$("#history").val(),
        
      };

      $.ajax({
        url: 'functionadminservices.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>