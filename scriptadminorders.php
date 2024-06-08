<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        id: $("#id").val(),
        product_name: $("#productName").val(),
        quantity: $("#quantity").val(),
        total_price: $("#totalPrice").val(),
        order_date:$("#order_date").val(),
        email:$("#email").val(),
        username:$("#username").val(),
        
      };

      $.ajax({
        url: 'functionadminorders.php',
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