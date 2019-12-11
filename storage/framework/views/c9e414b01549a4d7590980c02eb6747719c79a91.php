<!-- using online scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- using local scripts -->
<!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


<script src="<?php echo e(\URL::asset("js/admin_sidebar/main.js")); ?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function(){
        $('#myTable').dataTable({
            "lengthMenu": [[5, 10, 25, 50], [5, 10, 25, 50]],
            "language": {
                "lengthMenu": "Zobrazujem _MENU_ riadkov.",
                "zeroRecords": "Nemám čo načítať, tabuľka je prázdna.",
                "search" : "Hľadať:",
                "info": "Zobrazujem _PAGE_ z celkových _PAGES_ strán.",
                "infoEmpty": "Žiadne dáta k dispozícií.",
                "paginate": {
                    "first":      "Prvý",
                    "last":       "Posledný",
                    "next":       "Ďalší",
                    "previous":   "Predošlý"
                },
                "infoFiltered": "(filtered from _MAX_ total records)",
            },
            "order": [[0, 'asc']],
            "columns": [
                { "orderable": false },
                null,
                null,
                null,
                { "orderable": false }
            ]
        });
    });
</script>
