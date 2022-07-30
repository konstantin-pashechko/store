<style>
.wrapper { display: flex; justify-content: space-between;} 
.box { width: 48vw; }
</style>
<h2 style="margin-bottom: 0.5em;"> ТЕНы на фланце для радиаторов </h2>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view.'_alum-right' ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="9" class="title b-dark blue"><i class="white">Алюминиевый</i> радиатор (правая Резьба) <b class="title red">1"</b></th>
        </tr>
        <tr>
          <th rowspan="2" class="option b-cream">Мощн</th>
          <th rowspan="2" class="option b-1green">Длина</th>
          <th rowspan="2" class="option b-1gold">Резьба</th>
        </tr>
        <tr class="bordered">
          <th colspan="2" class="option b-1blue"> Sanal </th>
          <th colspan="2" class="option b-1purple"> Kawai </th>
          <th colspan="2" class="option b-1blue"> Balcik </th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($this->data['alum-right'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data['alum-right'][$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-cream option"><val><?php echo floatval($value['param0']) ?></val> кВт</td>
            <td field="param1" class="b-1green option"><val><?php echo $value['param1']; ?></val> мм</td>
            <td field="param2" class="option b-1gold"><?php echo $value['param2']; ?></td>
            <td field="sku1" class="b-1blue sku"><?php echo $value['sku1']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-1purple sku"><?php echo $value['sku2']; ?></td>
            <td class="b-1purple qty"><?php $this->get($value['sku2']); ?></td>
            <td field="sku3" class="b-1blue sku"><?php echo $value['sku3']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku3']); ?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
    <div class="box">
    <table id="<?= $this->view.'_alum-left' ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="9" class="title b-dark red"><i class="white">Алюминиевый</i> радиатор (левая Резьба) <b class="title blue">1"</b></th>
        </tr>
        <tr>
          <th rowspan="2" class="option b-cream">Мощн</th>
          <th rowspan="2" class="option b-1green">Длина</th>
          <th rowspan="2" class="option b-1gold">Резьба</th>
        </tr>
        <tr class="bordered">
          <th colspan="2" class="option b-1blue"> Sanal </th>
          <th colspan="2" class="option b-1purple"> Kawai </th>
          <th colspan="2" class="option b-1blue"> Balcik </th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($this->data['alum-left'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data['alum-left'][$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-cream option"><val><?php echo floatval($value['param0']) ?></val> кВт</td>
            <td field="param1" class="b-1green option"><val><?php echo $value['param1']; ?></val> мм</td>
            <td field="param2" class="option b-1gold"><?php echo $value['param2']; ?></td>
            <td field="sku1" class="b-1blue sku"><?php echo $value['sku1']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-1purple sku"><?php echo $value['sku2']; ?></td>
            <td class="b-1purple qty"><?php $this->get($value['sku2']); ?></td>
            <td field="sku3" class="b-1blue sku"><?php echo $value['sku3']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku3']); ?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>
<!------------------------------------------------------------ЧУГУН----------------------------------------------------------------------------->
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view.'_chug-right' ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="11" class="title b-dark blue"><b class="white">ЧУГУННЫЙ</b> радиатор (правая Резьба) <b class="title red">1.25"</b></th>
        </tr>
        <tr>
          <th rowspan="2" class="option b-cream">Мощн</th>
          <th rowspan="2" class="option b-1green">Длина</th>
          <th rowspan="2" class="option b-1gold">Резьба</th>
        </tr>
        <tr class="bordered">
          <th colspan="2" class="option b-1blue"> Sanal </th>
          <th colspan="2" class="option b-1purple"> Kawai </th>
          <th colspan="2" class="option b-1blue"> Balcik </th>
          <th colspan="2" class="option b-1purple"> TENKO </th>

        </tr>
      </thead>

      <tbody>
        <?php foreach ($this->data['chug-right'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data['chug-right'][$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-cream option"><val><?php echo floatval($value['param0']) ?></val> кВт</td>
            <td field="param1" class="b-1green option"><val><?php echo $value['param1']; ?></val> мм</td>
            <td field="param2" class="option b-1gold"><?php echo $value['param2']; ?></td>
            <td field="sku1" class="b-1blue sku"><?php echo $value['sku1']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-1purple sku"><?php echo $value['sku2']; ?></td>
            <td class="b-1purple qty"><?php $this->get($value['sku2']); ?></td>
            <td field="sku3" class="b-1blue sku"><?php echo $value['sku3']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku3']); ?></td>
            <td field="sku4" class="b-1purple sku"><?php echo $value['sku4']; ?></td>
            <td class="b-1purple qty"><?php $this->get($value['sku4']); ?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
    <div class="box">
    <table id="<?= $this->view.'_chug-left' ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="11" class="title b-dark red"> <b class="white">ЧУГУННЫЙ</b> радиатор (левая Резьба) <b class="title blue">1.25"</b></th>
        </tr>
        <tr>
          <th rowspan="2" class="option b-cream">Мощн</th>
          <th rowspan="2" class="option b-1green">Длина</th>
          <th rowspan="2" class="option b-1gold">Резьба</th>
        </tr>
        <tr class="bordered">
          <th colspan="2" class="option b-1blue"> Sanal </th>
          <th colspan="2" class="option b-1purple"> Kawai </th>
          <th colspan="2" class="option b-1blue"> Balcik </th>
          <th colspan="2" class="option b-1purple"> TENKO </th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($this->data['chug-left'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param0'] < $this->data['chug-left'][$key+1]['param0']){echo 'class="bordered"';} ?>>
            <td field="param0" class="b-cream option"><val><?php echo floatval($value['param0']) ?></val> кВт</td>
            <td field="param1" class="b-1green option"><val><?php echo $value['param1']; ?></val> мм</td>
            <td field="param2" class="option b-1gold"><?php echo $value['param2']; ?></td>
            <td field="sku1" class="b-1blue sku"><?php echo $value['sku1']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-1purple sku"><?php echo $value['sku2']; ?></td>
            <td class="b-1purple qty"><?php $this->get($value['sku2']); ?></td>
            <td field="sku3" class="b-1blue sku"><?php echo $value['sku3']; ?></td>
            <td class="b-1blue qty"><?php $this->get($value['sku3']); ?></td>
            <td field="sku4" class="b-1purple sku"><?php echo $value['sku4']; ?></td>
            <td class="b-1purple qty"><?php $this->get($value['sku4']); ?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>