<?php //$this->dump($this->data); ?>
<table id="<?= $this->view ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm" 
style="
margin-bottom:0;
position:fixed;
width: calc(100% - 30px);
">
<thead>
	<tr>
		<th class="b-green black title" colspan="19">Schneider</th>
	</tr>
	<tr>
		<th colspan="4" class="b-white border-bottom-0"></th>
		<th class="title black b-white" colspan="3">Белый</th>
		<th class="title black b-cream" colspan="3">Кремовый</th>
		<th class="title black b-bronz" colspan="3">Бронзовый</th>
		<th class="title black b-alum" colspan="3">Алюминиевый</th>
		<th class="title black b-antraz" colspan="3">Антрацитовый</th>
	</tr>
	<tr class="bordered">
		<th colspan="4" class="b-white border-top-0"></th>
		<th class="option b-white">Арт</th>
		<th class="option b-white">Код</th>
		<th class="option b-white">Кол</th>

		<th class="option b-cream">Арт</th>
		<th class="option b-cream">Код</th>
		<th class="option b-cream">Кол</th>

		<th class="option b-bronz">Арт</th>
		<th class="option b-bronz">Код</th>
		<th class="option b-bronz">Кол</th>

		<th class="option b-alum">Арт</th>
		<th class="option b-alum">Кол</th>
		<th class="option b-alum">Кол</th>

		<th class="option b-antraz">Арт</th>
		<th class="option b-antraz">Код</th>
		<th class="option b-antraz">Кол</th>
	</tr>
</thead>
</table>
<table class="tl-fixed table table-dark table-striped table-bordered table-sm" style="margin-top: 107px;">
	<tbody>

		<?php foreach ($this->data as $key => $value): ?>
			<tr id="<?php echo $value['id'];?>"<?php if(
				substr($value['param2'], 0, 4) !== substr($this->data[$key+1]['param2'], 0, 4)
				){echo 'class="bordered"';} ?>>
				<td colspan="4" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>

				<td field="sku1" class="b-white sku"><?php echo $value['sku1'] ?></td>
				<td field="name1" class="b-white center"><?php echo $value['name1'] ?></td>
				<td class="b-white qty"><?php  $this->get($value['sku1']); ?></td>

				<td field="sku2" class="b-cream sku"><?php echo $value['sku2'] ?></td>
				<td field="name2" class="b-cream center"><?php echo $value['name2'] ?></td>
				<td class="b-cream qty"><?php  $this->get($value['sku2']); ?></td>

				<td field="sku3" class="b-bronz sku"><?php echo $value['sku3'] ?></td>
				<td field="name3" class="b-bronz center"><?php echo $value['name3'] ?></td>
				<td class="b-bronz qty"><?php  $this->get($value['sku3']); ?></td>

				<td field="sku4" class="b-alum sku"><?php echo $value['sku4'] ?></td>
				<td field="name4" class="b-alum center"><?php echo $value['name4'] ?></td>
				<td class="b-alum qty"><?php  $this->get($value['sku4']); ?></td>

				<td field="sku5" class="b-antraz sku"><?php echo $value['sku5'] ?></td>
				<td field="name5" class="b-antraz center"><?php echo $value['name5'] ?></td>
				<td class="b-antraz qty"><?php  $this->get($value['sku5']); ?></td>
			</tr>
		<?php endforeach; ?>

		<tr>
			<td colspan="18"></td>
		</tr>

<!-- 		<tr>
			<td colspan="4" class="b-gold">Выключатель 1-й наружный</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Выключатель 1-й проходн наружный</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Выключатель 2-й наружный</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Выключатель 2-й проходн наружный</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Выключатель 3-й наружный</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Розетка 1-я наружная</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Розетка 2-я наружная</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Розетка 1-я с/з наружная</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-gold">Розетка 2-я с/з наружная</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 2-я</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 2-я с/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 3-я</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 3-я с/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 4-я</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 4-я с/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 4-я с/з с выключ</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 5-я с/з с выключ</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 5-я с/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Удлин колодка 6-я с/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>

		</tr> -->
		<!-- <tr>
			<td colspan="4" class="b-lyellow">Выключатель 1-й внутрен</td>
			<td class="b-white">28701</td>
			<td class="b-white">0100121</td>
			<td class="b-white"><?php $this->get(28701) ?></td>
			<td class="b-cream">28730</td>
			<td class="b-cream">0100123</td>
			<td class="b-cream"><?php $this->get(28730) ?></td>
			<td class="b-bronz">28728</td>
			<td class="b-bronz">0100169</td>
			<td class="b-bronz"><?php $this->get(28728) ?></td>
			<td class="b-alum">28722</td>
			<td class="b-alum">0100161</td>
			<td class="b-alum"><?php $this->get(28722) ?></td>
			<td class="b-antraz">28729</td>
			<td class="b-antraz">0100171</td>
			<td class="b-antraz"><?php $this->get(28729) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 1-й внутрен IP44</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream">28816</td>
			<td class="b-cream">0100223</td>
			<td class="b-cream"><?php $this->get(28816) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 1-й проходн внутрен</td>
			<td class="b-white">28703</td>
			<td class="b-white">0400121</td>
			<td class="b-white"><?php $this->get(28703) ?></td>
			<td class="b-cream">28741</td>
			<td class="b-cream">0400123</td>
			<td class="b-cream"><?php $this->get(28741) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28799</td>
			<td class="b-alum">0400161</td>
			<td class="b-alum"><?php $this->get(28799) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 1-й с подсвет внутрен</td>
			<td class="b-white">28704</td>
			<td class="b-white">1400121</td>
			<td class="b-white"><?php $this->get(28704) ?></td>
			<td class="b-cream">28753</td>
			<td class="b-cream">1400123</td>
			<td class="b-cream"><?php $this->get(28753) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28771</td>
			<td class="b-alum">1400161</td>
			<td class="b-alum"><?php $this->get(28771) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 1-й прох с подсв</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 2-й внутрен</td>
			<td class="b-white">28702</td>
			<td class="b-white">0300121</td>
			<td class="b-white"><?php $this->get(28702) ?></td>
			<td class="b-cream">28740</td>
			<td class="b-cream">0300123</td>
			<td class="b-cream"><?php $this->get(28740) ?></td>
			<td class="b-bronz">28797</td>
			<td class="b-bronz">0300169</td>
			<td class="b-bronz"><?php $this->get(28797) ?></td>
			<td class="b-alum">28731</td>
			<td class="b-alum">0300616</td>
			<td class="b-alum"><?php $this->get(28731) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 2-й проходной внутр</td>
			<td class="b-white">28723</td>
			<td class="b-white">0600121</td>
			<td class="b-white"><?php $this->get(28723) ?></td>
			<td class="b-cream">28742</td>
			<td class="b-cream">0600123</td>
			<td class="b-cream"><?php $this->get(28742) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28876</td>
			<td class="b-alum">0600161</td>
			<td class="b-alum"><?php $this->get(28876) ?></td>
			<td class="b-antraz">28879</td>
			<td class="b-antraz">0600171</td>
			<td class="b-antraz"><?php $this->get(28879) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 2-й с подсветкой внутр</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">Выключатель 3-й внутрен</td>
			<td class="b-white">28768</td>
			<td class="b-white">2100121</td>
			<td class="b-white"><?php $this->get(28768) ?></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lyellow">ВСП (Перекрестный) внутрен</td>
			<td class="b-white">28724</td>
			<td class="b-white">0500121</td>
			<td class="b-white"><?php $this->get(28724) ?></td>
			<td class="b-cream">28880</td>
			<td class="b-cream">0500123</td>
			<td class="b-cream"><?php $this->get(28880) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28872</td>
			<td class="b-alum">0500161</td>
			<td class="b-alum"><?php $this->get(28872) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 1-я внутрен</td>
			<td class="b-white">28705</td>
			<td class="b-white">3000121</td>
			<td class="b-white"><?php $this->get(28705) ?></td>
			<td class="b-cream">28743</td>
			<td class="b-cream">3000123</td>
			<td class="b-cream"><?php $this->get(28743) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28779</td>
			<td class="b-alum">3000161</td>
			<td class="b-alum"><?php $this->get(28779) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 1-я с/з внутрен <span style="color: blue;">пласт.</span></td>
			<td class="b-white">28706</td>
			<td class="b-white">2900121</td>
			<td class="b-white"><?php $this->get(28706) ?></td>
			<td class="b-cream">28744</td>
			<td class="b-cream">2900123</td>
			<td class="b-cream"><?php $this->get(28744) ?></td>
			<td class="b-bronz">28781</td>
			<td class="b-bronz">2900169</td>
			<td class="b-bronz"><?php $this->get(28781) ?></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz">28782</td>
			<td class="b-antraz">2900171</td>
			<td class="b-antraz"><?php $this->get(28782) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 1-я евро с крышкой внутр</td>
			<td class="b-white">28708</td>
			<td class="b-white">3100121</td>
			<td class="b-white"><?php $this->get(28708) ?></td>
			<td class="b-cream">28760</td>
			<td class="b-cream">3100123</td>
			<td class="b-cream"><?php $this->get(28760) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28891</td>
			<td class="b-alum">3100161</td>
			<td class="b-alum"><?php $this->get(28891) ?></td>
			<td class="b-antraz">28893</td>
			<td class="b-antraz">3100171</td>
			<td class="b-antraz"><?php $this->get(28893) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 1-я евро с крышкой внутр IP44</td>
			<td class="b-white">28750</td>
			<td class="b-white">3100321</td>
			<td class="b-white"><?php $this->get(28750) ?></td>
			<td class="b-cream">28756</td>
			<td class="b-cream">3100323</td>
			<td class="b-cream"><?php $this->get(28756) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
 		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 1-я евро с крышкой внутр со шторами</td>
			<td class="b-white">28754</td>
			<td class="b-white">2900221</td>
			<td class="b-white"><?php $this->get(28754) ?></td>
			<td class="b-cream">28755</td>
			<td class="b-cream">2900223</td>
			<td class="b-cream"><?php $this->get(28755) ?></td>
			<td class="b-bronz">28738</td>
			<td class="b-bronz">2900269</td>
			<td class="b-bronz"><?php $this->get(28738) ?></td>
			<td class="b-alum">28890</td>
			<td class="b-alum">2900261</td>
			<td class="b-alum"><?php $this->get(28890) ?></td>
			<td class="b-antraz">28737</td>
			<td class="b-antraz">2900271</td>
			<td class="b-antraz"><?php $this->get(28737) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 2-я с/з внутр <span style="color: blue;">пласт</span></td>
			<td class="b-white">28707</td>
			<td class="b-white">9900121</td>
			<td class="b-white"><?php $this->get(28707) ?></td>
			<td class="b-cream">28721</td>
			<td class="b-cream">9900123</td>
			<td class="b-cream"><?php $this->get(28721) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28887</td>
			<td class="b-alum">9900161</td>
			<td class="b-alum"><?php $this->get(28887) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 2-я внутрен б/з</td>
			<td class="b-white">28720</td>
			<td class="b-white">9700121</td>
			<td class="b-white"><?php $this->get(28720) ?></td>
			<td class="b-cream">28719</td>
			<td class="b-cream">9700123</td>
			<td class="b-cream"><?php $this->get(28719) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 1-я компьютерная внутр</td>
			<td class="b-white">28710</td>
			<td class="b-white">4300121</td>
			<td class="b-white"><?php $this->get(28710) ?></td>
			<td class="b-cream">28757</td>
			<td class="b-cream">4300123</td>
			<td class="b-cream"><?php $this->get(28757) ?></td>
			<td class="b-bronz">28761</td>
			<td class="b-bronz">4300169</td>
			<td class="b-bronz"><?php $this->get(28761) ?></td>
			<td class="b-alum">28762</td>
			<td class="b-alum">4300161</td>
			<td class="b-alum"><?php $this->get(28762) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка 2-я компьютерная внутр</td>
			<td class="b-white">28725</td>
			<td class="b-white">4400121</td>
			<td class="b-white"><?php $this->get(28725) ?></td>
			<td class="b-cream">28789</td>
			<td class="b-cream">4400123</td>
			<td class="b-cream"><?php $this->get(28789) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка телевиз-я TV внутрен</td>
			<td class="b-white">28712</td>
			<td class="b-white">3200121</td>
			<td class="b-white"><?php $this->get(28712) ?></td>
			<td class="b-cream">28758</td>
			<td class="b-cream">3200123</td>
			<td class="b-cream"><?php $this->get(28758) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28783</td>
			<td class="b-alum">3200161</td>
			<td class="b-alum"><?php $this->get(28783) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка телефонная внутрен</td>
			<td class="b-white">28709</td>
			<td class="b-white">4100121</td>
			<td class="b-white"><?php $this->get(28709) ?></td>
			<td class="b-cream">28815</td>
			<td class="b-cream">4100123</td>
			<td class="b-cream"><?php $this->get(28815) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Розетка комп+телефон внутрен</td>
			<td class="b-white">28764</td>
			<td class="b-white">4900121</td>
			<td class="b-white"><?php $this->get(28764) ?></td>
			<td class="b-cream">28711</td>
			<td class="b-cream">4900123</td>
			<td class="b-cream"><?php $this->get(28711) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-lpurpur">Диммер внутрен</td>
			<td class="b-white">28726</td>
			<td class="b-white">6400121</td>
			<td class="b-white"><?php $this->get(28726) ?></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 1-пост.гориз</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28733</td>
			<td class="b-alum">5800161</td>
			<td class="b-alum"><?php $this->get(28733) ?></td>
			<td class="b-antraz">28735</td>
			<td class="b-antraz">5800171</td>
			<td class="b-antraz"><?php $this->get(28735) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 2-пост.гориз</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 2-пост.FS-02</td>
			<td class="b-white">28713</td>
			<td class="b-white">5800221</td>
			<td class="b-white"><?php $this->get(28713) ?></td>
			<td class="b-cream">28746</td>
			<td class="b-cream">5800223</td>
			<td class="b-cream"><?php $this->get(28746) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28850</td>
			<td class="b-alum">5800261</td>
			<td class="b-alum"><?php $this->get(28850) ?></td>
			<td class="b-antraz">28853</td>
			<td class="b-antraz">5800271</td>
			<td class="b-antraz"><?php $this->get(28853) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 2-пост.FS-02(вертик)</td>
			<td class="b-white">28844</td>
			<td class="b-white">5810221</td>
			<td class="b-white"><?php $this->get(28844) ?></td>
			<td class="b-cream">28845</td>
			<td class="b-cream">5810223</td>
			<td class="b-cream"><?php $this->get(28845) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz">28847</td>
			<td class="b-antraz">5810271</td>
			<td class="b-antraz"><?php $this->get(28847) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 3-пост.FS-03</td>
			<td class="b-white">28714</td>
			<td class="b-white">5800321</td>
			<td class="b-white"><?php $this->get(28714) ?></td>
			<td class="b-cream">28747</td>
			<td class="b-cream">5800323</td>
			<td class="b-cream"><?php $this->get(28747) ?></td>
			<td class="b-bronz">28856</td>
			<td class="b-bronz">5800369</td>
			<td class="b-bronz"><?php $this->get(28856) ?></td>
			<td class="b-alum">28854</td>
			<td class="b-alum">5800361</td>
			<td class="b-alum"><?php $this->get(28854) ?></td>
			<td class="b-antraz">28859</td>
			<td class="b-antraz">5800371</td>
			<td class="b-antraz"><?php $this->get(28859) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 3-пост.FS-03(вертик)</td>
			<td class="b-white">28769</td>
			<td class="b-white">5810321</td>
			<td class="b-white"><?php $this->get(28769) ?></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 4-пост.FS-04</td>
			<td class="b-white">28715</td>
			<td class="b-white">5800421</td>
			<td class="b-white"><?php $this->get(28715) ?></td>
			<td class="b-cream">28748</td>
			<td class="b-cream">5800423</td>
			<td class="b-cream"><?php $this->get(28748) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum">28858</td>
			<td class="b-alum">5800461</td>
			<td class="b-alum"><?php $this->get(28858) ?></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 5-пост.FS-05</td>
			<td class="b-white">28767</td>
			<td class="b-white">5800521</td>
			<td class="b-white"><?php $this->get(28767) ?></td>
			<td class="b-cream">28716</td>
			<td class="b-cream">5800523</td>
			<td class="b-cream"><?php $this->get(28716) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz">28865</td>
			<td class="b-antraz">5800571</td>
			<td class="b-antraz"><?php $this->get(28865) ?></td>
		</tr>
		<tr>
			<td colspan="4" class="b-bronz">Рамка 6-пост.FS-06</td>
			<td class="b-white">28717</td>
			<td class="b-white">5800621</td>
			<td class="b-white"><?php $this->get(28717) ?></td>
			<td class="b-cream">28759</td>
			<td class="b-cream">5800623</td>
			<td class="b-cream"><?php $this->get(28759) ?></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Розетка 1-я полугермет</td>
			<td class="b-white">28751</td>
			<td class="b-white">WDE000543</td>
			<td class="b-white"><?php $this->get(28751) ?></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Розетка 2-я полугермет</td>
			<td class="b-white">28752</td>
			<td class="b-white">WDE000525</td>
			<td class="b-white"><?php $this->get(28752) ?></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Выкл 1-й полугермет</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Выкл 1-й полугермет проходной</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Выкл 2-й полугермет</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Розетка + выключатель полугермет</td>
			<td class="b-white">28749</td>
			<td class="b-white">WDE000600</td>
			<td class="b-white"><?php $this->get(28749) ?></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Розетка+выключатель с/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Розетка+выключатель б/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Вилка евро угловая белая</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Вилка мимоза белая</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-coral">Вилка прямая с/з</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr>
		<tr>
			<td colspan="4" class="b-blue">Розетка USB 2,1А (белая)</td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-white"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-cream"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-bronz"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-alum"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
			<td class="b-antraz"></td>
		</tr> -->
	</tbody>
</table>
