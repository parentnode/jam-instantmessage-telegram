<?php

@include_once("classes/adapters/instantmessage/telegram.class.php");
$module_class = new JanitorTelegram(false);

$connect_values = $module_class->getConnectValues("instantmessage");

$telegram_token = isset($connect_values["telegram_token"]) ? $connect_values["telegram_token"] : "";
$telegram_chat_id = isset($connect_values["telegram_chat_id"]) ? $connect_values["telegram_chat_id"] : "";

$module_type = isset($connect_values["type"]) ? $connect_values["type"] : "";

?>
<div class="scene module i:module telegram i:telegram">

	<h1>Telegram configuration</h1>
	<h2>Instant messages</h2>
	<ul class="actions">
		<?= $HTML->link("Modules", "modules", array("class" => "button", "wrapper" => "li.modules")) ?>
	</ul>

	<? if($module_type && $module_type !== "telegram"): ?>
	<p class="warning">The system is currently configured for another Instant messaging module.</p>
	<? endif; ?>

	<p>Enter your Telegram token and chat_id to enable sending messages to Telegram.</p>

	<?= $module_class->formStart("modules/updateSettings/instantmessage/telegram", array("class" => "labelstyle:inject")) ?>
		<fieldset>
			<?= $module_class->input("telegram_token", array("value" => $telegram_token)) ?>
			<?= $module_class->input("telegram_chat_id", array("value" => $telegram_chat_id)) ?>
		</fieldset>

		<ul class="actions">
			<?= $module_class->submit("Save", array("wrapper" => "li.save", "class" => "primary")) ?>
			<?= $module_class->link("Cancel", "modules", array("class" => "button key:esc", "wrapper" => "li.cancel")) ?>
		</ul>

	<?= $module_class->formEnd() ?>

</div>