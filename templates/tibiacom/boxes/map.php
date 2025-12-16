<style>
    .map{
        width: 180px;
        height: 180px;
        margin-top: -14px;
    }
    .map_header{
        height: 45px;
        width: 180px;
        background-image: url('templates/tibiacom/images/themeboxes/box_top.png');
        font-family: Verdana;
        font-weight: bold;
        color: #d5c3af;
        line-height: 65px;
    }
    .map_bottom{
        height: 30px;
        width: 180px;
        margin-top: -20px;
        background-image: url('templates/tibiacom/images/themeboxes/box_bottom.png');
    }
    .map_content{
        padding: 0px 10px;
        width: 160px;
        height: 105px;
        padding-top: 5px;
        background-image: url('templates/tibiacom/images/themeboxes/box_bg.png');
    }
    .map_icon{
        height: 64px;
        background-position: bottom right;
        left: 10px;
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 5px;
    }
    .map_button{
        height: 30px;
        width: 148px;
        border: 0;
        background: url('templates/tibiacom/images/themeboxes/button.png');
        font-family: Verdana;
        font-weight: 100;
        color: #d5c3af;
        font-size: 12px;
        cursor: pointer;
    }
    .map_button:hover{
        background: url('templates/tibiacom/images/themeboxes/button_over.png');
        color: #fff;
    }
</style>
<div class="map">
    <div class="map_header">World Map</div>
    <div class="map_content">
        <div class="map_icon" style="background-image: url('<?php echo $template_path ?>/images/themeboxes/map/map.jpg')"></div>
        <a href="https://map.vaigu.com" target="new">
            <button type="button" class="map_button">View Map</button>
        </a>
    </div>
    <div class="map_bottom"></div>
</div>