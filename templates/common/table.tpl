{literal}
<script type="text/javascript" charset="utf-8">
   $(document).ready(function() {
            var oTable = $('#{/literal}{$table_name}{literal}').dataTable( {
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
            o1 = $('.dataTables_wrapper').offset().top;
            o2 = $('.fg-toolbar').height()+12;
            
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
            var cook = $.cookie("{/literal}{$current_module}{$current_action}{$table_name}{literal}filter");
            if(cook!=null) {
                oTable.fnFilter(cook);                
            }
            //przywroc selected row
            {/literal}{if $detail!=null}{literal}
            var selected_id = $.cookie("{/literal}{$current_module}{$current_action}{$table_name}{literal}id");
            $(oTable.fnGetNodes()).each( function () {
                $(this).removeClass('row_selected');
                var id = ($(this).find('td').attr('id_data'));
                if( id == selected_id) {
                    $(this).addClass('row_selected');
                    {/literal}{if $detail!=null}{literal}

                            $.get("{/literal}{$smarty.const.HTTP_ADDRESS}{literal}index.php", { ajax: 1, module:"{/literal}{$current_module}{literal}" , action: "{/literal}{$detail}{literal}", id_data: id {/literal}{$parameters}{literal} },
                                function(data){
                                    $('#{/literal}{$detail}{literal}').html(data);
                                });
                    {/literal}{/if}{literal}
                }
            });
            {/literal}{/if}{literal}


           //Obsluga klikania i wyswietlania szczegółów.
            $(oTable.fnGetNodes() ).each( function () {
                    $(this).click( function () {
                        
                        $.cookie("{/literal}{$current_module}{$current_action}{$table_name}{literal}filter", $('div.dataTables_filter input').val());

                        $(oTable.fnGetNodes()).each( function () {
                           $(this).removeClass('row_selected');
                        });

                        $(this).addClass('row_selected');
                        var id = ($(this).find('td').attr('id_data'));
                        $.cookie("{/literal}{$current_module}{$current_action}{$table_name}{literal}id", id, {path: '/'});
                        {/literal}{if $detail!=null}{literal}
                            $.get("{/literal}{$smarty.const.HTTP_ADDRESS}{literal}index.php", { ajax: 1, module:"{/literal}{$current_module}{literal}" , action: "{/literal}{$detail}{literal}", id_data: id {/literal}{$parameters}{literal} },
                                function(data){
                                    $('#{/literal}{$detail}{literal}').html(data);
                                });
                        {/literal}{/if}{literal}
                        
                    } );
            } );
    });


</script>
{/literal}