  <h2>Боксы пластиковые для счетчиков</h2>
  <div class="wrapper">
    <div class="box">
  <table id="<?= $this->view; ?>_germet" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="b-dark title blue">Герметичные</th>
      </tr>
      <tr class="bordered">
        <th colspan="3" class="b-yellow black title">Наименование</th>
        <th class="b-grey black title">Артикул</th>
        <th class="b-grey black title">Количество</th>
      </tr>
    </thead>
    <tbody>     
      <?php $this->data['germet'] = (new Order(['name1']))->run($this->data['germet']) ?>
      <?php foreach ($this->data['germet'] as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>">
          <td colspan="3" field="name1" class="b-green name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
  <div class="box">
  <table id="<?= $this->view; ?>_negermet" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="5" class="b-dark title purpur">Негерметичные</th>
      </tr>
      <tr class="bordered">
        <th colspan="3" class="b-yellow black title">Наименование</th>
        <th class="b-grey black title">Артикул</th>
        <th class="b-grey black title">Количество</th>
      </tr>
    </thead>
    <tbody>
      <?php $this->data['negermet'] = (new Order(['name1']))->run($this->data['negermet']) ?>
      <?php foreach ($this->data['negermet'] as $key => $value): ?>
        <?php if($value['name1'] == $_SESSION['edit']){continue;} ?>
        <tr id="<?php echo $value['id'];?>">
          <td colspan="3" field="name1" class="b-green name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-grey sku"><?php echo $value['sku1'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku1']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
</div>