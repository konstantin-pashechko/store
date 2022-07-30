<div class="container">
  <h2>Л Ю М И Н И С Ц Е Н Т Н Ы Е</h2>
  <table id="<?= $this->view; ?>_tab1" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="8" class="b-dark title blue">О С В Е Т И Т Е Л Ь Н Ы Е</th>
      </tr>
      <tr class="bordered">
        <th class="b-red black title">Мощность, Вт</th>
        <th class="b-green black title">Длина</th>
        <th colspan="2" class="b-yellow black title">D E L U X</th>
        <th colspan="2" class="b-purpur black title">P H I L I P S</th>
        <th colspan="2" class="b-sea black title">O S R A M</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data['tab1'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['tab1'][$key+1]['param2']){echo 'class="bordered"';} ?>>
          <td field="param2" class="b-red option"><?php echo $value['param2'] ?></td>
          <td field="param4" class="b-green option"><?php echo $value['param4'] ?></td>

          <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>
          <td class="b-yellow qty"><?php $this->get($value['sku1']) ?></td>

          <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>

          <td field="sku3" class="b-sea sku"><?php echo $value['sku3'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku3']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <table id="<?= $this->view; ?>_tab2" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="8" class="b-dark title green">Б А К Т Е Р И Ц И Д Н Д Ы Е &nbsp И &nbsp П Р О Ч И Е</th>
      </tr>
      <tr class="bordered">
        <th class="b-red black title">Мощность</th>
        <th class="b-green black title">Длина</th>
        <th colspan="2" class="b-yellow black title">D E L U X</th>
        <th colspan="2" class="b-purpur black title">P H I L I P S</th>
        <th colspan="2" class="b-sea black title">O S R A M</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data['tab2'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['tab2'][$key+1]['param2']){echo 'class="bordered"';} ?>>

          <td field="param2" class="b-red option"><?php echo $value['param2'] ?></td>
          <td field="param4" class="b-green option"><?php echo $value['param4'] ?></td>

          <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>
          <td class="b-yellow qty"><?php $this->get($value['sku1']) ?></td>

          <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>

          <td field="sku3" class="b-sea sku"><?php echo $value['sku3'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku3']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
