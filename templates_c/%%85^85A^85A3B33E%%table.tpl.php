<?php /* Smarty version 2.6.22, created on 2012-07-10 13:31:49
         compiled from common/table.tpl */ ?>
<?php echo '
<script type="text/javascript" charset="utf-8">
   $(document).ready(function() {
            var oTable = $(\'#'; ?>
<?php echo $this->_tpl_vars['table_name']; ?>
<?php echo '\').dataTable( {
                    "sScrollY":  650,
                    "bPaginate": false,
                    "bJQueryUI": true,
                    "bScrollCollapse": true,
                    "bAutoWidth": true,

                    "oLanguage": {
                            "sLengthMenu": "Pokaż na stronie _MENU_ wierszy",
                            "sZeroRecords": "Brak wyników",
                            "sInfo": "Pokazuję od _START_ do _END_ z _TOTAL_ wierszy",
                            "sInfoEmtpy": "Pokazuję 0 wyników",
                            "sInfoFiltered": "(ze wszystkich _MAX_ wyników)",
                            "sSearch": "Filtr",
                            "oPaginate": {
                                    "sFirst":    "Początek",
                                    "sPrevious": "Poprzednia",
                                    "sNext":     "Następna",
                                    "sLast":     "Koniec"
                            }
                    }
            } );
            h1 = $(window).height();
            o1 = $(\'.dataTables_wrapper\').offset().top;
            o2 = $(\'.fg-toolbar\').height()+12;
            
            offset = o1+o2*3;
            debug=0;
            if(debug==1) {
                alert("height: "+h1);
                alert("wrapper offset:"+o1);
                alert("toolbar h: "+o2);
                alert("Calc ofset:"+offset);
            }
            oTable.fnSettings().oScroll.sY = h1-offset;
            oTable.fnDraw();
            //Zeby odswiezyc scroller!

            // Przywroc filtr
            var cook = $.cookie("'; ?>
<?php echo $this->_tpl_vars['current_module']; ?>
<?php echo $this->_tpl_vars['current_action']; ?>
<?php echo $this->_tpl_vars['table_name']; ?>
<?php echo 'filter");
            if(cook!=null) {
                oTable.fnFilter(cook);                
            }
            //przywroc selected row
            '; ?>
<?php if ($this->_tpl_vars['detail'] != null): ?><?php echo '
            var selected_id = $.cookie("'; ?>
<?php echo $this->_tpl_vars['current_module']; ?>
<?php echo $this->_tpl_vars['current_action']; ?>
<?php echo $this->_tpl_vars['table_name']; ?>
<?php echo 'id");
            $(oTable.fnGetNodes()).each( function () {
                $(this).removeClass(\'row_selected\');
                var id = ($(this).find(\'td\').attr(\'id_data\'));
                if( id == selected_id) {
                    $(this).addClass(\'row_selected\');
                    '; ?>
<?php if ($this->_tpl_vars['detail'] != null): ?><?php echo '

                            $.get("'; ?>
<?php echo @HTTP_ADDRESS; ?>
<?php echo 'index.php", { ajax: 1, module:"'; ?>
<?php echo $this->_tpl_vars['current_module']; ?>
<?php echo '" , action: "'; ?>
<?php echo $this->_tpl_vars['detail']; ?>
<?php echo '", id_data: id '; ?>
<?php echo $this->_tpl_vars['parameters']; ?>
<?php echo ' },
                                function(data){
                                    $(\'#'; ?>
<?php echo $this->_tpl_vars['detail']; ?>
<?php echo '\').html(data);
                                });
                    '; ?>
<?php endif; ?><?php echo '
                }
            });
            '; ?>
<?php endif; ?><?php echo '


           //Obsluga klikania i wyswietlania szczegółów.
            $(oTable.fnGetNodes() ).each( function () {
                    $(this).click( function () {
                        
                        $.cookie("'; ?>
<?php echo $this->_tpl_vars['current_module']; ?>
<?php echo $this->_tpl_vars['current_action']; ?>
<?php echo $this->_tpl_vars['table_name']; ?>
<?php echo 'filter", $(\'div.dataTables_filter input\').val());

                        $(oTable.fnGetNodes()).each( function () {
                           $(this).removeClass(\'row_selected\');
                        });

                        $(this).addClass(\'row_selected\');
                        var id = ($(this).find(\'td\').attr(\'id_data\'));
                        $.cookie("'; ?>
<?php echo $this->_tpl_vars['current_module']; ?>
<?php echo $this->_tpl_vars['current_action']; ?>
<?php echo $this->_tpl_vars['table_name']; ?>
<?php echo 'id", id, {path: \'/\'});
                        '; ?>
<?php if ($this->_tpl_vars['detail'] != null): ?><?php echo '
                            $.get("'; ?>
<?php echo @HTTP_ADDRESS; ?>
<?php echo 'index.php", { ajax: 1, module:"'; ?>
<?php echo $this->_tpl_vars['current_module']; ?>
<?php echo '" , action: "'; ?>
<?php echo $this->_tpl_vars['detail']; ?>
<?php echo '", id_data: id '; ?>
<?php echo $this->_tpl_vars['parameters']; ?>
<?php echo ' },
                                function(data){
                                    $(\'#'; ?>
<?php echo $this->_tpl_vars['detail']; ?>
<?php echo '\').html(data);
                                });
                        '; ?>
<?php endif; ?><?php echo '
                        
                    } );
            } );
    });


</script>
'; ?>