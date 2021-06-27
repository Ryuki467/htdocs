<?php $this->setLayoutVar('title','グループ新規作成画面') ?>

<?php if(isset($message)): ?>
<div id="message"><?php echo $this->escape($message); ?></div>
<?php endif; ?>

<h2>グループ新規作成</h2>
<form action="<?php echo $base_url; ?>/groups/new" method="post">
    <table border='1'>
    	<tr>
    		<td bgcolor=#b4f7f2>グループ名</td>
    		<td><input type="text" name="title" style="background-color: #b4f7f2; font-size: 15px; font-weight: bold; border-radius: 5px; width: 150px; height: 30px;"/></td>
    	</tr>
    </table>
    &emsp;&emsp;<input type="submit" style="background-color: #b4f7f2;　margin: 0 30px 0; font-size: 15px; font-weight: bold; border-radius: 5px; width: 150px; height: 40px;" value="作成" />
</form>