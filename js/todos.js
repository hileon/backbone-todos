// An example Backbone application contributed by
// [Jérôme Gravel-Niquet](http://jgn.me/). This demo uses a simple
// [LocalStorage adapter](backbone-localstorage.html)
// to persist Backbone models within your browser.

// Load the application once the DOM is ready, using `jQuery.ready`:
$(document).ready(function(){
  var _g = window;
  return function(){
    var Workflow = Backbone.Router.extend({
      routes: {      
        "":    "index",
        "app":  "app",
        "app/:item_id":  "show_item"
      },

      show_item: function(item_id) {
        console.log("router show_item called", item_id);
        $("#loginfo").html("router show_item called with item_id:" + item_id);
      },

      app: function() {
        console.log("router app called");
        $("#loginfo").html("router app called");
      },

      index: function() {
        console.log("router index called");
        $("#loginfo").html("router index called");
      }

    });
    

    _g.router = new Workflow;
    //pushState 是个什么玩意?! 怎么会把bbj的URL变成相对于"/"的了?
    Backbone.history.start({pushState: false});
    console.dir(_g.router);
    //window.router.navigate("app", {trigger: true});
  };

}());