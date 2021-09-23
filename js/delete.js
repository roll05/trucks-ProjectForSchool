window.onload=function () {
        $(".delete").click(function(){
            let id=$(this).data('id');
            alert(id);
          $.ajax({
            method:"POST",
               url:"http://localhost/project/php/deleteKorisnik.php",
           data:{
                  id:id
            },
            success: function () {
				header("Location: ../index.php");

               },
                error:function(xhr, statusTxt,error){
                 let status=xhr.status;
                    switch (status) {
                       case 500:
                            alert("Server error, it is not possible to delete post at this moment.");
                            break;
                       case 404:
                           alert("Page not found");
                           break;
                       default:
                           alert("Error: " + status + " - " + statusTxt);
                          break;
                   }
              }
         })
     })
