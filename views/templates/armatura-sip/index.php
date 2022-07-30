<?php $this->nav(); ?>
<h2>Арматура для СИП</h2>

<div class="wrapper">
  <div class="box">
    <table id="<?php echo $this->view; ?>_tab1" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th colspan="13" class="title">Зажимы натяжные</th>
        </tr>
        <tr class="bordered">
          <th colspan="2" class="bb b-red title black">мм²</th>
          <th colspan="7" class="bb b-yellow title black">Наименование</th>
          <th colspan="2" class="bb b-blue title black">Украина</th>
          <th colspan="2" class="bb b-purpur title black">E.Next</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['tab1'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="2" field="param2" class="b-red option"><?php echo $value['param2']; ?></td>
            <td colspan="7" field="param4" class="b-yellow name"><?php echo $value['param4']; ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-grey sku"><?php echo $value['sku2']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku2']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?php echo $this->view; ?>_tab2" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th colspan="13" class="title">Зажимы прокалывающие</th>
        </tr>
        <tr class="bordered">
          <th colspan="2" class="bb b-red title black">мм²</th>
          <th colspan="7" class="bb b-yellow title black">Наименование</th>
          <th colspan="2" class="bb b-blue title black">Украина</th>
          <th colspan="2" class="bb b-purpur title black">E.Next</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['tab2'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="2" field="param2" class="b-red option"><?php echo $value['param2']; ?></td>
            <td colspan="7" field="param4" class="b-yellow name"><?php echo $value['param4']; ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-grey sku"><?php echo $value['sku2']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku2']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<div class="wrapper">
  <div class="box">
    <table id="<?php echo $this->view; ?>_tab3" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th colspan="13" class="title">Зажимы подвесные</th>
        </tr>
        <tr class="bordered">
          <th colspan="2" class="bb b-red title black">мм²</th>
          <th colspan="7" class="bb b-yellow title black">Наименование</th>
          <th colspan="2" class="bb b-blue title black">Украина</th>
          <th colspan="2" class="bb b-purpur title black">E.Next</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['tab3'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="2" field="param2" class="b-red option"><?php echo $value['param2']; ?></td>
            <td colspan="7" field="param4" class="b-yellow name"><?php echo $value['param4']; ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-grey sku"><?php echo $value['sku2']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku2']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div> 
  <div class="box">
    <table id="<?php echo $this->view; ?>_tab4" class="tl-fixed table table-dark table-striped table-bordered table-sm" style="border: 3px solid #000;">
      <thead>
        <tr>
          <th colspan="11" class="title">Аксессуары</th>
        </tr>
        <tr class="bordered">
          <th colspan="7" class="bb b-yellow title black">Наименование</th>
          <th colspan="2" class="bb b-purpur title black">Производитель</th>
          <th colspan="2" class="bb b-blue title black">Артикул</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['tab4'] as $key => $value): ?>
          <tr id="<?php echo $value['id'];?>">
            <td colspan="7" field="param2" class="b-yellow name"><?php echo $value['param2']; ?></td>
            <td colspan="2" field="param4" class="b-purpur name"><?php echo $value['param4']; ?></td>
            <td field="sku1" class="b-grey sku"><?php echo $value['sku1']; ?></td>
            <td class="b-grey qty"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>