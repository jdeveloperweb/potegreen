
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="public/assets/js/modernizr.min.js"></script>
        <script src="public/assets/js/jquery.slimscroll.js"></script>
        <script src="public/assets/js/waves.js"></script>
        <script src="public/assets/js/jquery.nicescroll.js"></script>
        <script src="public/assets/js/jquery.scrollTo.min.js"></script>
		  <!-- Peity chart JS -->
        <script src="public/plugins/peity-chart/jquery.peity.min.js"></script>

        <!--C3 Chart-->
        <script src="public/plugins/d3/d3.min.js"></script>
        <script src="public/plugins/c3/c3.min.js"></script>

        <!-- KNOB JS -->
        <script src="public/plugins/jquery-knob/excanvas.js"></script>
        <script src="public/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Page specific js -->
        <script src="public/assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

<!--Morris Chart-->
        <script src="public/plugins/morris/morris.min.js"></script>
        <script src="public/plugins/raphael/raphael-min.js"></script>

        <!-- Page specific js -->
        <script src="public/assets/pages/dashborad.js"></script>

<!-- Bootstrap rating js -->
        <script src="public/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="public/assets/pages/rating-init.js"></script>
     <!-- Plugins js -->
        <script src="public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="public/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="public/plugins/select2/js/select2.min.js"></script>
        <script src="public/plugins/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        <script src="public/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="public/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Plugins Init js -->
        <script src="public/assets/pages/form-advanced.js"></script>
        
 <!-- Required datatable js -->
 <script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="public/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="public/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="public/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="public/plugins/datatables/jszip.min.js"></script>
    <script src="public/plugins/datatables/pdfmake.min.js"></script>
    <script src="public/plugins/datatables/vfs_fonts.js"></script>
    <script src="public/plugins/datatables/buttons.html5.min.js"></script>
    <script src="public/plugins/datatables/buttons.print.min.js"></script>
    <script src="public/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="public/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="public/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="public/assets/pages/datatables.init.js"></script>
    
    <!-- Parsley js -->
        <script type="text/javascript" src="public/plugins/parsleyjs/parsley.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

 <!--Wysiwig js-->
        <script src="public/plugins/tinymce/tinymce.min.js"></script>



        <script>
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>
