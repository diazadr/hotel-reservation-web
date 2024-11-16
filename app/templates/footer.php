</div> <!-- End of container -->
 <!-- jQuery untuk DataTables -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- DataTables JS -->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<!-- Bootstrap JS Bundle dengan Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-hWF11AwAh2yZjFbd9xkBdjhP9+wvZV5UUbNh8aP1MFGD2Cwo1T3PbIVIaKdyqnbD" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-hWF11AwAh2yZjFbd9xkBdjhP9+wvZV5UUbNh8aP1MFGD2Cwo1T3PbIVIaKdyqnbD" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>assets/js/scripts.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize dropdowns
        var dropdowns = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdowns);

        // Initialize modals
        var modals = document.querySelectorAll('.modal');
        M.Modal.init(modals);

        // Initialize tooltips
        var tooltips = document.querySelectorAll('.tooltipped');
        M.Tooltip.init(tooltips);

        // Inisialisasi dropdown
        var dropdowns = document.querySelectorAll('select');
        M.FormSelect.init(dropdowns);

        // Inisialisasi timepicker
        var timepickers = document.querySelectorAll('.timepicker');
        M.Timepicker.init(timepickers, {
            twelveHour: false // format 24 jam
        });

    });
</script>

</body>
</html>
