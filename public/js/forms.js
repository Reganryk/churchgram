function submitpostcomment(){
      var $comment_form = $('.comment_form')
    $comment_form.submit(function(event){
        event.preventDefault()

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
    console.log("Post Comment Success")
    $('#postcomments').fadeOut(800, function(){
        $('#postcomments').html(msg).fadeIn().delay(2000);
       });
 }

    function comment_formerror(jqXHR, textStatus, errorThrown){
        alert("Comment Not Sent")
        console.log(jqXHR)
        console.log(textStatus)
        console.log(errorThrown)
    }


}

function userpostlike(){
  var $postlike = $('.postlike')
  $postlike.on('click' function(event){
   event.preventDefault()
     alert('clicked')


}


$('.postlike').on('click' function(event){
   event.preventDefault()

  alert('clicked')
});
