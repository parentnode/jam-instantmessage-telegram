<?php
global $model;

include_once("classes/adapters/instantmessages/telegram.class.php");
$module_class = new JanitorTelegram();

?>
<div class="scene module i:module i:telegram">

	<h1>Janitor / Instant messages / Telegram configuration</h1>




	<?= $model->formStart("/janitor/admin/setup/module/updateSettings", array("class" => "mail labelstyle:inject")) ?>
		<fieldset>
			<?= $model->input("telegram_token", array("value" => $telegram_token)) ?>
			<?= $model->input("telegram_chat_id", array("value" => "$telegram_chat_id")) ?>
		</fieldset>

		<ul class="actions">
			<?= $model->submit("Save", array("wrapper" => "li.save", "class" => "primary")) ?>
		</ul>

	<?= $model->formEnd() ?>

</div>