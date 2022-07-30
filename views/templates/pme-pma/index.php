<style>
  .wrapper { display: flex; justify-content: space-between;} 
  .box { width: 32vw; }
</style>
<div class="wrapper">
  <div class="box">
    <table id="<?= $this->view.'_pme' ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th colspan="7" class="title">ПМЕ</th>
        </tr>
        <tr class="dbordered">  
          <th class="title black b-red">Ток, А</th>
          <th colspan="3" class="title black b-green">Тип, наименование</th>
          <th class="title black b-blue">Катушка</th>
          <th class="title black b-grey">Артикул</th>
          <th class="title black b-grey">Кол-во</th>
        </tr>
      </thead>
      <tbody>
        <?php //var_dump($this->data);die; ?>
        <?php foreach ($this->data['pme'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['pme'][$key+1]['param2']){echo 'class="bordered"';} ?>>

            <td field="param1" class="b-red option"><?php echo $value['param1'] ?></td>

            <td colspan="3" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>

            <td field="param3" class="b-blue option"><?php echo $value['param3'] ?></td>

            <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?= $this->view.'_pma' ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="7" class="title">ПМА</th>
    </tr>
    <tr class="dbordered">  
      <th class="title black b-red">Ток, А</th>
      <th colspan="3" class="title black b-green">Тип, наименование</th>
      <th class="title black b-blue">Катушка</th>
      <th class="title black b-grey">Артикул</th>
      <th class="title black b-grey">Кол-во</th>
    </tr>
  </thead>
  <tbody>
    <?php //var_dump($this->data);die; ?>
    <?php foreach ($this->data['pma'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['pma'][$key+1]['param2']){echo 'class="bordered"';} ?>>

        <td field="param1" class="b-red option"><?php echo $value['param1'] ?></td>

        <td colspan="3" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>

        <td field="param3" class="b-blue option"><?php echo $value['param3'] ?></td>

        <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  </div>
  <div class="box">
    <table id="<?= $this->view.'_pae' ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="7" class="title">ПAЕ</th>
    </tr>
    <tr class="dbordered">  
      <th class="title black b-red">Ток, А</th>
      <th colspan="3" class="title black b-green">Тип, наименование</th>
      <th class="title black b-blue">Катушка</th>
      <th class="title black b-grey">Артикул</th>
      <th class="title black b-grey">Кол-во</th>
    </tr>
  </thead>
  <tbody>
    <?php //var_dump($this->data);die; ?>
    <?php foreach ($this->data['pae'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data['pae'][$key+1]['param2']){echo 'class="bordered"';} ?>>

        <td field="param1" class="b-red option"><?php echo $value['param1'] ?></td>

        <td colspan="3" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>

        <td field="param3" class="b-blue option"><?php echo $value['param3'] ?></td>

        <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td>
        <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>

