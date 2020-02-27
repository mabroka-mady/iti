$(function () {
   $('#wives_no').hide();
    $('#husband_name').hide();

  $('#children_no').parent().hide();

    $('#status').change(function () {
        st = $(this).val();



        switch (st) {
            case ('s'):
                $('#wives_no').hide();
                $('#children_no').parent().hide();
                break;
            case ('m'):
                $('#wives-no').show();
                $('#children_no').parent().show();
                break;
            default:
                $('#wives_no').hide();
                $('#children_no').parent().show();


                if(st=='s'){
                    $('#wives_no').hide();
                    $('#children_no').parent().hide();

                }else if(st=='m'){
                    $('#wives-no').show();
                    $('#children_no').parent().show();

                }else {
                    $('#wives_no').hide();
                    $('#children_no').parent().show();
                }
        }
    })
});

$('#wives').change(function () {
    no=$(this).val();
    if(no>4){
        no=4;
        }else if(no>1){
        no=1;
        $('#wives').val(no);
    }
    $('#wives_names').empty();
    for (z=1;z<=no;++){
        $('#wives_names').append('<input class="from-control"placeholder="wife no#'+z+'Name"/>');
    }

})


