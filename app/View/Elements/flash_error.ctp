<?php

echo sprintf("<script type=\"text/javascript\">
    
    $(function(){
    
        var stack_bottomright = {'dir1': 'up', 'dir2': 'left', 'firstpos1': 25, 'firstpos2': 25};                                                       
        var opts = {
                cornerclass: '',
                width: '30%%',
                styling: 'jqueryui',
                animation: 'show',
                title: ' ERROR ',
                type: 'error',
                history: false,
                sticker: false,
                delay: 2000,
                addclass: 'stack-bottomright',
                stack: stack_bottomright
        };

        opts.text = '%s';
        $.pnotify(opts);      

    });
</script>", $message);

?>
