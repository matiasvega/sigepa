$(document).ready(function() {
    $('.toolBarOption').tooltipster( {
                animation: 'fall',
                delay: 200,
                theme: 'tooltipster-default',
//                touchDevices: false,
                trigger: 'hover'
            }
        );
});

    
function alertPnotify(type, title, message) {

    var stack_bottomright = {"dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25};                                                       
    var opts = {
            cornerclass: '',
            width: '30%%',
            styling: 'jqueryui',
            animation: 'show',
            title: title,
            type: type,    
            history: false,
            sticker: false,
            delay: 2000,
            addclass: "stack-bottomright",
            stack: stack_bottomright
    };

    opts.text = message;
    $.pnotify(opts);
}
    
