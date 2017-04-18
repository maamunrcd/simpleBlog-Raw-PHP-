
<!-- footer content -->

<footer>
    <div class="">
        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
        </p>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
<!-- /page content -->

</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- gauge js -->
<script type="text/javascript" src="js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
<!-- chart js -->
<script src="js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="js/moment/moment.min.js"></script>
<script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
<script src="js/custom.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
<script src="../admin/js/clockpicker.js"></script>
<script src="../admin/js/bootstrap-clockpicker.js"></script>
<script src="../js/ajex.js"></script>
<!--<script>
    initSample();
</script>-->
<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#single_cal4').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $(".thumbnail img").click(function() {
            var img_src = $(this).attr('src');
            $("#set_feture_img").attr('src', img_src);
        });
        $("#set_fet_img").click(function() {
            var input_value = $("#set_feture_img").attr('src');
            $('.featured_image input').val(input_value);
            document.getElementById('remove_image').style.opacity = '1';
        })
        $("#remove_image").click(function() {
            $("#set_feture_img").attr('src', '');
            $('.featured_image input').val('');
            $(this).hide("slow");
        });
        CKEDITOR.replace('content_editor');
    });
    $('.clockpicker').clockpicker();
</script>
<!-- /datepicker -->
<!-- /footer content -->
</body>

</html>
