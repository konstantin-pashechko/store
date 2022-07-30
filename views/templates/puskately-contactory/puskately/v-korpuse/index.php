<div class="container">
  <?php include $this->nav; ?>
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="title">Пускатели в корпусе</th>
      </tr>
      <tr class="bordered">
        <th class="b-red black title">Ток (А)</th>
        <th class="b-green black title">Доп.контакты</th>
        <th class="b-yellow black title">Напряжене (В)</th>

        <th colspan="2" class="b-blue black title">АСКО</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td field="param1" class="b-red option"><?php echo $value['param1'] ?></td>
          <td field="param2" class="b-green option"><?php echo $value['param2'] ?></td>
          <td field="param3" class="b-yellow option"><?php echo $value['param3'] ?></td>

          <td field="sku1" class="b-blue sku"><?php echo $value['sku1'] ?></td>
          <td class="b-blue qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>