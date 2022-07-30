<?php $this->nav() ?>
<h2>Короб кабельный</h2>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view; ?>_korob-enext" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-green black title">Размер, шт/упак</th>
          <th colspan="2" class="b-green black title">E-Next</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['korob-enext'] = (new Order(['param2']))->run($this->data['korob-enext']) ?>   
        <?php foreach ($this->data['korob-enext'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){'class="bordered"';} ?>>
            <td field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?= $this->view; ?>_korob-elecor" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-blue black title">Размер, шт/упак</th>
          <th colspan="2" class="b-blue black title">IEK (Елекор)</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['korob-elecor'] = (new Order(['param2']))->run($this->data['korob-elecor']) ?>   
        <?php foreach ($this->data['korob-elecor'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){'class="bordered"';} ?>>
            <td field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<h2>Короб кабельный перфорированный</h2>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view; ?>_perf-asko" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th colspan="2" class="b-green black title">Размер, шт/упак</th>
          <th colspan="2" class="b-sea black title">АСКО</th>
          <th colspan="2" class="b-purpur black title">E.NEXT</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['perf-asko'] = (new Order(['param2']))->run($this->data['perf-asko']) ?>   
        <?php foreach ($this->data['perf-asko'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){'class="bordered"';} ?>>
            <td colspan="2" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
            <td field="sku2" class="b-llgrey sku"><?php echo $value['sku2'] ?></td>
            <td class="b-llgrey qty"><?php $this->get($value['sku2']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="box">
    <table id="<?= $this->view; ?>_napol" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-red black title">Размер, шт/упак</th>
          <th colspan="2" class="b-red black title">Короб напольный</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['napol'] = (new Order(['param2']))->run($this->data['napol']) ?>   
        <?php foreach ($this->data['napol'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){'class="bordered"';} ?>>
            <td field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


