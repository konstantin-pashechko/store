<?php $this->nav() ?>
<h2>Лоток металлический</h2>
<div class="wrapper">
  <div class="box">
    <h4>Неперфорированный</h4>
    <table id="<?= $this->view; ?>_neperf" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-green black title">Размер, шт/упак</th>
          <th class="b-green black title">Артикул</th>
          <th class="b-green black title">Метров</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['neperf'] = (new Order(['param2']))->run($this->data['neperf']) ?>   
        <?php foreach ($this->data['neperf'] as $key => $value): ?>
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
    <h4>Крышка</h4>
    <table id="<?= $this->view; ?>_kryshka" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-purpur black title">Ширина, мм</th>
          <th class="b-purpur black title">Артикул</th>
          <th class="b-purpur black title">Метров</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['kryshka'] = (new Order(['param2']))->run($this->data['kryshka']) ?>   
        <?php foreach ($this->data['kryshka'] as $key => $value): ?>
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
    <h4>Перфорированный</h4>
    <table id="<?= $this->view; ?>_perf" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr class="bordered">
          <th class="b-blue black title">Размер, шт/упак</th>
          <th class="b-blue black title">Артикул</th>
          <th class="b-blue black title">Метров</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['perf'] = (new Order(['param2']))->run($this->data['perf']) ?>   
        <?php foreach ($this->data['perf'] as $key => $value): ?>
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
