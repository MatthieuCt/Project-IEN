{include file="common/form_extra_header.tpl" form_title="Edit page"}

{include file="common/form.tpl" form_name=$form_name}

{include file="common/form_extra_footer.tpl"}

{literal}
    <script type='text/javascript'>
    
    $(document).ready(function(){
        
        $('.nav li:last-child').after("<li><a href='#Preview' onclick=\"previewContent();\">{/literal}{label get="TXT_EDITOR_PREVIEW"}{literal}</a></li>");
        
        $('.list-wrap>div:last-child')
            .after("<iframe id='Preview' style=\"display:none;\" width=\"900\" height=\"700\"></iframe>");
        $('ul.nav>li').first().find('a').addClass('current');
        $('div.list-wrap>div').slice(1).addClass('hide');
        });
            
   $(function() { $("#tabs").organicTabs(); });
    
    </script>    
{/literal}


{literal}
<script type='text/javascript'>
    function previewContent(){
            var page_id = $('input[type="hidden"][name="id"]').val();
            var module = "page";
            var action = $('#page_type option:selected').val();
            if(action!="homepage") action="show";
            var content = tinyMCE.activeEditor.getContent(); 
            var token= Math.random();
            $.ajax({ 
                        type: "POST", 
		   	url: "../../modules/editor/content_tmp.php", 
		  	data: {
		 		token : token,
		 		content : content
	 	 	},
                            success: function(msg){ 
                                var _url = '../../index.php?module='+module+'&action='+action+'&page_id='+page_id+'&token='+token;
                                $("#Preview").attr('src', _url);
                            } 
                    });

    }    
</script>    
{/literal}