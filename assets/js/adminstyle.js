$( init );
$( init2 );
$( init3 );
function init2() {
  $( ".field-collection-add-button" ).on('click',function(){
  //var num = 0;
  var  num = $('#Webcategorie_weblinks tr').length;
  jQuery('#Webcategorie_weblinks > .form-group').each(function(num) {
    var allListElements = $( ".testposition" );
    var inputField = jQuery(this).find(allListElements);
    jQuery(inputField).val(num++);

  });

});
};


function init() {
  $( "#Webcategorie_weblinks" ).sortable({
    connectWith: "#Webcategorie_weblinks",
    stack: '#Webcategorie_weblinks'
  }).bind('sortupdate', function() {

    jQuery('#Webcategorie_weblinks > .form-group').each(function(idx) {

      var allListElements = $( ".testposition" );
      var inputField = jQuery(this).find(allListElements);
      jQuery(inputField).val(idx+1);

              var divv =   $('<input>').attr({
                type: 'hidden',
                id: 'foo',
                name: 'bar',
                value: idx+1,
              });
          //$(this).html(divv)
  
        });

        //var listElements = $('.sortable div');
        // iterate through all the list items
        //for(var i = 0; i < listElements.length; i++){
            // change the value of the sortorder input element
        //    $(listElements[i]).children('.sortorder').attr({
        //        value: i+1
        //    });
        //}   
      });
};


function init3() {
  $( "tbody" ).sortable({
    connectWith: "tbody",
    stack: 'tbody'
  }).bind('sortupdate', function() {

    var num = 0;
    var allListElements = $( ".field-integer" );
    //jQuery('tbody > tr').each(function(idx) {

      //var allListElements = $( ".field-integer" );
      //var inputField = jQuery(this).find(allListElements);
      //jQuery(inputField).val(idx+1);

              var divv =   $('<input>').attr({
                type: 'text',
                id: 'foo',
                name: 'bar',
                value: i+1,
              });
          //allListElements.html(divv)
  
       // });


        //var listElements = $("tr");
         //iterate through all the list items

  var itemOrder = $('tbody').sortable("toArray");

   for (var i = 0; i < itemOrder.length; i++) {
             //change the value of the sortorder input element

            var divv =   $('<input>').attr({
                        type: 'text',
                        id: 'foo',
                        name: 'bar',
                        value: i+1,
                      });

            $(itemOrder[i]).children('.field-integer').html(divv);
        }  


    });
     
};