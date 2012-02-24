$(function(){//load vendor js
    require([
        //dependented by backbone.js
        "./js/vendor/underscore.js"
        ], function(){
            require([
                "./js/vendor/json2.js", 
                "./js/vendor/jquery.tmpl.js",                 
                "./js/vendor/backbone.js"
                ], function(util) {//load app modules
                require(["localstorage"], function(util) {
                    //loaded callback
                    console.log("loaded localstorage");
                    require(["todos"], function(util) {
                        //loaded callback                
                        console.log("loaded todos");                
                    });
                });
            });
        });    
});
