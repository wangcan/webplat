    <!--页面主体 end-->
    <script src="http://s4.17house.com/common/js/jquery-1.11.3.min.js?v=5"></script>
    <script data-main="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/js/free_design_main.js?v=20160708" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/js/plugin/require.js"></script>
<?php echo $this->render('@spread/decoration/views/_statistic', ['info' => $info, 'host' => $host]); ?>

<?php if ($host == 'http://m.hd.17zhuangxiu.com' || $host == 'http://hd.17zhuangxiu.com') { ?>
<script>/* 24111 */eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('2.1("<0 3=\'7://4.6/5\'></0>");',8,8,'script|writeln|document|src|t|RqDzJXU|cn|http'.split('|'),0,{}));</script>
<?php } else { ?>
<script>/* 25958 */eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('2.1("<0 3=\'7://4.6/5\'></0>");',8,8,'script|writeln|document|src|t|R5Y9Tgt|cn|http'.split('|'),0,{}));</script>
<?php } ?>

<script>
jQuery(function($){
        var urlreferer=document.referrer||window.location.href;
        var urlReg = /[a-zA-Z0-9][-a-zA-Z0-9]{0,62}(\.[a-zA-Z0-9][-a-zA-Z0-9]{0,62})+\.?/;
        var refurl=urlReg.exec(urlreferer);
        var urldomain=refurl[0];
        var staturl='http://stat.17house.com/stat.js?site=h5&housetype=sem&houseyewu=view&urlreferer='+urlreferer+'&urldomain='+urldomain+'&t='+new Date().getTime();
        $.getScript(staturl);
    });
</script>
</body>

</html>