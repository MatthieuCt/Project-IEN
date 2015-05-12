<div class="container">
    <div class="span-24 last top-menu top-box noprint">

        <div style="padding: 10px 20px 0px 20px;">
            {include file="common/flags.tpl"}

            <ul class="top-menu-ul">
                <li>
                    <a style="border-left:none" href="http://www.bg.pw.edu.pl">
                        <span style="float:left"><img src="images/icons/book_open.png" alt="" /></span>
                        <span style="float:left; padding:2px 4px;">{$labels.TXT_LIBRARY|default:"TXT_LIBRARY"}</span>
                        <br style="clear:both" />
                    </a>
                </li>
                <li><a href="http://www.pw.edu.pl"><span style="float:left"><img src="images/icons/pw.png" alt="" /></span><span style="float:left; padding:2px 4px;">{$labels.TXT_PW|default:"TXT_PW"}</span><br style="clear:both" /></a></li>
                <li><a href="http://www.ee.pw.edu.pl"><span style="float:left"><img src="images/icons/ee.png" alt="" /></span><span style="float:left; padding:2px 4px;">{$labels.TXT_WEE|default:"TXT_WEE"}</span><br style="clear:both" /></a></li>
                {*
                <li><a href="#"><span style="float:left"><img src="images/icons/rss.png" alt="" /></span><span style="float:left; padding:2px 4px;">{$labels.TXT_RSS|default:"RSS"}</span><br style="clear:both" /></a></li>
                *}
                <li><a href="http://webmail.ee.pw.edu.pl"><span style="float:left"><img src="images/icons/email.png" alt="" /></span><span style="float:left; padding:2px 4px;">{$labels.TXT_WEBMAIL|default:"TXT_WEBMAIL"}</span><br style="clear:both" /></a></li>
                {if $smarty.session.S_UserID eq "" or $smarty.session.S_UserID == 0}
                    <li><a style="border-right:none" href="/user/login/index.html"><span style="float:left"><img src="images/icons/login.gif" alt="" /></span><span style="float:left; padding:2px 4px;">{$labels.TXT_LOGIN|default:"TXT_LOGIN"}</span><br style="clear:both" /></a></li>
                {else}
                    <li><a href="/administration/dashboard/index.html"><span style="float:left"><img src="images/icons/dashboard.png" alt="" /></span><span style="float:left; padding:2px 4px;">{$labels.TXT_DASHBOARD|default:"TXT_DASHBOARD"}</span><br style="clear:both" /></a></li>
                    <li><a style="border-right:none" href="/user/logout/index.html"><span style="float:left"><img src="images/icons/login.gif" alt="" /></span><span style="float:left; padding:2px 4px;">{$labels.TXT_LOGOUT|default:"TXT_LOGOUT"}</span><br style="clear:both" /></a></li>
                
                {/if}
            </ul>

        </div>
        
       
        <div class="span-20 first" >
            {$arrayLabels.FRONT_TOP_LEFT}
           
             
        </div>
              



    </div>
            {include file="common/header.tpl"}

    <div class="span-24 last main-menu noprint">

        {include file=common/menu.tpl }

    </div>
  
    
        
    {if $current_module ne 'page' and $smarty.session.S_GroupID > 0 } 
    
        {include file=common/adminmenu.tpl from=$menu}

    {else}

        <div class="span-24 last main-menu-shadow noprint"></div>

    {/if} 

    <div class="span-24 last main-content" style="min-height: 450px;">
        <div class="span-24 vertical-spacer last noprint"></div>


        
              
            {if $current_module eq 'page' and $current_action eq 'homepage'} 
               {$page}
            {elseif $smarty.get.module eq 'article'}
                {include file="common/page_article.tpl"}
            {else} 
                {$page|default:"<p>Brak treści</p>"}

            {/if}

       


        <div class="span-24 vertical-spacer last noprint"></div>
    </div>


    {include file="common/footer.tpl"}

</div>
{if $smarty.const.MODE eq 'DEBUG'}
    {include file="common/debug.tpl"}
{/if}
