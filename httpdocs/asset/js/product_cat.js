$(document).ready(function(){
  
    var main_cat=$('#main_cat').val();
    if(main_cat > 0){    
    fill_sub_cat(main_cat);
    }
    
    $('#main_cat').on('change',function (){
        var main_cat=$('#main_cat').val();
        fill_sub_cat(main_cat);
    });
    function fill_sub_cat(maincat) {
        var url=window.location.href.split("/");
        var real_url ="";
        if(url[url.length - 2] =="Admin"){
            real_url = "Subcat/" + maincat           
        }else{
            real_url = "../Subcat/" + maincat           

        }
        $.ajax
        ({
            type: "POST",
            url: real_url,
            cache: false,
            dataType: "json",
            success: function (data) {
    
    
    
                $('#sub_cat select:gt(0)').remove();
      
    
                for (i = 0; i <= data.length - 1; i++) {
                    $('#sub_cat').append(`
                    <option value="${data[i]['id']}"> ${data[i]['name']} </option>
                    `);
    
                }
            }
    
        });
    }


    $('.imagePicker').change(function(e) {
        var files = e.target.files;
        thisImage=$(this);
            for (var i = 0; i <= files.length; i++) {
          

          
          var file = files[i];
          var reader = new FileReader();
          
          reader.onload = (function(file) {
            return function(event){
                thisImage.parent().parent().parent().parent().find('.col-md-6:eq(1)').find('img').attr('src',event.target.result);
                thisImage.parent().find('label').html('<i class="fa fa-check"></i>');
            };
          })(file);
          
          reader.readAsDataURL(file);
        }// end for;
        
      });
});