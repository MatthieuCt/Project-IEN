<?php
$form_name = "editor_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "",
    
    "return_module" => "",

    "table_name" => "page",
    
    "id"        =>      "",
    
    "fields"        => array(
        
            
            array(
                "name"  => "lang_id",
                "label" => label("TXT_EDITOR_LANGUAGE"),
                "type"  => "combo",
                "combovalues" => createDictionary("lang_id", "`lang`", "id", "lang_name", "1 asc", "1=1", null),
                "default"       => 1,
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_CONTENT")
            ),
            array(
                "name"  => "page_name",
                "label" => label("TXT_EDITOR_PAGENAME"),
                "type"  => "text",
                "default"       => "",
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_CONTENT")
            ),

            array(
                "name"  => "page_content",
                "label" => label("TXT_EDITOR_CONTENT"),
                "type"  => "tinymce",
                "params"        => "maxlength=10000",
                "default"       => "",
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_CONTENT")

            ),

            array(
                "name"  => "page_type",
                "label" => label("TXT_EDITOR_PAGETYPE"),
                "type"  => "combo",
                "combovalues" => createDictionaryFromArray("page_type", array(  "page_article"=>label("TXT_EDITOR_PAGETYPE_ARTICLE"), 
                                                                                "page_blog"=>label("TXT_EDITOR_PAGETYPE_BLOG"), 
                                                                                "page_institute"=>label("TXT_EDITOR_PAGETYPE_INST"),
                                                                                "homepage"=>label("TXT_EDITOR_PAGETYPE_HOME")   )),
                "default"       => 'page_article',
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_CONTENT")
            ),
        
            array(
                "name"  => "META_TITLE",
                "label" => label("TXT_EDITOR_META_TITLE"),
                "type"  => "text",
                "params"        => "",
                "default"       => "",
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_SEO")
            ),
        
            array(
                "name"  => "META_DESCRIPTION",
                "label" => label("TXT_EDITOR_META_DESCRIPTION"),
                "type"  => "text",
                "params"        => "",
                "default"       => "",
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_SEO")
            ),
        
            array(
                "name"  => "META_KEYWORDS",
                "label" => label("TXT_EDITOR_META_KEYWORDS"),
                "type"  => "text",
                "params"        => "",
                "default"       => "",
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_SEO")
            ),
        
        
            array(
                "name"  => "page_files",
                "label" => label("TXT_FILES"),
                "type"  => "files",
                "default"       => "",
                "tab" => label("TXT_FILES")

            )

        )

);


?>
