<?php //$this->dump($this->data['soln']); ?>
<table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" 
style="
	margin-bottom:0;
	position:fixed;
	width: calc(100% - 30px);
">
<?php //$this->dump($this->data); ?>
<thead>
	<tr>
		<th class="title white" colspan="23">П р о ж е к т о р ы</th>
	</tr>
	<tr>
		<th rowspan="2" class="b-white"></th>
		<th colspan="2" class="b-white border-0"></th>
		<th class="title black b-red" colspan="2">Magnum(1г)</th>
		<th class="title black b-green" colspan="2">Delux(2г)</th>
		<th class="title black b-yellow" colspan="3">Евросвет(1г)</th>
		<th class="title black b-purpur" colspan="3">Maxus(3г)</th>
		<th class="title black b-sea" colspan="3">TNSy(1г)</th>
		<th class="title black b-red" colspan="2">Velmax(2г)</th>
		<th class="title black b-green" colspan="5">VIDEX</th>
	</tr>
	<tr>
		<th colspan="2" class="b-white border-0"></th>
		<th class="rubric b-red">Арт</th>
		<th class="rubric b-red">Кол</th>
		<th class="rubric b-green">Арт</th>
		<th class="rubric b-green">Кол</th>
		<th class="rubric b-yellow">Арт</th>
		<th class="rubric b-yellow">Тип</th>
		<th class="rubric b-yellow">Кол</th>
		<th class="rubric b-purpur">Арт</th>
		<th class="rubric b-purpur">Тип</th>
		<th class="rubric b-purpur">Кол</th>
		<th class="rubric b-sea">Арт</th>
		<th class="rubric b-sea">Тип</th>
		<th class="rubric b-sea">Кол</th>
		<th class="rubric b-red">Арт</th>
		<th class="rubric b-red">Кол</th>
		<th class="rubric b-green">Арт</th>
		<th colspan="3" class="rubric b-green">Код</th>
		<th class="rubric b-green">Кол</th>		
	</tr>		
</thead>
</table>

<table id="<?= $this->view; ?>_soln" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="margin-top: 105px;">
	<?php if($_SESSION['edit']): ?>      
		<thead>
			<th class="option white" colspan="23">Добавить солнечный прожектор</th>
		</thead>
	<?php endif; ?>
	<tbody>
		<?php $this->data['soln'] = (new Order(['param2'=>'desc','param1'=>'asc']))->run($this->data['soln']); ?>
		<?php foreach($this->data['soln'] as $key => $value): ?>
			<tr id="<?php echo $value['id'];?>"<?php if(!isset($this->data['soln'][$key+1]['param2'])){echo 'class="bordered"';} ?>>
				<td field="param1" class="rubric b-white"><?php echo $value['param1'] ?></td>
				<td field="param2" colspan="2" class="rubric b-white"><?php echo $value['param2'] ?></td>
				<td field="sku1" class="b-red sku"><?php echo $value['sku1'] ?></td>
				<td class="b-red qty"><?php $this->get($value['sku1']) ?></td>
				<td field="sku2" class="b-green sku"><?php echo $value['sku2'] ?></td>
				<td class="b-green qty"><?php $this->get($value['sku2']) ?></td>
				<td field="sku3" class="b-yellow sku"><?php echo $value['sku3'] ?></td>
				<td field="name3" class="b-yellow name"><?php $this->get($value['name3']) ?></td>
				<td class="b-yellow qty"><?php $this->get($value['sku3']) ?></td>
				<td field="sku4" class="b-purpur sku"><?php echo $value['sku4'] ?></td>
				<td field="name4" class="b-purpur name"><?php $this->get($value['name4']) ?></td>
				<td class="b-purpur qty"><?php $this->get($value['sku4']) ?></td>
				<td field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
				<td field="name5" class="b-sea name"><?php echo $value['name5'] ?></td>
				<td class="b-sea qty"><?php $this->get($value['sku5']) ?></td>
				<td field="sku6" class="b-red sku"><?php echo $value['sku6'] ?></td>
				<td class="b-red qty"><?php $this->get($value['sku6']) ?></td>
				<td field="sku7" class="b-green sku"><?php echo $value['sku7'] ?></td>
				<td field="name7" colspan="3" class="b-green"><?php echo $value['name7'] ?></td>
				<td class="b-green qty"><?php $this->get($value['sku7']) ?></td>		
			</tr>
		<?php endforeach; unset ($this->data['soln']); ?>		
		
		<?php foreach($this->data as $key => $value): ?>
			<tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
				<td field="param1" class="rubric b-white"><?php echo $value['param1'] ?></td>
				<td field="param2" colspan="2" class="rubric b-white"><?php echo $value['param2'] ?></td>

				<td field="sku1" class="b-red sku"><?php echo $value['sku1'] ?></td>
				<td class="b-red qty"><?php $this->get($value['sku1']) ?></td>

				<td field="sku2" class="b-green sku"><?php echo $value['sku2'] ?></td>
				<td class="b-green qty"><?php $this->get($value['sku2']) ?></td>

				<td field="sku3" class="b-yellow sku"><?php echo $value['sku3'] ?></td>
				<td field="name3" class="b-yellow name"><?php echo $value['name3'] ?></td>
				<td class="b-yellow qty"><?php $this->get($value['sku3']) ?></td>

				<td field="sku4" class="b-purpur sku"><?php echo $value['sku4'] ?></td>
				<td field="name4" class="b-purpur name"><?php echo $value['name4'] ?></td>
				<td class="b-purpur qty"><?php $this->get($value['sku4']) ?></td>

				<td field="sku5" class="b-sea sku"><?php echo $value['sku5'] ?></td>
				<td field="name5" class="b-sea name"><?php echo $value['name5'] ?></td>
				<td class="b-sea qty"><?php $this->get($value['sku5']) ?></td>

				<td field="sku6" class="b-red sku"><?php echo $value['sku6'] ?></td>
				<td class="b-red qty"><?php $this->get($value['sku6']) ?></td>

				<td field="sku7" class="b-green sku"><?php echo $value['sku7'] ?></td>
				<td field="name7" colspan="3" class="b-green"><?php echo $value['name7'] ?></td>
				<td class="b-green qty"><?php $this->get($value['sku7']) ?></td>		
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>