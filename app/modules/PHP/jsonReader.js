/* 
 * Each site/page has a JSON file that provides 
 * the content text of its own page, this content
 * is defined by the user/owner of the site, using 
 * a portal application.
 * A JSON file's name is the same as the page
 * the data corresponds to.
 * The following code will read data/from a JSON file
 * and put the data into its predefined containers.
 * (class name .editable)
 * All elements with class name "editable" will be 
 * subject to changes using this method.
 * for example : 
 * <div class="specials editable"><p> text </p></div>
 * Where class name is "special" and additional
 * class name is "editable"
 * 
 * The jquery selector will modify/change those 
 * elementes with class name <name> and class name editable
 * the change will inly occur inside the <p> child
 * element of that class.
 */

function JSONReadData(JSONFile) {
$.getJSON( JSONFile, { submit: "button" } )
  .done(function( data ) {
      $.each(data, function(key, value){ 
          var element = $("." + key + ".editable");
          if( element.children('p').length > 0) element.children(0).text(value);
          else { element.text(value); }
      });
  })
  .fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Error : " + err );
});
}


