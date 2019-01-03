/*
jQuery(function(){
    var viewModelConstructor = function()
    {
        this.theValue = ko.observable("1");
        var that = this;
        this.pickRandomValue = function(){
            var val = Math.floor(Math.random() * (3));
            that.theValue(val);
        };
    }

    window.viewModel = new viewModelConstructor;
    ko.applyBindings(window.viewModel);
});*/

jQuery(function(){
    var viewModelConstructor = function()
    {
        this.first = {
            theTitle:ko.observable("Hello World"),
            theContent:ko.observable("Back to Hello World")
        };
        this.second = {
            theTitle:ko.observable("Goodbye World"),
            theContent:ko.observable("We're sailing west now")
        };
    }

    viewModel = new viewModelConstructor;
    ko.applyBindings(viewModel);
});