<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">


jQuery(document).ready(function() {
    jQuery('#gallery-carousel').jcarousel({
        auto: 1,
        wrap: 'circular',
        scroll: 1,
        initCallback: mycarousel_initCallback
    });
});
</script>