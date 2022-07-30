<?php $this->nav(); ?>
<h2>Боксы пластиковые под автоматы</h2>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view; ?>_schneider" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="6" class="title">Герметичные</th>
        </tr>
        <tr class="bordered">
          <th class="b-red black title">Модулей</th>
          <th colspan="5" class="b-green black title">Schneider KAEDRA</th>
        </tr>
      </thead>
      <tbody>     
        <?php foreach ($this->data['schneider'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td field="param1" class="b-lllgrey option"><val><?php echo $value['param1'] ?></val> мод</td>
            <td colspan="3" field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?= $this->view; ?>_getsan" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="4" class="title">Герметичные</th>
        </tr>
        <tr class="bordered">
          <th colspan="4" class="b-sea black title">Getsan/FAR с нулевой шиной</th>
        </tr>
      </thead>
      <tbody>
        <?php $this->data['getsan'] = (new Order(['name2']))->run($this->data['getsan']) ?>
        <?php foreach ($this->data['getsan'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="2" field="name2" class="b-lllyellow dddred name"><?php echo $value['name2'] ?></td>
            <td field="sku2" class="b-grey sku"><?php echo $value['sku2'] ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku2']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>