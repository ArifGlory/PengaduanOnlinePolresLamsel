<div id="get-in-touch" class="colorlib-bg-color">

</div>
</div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets2/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url();?>/assets2/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>/assets2/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url();?>/assets2/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?php echo base_url();?>/assets2/js/jquery.flexslider-min.js"></script>
<!-- Sticky Kit -->
<script src="<?php echo base_url();?>/assets2/js/sticky-kit.min.js"></script>
<!-- Owl carousel -->
<script src="<?php echo base_url();?>/assets2/js/owl.carousel.min.js"></script>
<!-- Counters -->
<script src="<?php echo base_url();?>/assets2/js/jquery.countTo.js"></script>
<!-- clockpicker -->
<script type="text/javascript" src="<?php echo base_url();?>/assets1/js/clockpicker/highlight.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets1/js/clockpicker/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
    $('.clockpicker').clockpicker()
        .find('input').change(function(){
        console.log(this.value);
    });
    var input = $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    $('.clockpicker-with-callbacks').clockpicker({
        donetext: 'Done',
        init: function() {
            console.log("colorpicker initiated");
        },
        beforeShow: function() {
            console.log("before show");
        },
        afterShow: function() {
            console.log("after show");
        },
        beforeHide: function() {
            console.log("before hide");
        },
        afterHide: function() {
            console.log("after hide");
        },
        beforeHourSelect: function() {
            console.log("before hour selected");
        },
        afterHourSelect: function() {
            console.log("after hour selected");
        },
        beforeDone: function() {
            console.log("before done");
        },
        afterDone: function() {
            console.log("after done");
        }
    })
        .find('input').change(function(){
        console.log(this.value);
    });

    // Manually toggle to the minutes view
    $('#check-minutes').click(function(e){
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
</script>
<script type="text/javascript">
    hljs.configure({tabReplace: '    '});
    hljs.initHighlightingOnLoad();
</script>


<!-- MAIN JS -->
<script src="<?php echo base_url();?>/assets2/js/main.js"></script>

</body>
</html>

