<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0"><?=$News->find(['type'=>1])['head'];?></li>
    <li class="TabbedPanelsTab" tabindex="0"><?=$News->find(['type'=>2])['head'];?></li>
    <li class="TabbedPanelsTab" tabindex="0"><?=$News->find(['type'=>3])['head'];?></li>
    <li class="TabbedPanelsTab" tabindex="0"><?=$News->find(['type'=>4])['head'];?></li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
<h3><?=$News->find(['type'=>1])['head'];?></h3>        
<pre><?=$News->find(['type'=>1])['text'];?></pre>
</div>
    <div class="TabbedPanelsContent">
<h3><?=$News->find(['type'=>2])['head'];?></h3>        
<pre><?=$News->find(['type'=>2])['text'];?></pre>
</div>
    <div class="TabbedPanelsContent">
<h3><?=$News->find(['type'=>3])['head'];?></h3>        
<pre><?=$News->find(['type'=>3])['text'];?></pre>
</div>
    <div class="TabbedPanelsContent">
<h3><?=$News->find(['type'=>4])['head'];?></h3>        
<pre><?=$News->find(['type'=>4])['text'];?></pre>
</div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
