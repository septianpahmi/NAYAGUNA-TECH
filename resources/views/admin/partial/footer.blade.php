<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/vendor/chart.js/chart.umd.js"></script>
  <script src="admin/vendor/echarts/echarts.min.js"></script>
  <script src="admin/vendor/quill/quill.min.js"></script>
  <script src="admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  

  <!-- Template Main JS File -->
  <script src="admin/js/main.js"></script>
  <script>
    function previewImage(input) {
        var file = input.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambarPreview').attr('src', e.target.result);
                $('#gambarPreview').show();
            };

            reader.readAsDataURL(file);
        }
    }

    $(document).ready(function () {
        $('#gambarInput').change(function () {
            previewImage(this);
        });

    });
</script>

</body>

</html>