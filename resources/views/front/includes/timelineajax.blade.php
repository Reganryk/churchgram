<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
         jQuery(document).ready(function(){
            jQuery('.comment_form').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url:$('.comment_form').attr('action'),
                data:$('.comment_form').serialize(),
                type:'POST',
                accepts:'json',
                  success: function(data){
                     console.log('success');
                     if(data.success){
                        $('.comment_form').trigger('reset');
                        }else{

                    }
                  }});
               });
            });
</script>


<script type="text/javascript">
$(document).ready(function(){
      var $comment_form = $('.comment_form')
    $comment_form.submit(function(event){
        event.preventDefault()
        console.log("Working working")
        var form = $(this);
        var actionUrl= form.attr("action");
        var httpmethod= form.attr("method");
        var formdata = form.serialize();
         $.ajax({
          url:actionUrl,
          method:httpmethod,
          data:formdata,
          success: comment_formsuccess,
          error: comment_formerror,
      })

    })
//Handle Erorr and Success
    function comment_formsuccess(data, textStatus, jqXHR){
        $comment_form[0].reset();
        console.log(data)
        console.log(textStatus)
        console.log(jqXHR)

    }
    function comment_formerror(jqXHR, textStatus, errorThrown){
        alert("The email your sending was not sent. Please Try again")
        console.log(jqXHR)
        console.log(textStatus)
        console.log(errorThrown)
    }
    //endcomment_form request

/////////////////////////////////////////////////////////////////////////////////////////////////////


 // setInterval(function(){
 //      $("#postcomments").load("front.timeline.comments" + "#postcomments" );
 //  }, 6000);


})

</script>
