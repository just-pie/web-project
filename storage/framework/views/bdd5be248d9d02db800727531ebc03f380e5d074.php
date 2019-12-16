<script>
    $(document).ready(function(){
        $('#univerzity').DataTable({
            "lengthMenu": [[5, 10, 50], [5, 10, 50]],
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
                { "orderable": false },
                null,
                null,
                { "orderable": false },
                { "orderable": false }/*,
                { "orderable": false }*/
            ]
        });
    });
</script>