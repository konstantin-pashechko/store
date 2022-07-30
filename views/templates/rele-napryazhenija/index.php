<div class="box">
	<div style="
	position: fixed;
	top: 56px;
	padding-top: 20px;
	padding-right: 15px;
	background: #fff;
	">
	<table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="margin-bottom: 0;">
		<thead>
			<tr>
				<th colspan="12" class="title">РЕЛЕ НАПРЯЖЕНИЯ</th>
			</tr>
			<tr class="bordered">
			<th class="title black b-red">ТИП</th>
			<th class="title black b-green">ТОК</th>
			<th colspan="6" class="title black b-yellow">Производитель / Наименование</th>
			<th colspan="1" class="title black b-blue">DIN</th>
			<th colspan="1" class="title black b-purpur">Индик</th>
			<th colspan="2" class="title black b-sea">Регулировка</th>
			<th colspan="1" class="title black b-brown">Задержка</th>
			<th colspan="2" class="title black b-grey">Другое</th>
			<th colspan="1" class="title black b-grey">Артикул</th>
			<th colspan="1" class="title black b-grey">Кол-во</th>
		</tr>
		</thead>
	</table>
</div>
<table class="tl-fixed table table-dark table-striped table-bordered table-sm" style="margin-top:75px;">
	<tbody>
		<?php foreach ($this->data as $key => $value): ?>
			<tr id="<?php echo $value['id'] ?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){echo 'class="bordered"';} ?>>
				<td field="param2" class="b-red option"><?php echo $value['param2'] ?></td>
				<td field="param3" class="b-green option"><?php echo $value['param3'] ?></td>
				<td colspan="6" field="param4" class="b-yellow name"><?= $this->replace($value['param4']) ?></td>
				<td field="param6" class="b-blue option"><?php echo $value['param6'] ?></td>
				<td field="param8" class="b-purpur option"><?php echo $value['param8'] ?></td>
				<td colspan="2" field="param10" class="b-sea option"><?php echo $value['param10'] ?></td>
				<td colspan="1" field="param11" class="b-brown option"><?php echo $value['param11'] ?></td>
				<td colspan="2" field="param12" class="b-grey option"><?php echo $value['param12'] ?></td>


				<td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
				<td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>

			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>