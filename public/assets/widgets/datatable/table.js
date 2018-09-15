$(document).ready(function() {
                    $('#datatable-example').dataTable();
                });

                /* Datatables hide columns */

                $(document).ready(function() {
                    var table = $('#datatable-hide-columns').DataTable({
                        "scrollY": "300px",
                        "paging": false
                    });

                    $('#datatable-hide-columns_filter').hide();

                    $('a.toggle-vis').on('click', function(e) {
                        e.preventDefault();

                        // Get the column API object
                        var column = table.column($(this).attr('data-column'));

                        // Toggle the visibility
                        column.visible(!column.visible());
                    });
                });

                /* Datatable row highlight */

                $(document).ready(function() {
                    var table = $('#datatable-row-highlight').DataTable();

                    $('#datatable-row-highlight tbody').on('click', 'tr', function() {
                        $(this).toggleClass('tr-selected');
                    });
                });

                $(document).ready(function() {
                    $('.dataTables_filter input').attr("placeholder", "Search...");
                });