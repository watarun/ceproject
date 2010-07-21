<div class="row">
<div class="column grid_12">
<h2>app search</h2>
Let's search new app!!
<form>
<input type="text"/><button>search</button>
</form>
<br/>

<h2>flavor of the week</h2>
<div class="row">
<div class="column grid_4"><p style="border:1px solid #000;height:160px">NewApp1</p></div>
<div class="column grid_4"><p style="border:1px solid #000;height:160px">NewApp2</p></div>
<div class="column grid_4"><p style="border:1px solid #000;height:160px">NewApp3</p></div>
</div>

<h2>Your apps</h2>
<div class="row">
<div class="column grid_4"><p style="border:1px solid #000;height:160px"><?php echo $this->Html->link(__('App1', true), '/apps/view'); ?></p></div>
<div class="column grid_4"><p style="border:1px solid #000;height:160px">App2</p></div>
<div class="column grid_4"><p style="border:1px solid #000;height:160px">App3</p></div>
<div class="column grid_4"><p style="border:1px solid #000;height:160px">App4</p></div>
</div>

</div>
<?php echo $this->element('sidenavi'); ?>
</div>
